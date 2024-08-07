<?php

namespace App\Console\Commands;

use App\Enums\RoleEnum;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\LessonHour;
use App\Enums\AttendanceEnum;
use Illuminate\Console\Command;
use App\Models\ClassroomStudent;

class CreateAttendanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:create-attendance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $day = strtolower(now()->format('l'));

        $classroomStudents = ClassroomStudent::with(['classroom.lessonSchedule' => function ($query) use ($day) {
            $query->where('day', $day);
        }])
            ->whereRelation('classroom.schoolYear', function ($query) {
                $query->where('active', 1);
            })->whereHas('student.modelHasRfid')->get();

        $attendanceStudent = $classroomStudents->map(function ($student) use ($day) {
            return [
                'point' => LessonHour::query()->where('day', $day)->count(),
                'model_type' => "App\Models\ClassroomStudent",
                'model_id' => $student->student->id,
                'created_at' => now(),
                'status' => AttendanceEnum::ALPHA->value
            ];
        })->toArray();

        $teachers = Employee::whereHas('modelHasRfid')
        ->where('status', RoleEnum::TEACHER->value)
        ->get();

        $attendanceTeacher = $teachers->map(function ($teacher) {
            return [
                'point' => 10,
                'model_type' => "App\Models\Employee",
                'model_id' => $teacher->id,
                'created_at' => now(),
                'status' => AttendanceEnum::ALPHA->value
            ];
        })->toArray();

        // $stored = $classroomStudents->attendance()->insert(['status' => 'alpha']);
        $attendanceData = array_merge($attendanceTeacher ?? [], $attendanceStudent ?? []);

        info($attendanceData);
        Attendance::insert($attendanceData);
    }
}

<?php

namespace App\Console;

use App\Enums\RoleEnum;
use App\Models\Employee;
use App\Models\Attendance;
use App\Enums\AttendanceEnum;
use App\Models\AttendanceRule;
use App\Models\ClassroomStudent;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function() {
            $day = strtolower(now()->format('l'));

            $classroomStudents = ClassroomStudent::whereRelation('classroom.schoolYear', function ($query) {
                $query->where('active', 1);
            })->whereHas('student.modelHasRfid')->get();

            $attendanceStudent = $classroomStudents->map(function ($student) {
                return [
                    'model_type' => "App\Models\ClassroomStudent",
                    'model_id' => $student->student->id,
                    'status' => AttendanceEnum::ALPHA->value
                ];
            })->toArray();

            $teachers = Employee::whereHas('modelHasRfid')
            ->where('status', RoleEnum::TEACHER->value)
            ->get();

            $attendanceTeacher = $teachers->map(function ($teacher) {
                return [
                    'model_type' => "App\Models\Employee",
                    'model_id' => $teacher->id,
                    'status' => AttendanceEnum::ALPHA->value
                ];
            })->toArray();

            // $stored = $classroomStudents->attendance()->insert(['status' => 'alpha']);
            $attendanceData = array_merge($attendanceTeacher ?? [], $attendanceStudent ?? []);

            info($attendanceData);
            Attendance::insert($attendanceData);
        });

        $schedule->call(function() {
            $day = strtolower(now()->format('l'));
            if(AttendanceRule::where('day', $day)->where('role', RoleEnum::STUDENT->value)->first()->is_holiday) {
                Attendance::where('model_type', 'App\Models\ClassroomStudent')
                ->delete();
            }

            if(AttendanceRule::where('day', $day)->where('role', RoleEnum::TEACHER->value)->first()->is_holiday) {
                Attendance::where('model_type', 'App\Models\Employee')
                ->delete();
            }

        });

        // $schedule->call(function() {

        // })->when(function () {
        //     return !AttendanceRule::whereDay(now())->isHoliday;
        // });
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

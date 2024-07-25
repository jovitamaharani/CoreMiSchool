<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Enums\RoleEnum;
use App\Models\Attendance;
use App\Models\ClassroomStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceRepository extends BaseRepository implements AttendanceInterface
{
    private $student;

    public function __construct(Attendance $attendance, ClassroomStudent $student)
    {
        $this->model = $attendance;
        $this->student = $student;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function getCurrentDay(): mixed
    {
        return $this->model->query()->with('classroomStudent')->whereDay('checkin', now()->day)->get();
    }
    public function getByDate($date): mixed
    {
        return $this->model->query()->with('classroomStudent')->whereDay('checkin', Carbon::create($date)->day)->get();
    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }

    public function insert(array $data): mixed
    {
        return $this->model->query()->insert($data);
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id);
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }

    public function updateWithAttribute(array $attribute, array $data): mixed
    {
        // dd($this->model->query()->where('model_id', $attribute['model_id'])->get());
        return $this->model->query()->where('model_type',$attribute['model_type'])->where('model_id', $attribute['model_id'])->update($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function paginate() : mixed
    {
        return $this->model->query()->latest()->paginate(10);
    }

    public function whereSchool(mixed $id, Request $request): mixed
    {
        return $this->model->query()->whereRelation('classroomStudent.classroom.schoolYear.school', 'id', $id)
        ->when($request->name, function ($query) use ($request) {
            $query->whereRelation('classroomStudent.student.user', 'name', 'LIKE', '%' . $request->name . '%');
        })
        ->when($request->created_at, function ($query) use ($request) {
            $query->whereDate('created_at', $request->created_at);
        })
        ->when($request->year, function ($query) use ($request) {
            $query->whereRelation('classroomStudent.classroom.schoolYear', 'school_year', $request->year);
        })
        ->latest()->paginate(10);
    }

    public function whereClassroom(mixed $id): mixed
    {
        return $this->model->query()->whereRelation('classroomStudent', 'classroom_id', $id)->paginate(10);
    }

    public function classAndDate(mixed $classroom_id, Request $request): mixed
    {
        // return $this->model->query()
        // ->where('model_type', 'App\Models\ClassroomStudent', function ($query) use ($classroom_id) {
        //     $query->whereHas('model', function ($query) use ($classroom_id) {
        //         $query->whereHas('classroom', function ($query) use ($classroom_id) {
        //             $query->where('id', $classroom_id);
        //         });
        //     });
        // })
        // ->where('model_type', 'App\Models\ClassroomStudent', function($query) use ($request) {
        //     ->when($request->name, function ($query) use ($request){
        //         $query->whereHas('model', function ($query) use($request){
        //             $query->whereHas('student', function($query)use($request){
        //                 $query->whereHas('user', function($query)use($request){
        //                     $query->where('name', 'LIKE', '%' . $request->name . '%');
        //                 });
        //             });
        //         });
        //     });
        // })
        // ->when($request->date, function ($query) use ($request) {
        //     $query->where('created_at', $request->date);
        // })
        // ->get();

        return $this->student->query()
            ->with(['student.user', 'attendances'])
            ->where('classroom_id', $classroom_id)
            ->when($request->name, function($query)use($request){
                $query->whereRelation('student.user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->when($request->date, function ($query) use ($request) {
                $query->whereHas('attendances', function($query)use($request){
                    $query->whereDate('created_at', $request->date);
                });
            })
            ->get();
    }

    public function attendanceGetTecaher(Request $request): mixed
    {
        return $this->model->query()
            ->where('model_type', 'App\Models\Employee')
            ->when($request->search, function ($query) use ($request) {
                $query->whereHas('model', function ($query) use ($request) {
                    $query->whereHas('user', function ($query) use ($request) {
                        $query->where('name', $request->search);
                    });
                });
            })
            ->when($request->date, function ($query) use ($request) {
                $query->where('created_at', $request->date);
            })
            ->get();
    }

    public function getSchool(mixed $id, mixed $query): mixed
    {
        return $this->model->query()->with('classroomStudent.student.user')->whereRelation('classroomStudent.classroom.schoolYear.school', 'id', $id)->whereNotNull($query)->latest()->get();
    }

    public function AttendanceChart(mixed $year, mixed $month, mixed $status): mixed
    {
        return $this->model->query()
            ->where('status', $status)
            ->whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->count();
    }

    public function checkPresence(mixed $id, mixed $status): mixed
    {
        return $this->model->query()
            ->whereRelation('classroomStudent.classroom', 'student_id', $id)
            ->where('status', $status)
            ->first();
    }

    public function getStudent(mixed $id): mixed
    {
        return $this->model->query()
            ->whereRelation('classroomStudent.classroom', 'student_id', $id)
            ->where('status', RoleEnum::STUDENT->value)
            ->with('classroomStudents.student')
            ->first();
    }

    public function updateCheckOut(mixed $id, array $data): mixed
    {
        return $this->model->query()->whereRelation('classroomStudent.classroom', 'student_id', $id)->update($data);
    }
}

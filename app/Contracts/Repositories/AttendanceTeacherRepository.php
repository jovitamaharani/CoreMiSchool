<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceTeacherInterface;
use App\Models\AttendanceTeacher;
use Illuminate\Http\Request;

class AttendanceTeacherRepository extends BaseRepository implements AttendanceTeacherInterface
{
    public function __construct(AttendanceTeacher $attendanceTeacher)
    {
        $this->model = $attendanceTeacher;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id);
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
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
        return $this->model->query()->whereRelation('employee.school', 'id', $id)
        ->when($request->name, function ($query) use ($request) {
            $query->whereRelation('employee.user', 'name', 'LIKE', '%' . $request->name . '%');
        })
        ->when($request->created_at, function ($query) use ($request) {
            $query->whereDate('created_at', $request->created_at);
        })
        ->latest()->paginate(10);
    }

    public function getSchool(mixed $id, mixed $query): mixed
    {
        return $this->model->query()->whereRelation('employee.school', 'id', $id)->whereNotNull($query)->latest()->get();
    }

    public function checkPresence(mixed $id, mixed $status): mixed
    {
        return $this->model->query()
            ->where('employee_id', $id)
            ->where('status', $status)
            ->first();
    }

    public function updateCheckOut(mixed $id, array $data): mixed
    {
        return $this->model->query()->where('employee_id', $id)->update($data);
    }
}
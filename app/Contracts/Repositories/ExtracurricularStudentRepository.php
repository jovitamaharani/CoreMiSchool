<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ExtracurricularStudentInterface;
use App\Models\ExtracurricularStudent;

class ExtracurricularStudentRepository extends BaseRepository implements ExtracurricularStudentInterface
{
    public function __construct(ExtracurricularStudent $extracurricularStudent)
    {
        $this->model = $extracurricularStudent;
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

    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('extracurricular_id', $data)->get();
    }
}

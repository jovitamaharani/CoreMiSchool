<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\LevelClassInterface;
use App\Models\LevelClass;

class LevelClassRepository extends BaseRepository implements LevelClassInterface
{
    public function __construct(LevelClass $levelClass)
    {
        $this->model = $levelClass;
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

    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('school_id', $data)->get();
    }

    public function whereSchool(mixed $id): mixed
    {
        return $this->model->query()->where('school_id', $id)->latest()->paginate(10);
    }
}

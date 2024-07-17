<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ExtracurricularInterface;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularRepository extends BaseRepository implements ExtracurricularInterface
{
    public function __construct(Extracurricular $extracurricular)
    {
        $this->model = $extracurricular;
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
        return $this->model->query()->where('school_id', $id)
        ->when($request->name, function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' .  $request->name . '%');
        })
        ->latest()->paginate(10);
    }
}
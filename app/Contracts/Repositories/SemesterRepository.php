<?php

namespace App\Contracts\Repositories;

use App\Models\LessonHour;
use App\Contracts\Repositories\BaseRepository;
use App\Contracts\Interfaces\SemesterInterface;
use App\Models\Semester;

class SemesterRepository extends BaseRepository implements SemesterInterface
{
    public function __construct(Semester $semester)
    {
        $this->model = $semester;
    }

    public function get(): mixed
    {
        return $this->model->query()->where('school_id', auth()->user()->school->id)->get();
    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }
}

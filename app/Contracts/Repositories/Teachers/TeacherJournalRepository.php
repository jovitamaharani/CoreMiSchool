<?php

namespace App\Contracts\Repositories\Teachers;

use App\Contracts\Interfaces\Teachers\TeacherJournalInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\TeacherJournal;
use Carbon\Carbon;

class TeacherJournalRepository extends BaseRepository implements TeacherJournalInterface
{
    public function __construct(TeacherJournal $city)
    {
        $this->model = $city;
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

    public function updateWithLesson(array $data, mixed $id): mixed
    {
        return $this->model->query()->where('lesson_schedule_id')->update($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function paginate(): mixed
    {
        //
    }

    public function getLessonSchedule(mixed $id): mixed
    {
        return $this->model->query()->where('lesson_schedule_id', $id)->first();
    }

    public function histories(): mixed
    {
        return $this->model->query()
            ->with('attendanceJournals')
            ->where('date', '<', now()->format('Y-m-d'))
            ->paginate();
    }
}

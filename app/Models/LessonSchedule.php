<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Models\BelongsToClassroom;
use App\Traits\Models\BelongsToLessonHour;

use App\Traits\Models\BelongsToSchoolYear;
use App\Traits\Models\HasManyTeacherJournal;
use App\Traits\Models\BelongsToTeacherSubject;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LessonSchedule extends Model
{
    use HasFactory, BelongsToLessonHour, BelongsToSchoolYear, BelongsToTeacherSubject, BelongsToClassroom, HasManyTeacherJournal;

    protected $guarded = ['id'];

    /**
     * Get all of the journals for the LessonSchedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function journals(): HasMany
    {
        return $this->hasMany(TeacherJournal::class, );
    }
}

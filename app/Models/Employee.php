<?php

namespace App\Models;

use App\Enums\GenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\Models\HasManyAttendanceTeacher;
use App\Traits\Models\HasManyExtracurricular;
use App\Traits\Models\HasManyTeacherSubject;
use App\Traits\Models\BelongsToReligion;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Models\HasManyClassroom;
use App\Traits\Models\BelongsToUser;
use App\Traits\Models\MorphManyRfid;


class Employee extends Model
{
    use HasFactory, BelongsToUser,
    BelongsToReligion,HasManyClassroom,
    HasManyTeacherSubject, HasManyExtracurricular,
    HasManyAttendanceTeacher, MorphManyRfid;

    protected $guarded = ['id'];
    protected $casts = [
        'gender' => GenderEnum::class,
    ];
}

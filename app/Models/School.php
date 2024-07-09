<?php

namespace App\Models;

use App\Traits\Model\BelongsToCity;
use App\Traits\Model\BelongsToProvince;
use App\Traits\Model\BelongsToUser;
use App\Traits\Model\HasManyEmplopyee;
use App\Traits\Model\HasManyMaple;
use App\Traits\Model\HasManyStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory, BelongsToCity, BelongsToUser, BelongsToProvince, HasManyStudent, HasManyEmplopyee, HasManyMaple;

    protected $fillable = [
        'npsn',
        'phone_number',
        'image',
        'user_id',
        'province_id',
        'city_id',
        'subdistrict_id',
        'pas_code',
        'address',
        'head_school',
        'nip',
        'website_school',
        'description'
    ];
}

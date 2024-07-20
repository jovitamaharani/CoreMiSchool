<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\WhereSchoolInterface;
use Illuminate\Http\Request;

interface AttendanceInterface extends GetInterface, StoreInterface, UpdateInterface, ShowInterface, DeleteInterface, PaginateInterface
{
    public function AttendanceChart(mixed $year, mixed $month, mixed $status) : mixed;
    public function getSchool(mixed $id, mixed $query): mixed;
    public function checkPresence(mixed $id, mixed $status) : mixed;
    public function updateCheckOut(mixed $id, array $data) : mixed;
    public function whereSchool(mixed $id, Request $request): mixed;
    public function getStudent(mixed $id): mixed;
    public function whereClassroom(mixed $id): mixed;
    public function classAndDate(mixed $classroom_id, Request $request): mixed;
    public function insert(array $data) :mixed;
    public function getCurrentDay() :mixed;
}

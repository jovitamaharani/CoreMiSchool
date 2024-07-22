<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\WhereInterface;
use Illuminate\Http\Request;

interface ClassroomInterface extends GetInterface, StoreInterface, UpdateInterface, ShowInterface, DeleteInterface, PaginateInterface
{
    public function whereInSchoolYears($schoolYears);
    public function whereSchoolYears($schoolYears, Request $request);
    public function countClass(): mixed;
    public function getAlumni(Request $request): mixed;
    public function search(Request $request): mixed;
    public function insert(array $data): mixed;

}

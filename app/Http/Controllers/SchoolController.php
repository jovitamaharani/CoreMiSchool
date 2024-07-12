<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CityInterface;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\ProvinceInterface;
use App\Contracts\Interfaces\SchoolInterface;
use App\Contracts\Interfaces\SubDistrictInterface;
use App\Contracts\Interfaces\VillageInterface;
use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Services\SchoolService;

class SchoolController extends Controller
{
    private SchoolInterface $school;
    private SchoolService $service;
    private ProvinceInterface $province;
    private CityInterface $city;
    private SubDistrictInterface $subdistrict;
    private VillageInterface $village;
    private EmployeeInterface $employee;

    public function __construct(SchoolInterface $school, SchoolService $service, ProvinceInterface $province, CityInterface $city, SubDistrictInterface $subdistrict, VillageInterface $village, EmployeeInterface $employee)
    {
        $this->school = $school;
        $this->service = $service;
        $this->province = $province;
        $this->city = $city;
        $this->subdistrict = $subdistrict;
        $this->village = $village;
        $this->employee = $employee;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = $this->school->get();
        $activeSchools = $this->school->where('1');
        $nonActiveSchools = $this->school->where('0');
        return view('admin.pages.list-school.index', compact('schools', 'activeSchools', 'nonActiveSchools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = $this->province->get();
        $cities = $this->city->get();
        $subdistricts = $this->subdistrict->get();
        $villages = $this->village->get();
        return view('admin.pages.list-school.add-school', compact('provinces', 'cities', 'subdistricts', 'villages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {
        $data = $this->service->store($request);
        // dd($data);
        $this->school->store($data);
        return to_route('school-admin.index')->with('success', 'Berhasil menambahkan sekolah');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $school = $this->school->showWithSlug($slug);
        $teachers = $this->employee->getTeacherBySchool($school->id);
        return view('admin.pages.list-school.detail', compact('school', 'teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $data = $this->service->update($school, $request);
        $this->school->update($school->id, $data);
        return to_route('school-admin.index')->with('success', 'Berhasil memperbarui sekolah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $this->school->delete($school->id);
        return to_route('school-admin.index')->with('success', 'Berhasil menghapus sekolah');
    }
}

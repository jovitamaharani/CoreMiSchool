<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\ExtracurricularInterface;
use App\Contracts\Interfaces\ExtracurricularStudentInterface;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Models\Extracurricular;
use App\Http\Requests\StoreExtracurricularRequest;
use App\Http\Requests\UpdateExtracurricularRequest;
use App\Services\ExtracurricularService;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    private ExtracurricularInterface $extracurricular;
    private ExtracurricularService $service;
    private EmployeeInterface $employee;
    private SchoolYearInterface $schoolYear;
    private ExtracurricularStudentInterface $extracurricularStudent;

    public function __construct(ExtracurricularInterface $extracurricular, ExtracurricularService $service, EmployeeInterface $employee, SchoolYearInterface $schoolYear, ExtracurricularStudentInterface $extracurricularStudent)
    {
        $this->extracurricular = $extracurricular;
        $this->service = $service;
        $this->employee = $employee;
        $this->schoolYear = $schoolYear;
        $this->extracurricularStudent = $extracurricularStudent;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $employees = $this->employee->get();
        $extracurriculars = $this->extracurricular->whereSchool(auth()->user()->school->id, $request);
        return view('school.new.extracurricular.index', compact('extracurriculars', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExtracurricularRequest $request)
    {
        $this->extracurricular->store($request->validated());
        return redirect()->back()->with('success', 'Berhasil menambahkan ekstrakulikuler');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular)
    {
        $schoolYear = $this->schoolYear->active();
        $extracurricularStudents = $this->extracurricularStudent->where($extracurricular->id);
        return view('school.new.extracurricular.detail', compact('extracurricular', 'schoolYear', 'extracurricularStudents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExtracurricularRequest $request, Extracurricular $extracurricular)
    {
        $this->extracurricular->update($extracurricular->id, $request->validated());
        return redirect()->back()->with('success', 'Berhasil memperbarui ekstrakulikuler');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular)
    {
        $this->extracurricular->delete($extracurricular->id);
        return redirect()->back()->with('success', 'Berhasil menghapus ekstrakulikuler');
    }
}

<?php

namespace App\Http\Controllers\Teacher;

use App\Enums\RoleEnum;
use App\Models\Employee;
use Illuminate\Support\Str;
use App\Services\StaffService;
use App\Http\Controllers\Controller;
use App\Contracts\Interfaces\UserInterface;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\ReligionInterface;

class StaffController extends Controller
{
    private UserInterface $user;
    private EmployeeInterface $employee;
    private StaffService $service;
    private ReligionInterface $religion;

    public function __construct(UserInterface $user, EmployeeInterface $employee, StaffService $service, ReligionInterface $religion)
    {
        $this->user = $user;
        $this->employee = $employee;
        $this->service = $service;
        $this->religion = $religion;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = $this->employee->whereSchool(auth()->user()->school->id, RoleEnum::STAFF->value);
        $religions = $this->religion->get();
        return view('school.pages.employe.index', compact('staffs', 'religions'));
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
    public function store(StoreEmployeeRequest $request)
    {
        try {
            $data = $this->service->store($request);
            $this->employee->store($data);
            return redirect()->back()->with('success', 'Berhasil menambahkan data pegawai');
        } catch (\Throwable $th) {
            $data = $this->user->showEmail($request->email);
            if ($data) {
                return redirect()->back()->with('warning', 'Data pegawai sudah tersedia');
            } else {
                return redirect()->back()->with('error', 'Kesalahan menambahkan data pegawai');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        try {
            $data = $this->service->update($employee, $request);
            $this->employee->update($employee->id, $data);
            return redirect()->back()->with('success', 'Berhasil memperbaiki pegawai');
        } catch (\Throwable $th) {
            $data = $this->user->showEmail($request->email);
            if ($data) {
                return redirect()->back()->with('warning', 'Data pegawai sudah tersedia');
            } else {
                return redirect()->back()->with('error', 'Kesalahan menambahkan data pegawai');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $this->service->delete($employee);
        $this->employee->delete($employee->id);
        return redirect()->back()->with('success', 'Data pegawai berhasil dihapus');
    }
}

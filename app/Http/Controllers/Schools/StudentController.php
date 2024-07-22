<?php

namespace App\Http\Controllers\Schools;

use App\Contracts\Interfaces\ClassroomStudentInterface;
use App\Models\Student;
use Illuminate\Support\Str;
use App\Services\StudentService;
use App\Http\Requests\StoreStudentRequest;
use App\Contracts\Interfaces\UserInterface;
use App\Http\Requests\UpdateStudentRequest;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\ReligionInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private UserInterface $user;
    private StudentInterface $student;
    private StudentService $service;
    private ReligionInterface $religion;
    private ClassroomStudentInterface $classroomStudent;

    public function __construct(UserInterface $user, StudentInterface $student, StudentService $service, ReligionInterface $religion, ClassroomStudentInterface $classroomStudent)
    {
        $this->user = $user;
        $this->student = $student;
        $this->service = $service;
        $this->religion = $religion;
        $this->classroomStudent = $classroomStudent;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = $this->student->search($request);
        $alumnus = $this->classroomStudent->getAlumnus();
        $religions = $this->religion->get();

        return view('school.new.student.index', compact('students', 'religions', 'alumnus'));
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
    public function store(StoreStudentRequest $request)
    {
        try {
            $data = $this->service->store($request);
            $this->student->store($data);
            return redirect()->back()->with('success', 'Siswa berhasil ditambahkan');
        } catch (\Throwable $th) {
            $data = $this->user->showEmail($request->email);
            if ($data) {
                return redirect()->back()->with('warning', 'Data siswa sudah tersedia');
            } else {
                return redirect()->back()->with('error', 'Kesalahan menambahkan data siswa');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        try {
            $data = $this->service->update($student, $request);
            $this->student->update($student->id, $data);
            return redirect()->back()->with('success', 'Siswa berhasil diperbarui');
        } catch (\Throwable $th) {
            $data = $this->user->showEmail($request->email);
            if ($data) {
                return redirect()->back()->with('warning', 'Data siswa sudah tersedia');
            } else {
                return redirect()->back()->with('error', 'Kesalahan menambahkan data siswa');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $this->service->delete($student);
        $this->student->delete($student->id);
        $student->user->delete();
        return redirect()->back()->with('success', 'Siswa berhasil dihapus');
    }
}
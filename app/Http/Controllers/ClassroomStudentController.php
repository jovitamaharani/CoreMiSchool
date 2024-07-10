<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ClassroomStudentInterface;
use App\Models\ClassroomStudent;
use App\Http\Requests\StoreClassroomStudentRequest;
use App\Http\Requests\UpdateClassroomStudentRequest;
use App\Models\Classroom;

class ClassroomStudentController extends Controller
{
    private ClassroomStudentInterface $classroomStudent;

    public function __construct(ClassroomStudentInterface $classroomStudent)
    {
        $this->classroomStudent = $classroomStudent;
    }

    /**
     * Display a listing of the resource.
     */
    public function index($classroom)
    {
        $classroomStudents = $this->classroomStudent->get();
        return view('', compact('classroomStudents', 'classroom'));
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
    public function store(StoreClassroomStudentRequest $request, Classroom $classroom)
    {
        $data = $request->validate();
        foreach ($data['student_id'] as $item => $student) {
            $this->classroomStudent->store([
                'student_id' => $item,
                'classroom_id' => $classroom->id,
            ]);
        }
        return redirect()->back()->with('success', 'Berhasil menambahkan siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassroomStudent $classroomStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassroomStudent $classroomStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomStudentRequest $request, ClassroomStudent $classroomStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassroomStudent $classroomStudent)
    {
        foreach ($classroomStudent as $item => $classroomStudent) {
            $this->classroomStudent->delete($item->id);
        }

        return redirect()->back()->with('success', 'Berhasil menghapus siswa');
    }
}

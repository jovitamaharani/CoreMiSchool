<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ClassroomStudentInterface;
use App\Contracts\Interfaces\ReligionInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Models\ClassroomStudent;
use App\Http\Requests\StoreClassroomStudentRequest;
use App\Http\Requests\UpdateClassroomStudentRequest;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomStudentController extends Controller
{
    private ClassroomStudentInterface $classroomStudent;
    private StudentInterface $student;
    private ReligionInterface $religion;

    public function __construct(ClassroomStudentInterface $classroomStudent, ReligionInterface $religion, StudentInterface $student)
    {
        $this->classroomStudent = $classroomStudent;
        $this->student = $student;
        $this->religion = $religion;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Classroom $classroom, Request $request)
    {
        $classroomStudents = $this->classroomStudent->whereClassroom($classroom->id, $request);
        $religions = $this->religion->get();
        $students = $this->student->doesntHaveClassroom($request);
        return view('school.new.class.detail', compact('classroomStudents', 'classroom', 'religions', 'students'));
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
        try {
            $data = $request->validate();
            foreach ($data['student_id'] as $item => $student) {
                $this->classroomStudent->store([
                    'student_id' => $item,
                    'classroom_id' => $classroom->id,
                ]);
            }
            return redirect()->back()->with('success', 'Berhasil menambahkan siswa');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan'.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $classroomId = $request->classroom_id;
        $students = $this->classroomStudent->getByClassId($classroomId);
        return response()->json(['data' => $students]);
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
    public function update(UpdateClassroomStudentRequest $request, Classroom $classroom)
    {
        try {
            // Convert comma-separated IDs to array
            $addStudents = $request->input('add_students') ? explode(',', $request->input('add_students')) : [];
            $removeStudents = $request->input('remove_students') ? explode(',', $request->input('remove_students')) : [];

            // Add students to classroom
            foreach ($addStudents as $studentId) {
                ClassroomStudent::firstOrCreate([
                    'classroom_id' => $classroom->id,
                    'student_id' => $studentId,
                ]);
            }
            // Remove students from classroom
            foreach ($removeStudents as $studentId) {
                ClassroomStudent::where('classroom_id', $classroom->id)
                    ->where('student_id', $studentId)
                    ->delete();
            }

            return to_route('school.class-student.index', $classroom->id)->with('success', 'Berhasil meyimpan perubahan siswa');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan'.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassroomStudent $classroomStudent)
    {
        try {
            foreach ($classroomStudent as $item => $classroomStudent) {
                $this->classroomStudent->delete($item->id);
            }

            return redirect()->back()->with('success', 'Berhasil menghapus siswa');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan'.$th->getMessage());
        }
    }
}

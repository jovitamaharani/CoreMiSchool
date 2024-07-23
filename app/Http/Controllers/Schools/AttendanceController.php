<?php

namespace App\Http\Controllers\Schools;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Interfaces\AttendanceTeacherInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\SchoolYearInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Exports\StudentAttendanceExport;
use App\Exports\TeacherAttendanceExport;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    private ClassroomInterface $classroom;
    private SchoolYearInterface $schoolYear;
    private AttendanceInterface $attendance;
    private AttendanceTeacherInterface $attendanceTeacher;

    public function __construct(classroomInterface $classroom, SchoolYearInterface $schoolYear, AttendanceInterface $attendance, AttendanceTeacherInterface $attendanceTeacher)
    {
        $this->classroom = $classroom;
        $this->schoolYear = $schoolYear;
        $this->attendance = $attendance;
        $this->attendanceTeacher = $attendanceTeacher;
    }

    /**
     * menampilkan kehadiran kelas di tahun ajaran yang aktif
     * @param Request $request untuk menampilkan data berdasarkan tahun ajaran
     */
    public function class(Request $request)
    {
        $activeYear = $this->schoolYear->active();
        $year = $activeYear->school_year;
        
        if ($request->has('year')) {
            $year = $request->year;
        } 
        $schoolYear = $this->schoolYear->whereSchoolYear($year);
        $classrooms = $this->classroom->whereSchoolYears($schoolYear->id, $request);
        $schoolYears = $this->schoolYear->get();
        return view('school.new.attendace.student.class-attendace', compact('classrooms', 'schoolYears'));
    }

    /**
     * menampilkan kehadiran siswa di classroom yang diberikan
     * @param Classroom $classroom classroom yang diberikan
     * @param Request $request untuk menampilkan data berdasarkan tanggal
     */
    public function student(Classroom $classroom, Request $request)
    {
        $attendances = $this->attendance->classAndDate($classroom->id, $request);
        return view('school.new.attendace.student.list-attendace-student', compact('attendances', 'classroom'));
    }

    /**
     * menampilkan kehadiran guru
     * @param Request $request untuk menampilkan data berdasarkan tanggal
     */
    public function teacher(Request $request)
    {
        $attendanceTeachers = $this->attendanceTeacher->get();
        return view('school.pages.attendace.teacher.index', compact('attendanceTeachers'));
    }

    /**
     * export kehadiran guru
     * @param Request $request untuk menampilkan data berdasarkan tanggal
     */
    public function export_teacher(Request $request)
    {
        return Excel::download(new TeacherAttendanceExport($request, $this->attendanceTeacher), 'attendance-teacher.xlsx');
    }

    /**
     * export kehadiran siswa
     * @param Classroom $classroom classroom yang diberikan
     * @param Request $request untuk menampilkan data berdasarkan tanggal
     */
    public function export_student(Classroom $classroom, Request $request)
    {
        return Excel::download(new StudentAttendanceExport($classroom->id, $request, $this->attendance), 'Kehadiran-'.$classroom->name.$request->date.'.xlsx');
    }
}
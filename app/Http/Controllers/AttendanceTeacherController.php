<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\ModelHasRfidInterface;
use App\Contracts\Interfaces\AttendanceTeacherInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Http\Requests\StoreAttendanceRequest;
use App\Contracts\Interfaces\RfidInterface;
use App\Services\AttendanceService;
use App\Enums\AttendanceEnum;
use App\Enums\RoleEnum;

class AttendanceTeacherController extends Controller
{
    private AttendanceTeacherInterface $attendance;
    private ModelHasRfidInterface $modelHasRfid;
    private RfidInterface $rfid;
    private AttendanceRuleInterface $attendanceRule;
    private StudentInterface $student;
    private AttendanceService $service;

    public function __construct(ModelHasRfidInterface $modelHasRfid, AttendanceTeacherInterface $attendance, StudentInterface $student, AttendanceRuleInterface $attendanceRule, AttendanceService $service, RfidInterface $rfid)
    {
        $this->attendance = $attendance;
        $this->rfid = $rfid;
        $this->student = $student;
        $this->attendanceRule = $attendanceRule;
        $this->service = $service;
        $this->modelHasRfid = $modelHasRfid;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $school_id)
    {
        $present = $this->attendance->getSchool($school_id, 'checkin');
        $out = $this->attendance->getSchool($school_id, 'checkout');
        return view('school.pages.test.list-attendane-teacher', compact('school_id', 'present', 'out'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttendanceRequest $request, string $school_id)
    {
        $data = $request->validated();
        $rfid = $this->rfid->where($data['rfid']);
        if (!$rfid) return redirect()->back()->with('error', 'Rfid belum terdaftarkan');

        $user = $this->modelHasRfid->whereRfid($data['rfid']);
        if ($user->model_type != 'App\Models\Employee') return redirect()->back()->with('error', 'Rfid bukan guru');
        if ($user->model_type == 'App\Models\Employee' && $user->model->status != RoleEnum::TEACHER->value) return redirect()->back()->with('error', 'Rfid pegawai');
        if ($user->model_type === null) return redirect()->back()->with('error', 'Rfid belum terdaftarkan ke pengguna');

        $time = now();
        $day = strtolower($time->format('l'));
        $clock = $time->format('H:i:s');

        $this->student->show($user->model_id);

        $rule = $this->attendanceRule->showByDay($school_id, $day, RoleEnum::TEACHER->value);
        if (!$rule) return redirect()->back()->with('warning', 'Tidak ada jadwal absensi');

        $presence = $this->attendance->checkPresence($user->model_id, AttendanceEnum::PRESENT->value);

        if ($clock >= $rule->checkin_start && $clock <= $rule->checkin_end) {
            if ($rule->is_holiday == true) return redirect()->back()->with('warning', 'Hari ini libur ');
            if ($time->format('H:i:s') > $rule->checkin_end) return redirect()->back()->with('warning', 'Absen sudah melebihi jamnya');
            if ($presence) return redirect()->back()->with('warning', 'Sudah absen');

            $data = $this->service->storeByTeacher($time->format('H:i:s'), $user->model_id, AttendanceEnum::PRESENT->value);
            $this->attendance->store($data);

            return redirect()->back()->with('success', 'Berhasil absen');
        } else if ($clock >= $rule->checkout_start && $clock <= $rule->checkout_end) {
            if (!$presence) return redirect()->back()->with('warning', 'Anda belum absen pagi');
            if ($presence->checkout != '00:00:00') return redirect()->back()->with('warning', 'Anda sudah absen pulang');

            $this->attendance->updateCheckOut($user->model_id, ['checkout' => $clock]);
            return redirect()->back()->with('success', 'Berhasil absen keluar');
        } else {
            return redirect()->back()->with('warning', 'Waktu absen sudah melebihi batas waktu');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
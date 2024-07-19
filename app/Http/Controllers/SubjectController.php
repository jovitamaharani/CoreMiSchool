<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ReligionInterface;
use App\Contracts\Interfaces\SubjectInterface;
use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private SubjectInterface $subject;
    private ReligionInterface $religions;

    public function __construct(SubjectInterface $subject, ReligionInterface $religions)
    {
        $this->subject = $subject;
        $this->religions = $religions;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = $this->subject->whereSchool($request);
        $religions = $this->religions->get();
        return view('school.pages.subjects.create-subjects', compact('subjects', 'religions'));
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
    public function store(StoreSubjectRequest $request)
    {
        $this->subject->store($request->validated());
        return redirect()->back()->with('success', 'Berhasil menambahkan mata pelajaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $this->subject->update($subject->id, $request->validated());
        return redirect()->back()->with('success', 'Berhasil memperbarui mata pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $this->subject->delete($subject->id);
        return redirect()->back()->with('success', 'Berhasil menghapus mata pelajaran');
    }
}
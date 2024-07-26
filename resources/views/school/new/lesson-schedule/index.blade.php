@extends('school.layouts.app')
@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div class="d-flex flex-wrap align-items-center">
            <div class="col-12 col-md-6 col-lg-12 mb-3 me-3">
                <form class="d-flex align-items-center position-relative" action="/school/extracurricular">
                    <input type="text" name="name" class="form-control product-search ps-5 me-2" id="input-search"
                        placeholder="Cari..." value="{{ old('name', request()->name) }}">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>

                    <select name="school_year" class="form-select" id="select-school-year">
                        <option value="" disabled selected>Pilih Tahun Ajaran</option>
                        <option value="1" {{ old('school_year', request()->school_year) == '1' ? 'selected' : '' }}>
                            2024/2025</option>
                        <option value="2" {{ old('school_year', request()->school_year) == '2' ? 'selected' : '' }}>
                            2023/2024</option>
                        <option value="3" {{ old('school_year', request()->school_year) == '3' ? 'selected' : '' }}>
                            2022/2023</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

    @forelse ($classrooms as $classroom)
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="position-relative">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h4 class="mb-2"><b>{{ $classroom->name }}</b></h4>
                                <div class="d-flex align-items-center">
                                    <span class="mb-1 badge font-medium bg-light-primary text-primary fs-3">{{ $classroom->schoolYear->school_year }}</span>
                                </div>
                            </div>
                            <span class="fs-4">{{ $classroom->employee->user->name }}</span>
                            <div class="d-flex align-items-center mb-4 pt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M15 14s1 0 1-1s-1-4-5-4s-5 3-5 4s1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276c.593.69.758 1.457.76 1.72l-.008.002l-.014.002zM11 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0a3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904c.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724c.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0a3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4a2 2 0 0 0 0-4" />
                                </svg>
                                <span class="ms-2 fs-4">
                                    {{ $classroom->classroomStudents->count() }} Siswa
                                </span>
                            </div>
                            <a href="{{ route('school.lesson-schedule.detail', ['classroom' => $classroom->id]) }}" class="btn waves-effect waves-light btn-primary w-100">Masuk Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
@endsection
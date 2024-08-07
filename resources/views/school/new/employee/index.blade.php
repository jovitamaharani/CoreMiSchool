@extends('school.layouts.app')
@section('content')
    <div class="card bg-primary shadow-none position-relative overflow-hidden text-light">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8 text-light">Pegawai</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">Daftar - daftar guru dan staff di sekolah</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin_assets/dist/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid note-has-grid">
        <!-- Navigation Tabs -->
        <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row flex-wrap" id="nav-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link note-link d-flex align-items-center justify-content-center px-3 text-body-color"
                    id="teacher-tab" data-bs-toggle="pill" href="#teacher-content" role="tab"
                    aria-controls="teacher-content" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"
                        class="me-1">
                        <path fill="currentColor"
                            d="M4 6v2h22v16H12v2h18v-2h-2V6zm4.002 3A4.016 4.016 0 0 0 4 13c0 2.199 1.804 4 4.002 4A4.014 4.014 0 0 0 12 13c0-2.197-1.802-4-3.998-4M14 10v2h5v-2zm7 0v2h3v-2zM8.002 11C9.116 11 10 11.883 10 13c0 1.12-.883 2-1.998 2C6.882 15 6 14.12 6 13c0-1.117.883-2 2.002-2M14 14v2h10v-2zM4 18v8h2v-6h3v6h2v-5.342l2.064 1.092c.585.31 1.288.309 1.872 0v.002l3.53-1.867l-.933-1.77l-3.531 1.867l-3.096-1.634A3.005 3.005 0 0 0 9.504 18z" />
                    </svg>
                    <span class="d-none d-md-block font-weight-medium">Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link note-link d-flex align-items-center justify-content-center px-3 text-body-color"
                    id="employee-tab" data-bs-toggle="pill" href="#employee-content" role="tab"
                    aria-controls="employee-content" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 36 36"
                        class="me-1">
                        <path fill="currentColor"
                            d="M16.43 16.69a7 7 0 1 1 7-7a7 7 0 0 1-7 7m0-11.92a5 5 0 1 0 5 5a5 5 0 0 0-5-5M22 17.9a25.4 25.4 0 0 0-16.12 1.67a4.06 4.06 0 0 0-2.31 3.68v5.95a1 1 0 1 0 2 0v-5.95a2 2 0 0 1 1.16-1.86a22.9 22.9 0 0 1 9.7-2.11a23.6 23.6 0 0 1 5.57.66Zm.14 9.51h6.14v1.4h-6.14z" />
                        <path fill="currentColor"
                            d="M33.17 21.47H28v2h4.17v8.37H18v-8.37h6.3v.42a1 1 0 0 0 2 0V20a1 1 0 0 0-2 0v1.47H17a1 1 0 0 0-1 1v10.37a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.47a1 1 0 0 0-1-1" />
                    </svg>
                    <span class="d-none d-md-block font-weight-medium">Staff</span>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center ms-md-auto mt-2 mt-md-0 guru-buttons">
                <button type="button" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#import-teacher">
                    Import Guru
                </button>
            </li>
            <li class="nav-item d-flex align-items-center ms-2 mt-2 mt-md-0 guru-buttons">
                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#create-teacher">
                    Tambah Guru
                </button>
            </li>

            <li class="nav-item d-flex align-items-center ms-md-auto mt-2 mt-md-0 pegawai-buttons d-none">
                <button type="button" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#import-employe">
                    Import Pegawai
                </button>
            </li>
            <li class="nav-item d-flex align-items-center ms-2 mt-2 mt-md-0 pegawai-buttons d-none">
                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal"
                    data-bs-target="#modal-add-emplo">
                    Tambah Pegawai
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-4" id="nav-tabContent">
            <div class="tab-pane fade" id="teacher-content" role="tabpanel" aria-labelledby="teacher-tab">
                @include('school.new.employee.panes.teacher-tab')
            </div>
            <div class="tab-pane fade" id="employee-content" role="tabpanel" aria-labelledby="employee-tab">
                @include('school.new.employee.panes.employee-tab')
            </div>
        </div>
    </div>

    @include('school.new.employee.widgets.employe.update-employe')
    @include('school.new.employee.widgets.employe.modal-detail')

    @include('school.new.employee.widgets.teacher.update-teacher')
    @include('school.new.employee.widgets.teacher.modal-rfid')

    @include('school.new.employee.widgets.teacher.import-teacher')
    @include('school.new.employee.widgets.employe.import-employe')
    @include('school.new.employee.widgets.employe.add-employe')
    @include('school.new.employee.widgets.teacher.add-teacher')
    <x-delete-modal-component />
@endsection

@section('script')
    @include('school.new.employee.scripts.tab')
    @include('school.new.employee.scripts.rfid')
    @include('school.new.employee.scripts.detail')
    @include('school.new.employee.scripts.delete')
    @include('school.new.employee.scripts.create')
    @include('school.new.employee.scripts.edit')
@endsection
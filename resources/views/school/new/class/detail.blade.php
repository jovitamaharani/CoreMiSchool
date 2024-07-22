@extends('school.layouts.app')
@section('content')
    <div class="card bg-light-primary shadow-none position-relative overflow-hidden text-dark">
        <div class="card-body px-4 py-4">
            <div class="row align-items-center">
                <div class="col-8 col-md-9">
                    <h4 class="fw-semibold mb-2 text-dark">Daftar Siswa</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">X RPL 1</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Rolling Siswa</h4>
                <div>
                    <p>Pilih siswa di sebelah kiri untuk memasukkan siswa ke dalam Kelas</p>
                </div>
            </div>
            <div>
                <button id="save-button" class="btn btn-primary px-4">Simpan</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-wrap mb-3">
                    <form class="position-relative">
                        <input type="text" name="name" class="form-control product-search ps-5" id="input-search-left"
                            placeholder="Cari...">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>

                <div class="table-responsive rounded-2">
                    <table id="left-table" class="table border text-nowrap customize-table mb-0 align-middle text-center">
                        <thead>
                            <tr>
                                <th class="text-white" style="background-color: #5D87FF;">Siswa</th>
                                <th class="text-white" style="background-color: #5D87FF;">NISN</th>
                                <th class="text-white" style="background-color: #5D87FF;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr data-id="">
                                <td>nama user</td>
                                <td>9738</td>
                                <td class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="text-end mt-3 mb-3">
                        <button id="move-to-right" class="btn btn-success">
                            Masukan
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap mb-3">
                    <form class="position-relative">
                        <input type="text" name="search" class="form-control product-search ps-5"
                            id="input-search-right" placeholder="Cari...">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>

                <div class="table-responsive rounded-2">
                    <table id="right-table" class="table border text-nowrap customize-table mb-0 align-middle text-center">
                        <thead>
                            <tr>
                                <th class="text-white" style="background-color: #5D87FF;">Siswa</th>
                                <th class="text-white" style="background-color: #5D87FF;">NISN</th>
                                <th class="text-white" style="background-color: #5D87FF;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr data-id="">
                                <td>user name</td>
                                <td>97398</td>
                                <td class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-3 mb-3">
                        <button id="move-to-left" class="btn btn-danger">
                            Keluarkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden fields to store changes -->
    <form id="save-form" action="" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="add_students" id="add-students">
        <input type="hidden" name="remove_students" id="remove-students">
    </form>


    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="d-flex align-items-center">
            <h4 class="mb-0">Daftar Siswa</h4>
        </div>
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#import-student">
                Import Siswa
            </button>
            <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#create-student">
                Tambah Siswa
            </button>
        </div>
    </div>



    <div class="table-responsive rounded-2">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NISN</th>
                    <th>RFID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin_assets/dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                                width="40" height="40">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">Nama User</h6>
                                <span class="fw-normal">12 RPL 1</span>
                            </div>
                        </div>
                    </td>
                    <td>Laki Laki</td>
                    <td>903793</td>
                    <td>-
                        <button type="button" class="btn btn-rounded btn-warning p-1 ms-2 btn-rfid" data-bs-toggle="modal"
                            data-bs-target="#rfid-teacher">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1m-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83l-6.94 6.93a1 1 0 0 0-.29.71m10.76-8.35l2.83 2.83l-1.42 1.42l-2.83-2.83ZM8 13.17l5.93-5.93l2.83 2.83L10.83 16H8Z" />
                            </svg>
                        </button>
                    </td>
                    <td>
                        <div class="dropdown dropstart">
                            <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="category">
                                    <div class="category-business"></div>
                                    <div class="category-social"></div>
                                    <span class="more-options text-dark">
                                        <i class="ti ti-dots-vertical fs-5"></i>
                                    </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                <li>
                                    <button type="button"
                                        class="dropdown-item d-flex align-items-center gap-3 btn-edit-teacher">
                                        <i class="fs-4 ti ti-edit"></i>Edit
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="btn-delete dropdown-item d-flex align-items-center gap-3 text-danger btn-delete-teacher"
                                        data-id="">
                                        <i class="fs-4 ti ti-trash"></i>Delete
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="pagination justify-content-end mb-0">
        {{-- <x-paginate-component :paginator="$classroomStudents" /> --}}
    </div>



    @include('school.new.class.widgets.class.create-student')
    @include('school.new.class.widgets.class.import-student')
    @include('school.new.class.widgets.class.update-student')
    @include('school.new.class.widgets.class.rfid-student')
    @include('school.new.class.widgets.class.detail-student')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Handle move to right
            $('#move-to-right').click(function() {
                $('#left-table tbody tr').each(function() {
                    if ($(this).find('.form-check-input').is(':checked')) {
                        $(this).find('.form-check-input').prop('checked', false);
                        $('#right-table tbody').append($(this));
                    }
                });
            });

            // Handle move to left
            $('#move-to-left').click(function() {
                $('#right-table tbody tr').each(function() {
                    if ($(this).find('.form-check-input').is(':checked')) {
                        $(this).find('.form-check-input').prop('checked', false);
                        $('#left-table tbody').append($(this));
                    }
                });
            });

            // Handle save button
            $('#save-button').click(function() {
                var addStudents = [];
                var removeStudents = [];

                $('.empty-tr').remove();
                $('#right-table tbody tr').each(function() {
                    addStudents.push($(this).data('id'));
                });

                $('#left-table tbody tr').each(function() {
                    removeStudents.push($(this).data('id'));
                });

                $('#add-students').val(addStudents.join(','));
                $('#remove-students').val(removeStudents.join(','));

                $('#save-form').submit();
            });
        });
    </script>
@endsection

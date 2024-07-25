@extends('school.layouts.app')

@section('content')
    <div class="card border-1">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4>Detail Sekolah</h4>

                <div class="">
                    <a href="{{ route('settings-information.edit') }}" class="btn btn-success">Edit Informasi</a>
                </div>
            </div>
            <div class="row pb-4 mt-3 mx-3">
                <div class="d-flex align-items-center mb-5">
                    <img class="card-img-top img-responsive me-3" style="max-height:80px; width: auto;"
                        src="{{ $school->image ? asset('storage/' . $school->image) : asset('assets/images/default-user.jpeg') }}"
                        alt="{{ $school->user->name }}">
                    <div class="d-flex flex-column flex-sm-row justify-content-between w-100 ms-3">
                        <div>
                            <h3 class="mb-1">{{ $school->user->name }}</h3>
                            <span class="badge font-medium bg-light-primary text-primary">{{ $school->type }}</span>
                        </div>
                        <div>
                            <h5 class="mb-1">Tahun Ajaran</h5>
                            <h5>{{ $schoolYear->school_year }}</h5>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <div class="d-flex justify-content-between">
                            <h6>Kepala Sekolah :</h6>
                            <p>{{ $school->head_school }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>NPSN :</h6>
                            <p>{{ $school->npsn }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Nomor Telepon :</h6>
                            <p>{{ $school->phone_number }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Email</h6>
                            <p>{{ $school->user->email }}</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="d-flex justify-content-between">
                            <h6>Jenjang Pendidikan :</h6>
                            <p>{{ $school->level }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Akreditasi :</h6>
                            <p>{{ $school->accreditation }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Deskripsi :</h6>
                            <p>{{ $school->description != null ? $school->description : '-' }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Alamat:</h6>
                            <div class="ms-5">
                                <p class="text-end">{{ $school->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-1">
        <div class="card-body">
            <h4>Daftar RFID Sekolah</h4>
            <div class="row align-items-center pt-3">
                <div class="col-12 col-md-8 col-lg-3">
                    <form action="" class="d-flex">
                        <div class="position-relative flex-grow-1">
                            <input type="text" name="search" class="form-control search-chat py-2 px-5 ps-5"
                                id="search-name" placeholder="Cari..." value="{{ request()->search }}">
                            <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mt-2 mt-md-0 d-flex justify-content-end ms-auto">
                    <button class="btn btn-primary btn-rfid">Tambah Master Key</button>
                </div>
            </div>

            <div class="mt-3">
                <div class="table-responsive rounded-2">
                    <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
                        <thead>
                            <tr>
                                <th style="background-color: #5D87FF;" class="text-white">No</th>
                                <th style="background-color: #5D87FF;" class="text-white">RFID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rfids as $rfid)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rfid->rfid }}</td>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center align-middle">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="{{ asset('admin_assets/dist/images/empty/no-data.png') }}"
                                                alt="" width="300px">
                                            <p class="fs-5 text-dark text-center mt-2">
                                                Belum ada data
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modal-create-masterKey" tabindex="-1" aria-labelledby="tambahRfid" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('master-key.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahRfid">Tambah Master Key</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">RFID<span class="text-d">*</span></label>
                            <p class="mt-2 fs-2">Lakukan tab pada rfid reader untuk menginputkan rfid</p>
                        </div>
                        <div>
                            <input type="text" id="rfid" name="rfid" placeholder="Masukkan RFID"
                                class="form-control">
                            @error('rfid')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                            data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-rounded btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.btn-rfid').on('click', function() {
            $('#modal-create-masterKey').modal('show');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#modal-create-masterKey').on('shown.bs.modal', function() {
                $('#rfid').focus().select();
            });
        });
    </script>
@endsection

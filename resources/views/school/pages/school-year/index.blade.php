@extends('school.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-6 mb-3">
        <form class="d-flex gap-2">
            <div class="position-relative">
                <div class="">
                    <input type="text" name="search" class="form-control search-chat py-2 px-5 ps-5" id="search-name" placeholder="Cari">
                    <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                </div>
            </div>

        </form>
    </div>
    <div class="col-lg-6 mb-3">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#modal-create">
                Tambah Tahun Ajaran
            </button>
        </div>
    </div>
</div>

<div class="table-responsive rounded-2">
    <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
        <thead>
            <tr>
                <th>Tahun Ajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($schoolYears as $schoolYear)
                <tr>
                    <td>{{ $schoolYear->name }}</td>
                    <td>
                        <div class="gap-3">
                            <button class="btn btn-light-primary text-primary mb-2 me-2" data-bs-toggle="modal" data-bs-target="#modal-update">Edit</button>
                            <button class="btn btn-light-danger text-danger mb-2" data-id="{{ $schoolYear->id }}">Hapus</button>
                        </div>
                    </td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="tambahTahunAjaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahTahunAjaran">Tambah Tahun Ajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Tahun Ajaran</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-rounded btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="tambahTahunAjaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahTahunAjaran">Tambah Tahun Ajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Tahun Ajaran</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-rounded btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

@endsection
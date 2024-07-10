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

            <div class="d-flex gap-2">
                <select name="" class="form-select" id="search-status">
                    <option value="">SMKN 1 MALANG</option>
                    <option value="">SMKN 1 KEPANJEN</option>
                </select>

                <select name="" class="form-select" id="search-status">
                    <option value="">Tampilkan semua</option>
                    <option value="">Terbaru</option>
                    <option value="">Terlama</option>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-6 mb-3">
        <div class="d-flex gap-2 justify-content-end">
            <button type="button" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#modal-import">
                Import Pegawai
            </button>
            <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#modal-create">
                Tambah Pegawai
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-import" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importPegawai">Import Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">

                    <div class="card">
                        <div>
                            <h5 class="text-warning">Informasi</h5>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Pertanyaan:</label>

                        @error('question')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-light-danger text-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-rounded btn-light-success text-success">Tambah</button>
                </div>
        </div>
    </div>
</div>

<div class="table-responsive rounded-2">
    <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
        <thead>
            <tr>
                <th>Pegawai</th>
                <th>NIP</th>
                <th>Tipe Pegawai</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="{{asset('admin_assets/dist/images/profile/user-1.jpg')}}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="30" height="30" alt="" />
                    Arya Rizki</td>
                <td>1234567</td>
                <td>
                    <span class="mb-1 badge px-4 font-medium bg-light-primary text-primary">Staff</span>
                </td>
                <td>arya@gmail.com</td>
                <td>
                    <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <div class="category">
                                <div class="category-business"></div>
                                <div class="category-social"></div>
                                <span class="more-options text-dark">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu"
                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 23.2px, 0px);"
                            data-popper-placement="bottom-end">
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-eye"></i>Detail
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-edit"></i>Edit
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item text-danger position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-trash"></i>Hapus
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('admin_assets/dist/images/profile/user-1.jpg')}}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="30" height="30" alt="" />
                    Arya Rizki</td>
                <td>1234567</td>
                <td>
                    <span class="mb-1 badge px-4 font-medium bg-light-primary text-primary">Staff</span>
                </td>
                <td>arya@gmail.com</td>
                <td>
                    <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <div class="category">
                                <div class="category-business"></div>
                                <div class="category-social"></div>
                                <span class="more-options text-dark">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu"
                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 23.2px, 0px);"
                            data-popper-placement="bottom-end">
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-eye"></i>Detail
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-edit"></i>Edit
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item text-danger position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-trash"></i>Hapus
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('admin_assets/dist/images/profile/user-1.jpg')}}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="30" height="30" alt="" />
                    Arya Rizki</td>
                <td>1234567</td>
                <td>
                    <span class="mb-1 badge px-4 font-medium bg-light-success text-success">Active</span>
                </td>
                <td>arya@gmail.com</td>
                <td>
                    <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <div class="category">
                                <div class="category-business"></div>
                                <div class="category-social"></div>
                                <span class="more-options text-dark">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu"
                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 23.2px, 0px);"
                            data-popper-placement="bottom-end">
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-eye"></i>Detail
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-edit"></i>Edit
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item text-danger position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-trash"></i>Hapus
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('admin_assets/dist/images/profile/user-1.jpg')}}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="30" height="30" alt="" />
                    Arya Rizki</td>
                <td>1234567</td>
                <td>
                    <span class="mb-1 badge px-4 font-medium bg-light-primary text-primary">Staff</span>
                </td>
                <td>arya@gmail.com</td>
                <td>
                    <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <div class="category">
                                <div class="category-business"></div>
                                <div class="category-social"></div>
                                <span class="more-options text-dark">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu"
                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 23.2px, 0px);"
                            data-popper-placement="bottom-end">
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-eye"></i>Detail
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-edit"></i>Edit
                            </a>
                            <a
                                class="note-business badge-group-item badge-business dropdown-item text-danger position-relative category-business d-flex align-items-center gap-3">
                                <i class="fs-4 ti ti-trash"></i>Hapus
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
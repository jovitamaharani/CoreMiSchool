<div class="card card-body">
    <h4>Daftar Siswa</h4>
    <div class="row mb-3 mt-3">
        <div class="col-lg-8 col-md-12 mb-3">
            <form class="d-flex gap-2">
                <div class="position-relative">
                    <input type="text" name="name" class="form-control product-search ps-5" id="input-search" placeholder="Cari..." value="{{ old('name', request('name')) }}">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                </div>

                <div class="d-flex gap-2">
                    <select name="filter" class="form-select" id="">
                        <option value="">Tampilkan semua</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <div>
                        <button type="submit" class="btn btn-primary btn-md">filter</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="col-lg-4 col-md-12 mb-3 d-flex justify-content-end">
            <button type="button" class="btn mb-1 btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-student">
                Tambah Siswa
            </button>
        </div> --}}
    </div>
    <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr class="">
                    <th class="fs-4 fw-semibold mb-0">No</th>
                    <th class="fs-4 fw-semibold mb-0">Nama</th>
                    <th class="fs-4 fw-semibold mb-0">Jenis Kelamin</th>
                    <th class="fs-4 fw-semibold mb-0">NISN</th>
                    <th class="fs-4 fw-semibold mb-0">RFID</th>
                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse (range(1,2) as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin_assets/dist/images/profile/user-1.jpg') }}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40" height="40" alt="" />
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0 text-start">Suyadi Oke</h6>
                                <span class="fw-normal">XI RPL 1</span>
                            </div>
                        </div>
                    </td>
                    <td>Laki-laki</td>
                    <td>12345678</td>
                    <td>
                        1234567
                        <button type="submit" class="btn btn-rounded btn-light-warning text-warning ms ms-2 btn-rfid" data-bs-toggle="modal" data-bs-target="#modal-create-rfid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1m-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83l-6.94 6.93a1 1 0 0 0-.29.71m10.76-8.35l2.83 2.83l-1.42 1.42l-2.83-2.83ZM8 13.17l5.93-5.93l2.83 2.83L10.83 16H8Z" />
                            </svg>
                        </button>
                    </td>
                    <td>
                      <div class="dropdown dropstart">
                        <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-detail dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#modal-detail-student"><i class="fs-4 ti ti-eye"></i>Detail</a>
                            </li>
                            <li>
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-update dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#modal-update-student"><i class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-delete dropdown-item d-flex align-items-center text-danger gap-3"><i class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                        </ul>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('admin_assets/dist/images/profile/user-1.jpg') }}" class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40" height="40" alt="" />
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0 text-start">Suyadi Oke</h6>
                                <span class="fw-normal">XI RPL 1</span>
                            </div>
                        </div>
                    </td>
                    <td>Laki-laki</td>
                    <td>12345678</td>
                    <td>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-rfid">
                            Tambah RFID
                        </button>
                    </td>
                    <td>
                      <div class="dropdown dropstart">
                        <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-detail dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#modal-detail-student"><i class="fs-4 ti ti-eye"></i>Detail</a>
                            </li>
                            <li>
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-update dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#modal-upadte-student"><i class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                                <a data-id="1dbf93d1-4e70-37ec-abda-b496e6a3c177" class="btn-delete dropdown-item d-flex align-items-center text-danger gap-3"><i class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                        </ul>
                    </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center align-middle">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('admin_assets/dist/images/empty/no-data.png') }}" alt="" width="300px">
                            <p class="fs-5 text-dark text-center mt-2">
                                Siswa belum ditambahkan
                            </p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@extends('admin.layouts.app')

@section('content')
    <div class="row mb-3 align-items-center">
        <div class="col-12 col-md-6 col-lg-6 mb-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true" href="#all">
                        <span>Semua</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#active" role="tab" aria-selected="false"
                        tabindex="-1">
                        <span>Aktif</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#nonactive" role="tab" aria-selected="false"
                        tabindex="-1">
                        <span>Non Aktif</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-2 mb-3">
            <form action="" class="position-relative">
                <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari tim...">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>
        <div class="col-12 col-md-6 col-lg-2 mb-3">
            <select id="status-school" class="form-select">
                <option value="">SMKN 1 Kepanjen</option>
                <option value="">SMKN 6 Malang</option>
                <option value="">SMKN 8 Malang</option>
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-2 mb-3">
            <select id="status-activity" class="form-select">
                <option value="">Semua</option>
                <option value="">Aktif</option>
                <option value="">NonAktif</option>
            </select>
        </div>
    </div>


    <div class="tab-content">
        <div class="tab-pane active show" id="all" role="tabpanel">
            <div class="p-3">
                <div class="row">
                    @foreach (range(1, 5) as $item)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title p-3 rounded-2">
                                    <div class="position-relative p-3 rounded-2" style="background-color: #F0F0F0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical position-absolute"
                                            style="top: 10px; right: 10px;">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        </svg>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="height: 100px;">
                                            <img class="card-img-top img-responsive" style="max-height: 100%; width: auto"
                                                src="{{ asset('admin_assets/dist/images/profile/smkn1kepanjen.png') }}"
                                                alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <h3 class="fs-6">
                                        SMK NEGERI 1 KEPANJEN
                                    </h3>
                                    <p class="mb-0 mt-2 text-muted">Lasmono S.Pd.Mm</p>
                                    <h6 class="pt-3">Alamat :</h6>
                                    <p class="mb-0 mt-2 text-muted">Jl, Ngadiluwih, Kedungpedaringan, Kec. Kepanjen,
                                        Kabupaten Malang, Jawa Timur 65163, Indonesia</p>
                                    <div class="d-flex pt-3">
                                        <span class="mb-1 badge bg-primary w-25">Swasta</span>
                                        <span class="mb-1 badge bg-success ms-3 w-25">Aktif</span>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-danger text-danger w-50">Jadikan
                                            Nonaktif</button>
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-info text-info w-50 ms-3">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="tab-pane" id="active" role="tabpanel">
            <div class="p-3">
                <div class="row">
                    @foreach (range(1, 5) as $item)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title p-3 rounded-2">
                                    <div class="position-relative p-3 rounded-2" style="background-color: #F0F0F0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical position-absolute"
                                            style="top: 10px; right: 10px;">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        </svg>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="height: 100px;">
                                            <img class="card-img-top img-responsive" style="max-height: 100%; width: auto"
                                                src="{{ asset('admin_assets/dist/images/profile/smkn1kepanjen.png') }}"
                                                alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <h3 class="fs-6">
                                        SMK NEGERI 1 KEPANJEN
                                    </h3>
                                    <p class="mb-0 mt-2 text-muted">Lasmono S.Pd.Mm</p>
                                    <h6 class="pt-3">Alamat :</h6>
                                    <p class="mb-0 mt-2 text-muted">Jl, Ngadiluwih, Kedungpedaringan, Kec. Kepanjen,
                                        Kabupaten Malang, Jawa Timur 65163, Indonesia</p>
                                    <div class="d-flex pt-3">
                                        <span class="mb-1 badge bg-primary w-25">Negeri</span>
                                        <span class="mb-1 badge bg-success ms-3 w-25">Aktif</span>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-danger text-danger w-50">Jadikan
                                            Nonaktif</button>
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-info text-info w-50 ms-3">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="tab-pane" id="nonactive" role="tabpanel">
            <div class="p-3">
                <div class="row">
                    @foreach (range(1, 5) as $item)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title p-3 rounded-2">
                                    <div class="position-relative p-3 rounded-2" style="background-color: #F0F0F0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical position-absolute"
                                            style="top: 10px; right: 10px;">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        </svg>
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="height: 100px;">
                                            <img class="card-img-top img-responsive" style="max-height: 100%; width: auto"
                                                src="{{ asset('admin_assets/dist/images/profile/smkn1kepanjen.png') }}"
                                                alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <h3 class="fs-6">
                                        SMK NEGERI 1 KEPANJEN
                                    </h3>
                                    <p class="mb-0 mt-2 text-muted">Lasmono S.Pd.Mm</p>
                                    <h6 class="pt-3">Alamat :</h6>
                                    <p class="mb-0 mt-2 text-muted">Jl, Ngadiluwih, Kedungpedaringan, Kec. Kepanjen,
                                        Kabupaten Malang, Jawa Timur 65163, Indonesia</p>
                                    <div class="d-flex pt-3">
                                        <span class="mb-1 badge bg-primary w-25">Negeri</span>
                                        <span class="mb-1 badge bg-danger ms-3 w-25">Nonaktif</span>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-danger text-danger w-50">Jadikan
                                            Aktif</button>
                                        <button type="button"
                                            class="btn waves-effect waves-light btn-rounded btn-light-info text-info w-50 ms-3">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
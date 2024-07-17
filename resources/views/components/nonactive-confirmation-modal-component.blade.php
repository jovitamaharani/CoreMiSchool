<div class="modal fade" id="modal-disable" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form id="form-disable" class="modal-content" method="post">
            @csrf
            @method('PATCH')
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Konfirmasi Nonaktif
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk menonaktifkan sekolah ini? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-medium" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                    Yakin
                </button>
            </div>
        </form>
    </div>
</div>

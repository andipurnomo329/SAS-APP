<div class="modal fade" id="datamapel" tabindex="-1" aria-labelledby="datamapelLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="datamapelLabel">Input Data Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Gunakan action & method sesuai kebutuhan -->
                <form id="guruForm" method="post" action="{{route ('kelas') }}" novalidate>
                    <div class="mb-3">
                        <label for="namaGuru" class="form-label">Kode : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="kode_mapel" name="namaGuru" placeholder="kode mapel"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Nama Mapel : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat" placeholder="Nama Mapel"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Deskripsi : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="deskripsi" name="jurusan" placeholder="Deskripsi"
                            required>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
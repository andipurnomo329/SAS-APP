<div class="modal fade" id="datakelas" tabindex="-1" aria-labelledby="datakelasLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="datakelasLabel">Input Data Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Gunakan action & method sesuai kebutuhan -->
                <form id="guruForm" method="post" action="{{route ('kelas') }}" novalidate>
                    <div class="mb-3">
                        <label for="namaGuru" class="form-label">Nama Kelas : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Nama Kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Tingkat : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tingkat" name="tingkat" placeholder="Tingkat" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahunAjaran" class="form-label">Tahun Ajaran : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control date" id="tahunAjaran" name="tahunAjaran" placeholder="dd/mm/yyyy" required>
                    </div>
                    <div class="mb-3">
                        <label for="kuota" class="form-label">Kouta Siswa : <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="kuota" name="kuota" placeholder="Kouta siswa" required>
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

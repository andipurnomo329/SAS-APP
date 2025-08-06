<div class="modal fade" id="editdatakelas" tabindex="-1" aria-labelledby="editdatakelasLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="editdatakelasLabel">Input Data Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Gunakan action & method sesuai kebutuhan -->
                <form id="guruForm" method="post" action="{{route ('kelas') }}" novalidate>
                    <div class="mb-3">
                        <label for="namaGuru" class="form-label">Nama Kelas : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Nama Kelas" required value="XII IPA 1">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Tingkat : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tingkat" name="tingkat" placeholder="Tingkat" required value="12">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required value="IPA">
                    </div>
                    <div class="mb-3">
                        <label for="tahunAjaran" class="form-label">Tahun Ajaran : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control date" id="tahunAjaran" name="tahunAjaran" placeholder="dd/mm/yyyy" required value="2024/2025">
                    </div>
                    <div class="mb-3">
                        <label for="kuota" class="form-label">Kouta Siswa : <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="kuota" name="kuota" placeholder="Kouta siswa" required value="50">
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

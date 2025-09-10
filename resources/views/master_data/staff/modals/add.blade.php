<div class="modal fade" id="datastaff" tabindex="-1" aria-labelledby="datastaffLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="datastaffLabel">Input Data Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Gunakan action & method sesuai kebutuhan -->
                <form id="staffForm" method="post" action="{{ route ('master-data.kelas') }}" novalidate>
                    <div class="mb-3">
                        <label for="namaGuru" class="form-label">NIP : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="kode_mapel" name="namaGuru" placeholder="Nip"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Nama Lengkap : <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat"
                            placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jenis Kelamin : <span
                                class="text-danger">*</span></label>
                        <select class="form-select">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Tanggal Lahir : <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control date" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Jabatan : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat" placeholder="Jabatan"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Nomor Telepon : <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat"
                            placeholder="nomor telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Email :</label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat" placeholder="Email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Alamat : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_mapel" name="tingkat" placeholder="Alamat"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Status : <span class="text-danger">*</span></label>
                        <select class="form-select">
                            <option value="" disabled selected>Pilih Status</option>
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-form-label">Upload Foto <span style="color: red;">*</span></label>
                        <div class="col-sm-9">
                            <div class="uploader-container" id="dropZone">
                                <label class="uploader-btn">
                                    Upload <input type="file" id="uploaderInput" hidden>
                                </label>
                                <span> Drag & Drop File</span>
                            </div>
                            <div id="uploaderList"></div>
                        </div>
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
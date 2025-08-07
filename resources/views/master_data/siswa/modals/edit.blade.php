<div class="modal fade" id="editdatasiswa" tabindex="-1" role="dialog" aria-labelledby="editdatasiswaLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="editdatasiswaLabel">Edit Data Guru</h5>
                <button type="button" class="close bg-white" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card">
                <div class="card-body position-relative">
                    <!-- (matikan novalidate untuk mengaktifkan required pada field) -->
                    <form id="siswaFormEdit" novalidate data-stepper>
                        <div class="step-labels">
                            <span>Personal Info</span>
                            <span>Parent Info</span>
                            <span class="disabled">Selesai</span>
                        </div>
                        <div class="steps">
                            <div class="step active">1</div>
                            <div class="step">2</div>
                            <div class="step">✓</div>
                        </div>

                        <!-- STEP 1 -->
                        <section class="step-section active">
                            <div class="form-group">
                                <label>Nama Lengkap : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>NISN : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="NISN">
                            </div>
                            <div class="form-group mt-2">
                                <label>Jenis Kelamin : <span style="color: red;">*</span></label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option value="" disabled selected>Pilih jenis kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control date" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="form-group mt-2">
                                <label>Agama :</label>
                                <select class="form-select" name="agama" id="agama" required>
                                    <option value="" disabled selected>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Budha</option>
                                    <option>Kristen Protestan</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control date" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap : <span style="color: red;">*</span></label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"
                                    placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label">Upload File <span
                                        style="color: red;">*</span></label>
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
                        </section>

                        <!-- STEP 2 -->
                        <section class="step-section">
                            <div class="form-group">
                                <label>Nama Ayah :</label>
                                <input type="text" class="form-control" id="nipGuru" placeholder="Status Kepegawaian">
                            </div>

                            <div class="form-group mt-2">
                                <label>Nama Ibu : <span
                                        style="color: red;">*</span></label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor SK">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah :</label>
                                <input type="text" class="form-control" id="nipGuru" placeholder="pekerjaan_ayah">
                            </div>
                            <div class="form-group mt-2">
                                <label>Pekerjaan Ibu :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                            <div class="form-group mt-2">
                                <label>Nomor Telp Ayah :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                            <div class="form-group mt-2">
                                <label>Nomor Telp Ibu :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                            <div class="form-group mt-2">
                                <label>Nama Wali :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                            <div class="form-group mt-2">
                                <label>Hubungan Wali :</label>
                                <select class="form-select" name="agama" id="agama" required>
                                    <option value="" disabled selected>Pilih</option>
                                    <option>Paman</option>
                                    <option>Bibi</option>
                                    <option>Kakak</option>
                                    <option>dsb</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label>Nomor Telp Wali :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                        </section>

                        <!-- STEP 3 -->


                        <!-- STEP 5 -->
                        <section class="step-section">
                            <p><strong>Selesai!</strong> Pastikan data sudah benar, lalu klik submit untuk menyimpan ke
                                sistem.</p>
                        </section>

                        <div class="buttons">
                            <button type="button" class="btn-prev btn btn-secondary btn-fw">Previous</button>
                            <button type="button" class="btn-next btn btn-info btn-fw">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
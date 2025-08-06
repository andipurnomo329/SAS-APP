<div class="modal fade" id="dataguru" tabindex="-1" role="dialog" aria-labelledby="dataguruLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered custom-modal-position-sm">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="dataguruLabel">Input Data Guru</h5>
                <button type="button" class="close bg-white" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card">
                <div class="card-body position-relative">
                    <!-- (matikan novalidate untuk mengaktifkan required pada field) -->
                    <form id="guruForm" novalidate data-stepper> 
                        <div class="step-labels">
                            <span>Pribadi</span>
                            <span>Kepegawaian</span>
                            <span>Pendidikan</span>
                            <span>Mengajar</span>
                            <span class="disabled">Selesai</span>
                        </div>
                        <div class="steps">
                            <div class="step active">1</div>
                            <div class="step">2</div>
                            <div class="step">3</div>
                            <div class="step">4</div>
                            <div class="step">✓</div>
                        </div>

                        <!-- STEP 1 -->
                        <section class="step-section active">
                            <div class="form-group">
                                <label>NIK : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="NIK">
                            </div>
                            <div class="form-group">
                                <label>NIP / NUPTK : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="NIP/NUPTK">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="Nama Lengkap">
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
                            <div class="form-group mt-2">
                                <label>Status Pernikahan :</label>
                                <select class="form-select" name="status_pernikahan" id="status_pernikahan" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option>Menikah</option>
                                    <option>Lajang</option>
                                    <option>Single</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap : <span style="color: red;">*</span></label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"
                                    placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telp : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="Nomo Telp">
                            </div>
                            <div class="form-group">
                                <label>Email : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="namaGuru" placeholder="Email">
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
                                <label>Status Kepegawaian
                                    <small style="font-size:10px; color:#888;">(PNS, Honorer, Tetap, Yayasan,
                                        dll) <span style="color: red;">*</span></small>
                                </label>
                                <input type="text" class="form-control" id="nipGuru" placeholder="Status Kepegawaian">
                            </div>

                            <div class="form-group mt-2">
                                <label>Nomor SK Pengangkatan :</label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor SK">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control date" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="form-group">
                                <label>Jabatan : <small style="font-size:10px; color:#888;">(Guru, Wakil Kepsesk,
                                        dll)</small> <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="nipGuru" placeholder="Jabatan">
                            </div>
                            <div class="form-group mt-2">
                                <label>Nomor sertifikasi
                                    <small style="font-size:10px; color:#888;">(opsional)</small>
                                </label>
                                <input type="number" inputmode="numeric" class="form-control" id="tglMasuk"
                                    placeholder="Nomor Sertifikat">
                            </div>
                        </section>

                        <!-- STEP 3 -->
                        <section class="step-section">
                            <div class="form-group">
                                <label>Pendidikan Terakhir :
                                    <small style="font-size:10px; color:#888;">(S1, S2, D3, dll) <span
                                            style="color: red;">*</span></small>
                                </label>
                                <input type="text" class="form-control" id="pendidikanGuru"
                                    placeholder="Pendidikan Terakhir">
                            </div>
                            <div class="form-group">
                                <label>Jurusan / Prodi : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="pendidikanGuru" placeholder="Jurusan">
                            </div>
                            <div class="form-group">
                                <label>Universitas : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="pendidikanGuru" placeholder="Universitas">
                            </div>
                            <div class="form-group">
                                <label>Tahun Lulus : <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="pendidikanGuru" placeholder="Tahun Lulus">
                            </div>
                            <div class="form-group">
                                <label>Pelatihan : <small style="font-size:10px; color:#888;">(opsional)</small></label>
                                <input type="text" class="form-control" id="pendidikanGuru" placeholder="Pelatihan">
                            </div>
                        </section>

                        <!-- STEP 4 -->
                        <section class="step-section">
                            <!-- ================= MATA PELAJARAN ================= -->
                            <div class="form-group mt-2">
                                <label>Mata Pelajaran yang Diajarkan : <small
                                        style="font-size:10px; color:#888;">(Ceklis mapel diajar) <span
                                            style="color: red;">*</span></small></label>
                                <div class="dropdown w-100">
                                    <button class="form-select text-start" type="button" id="dropdownMapel"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-label="mapel">
                                        Pilih Mata Pelajaran
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMapel">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="select_all_mapel"
                                                    data-checkall="mapel" onclick="checkAllUniversal(this)">
                                                <label class="form-check-label" for="select_all_mapel">Semua Mata
                                                    Pelajaran</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="dropdown-grid">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mapel[]"
                                                        value="Matematika" data-group="mapel">
                                                    <label class="form-check-label">Matematika</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mapel[]"
                                                        value="Bahasa Indonesia" data-group="mapel">
                                                    <label class="form-check-label">Bahasa Indonesia</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mapel[]"
                                                        value="IPA" data-group="mapel">
                                                    <label class="form-check-label">IPA</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mapel[]"
                                                        value="IPS" data-group="mapel">
                                                    <label class="form-check-label">IPS</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- ================= KELAS ================= -->
                            <div class="form-group mt-2">
                                <label>Kelas yang Diajar : <small style="font-size:10px; color:#888;">(Ceklis kelas
                                        diajar) <span style="color: red;">*</span></small></label>
                                <div class="dropdown w-100">
                                    <button class="form-select text-start" type="button" id="dropdownKelas"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-label="kelas">
                                        Pilih Kelas
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownKelas">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="select_all_kelas"
                                                    data-checkall="kelas" onclick="checkAllUniversal(this)">
                                                <label class="form-check-label" for="select_all_kelas">Semua
                                                    Kelas</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="dropdown-grid">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kelas[]"
                                                        value="Kelas 1" data-group="kelas">
                                                    <label class="form-check-label">Kelas 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kelas[]"
                                                        value="Kelas 2" data-group="kelas">
                                                    <label class="form-check-label">Kelas 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kelas[]"
                                                        value="Kelas 3" data-group="kelas">
                                                    <label class="form-check-label">Kelas 3</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- ================= STATUS WALI KELAS ================= -->
                            <div class="form-group mt-2">
                                <label>Status Walikelas :</label>
                                <select class="form-select" name="status_walikelas" id="status_walikelas" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                </select>
                            </div>
                        </section>


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
<div class="modal fade" id="detaildataguru" tabindex="-1" aria-labelledby="detaildataguruLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered custom-modal-position-lg">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="detaildataguruLabel">Detail Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <div class="card-body position-relative">
                        <div class="row">
                            <!-- ===========================
                                 Kolom 1 - Foto + Personal Info
                            ============================ -->
                            <div class="col-md-4 border-end">
                                <div class="text-start mb-3 ps-1">
                                    <img src="{{ asset('images/faces/face1.jpg') }}" alt="Foto Guru"
                                        class="img-thumbnail rounded"
                                        style="width: 120px; height: 140px; object-fit: cover;">
                                </div>

                                <p class="card-description fw-bold mb-1">Personal Info</p>
                                <hr class="my-3">
                                <p>Nama : <span id="detail_nama">Raden Saleh</span></p>
                                <p>NIK : <span id="detail_nik">31558665584445</span></p>
                                <p>NIP : <span id="detail_nip">899875</span></p>
                                <p>Jenis Kelamin : <span id="detail_gender">Perempuan</span></p>
                                <p>Tempat Lahir : <span id="detail_tempatlahir">Jakarta</span></p>
                                <p>Tanggal Lahir : <span id="detail_tgllahir">01/01/2000</span></p>
                                <p>Agama : <span id="detail_agama">Islam</span></p>
                                <p>Status Pernikahan : <span id="detail_status">Menikah</span></p>
                                <p>Alamat : <span id="detail_alamat">Jl. Merdeka No.1</span></p>
                                <p>Email : <span id="detail_email">guru@email.com</span></p>
                            </div>

                            <!-- ===========================
                                 Kolom 2 - Kepegawaian & Pendidikan
                            ============================ -->
                            <div class="col-md-4 border-end">
                                <p class="card-description fw-bold mb-1">Kepegawaian Info</p>
                                <hr class="my-3">
                                <p>Status Kepegawaian : <span id="detail_statuspeg">PNS</span></p>
                                <p>Nomor SK : <span id="detail_nosk">2225544</span></p>
                                <p>Tanggal Masuk : <span id="detail_tglmasuk">01/01/2000</span></p>
                                <p>Jabatan : <span id="detail_jabatan">Guru</span></p>
                                <p>Nomor Sertifikat : <span id="detail_sertifikat">-</span></p>

                                <p class="card-description fw-bold mt-4 mb-1">Pendidikan Info</p>
                                <hr class="my-3">
                                <p>Pendidikan Terakhir : <span id="detail_pendidikan">S1</span></p>
                                <p>Jurusan : <span id="detail_jurusan">Ilmu Sosial</span></p>
                                <p>Universitas : <span id="detail_universitas">Universitas Indonesia</span></p>
                                <p>Tanggal Masuk : <span id="detail_tglpendidikan">01/01/2000</span></p>
                                <p>Pelatihan : <span id="detail_pelatihan">-</span></p>
                            </div>

                            <!-- ===========================
                                 Kolom 3 - Status Mengajar
                            ============================ -->
                            <div class="col-md-4">
                                <p class="card-description fw-bold mb-1">Status Mengajar</p>
                                <hr class="my-3">
                                <p>Mata Pelajaran : <span id="detail_mapel">IPS, IPA, PKN</span></p>
                                <p>Kelas yang Diajar : <span id="detail_kelas">10A</span></p>
                                <p>Status Wali Kelas : <span id="detail_walikelas">Tidak ada</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
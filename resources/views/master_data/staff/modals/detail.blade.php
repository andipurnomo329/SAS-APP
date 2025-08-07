<div class="modal fade" id="detaildatastaff" tabindex="-1" aria-labelledby="detaildatastaffLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered custom-modal-position-lg">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="detaildatastaffLabel">Detail Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="card">
                    <div class="card-body position-relative">
                        <div class="row">
                            <!-- ===========================
                                 Kolom 1 - Foto + Personal Info
                            ============================ -->
                            <div class="col-md-6 border-end">
                                <div class="text-start mb-4 ps-1">
                                    <img src="{{ asset('images/faces/face1.jpg') }}" alt="Foto Siswa"
                                        class="img-thumbnail rounded"
                                        style="width: 120px; height: 140px; object-fit: cover;">
                                </div>

                                <p class="card-description fw-bold mb-1">Personal Info</p>
                                <hr class="my-2">
                                <p>Nama : <span id="detail_nama">Raden Saleh</span></p>
                                <p>NISN : <span id="detail_nip">899875</span></p>
                                <p>Jenis Kelamin : <span id="detail_gender">Perempuan</span></p>
                                <p>Tempat Lahir : <span id="detail_tempatlahir">Jakarta</span></p>
                                <p>Tanggal Lahir : <span id="detail_tgllahir">01/01/2000</span></p>
                                <p>Tanggal Masuk : <span id="detail_tglmasuk">01/01/2000</span></p>
                                <p>Alamat : <span id="detail_alamat">Jl. Merdeka No.1</span></p>
                            </div>

                            <!-- ===========================
                                 Kolom 2 - Parent & Wali Info
                            ============================ -->
                            <div class="col-md-6">
                                <p class="card-description fw-bold mb-1">Orang Tua</p>
                                <hr class="my-2">
                                <p>Nama Ayah : <span id="detail_ayah">Andi</span></p>
                                <p>Nama Ibu : <span id="detail_ibu">Siti</span></p>
                                <p>Pekerjaan Ayah : <span id="detail_pekerjaanayah">Wiraswasta</span></p>
                                <p>Pekerjaan Ibu : <span id="detail_pekerjaanibu">Guru</span></p>
                                <p>Nomor Telp Ayah : <span id="detail_telpayah">08123456789</span></p>
                                <p>Nomor Telp Ibu : <span id="detail_telpibu">08129876543</span></p>

                                <p class="card-description fw-bold mt-4 mb-1">Wali Info</p>
                                <hr class="my-2">
                                <p>Nama Wali : <span id="detail_wali">Budi</span></p>
                                <p>Hubungan Wali : <span id="detail_hubwali">Paman</span></p>
                                <p>Nomor Telepon Wali : <span id="detail_telpwali">08124567890</span></p>
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

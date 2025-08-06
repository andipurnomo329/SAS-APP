<div class="modal fade" id="editdatasiswa" tabindex="-1" role="dialog" aria-labelledby="editdatasiswaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered custom-modal-position-xl">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="editdatasiswaLabel">Edit data</h5>
                <button type="button" class="close bg-white" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body position-relative">
                        <form class="form-sample">
                            <p class="card-description"> Personal info </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NISN <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="NISN" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis
                                            Kelamin <span style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin"
                                                required>
                                                <option value="" disabled selected>Pilih jenis kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <label class="col col-form-label">Tempat Lahir <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Kota">
                                        </div>
                                        <label for="dob" class="col col-form-label">Date of Birth <span
                                                style="color: red;">*</span></label>
                                        <div class="col">
                                            <input type="text" class="form-control date" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-select">
                                                <option value="" disabled selected>Pilih Agman</option>
                                                <option>Islam</option>
                                                <option>Budha</option>
                                                <option>Kristen Protestan</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Masuk <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control date" placeholder="dd/mm/yyyy" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
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
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat <span
                                                style="color: red;">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea1" rows="4"
                                                placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-description"> Parent Information </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama Ayah" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama Ibu" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ayah" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ibu" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telp Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ayah" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telp Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ibu" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">
                                            Nama Wali
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukkan nama wali"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hubungan Wali</label>
                                        <div class="col-sm-9">
                                            <select class="form-select">
                                                <option value="" disabled selected>Pilih</option>
                                                <option>Paman</option>
                                                <option>Bibi</option>
                                                <option>Kakak</option>
                                                <option>dsb</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telp Wali</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="No Telp Wali" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
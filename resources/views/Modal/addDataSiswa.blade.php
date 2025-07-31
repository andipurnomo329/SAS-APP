<div class="modal fade" id="datasiswa" tabindex="-1" role="dialog" aria-labelledby="datasiswaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="datasiswaLabel">Input data</h5>
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
                                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">NISN</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis
                                                    Kelamin</label>
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
                                                <label class="col col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" placeholder="Kota">
                                                </div>
                                                <label for="dob" class="col col-form-label">Date of Birth</label>
                                                <div class="col">
                                                    <input type="text" class="form-control date"
                                                        placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Agama</label>
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
                                                <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control date"
                                                        placeholder="dd/mm/yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
    <!-- ✅ Upload File hanya 1 file -->
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Upload File</label>
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

    <!-- Bagian State tetap -->
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">State</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" />
            </div>
        </div>
    </div>
</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Address 2</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Postcode</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Country</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select">
                                                        <option>America</option>
                                                        <option>Italy</option>
                                                        <option>Russia</option>
                                                        <option>Britain</option>
                                                    </select>
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
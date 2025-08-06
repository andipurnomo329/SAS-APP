<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <div class="container-fluid page-body-wrapper">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h3 class="page-title">Data Guru</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <button type="button" class="btn btn-info btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#dataguru" title="Add Data">
                                        <i class="mdi mdi-note-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Table Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Data Guru</h4>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas Diajar</th>
                                            <th>Status Kepegawaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset('images/faces/face1.jpg') }}" width="50" height="50"
                                                    class="rounded-circle"></td>
                                            <td>Arianto</td>
                                            <td>0056789101</td>
                                            <td>Guru@gmail.com</td>
                                            <td>Guru</td>
                                            <td>IPA,IPS,PKN</td>
                                            <td>10A</td>
                                            <td><label class="badge badge-info">Honorer</label></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"> <i
                                                            class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item btn-show-edit-modal">
                                                            <i class="mdi mdi-lead-pencil"></i> Edit
                                                        </button>
                                                        <button class="dropdown-item"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                        <button type="button"
                                                            class="dropdown-item btn-show-detail-modal">
                                                            <i class="mdi mdi-eye"></i> Detail
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="{{ asset('images/faces/face1.jpg') }}" width="50" height="50"
                                                    class="rounded-circle"></td>
                                            <td>Arianto</td>
                                            <td>0056789101</td>
                                            <td>Guru@gmail.com</td>
                                            <td>Wali Kelas</td>
                                            <td>IPA,IPS,PKN</td>
                                            <td>11A</td>
                                            <td><label class="badge badge-success">PNS</label></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"> <i
                                                            class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item btn-show-edit-modal">
                                                            <i class="mdi mdi-lead-pencil"></i> Edit
                                                        </button>
                                                        <button class="dropdown-item"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                        <button type="button"
                                                            class="dropdown-item btn-show-detail-modal">
                                                            <i class="mdi mdi-eye"></i> Detail
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan data lain sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @include('partials.footer')
            </div>
        </div>
    </div>

    <!-- Modal add -->
    @include('master_data.guru.modals.add')
    @include('master_data.guru.modals.edit')
    @include('master_data.guru.modals.detail')
    <!-- End Modal add -->
    @include('partials.script')
    <script>
    const formAdd = document.getElementById("guruForm");
    const formEdit = document.getElementById("guruFormEdit");

    // ✅ Action untuk tambah data
    formAdd.addEventListener("submit", function(e) {
        e.preventDefault();
        alert("✅ Data guru berhasil disimpan!");
        bootstrap.Modal.getInstance(document.getElementById('dataguru')).hide();
        formAdd.reset();
    });

    formEdit.addEventListener("submit", function(e) {
        e.preventDefault();
        alert("✏️ Data guru berhasil diupdate!");
        bootstrap.Modal.getInstance(document.getElementById('editdataguru')).hide();
        formEdit.reset();
    });

    // ✅ Tampilkan modal edit tanpa data
    document.querySelectorAll('.btn-show-edit-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            // Reset form edit agar kosong
            document.getElementById('guruFormEdit').reset();
            // Tampilkan modal edit
            var modalEdit = new bootstrap.Modal(document.getElementById('editdataguru'));
            modalEdit.show();
        });
    });

    // ✅ Tampilkan modal detail sederhana
    document.querySelectorAll('.btn-show-detail-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            var modalDetail = new bootstrap.Modal(document.getElementById('detaildataguru'));
            modalDetail.show();
        });
    });
    </script>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <!-- partial:partials/_navbar.html -->
    @include('partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('partials.sidebar')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Content -->

                <div class="page-header">
                    <h3 class="page-title"> Data Siswa </h3>
                    @if(in_array(session('user.role'), ['SuperAdmin', 'Admin']))
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <button type="button" class="btn btn-info btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#datastaff" data-whatever="@mdo" title="Add Data">
                                        <i class="mdi mdi-note-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ol>
                    </nav>
                    @endif
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Data Murid</h4>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jabatan</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>198720</td>
                                            <td>Rudi Hartono</td>
                                            <td>Tata Usaha</td>
                                            <td>08123456789</td>
                                            <td>
                                                <label class="badge badge-info">Aktif</label>
                                            </td>
                                            @if(in_array(session('user.role'), ['SuperAdmin', 'Admin']))
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
                                            @else
                                            <td>-</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>Siti Aminah</td>
                                            <td>Administrasi</td>
                                            <td>08234567890</td>
                                            <td>
                                                <label class="badge badge-danger">Non Aktif</label>
                                            </td>
                                            @if(in_array(session('user.role'), ['SuperAdmin', 'Admin']))
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
                                            @else
                                            <td>-</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->

                <div class="row">
                    <div class="col-12 grid-margin">

                    </div>
                </div>

                <!-- partial -->
                @include('partials.footer')

            </div>
            <!-- main-panel ends -->
        </div>

        <!-- Modal Popup -->
        @include('master_data.staff.modals.add')
        @include('master_data.staff.modals.edit')
        @include('master_data.staff.modals.detail')
        <!-- End Modal Popup -->

        @include('partials.script')

    </div>
    <script>
    const formAdd = document.getElementById("staffForm");
    const formEdit = document.getElementById("editFormStaff");

    // ✅ Action untuk tambah data
    formAdd.addEventListener("submit", function(e) {
        e.preventDefault();
        alert("✅ Data guru berhasil disimpan!");
        bootstrap.Modal.getInstance(document.getElementById('datastaff')).hide();
        formAdd.reset();
    });

    formEdit.addEventListener("submit", function(e) {
        e.preventDefault();
        alert("✏️ Data guru berhasil diupdate!");
        bootstrap.Modal.getInstance(document.getElementById('editFormStaff')).hide();
        formEdit.reset();
    });

    // ✅ Tampilkan modal edit tanpa data
    document.querySelectorAll('.btn-show-edit-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            // Reset form edit agar kosong
            document.getElementById('editFormStaff').reset();
            // Tampilkan modal edit
            var modalEdit = new bootstrap.Modal(document.getElementById('datastaff'));
            modalEdit.show();
        });
    });

    // ✅ Tampilkan modal detail sederhana
    document.querySelectorAll('.btn-show-detail-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            var modalDetail = new bootstrap.Modal(document.getElementById('detaildatastaff'));
            modalDetail.show();
        });
    });
    </script>

</body>

</html>
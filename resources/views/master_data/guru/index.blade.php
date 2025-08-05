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
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Jenis Kelamin</th>
                                            <th>TTL</th>
                                            <th>Kelas</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset('images/faces/face1.jpg') }}" width="50" height="50"
                                                    class="rounded-circle"></td>
                                            <td>Arianto</td>
                                            <td>0056789101</td>
                                            <td>005678</td>
                                            <td>Laki - Laki</td>
                                            <td>Jakarta, 06/08/2003</td>
                                            <td>12 IPA 1</td>
                                            <td>12/06/2020</td>
                                            <td><label class="badge badge-info">Aktif</label></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"> <i
                                                            class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</button>
                                                        <button class="dropdown-item"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                        <button class="dropdown-item"><i class="mdi mdi-eye"></i>
                                                            Detail</button>
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
    <!-- End Modal add -->
    @include('partials.script')
    <script>
    const form = document.getElementById("guruForm");
    form.addEventListener("submit", function(e) {
        e.preventDefault();

        // ========== AJAX SIMULASI ==========
        alert("✅ Data guru berhasil disimpan!");
        bootstrap.Modal.getInstance(document.getElementById('dataguru')).hide();

        // Reset stepper
        window.currentStep = 0;
        window.updateStepUI();
        form.reset();
    });
    </script>


</body>

</html>
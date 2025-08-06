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
                    <h3 class="page-title"> Data Kelas </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <button type="button" class="btn btn-info btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#datakelas" data-whatever="@mdo" title="Add Data">
                                        <i class="mdi mdi-note-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Data Kelas</h4>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Kelas</th>
                                            <th>Tingkat</th>
                                            <th>Jurusan</th>
                                            <th>Tahun Ajaran</th>
                                            <th>kouta Siswa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>XII IPA 1</td>
                                            <td>12</td>
                                            <td>IPA</td>
                                            <td>2024/2025</td>
                                            <td>50 Orang</td>
                                            <td>
                                                <label class="badge badge-info">Aktif</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuSizeButton3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                        <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editdatakelas"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</button>
                                                        <button class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>XII IPS 1</td>
                                            <td>11</td>
                                            <td>IPS</td>
                                            <td>2023/2024</td>
                                            <td>50 Orang</td>
                                            <td>
                                                <label class="badge badge-danger">Non Aktif</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuSizeButton3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                        <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editdatakelas"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</button>
                                                        <button class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                    </div>
                                                </div>
                                            </td>
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
        @include('master_data.kelas.modals.add')
        @include('master_data.kelas.modals.edit')
        <!-- End Modal Popup -->

        @include('partials.script')

    </div>


</body>

</html>
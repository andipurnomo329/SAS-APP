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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <button type="button" class="btn btn-info btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#datasiswa" data-whatever="@mdo" title="Add Data">
                                        <i class="mdi mdi-note-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Data Murid</h4>
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
                                            <td>
                                                <img src="{{ asset('images/faces/face1.jpg') }}" alt="Arianto"
                                                    width="50" height="50" style="border-radius: 50%;">
                                            </td>
                                            <td>Arianto</td>
                                            <td>0056789101</td>
                                            <td>005678</td>
                                            <td>Laki - Laki</td>
                                            <td>Jakarta, 06/08/2003</td>
                                            <td>12 IPA 1</td>
                                            <td>12/06/2020</td>
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
                                                            data-bs-target="#editdatasiswa"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</button>
                                                        <button class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
                                                        <button class="dropdown-item" href="#"><i
                                                                class="mdi mdi-eye"></i> Detail</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{ asset('images/faces/face2.jpg') }}" alt="Arianto"
                                                    width="50" height="50" style="border-radius: 50%;">
                                            </td>
                                            <td>Sinta Dwei</td>
                                            <td>0056789101</td>
                                            <td>005678</td>
                                            <td>Perempuan</td>
                                            <td>Bandung, 06/08/2003</td>
                                            <td>12 IPA 2</td>
                                            <td>12/06/2017</td>
                                            <td>
                                                <label class="badge badge-success">Lulus</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuSizeButton3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye"></i>
                                                            Detail</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{ asset('images/faces/face4.jpg') }}" alt="Arianto"
                                                    width="50" height="50" style="border-radius: 50%;">
                                            </td>
                                            <td>Jaka Susilo</td>
                                            <td>0056789101</td>
                                            <td>005678</td>
                                            <td>Laki - Laki</td>
                                            <td>Medan, 06/08/2003</td>
                                            <td>11 IPS 1</td>
                                            <td>12/06/2020</td>
                                            <td>
                                                <label class="badge badge-danger">Pindah</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuSizeButton3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-eye"></i>
                                                            Detail</a>
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
        @include('master_data.siswa.modals.add')
        @include('master_data.siswa.modals.edit')
        <!-- End Modal Popup -->

        @include('partials.script')

    </div>


</body>

</html>
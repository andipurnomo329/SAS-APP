<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')


<style>
.uploader-container {
    border: 1px dashed #ccc;
    padding: 8px 12px;
    border-radius: 5px;
    background: #fff;
    font-size: 14px;
    width: 100%;           /* ✅ Lebarkan sejajar kotak input */
    display: flex; 
    align-items: center;   /* ✅ Rata tengah vertikal */
    gap: 8px;
    min-height: 38px;      /* ✅ Tinggi sama seperti input form */
    cursor: pointer;
}

.uploader-btn {
    background-color: #007bff;
    color: white;
    padding: 5px 12px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 13px;
}
    .uploader-item {
        border: 1px solid #01A8E6;
        border-radius: 4px;
        padding: 5px 8px;
        margin-top: 6px;
        background: #fff;
        font-size: 13px;
        position: relative;
    }
    .uploader-remove-icon {
    position: absolute;
    top: 50%;
    right: 6px;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    font-size: 16px;
    color: #dc3545;
    cursor: pointer;
    display: none;
    line-height: 1;
}
    .uploader-progress {
        background: #e0e0e0;
        height: 18px;
        border-radius: 3px;
        margin-top: 4px;
        width: 100%;
        position: relative;
        font-size: 12px;
        color: #fff;
        overflow: hidden;
    }
    .uploader-progress-bar {
        background: #28a745;
        width: 0%;
        height: 100%;
        border-radius: 3px;
        text-align: center;
        line-height: 18px;
        font-weight: bold;
        white-space: nowrap;
    }
    .uploader-filename {
        font-size: 13px;
        margin-bottom: 3px;
        word-break: break-all;
    }
    .uploader-input {
        height: 26px;
        font-size: 13px;
        padding: 2px 6px;
        width: 100%;
        margin-top: 3px;
    }
    /* Highlight saat drag & drop */
    .uploader-container.dragover {
        background-color: #f1f1f1;
        border-color: #007bff;
    }
</style>
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
                                    <button type="button" class="btn btn-outline-info btn-icon-text"
                                        data-bs-toggle="modal" data-bs-target="#datasiswa" data-whatever="@mdo">
                                        <i class="mdi mdi-note-plus"></i> Add Data
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
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                        <a class="dropdown-item" href="#">Detail</a>
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
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                        <a class="dropdown-item" href="#">Detail</a>
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
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                        <a class="dropdown-item" href="#">Detail</a>
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
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- Modal Popup -->
        @include('modal.addDataSiswa')
        <!-- End Modal Popup -->
    </div>

    @include('partials.footer')

</body>

</html>
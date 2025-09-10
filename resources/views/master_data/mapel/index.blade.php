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
                                        data-bs-target="#datamapel" data-whatever="@mdo" title="Add Data">
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
                                            <th>Kode</th>
                                            <th>Nama Mapel</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>MAT</td>
                                            <td>Matematika</td>
                                            <td>Opsinonal</td>
                                            @if(in_array(session('user.role'), ['SuperAdmin', 'Admin']))
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
                                            @else
                                            <td>-</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>BIND</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>Opsinonal</td>
                                            @if(in_array(session('user.role'), ['SuperAdmin', 'Admin']))
                                            <td>
                                                <div class="dropdown">
                                                    <button class="badge badge-secondary btn-sm dropdown-toggle"
                                                        type="button" id="dropdownMenuSizeButton3"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> <i class="mdi mdi-cog"></i></button>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuSizeButton3">
                                                        <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editdatamapel"><i
                                                                class="mdi mdi-lead-pencil"></i> Edit</button>
                                                        <button class="dropdown-item" href="#"><i
                                                                class="mdi mdi-delete-forever"></i> Delete</button>
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
        @include('master_data.mapel.modals.add')
        @include('master_data.mapel.modals.edit')
        <!-- End Modal Popup -->

        @include('partials.script')

    </div>


</body>

</html>
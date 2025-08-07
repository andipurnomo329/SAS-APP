<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <style>
    .card {
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
    }

    .fc-event p {
        margin-bottom: 6px;
    }

    .fc-event .text-muted {
        font-size: 0.85rem;
        color: #777;
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

                <div class="container mt-4">
                    <div class="row">
                        <!-- Loop 9 card -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Deciphering Marketing Lingo For Small Business Owners</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Georgia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ulangi blok col-md-4 mb-4 sebanyak 8 kali untuk total 9 card -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Advanced Branding Techniques for SMEs</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">California</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Strategies to Boost Local Sales</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Texas</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tambah 6 card lagi -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Social Media Campaign Tactics</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Florida</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Understanding Consumer Behavior</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">New York</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Building Brand Loyalty</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Nevada</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Email Marketing for Beginners</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Ohio</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>SEO Optimization Basics</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Illinois</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Data Kelas</h4>
                                    <div class='fc-event'>
                                        <p>Using Google Ads Effectively</p>
                                        <p class="small-text"></p>
                                        <p class="text-muted mb-0">Washington</p>
                                    </div>
                                </div>
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
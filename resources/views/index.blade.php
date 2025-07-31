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
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Dashboard
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span></span>Overview <i
                                    class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card card-statistics">
                        <div class="row">
                            <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                <div class="card-body">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                        <i
                                            class="mdi mdi-account-multiple-outline text-primary me-0 me-sm-4 icon-lg"></i>
                                        <div class="wrapper text-center text-sm-left">
                                            <p class="card-text mb-0">Jumlah Siswa</p>
                                            <div class="fluid-container">
                                                <h3 class="mb-0 font-weight-medium">1.500</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                <div class="card-body">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                        <i class="mdi mdi-account-circle text-primary me-0 me-sm-4 icon-lg"></i>
                                        <div class="wrapper text-center text-sm-left">
                                            <p class="card-text mb-0">Jumlah Guru & Staff</p>
                                            <div class="fluid-container">
                                                <h3 class="mb-0 font-weight-medium">45</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                <div class="card-body">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                        <i class="mdi mdi-webhook text-primary me-0 me-sm-4 icon-lg"></i>
                                        <div class="wrapper text-center text-sm-left">
                                            <p class="card-text mb-0">Jumlah Kelas</p>
                                            <div class="fluid-container">
                                                <h3 class="mb-0 font-weight-medium">30</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                <div class="card-body">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                        <i class="mdi mdi-book-open-variant text-primary me-0 me-sm-4 icon-lg"></i>
                                        <div class="wrapper text-center text-sm-left">
                                            <p class="card-text mb-0">Jumlah Mata Pelajaran</p>
                                            <div class="fluid-container">
                                                <h3 class="mb-0 font-weight-medium">50</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Pengerluaran<i
                                        class="mdi mdi-chart-line mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">Rp. 50.000.000. ,-</h2>
                                <h6 class="card-text">Total Kas : Rp. 100.000.000. ,-</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">S<i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">45,6334</h2>
                                <h6 class="card-text">Decreased by 10%</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{ asset('images/dashboard/circle.svg') }}" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Visitors Online <i
                                        class="mdi mdi-diamond mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">95,5741</h2>
                                <h6 class="card-text">Increased by 5%</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafik Penerimaan Siswa Baru</h4>
                                <canvas id="siswaChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nilai Rata - Rata Kelas</h4>
                                <canvas id="barChart" style="height:230px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('partials.footer')

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->


    <!-- End custom js for this page -->
</body>
<script>
// Penerimaan siswa baru
const ctx = document.getElementById('siswaChart').getContext('2d');
const siswaChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
        datasets: [{
            label: 'Jumlah Siswa',
            data: [120, 250, 208, 180, 300, 310],
            borderColor: 'rgba(255, 99, 132, 0.6)',
            backgroundColor: 'rgba(255, 109, 140, 0.68)',
            borderWidth: 2,
            fill: false,
            tension: 0.4,
            pointRadius: 0
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#1e293b'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    precision: 0,
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            },
            x: {
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            }
        }
    }
});

// Nilai Rata - Rata Kelas
const barCtx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6'],
        datasets: [{
            label: 'Jumlah Pendaftar',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(54, 163, 235, 0.22)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#1e293b'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            },
            x: {
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            }
        }
    }
});
</script>

</html>
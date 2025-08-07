<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('images/faces/face1.jpg') }}" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route ('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#master-data" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cog menu-icon"></i>
            </a>
            <div class="collapse" id="master-data">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa') }}">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('guru') }}">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('staff') }}">Data Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mapel') }}">Data Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('kelas') }}">Data Kelas</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#jadwal" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Jadwal & Akademik</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-calendar-text menu-icon"></i>

            </a>
            <div class="collapse" id="jadwal">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('jadwal')}}">Jadwal Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Tahun Ajaran</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#arsip" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Arsip & Dokumen</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-archive menu-icon"></i>

            </a>
            <div class="collapse" id="arsip">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Arsip Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Arsip Kehadiran</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#laporan" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file-chart menu-icon"></i>

            </a>
            <div class="collapse" id="laporan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Laporan Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Laporan Guru</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#role" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Role User</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lock menu-icon"></i>

            </a>
            <div class="collapse" id="role">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">Admin / TU / Guru</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
<?php
// Ambil halaman yang sedang diakses
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Array untuk submenu Master Data
$masterDataPages = [
    'data-kriteria', 'data-sub-kriteria', 'data-alternatif', 
    'data-penilaian', 'data-perhitungan', 'data-hasil-akhir',
    'edit-data-kriteria', 'edit-data-sub-kriteria', 'edit-data-alternatif', 
    'edit-data-penilaian', 'edit-data-perhitungan', 'edit-data-hasil-akhir'
];

$masterUserPages = [
    'data-user', 'edit-data-user'
];

$masterInfoPages = [
    'data-info', 'data-cara'
];

// Cek apakah halaman aktif ada di dalam submenu Master Data atau Master User
$activeMasterData = in_array($page, $masterDataPages) ? 'active' : '';
$menuOpenMasterData = $activeMasterData ? 'menu-open' : '';

$activeMasterUser = in_array($page, $masterUserPages) ? 'active' : '';
$menuOpenMasterUser = $activeMasterUser ? 'menu-open' : '';

$activeMasterInfo = in_array($page, $masterInfoPages) ? 'active' : '';
$menuOpenMasterInfo = $activeMasterInfo ? 'menu-open' : '';

?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link <?= ($page == 'dashboard') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <!-- Master Data -->
        <li class="nav-item <?= $menuOpenMasterData ?>">
            <a href="#" class="nav-link <?= $activeMasterData ?>">
                <i class="nav-icon fas  fa-database"></i>
                <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="index.php?page=data-kriteria" class="nav-link <?= ($page == 'data-kriteria' || $page == 'edit-data-kriteria') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>Data Kriteria</p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="index.php?page=data-sub-kriteria" class="nav-link <?= ($page == 'data-sub-kriteria' || $page == 'edit-data-sub-kriteria') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-cubes"></i>
                        <p>Data Sub Kriteria</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-alternatif" class="nav-link <?= ($page == 'data-alternatif' || $page == 'edit-data-alternatif') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-clone"></i>
                        <p>Data Alternatif</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-penilaian" class="nav-link <?= ($page == 'data-penilaian' || $page == 'edit-data-penilaian') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Data Penilaian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-perhitungan" class="nav-link <?= ($page == 'data-perhitungan' || $page == 'edit-data-perhitungan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>Data Perhitungan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-hasil-akhir" class="nav-link <?= ($page == 'data-hasil-akhir' || $page == 'edit-data-hasil-akhir') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-signal"></i>
                        <p>Data Hasil Akhir</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Master User -->
        <li class="nav-item <?= $menuOpenMasterUser ?>">
            <a href="#" class="nav-link <?= $activeMasterUser ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Master User
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-user" class="nav-link <?= ($page == 'data-user' || $page == 'edit-data-user') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Master Info -->
        <li class="nav-item <?= $menuOpenMasterInfo ?>">
            <a href="#" class="nav-link <?= $activeMasterInfo ?>">
                <i class="nav-icon fas fa-info"></i>
                <p>
                    Information
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-info" class="nav-link <?= ($page == 'data-info') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Tentang SPK</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-cara" class="nav-link <?= ($page == 'data-cara') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Cara Pengunaan</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>Log Out</p>
            </a>
        </li>
    </ul>
</nav>

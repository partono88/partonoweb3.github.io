        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Khatulistiwa anugrah hijau travel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Looping Menu-->
            <div class="sidebar-heading">
                Home
            </div>
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Dashboard</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('tiket/kategori'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Kategori Tiket</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('tiket'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Data Tiket</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                    <i class="fa fa-fw fa book"></i>
                    <span>Data Anggota</span></a>
            </li>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            <!-- Heading -->
            <div class="sidebar-heading">
                Transakasi
            </div>
            <!-- New item dasboard -->
            <li class="nav-item active">
                <!-- Nav item dasboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span>Data Pemesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
                    <i class="fa fa-fw fa-list"></i>
                    <span>Data Booking</span>
                </a>
            </li>
            </li>
            <!-- hhhhhhhhh -->
            <hr class="sidebar-divider mt-3">
            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>
            <!-- New item dasboard -->
            <li class="nav-item active">
                <!-- Nav item dasboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_tiket'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Data Tiket</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Data Anggota</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span>Laporan Pemsanan</span>
                </a>
            </li>
            </li>
            <!-- gggggg -->
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --   > 
        
        
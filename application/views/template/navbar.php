<div id="wrapper"> <!-- ini pembuka untuk id wrapper, pembuka ada di halaman template navbar class wrapper --> 

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
            </div>
            <i class="fas fa-user-shield"></i>
            <div class="sidebar-brand-text mx-3">Administrator</div>
        </a>


        <!-- Nav Item - Dashboard -->
        <li class="nav-item mt-4 <?php if($this->uri->segment(1) == 'mobil'){echo 'active';} ?>">
            <a class="nav-link " href="<?= base_url('mobil') ?>">
            <i class="fas fa-car"></i>
            <span>Mobil</span></a>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1) == 'pesanan'){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('pesanan') ?>">
            <i class="fas fa-shopping-cart"></i>
            <span>Pesanan</span></a>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1) == 'proses-peminjaman'){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('proses-peminjaman') ?>">
            <i class="fas fa-tasks"></i>
            <span>Proses Peminjaman</span></a>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1) == 'histori-transaksi'){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('histori-transaksi') ?>">
            <i class="fas fa-history"></i>
            <span>Histori Transaksi</span></a>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1) == 'users'){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('users') ?>">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1) == 'track-mobil'){echo 'active';} ?>">
            <a class="nav-link" href="<?= base_url('track-mobil') ?>">
            <i class="fas fa-map-marked-alt"></i>
            <span>Lokasi Mobil</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
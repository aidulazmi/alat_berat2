<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class='badge badge-danger navbar-badge'>Jumlah Data</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class='dropdown-item dropdown-header'>Jumlah Data Pemeriksaan</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Proses
            <span class='float-right text-muted text-sm'>Jumlah Data Orang</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Belum Siap
            <span class='float-right text-muted text-sm'>Jumlah Data Orang</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Sudah Siap
            <span class='float-right text-muted text-sm'>Jumlah Data Orang</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('C_admin/data_pemeriksaan')?>" class="dropdown-item dropdown-footer">Semua Masa Tempo</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url();?>/asset/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI Berat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url();?>/asset/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('username')?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Data Master</li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/index')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/informasi_client')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Informasi Client
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/penawaran')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Penawaran
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/jasa')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-weight-hanging"></i>
              <p>
                Layanan Jasa
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/v_order')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Verifikasi Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Local Work Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Monitoring
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Data Mekanik
              </p>
            </a>
          </li>
          <li class="nav-header">Control</li>
          <li class="nav-item">
            <a href="#" class="nav-link js-scroll-trigger">
               <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('c_login/logout')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

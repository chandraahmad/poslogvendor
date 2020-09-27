<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/user/main/'); ?>">
        <div class="sidebar-brand-text mx-3">Pos Logistik Indonesia</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/user/main/'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Borang
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file-signature"></i>
          <span>Administrasi</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('index.php/user/main/administrasi'); ?>">Administrasi Vendor</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/user/main/dokumen'); ?>">Dokumen</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Asset & Sertifikasi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/user/main/kendaraan'); ?>">
          <i class="fas fa-fw fa-truck-pickup"></i>
          <span>Kendaraan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/user/main/general'); ?>">
          <i class="fas fa-fw fa-landmark"></i>
          <span>General</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/user/main/awards'); ?>">
          <i class="fas fa-fw fa-certificate"></i> 
          <span>Sertifikasi/Penghargaan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
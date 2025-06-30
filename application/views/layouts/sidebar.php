<?php $segment = $this->uri->segment(1); ?>

<!-- Brand Logo -->
<a href="<?= site_url('dashboard') ?>" class="brand-link">
  <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Rumah Sakit App</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
    </div>
  </div>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
      <li class="nav-item">
        <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $segment == 'dashboard' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('user') ?>" class="nav-link <?= $segment == 'user' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-users-cog"></i>
          <p>Data User</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('dokter') ?>" class="nav-link <?= $segment == 'dokter' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-user-md"></i>
          <p>Data Dokter</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('pasien') ?>" class="nav-link <?= $segment == 'pasien' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-procedures"></i>
          <p>Data Pasien</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('tindakan') ?>" class="nav-link <?= $segment == 'tindakan' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-stethoscope"></i>
          <p>Data Tindakan</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= site_url('rekammedik') ?>" class="nav-link <?= $segment == 'rekammedik' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-file-medical-alt"></i>
          <p>Data Rekam Medis</p>
        </a>
      </li>

      <li class="nav-item mt-3">
        <a href="<?= site_url('auth/logout') ?>" class="nav-link text-danger">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>
  </nav>
</div>

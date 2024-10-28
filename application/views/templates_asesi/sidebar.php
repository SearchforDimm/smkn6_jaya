<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$foto   = $cek->pas_photo;
$email  = '';
$level  = 'Calon Asesi';
$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
foreach ($pesan as $pes) {
  $awal = $pes->waktu;
}
$akhir = date('d-m-Y H:i:s');
?>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle" id="notif"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Pesan
              </div>
              <div class="dropdown-list-content dropdown-list-message">
              <?php foreach($pesan as $pes) :?>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('img/asesor/');?><?= $pes->foto?>" class="rounded-circle" style="width:40px; height:40px">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b><?= $pes->nama_lengkap?></b>
                    <p><?= $pes->pesan?></p>
                    <div class="time"><?php echo $pes->waktu;?></div>
                  </div>
                </a>
                <?php endforeach; ?> 
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="assets/upload/<?= $foto?>" class="rounded-circle mr-1" style="width:30px; height:30px;">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $nama?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= base_url('panel_siswa/biodata');?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profil
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('panel_siswa/logout');?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('dosen/dashboard') ?>">PSPO SMKN 6 JAKARTA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('dosen/dashboard') ?>">PSPO</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Utama</li>
              <li><a class="nav-link" href="<?php echo base_url('panel_siswa') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li> 
              <li><a class="nav-link" href="<?php echo base_url('panel_siswa/chat') ?>"><i class="fas fa-envelope"></i> <span>Pesan</span></a></li> 
              <li><a class="nav-link" href="<?php echo base_url('panel_siswa/biodata') ?>"><i class="fas fa-user"></i> <span>Biodata</span></a></li>
            <li class="menu-header">Lainnya</li>
              <li><a class="nav-link" href="<?= base_url('panel_siswa/logout');?>"><i class="fas fa-sign-out-alt text-danger"></i> <span class="text-danger">Keluar</span></a></li>
          </ul>


        </aside>
      </div>
<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$foto   = $cek->foto;
$email  = $cek->email;
$level  = 'Calon Asesi';
$menu     = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<body>
  <div id="app">
    <div class="main-wrapper">
      <nav class="sidebar hoverable close open">
        <div class="logo_items flex">
          <a href="<?php echo base_url('panel_asesor'); ?>">
            <span class="nav_image">
              <img src="assets/assets_lsp/images/logo-smkn6.png" alt="logo_img" />
            </span>
          </a>
          <span class="logo_name">LSP SMKN 6</span>

          <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
          <i class="bx bx-x" id="sidebar-close"></i>
        </div>
        <div class="menu_container">
          <div class="menu_items">
            <ul class="menu_item">
              <div class="menu_title flex">
                <span class="title">Utama</span>
                <span class="line"></span>
              </div>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/') ?>" class="link flex">
                  <i class="bx bx-home-alt"></i>
                  <span>Beranda</span>
                </a>
              </li>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/verifikasi') ?>" class="link flex">
                  <i class='bx bx-user-check'></i>
                  <span>Verifikasi</span>
                </a>
              </li>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/set_pengumuman') ?>" class="link flex">
                  <i class='bx bxs-graduation'></i>
                  <span>Kelulusan</span>
                </a>
              </li>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/kirim_pesan') ?>" class="link flex">
                  <i class='bx bx-envelope'></i>
                  <span>Kirim Pesan</span>
                </a>
              </li>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/print') ?>" class="link flex">
                  <i class='bx bx-printer'></i>
                  <span>Print</span>
                </a>
              </li>
            </ul>
            <ul class="menu_item">
              <div class="menu_title flex">
                <span class="title">Data Master</span>
                <span class="line"></span>
              </div>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/data_asesi') ?>" class="link flex">
                  <i class='bx bx-user'></i>
                  <span>Data Asesi</span>
                </a>
              </li>

              <li class="item">
                <a href="<?php echo base_url('panel_asesor/data_pesan') ?>" class="link flex">
                  <i class='bx bx-chat'></i>
                  <span>Data Pesan</span>
                </a>
              </li>
            </ul>
            <ul class="menu_item logout">
              <div class="menu_title flex">
                <span class="title">Lainnya</span>
                <span class="line"></span>
              </div>
              <li class="item sidebar-dropdown-wrap">
                <a href="#" class="link flex dropdown" aria-expanded="false">
                  <i class='bx bx-cog'></i>
                  <span style="width: 100%;">Pengaturan</span>
                  <i class="bx bx-chevron-right"></i>
                </a>
              </li>
              <li class="item sidebar-dropdown">
                <a href="<?php echo base_url('panel_asesor/profile') ?>" class="link ">
                  <span>Profil</span>
                </a>
                <a href="<?php echo base_url('panel_asesor/ubah_pass') ?>" class="link">
                  <span>Ubah Password</span>
                </a>
              </li>
              <li class="item">
                <a href="<?php echo base_url('panel_asesor/logout') ?>" class="link flex logout-link">
                  <i class="bx bx-log-out"></i>
                  <span>Keluar</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Navbar -->
      <nav class="navbar flex">
        <div class="nav-wrapper">
          <div class="search_box search_absolute ">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search..." />
          </div>
          <span class="nav_image nav-absolute" onclick="toggleProfile()">
            <img src="<?= 'assets/assets_lsp/images/' . $foto ?>" alt="logo_img" />
            <div class="nav-text">
              <p class="name-bold">
                <?php echo ucwords($nama); ?>
              </p>
              <p class="gray">
                <?php echo $email; ?>
              </p>
            </div>
            <i class='bx bx-chevron-down'></i>
          </span>
          <div class="dropdown-profile-wrap">
            <div class="dropdown-profile">
              <div class="user-info">
                <img src="<?= 'assets/assets_lsp/images/' . $foto ?>" alt="logo_img" />
                <div class="nav-text">
                  <p class="name-bold">
                    <?php echo ucwords($nama); ?>
                  </p>
                  <p class="gray">
                    <?php echo $email; ?>
                  </p>
                </div>
              </div>
              <hr>
              <a href="<?php echo base_url('panel_asesor/profile') ?>" class="dropdown-item-link">
                <i class='bx bx-user bx-padding'></i>
                <p>Profil</p>
              </a>

              <a href="<?php echo base_url('panel_asesor/logout') ?>" class="dropdown-item-link dropdown-item-red">
                <i class='bx bx-log-out bx-padding'></i>
                <p>Keluar</p>
              </a>
            </div>
          </div>
        </div>
      </nav>



      </aside>
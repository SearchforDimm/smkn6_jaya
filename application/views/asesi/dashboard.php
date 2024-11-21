<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$email  = '';
$level  = 'Calon Asesi';
$menu     = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section-act">
    <main class="main">
      <div class="welcome-container">
        <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
        <p>Welcome to LSP SMKN 6 Website.</p>
    </main>
    <div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
    <div class="row dashboard-asesi-resp" style="margin-top: 300px; >
      <?php if ($cek->status_pendaftaran == "lulus") { ?>
        <div class=" pengumuman-info-wrapper">
      <div class="pengumuman-info" id="mycard-dismiss">
        <div class="pengumuman-info-header">
          <h4>INFO PENGUMUMAN</h4>
          <div class="card-header-action">
            <a href="#" data-dismiss="#mycard-dismiss" class="card-header-button"><i class="bx bx-x"></i></a>
          </div>
        </div>
        <div class="pengumuman-body pengumuman-green">
          <div class="alert-pengumuman" role="alert">
            <p>Anda telah diterima sebagai Asesi LSP SMKN 6 JAKARTA. Selalu cek notifikasi pesan dan email agar mengetahui informasi lebih lanjut mengenai proses asesmen.</p>
          </div>
        </div>
      </div>
    </div>
  <?php } elseif ($cek->status_pendaftaran == "tidak lulus") { ?>
    <div class="pengumuman-info-wrapper">
      <div class="pengumuman-info" id="mycard-dismiss">
        <div class="pengumuman-info-header">
          <h4>INFO PENGUMUMAN</h4>
          <div class="card-header-action">
            <a href="#" data-dismiss="#mycard-dismiss" class="card-header-button"><i class="bx bx-x"></i></a>
          </div>
        </div>
        <div class="pengumuman-body pengumuman-red">
          <div class="alert-pengumuman" role="alert">
            <p>Mohon Maaf, <?php echo $nama; ?>! Anda tidak diterima sebagai Asesi LSP SMKN 6 JAKARTA . Selalu cek notifikasi agar mengetahui informasi lebih lanjut mengenai proses asesmen. <a href="<?php echo base_url('panel_siswa/upload_pendukung') ?>">Klik di sini untuk mengupload file pendukung.</a></p>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="pengumuman-info-wrapper">
      <div class="pengumuman-info" id="mycard-dismiss">
        <div class="pengumuman-info-header">
          <h4>INFO PENGUMUMAN</h4>
          <div class="card-header-action">
            <a href="#" data-dismiss="#mycard-dismiss" class="card-header-button"><i class="bx bx-x"></i></a>
          </div>
        </div>
        <div class="pengumuman-body pengumuman-blue">
          <div class="alert-pengumuman" role="alert">
            <p>Belum ada pengumuman dari Panitia Pendaftaran Sertifikasi Online LSP SMKN 6 JAKARTA</p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>




  <?php if ($cekform == NULL) { ?>
    <div class="progress-form-2-apl-wrap">
      <div class="progress-form-2-apl">
        <div class="progress-form-2-header">
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
        </div>
        <div class="progress-form-2-body">
          <p>Kamu belum menyelesaikan pendaftaran form-apl-02 silahkan untuk mengisi form-apl-02 terlebih dahulu.</p>
          <a href="formapl2" class="tombol-aksi tombol-print">Isi Form Apl 02</a>
        </div>
      </div>
    </div>
  <?php } ?>


  <div class="print-wrapper" style="margin-top: 30px">
    <div class="print">
      <div class="print-content">
        <div class="print-footer">
          <h1>Tinjau Form FR APL 01</h1>
        </div>
        <a href="panel_siswa/tinjau_formapl1">
          <div class="print-header">
            <i class="bx bx-printer"></i>
          </div>
        </a>
      </div>
      <div class="print-content">
        <div class="print-footer">
          <h1>Tinjau Form FR APL 02</h1>
        </div>
        <a href="panel_siswa/tinjau_formapl2">
          <div class="print-header">
            <i class="bx bx-printer"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="download-information-wrapper">
    <div class="download-information">
      <a href="panel_siswa/download_informasi" class="tombol-aksi tombol-print">Download Informasi Akun</a>
    </div>
  </div>


  <?php  ?>
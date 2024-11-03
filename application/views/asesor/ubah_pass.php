<?php
$cek    = $user;
$id_asesor = $cek->id_user;

$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
$email = '';
$level = 'asesor';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');
?>

<head>
  <style>
    /* General form layout */
    .form-group {
      margin-bottom: 20px;
    }

    form {
      width: 100%;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
      font-size: 14px;
      text-align: left;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
      transition: border-color 0.2s;
    }

    /* Input and select focus effect */
    .form-group input:focus,
    .form-group select:focus {
      border-color: #3a57e8;
      outline: none;
    }

    /* Error message styling */
    .text-small.text-danger {
      font-size: 12px;
      color: #e74c3c;
      margin-top: 5px;
      display: block;
    }

    button[type="reset"] {
      margin-left: 10px;
    }

    .verif-resp {
      display: flex;
      justify-content: center;
    }

    .tombol-aksi {
      border: none;
      transition: .3s all ease;
      cursor: pointer;
    }

    .verif_red:hover {
      background-color: #dd0909;
    }

    .tombol-print:hover {
      background-color: #007bff;
    }

    /* Card styles */
    .card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-top: 300px;
      margin-bottom: 30px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 20px;
    }

    /* Form submit and reset buttons */
    button[type="submit"],
    button[type="reset"] {
      width: 150px;
      padding: 10px;
      font-size: 14px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .form-group {
        margin-bottom: 15px;
      }

      .form-group input,
      .form-group select {
        font-size: 13px;
      }

      .btn {
        width: 100%;
        margin-bottom: 10px;
      }

      button[type="reset"] {
        margin-left: 0;
      }
    }
  </style>
</head>
<div class="main-content">
  <section class="section-act">
    <main class="main">
      <div class="welcome-container">
        <h1>Hello, <?= ucwords($nama); ?>!</h1>
        <p>Ini Adalah Laman Admin Settings</p>
        <div class="welcome-tab">
          <span>
            <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Admin Settings</h3>
          </span>

          <div class="button">
            <a href="<?php echo base_url('panel_admin/'); ?>"> Back </a>
          </div>
        </div>
      </div>
    </main>

    <div class="card">
      <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label class="control-label col-lg-3">Sitename</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Deskripsi Meta</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Favicon</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Logo</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Keyword Meta</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Copyrights</label>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Nama Sekolah</label>
            <div class="col-lg-9">
              <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" placeholder="Nama Sekolah" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Alamat</label>
            <div class="col-lg-9">
              <input type="text" name="alamat" class="form-control" value="<?php echo $user->alamat; ?>" placeholder="Alamat" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Nomor Telp</label>
            <div class="col-lg-9">
              <input type="text" name="telp" class="form-control" value="<?php echo $user->telp; ?>" placeholder="Nomor Telp" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Email</label>
            <div class="col-lg-9">
              <input type="text" name="email" class="form-control" value="<?php echo $user->email; ?>" placeholder="Email" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Website</label>
            <div class="col-lg-9">
              <input type="text" name="website" class="form-control" value="<?php echo $user->website; ?>" placeholder="Website" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Kabupaten</label>
            <div class="col-lg-9">
              <input type="text" name="kab_sekolah" class="form-control" value="<?php echo $user->kab_sekolah; ?>" placeholder="Kabupaten" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">Ketua Panitia</label>
            <div class="col-lg-9">
              <input type="text" name="ketua_panitia" class="form-control" value="<?php echo $user->ketua_panitia; ?>" placeholder="Ketua Panitia" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3">NIP Ketua Panitia</label>
            <div class="col-lg-9">
              <input type="text" name="nip_ketua" class="form-control" value="<?php echo $user->nip_ketua; ?>" placeholder="NIP Ketua Panitia" maxlength="100" required>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="tombol-aksi tombol-print">Simpan</button>
          </div>
        </form>
      </div>
    </div>
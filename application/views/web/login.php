<?php
$user = $this->db->get('tbl_user')->row_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $user['nama_lengkap']; ?>: Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" href="img/logo.png">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/assets_stisla/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/assets_stisla/css/style.css">
  <link rel="stylesheet" href="assets/assets_stisla/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-5 col-md-6 col-12 min-vh-100 bg-white">
          <div class="p-4 m-3">
            <img src="img/logo.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Selamat Datang di <span class="font-weight-bold"><?php echo $user['nama_lengkap']; ?></span></h4>
            <p class="text-muted">Sebelum kamu memulai, kamu harus login atau mendaftar jika belum memiliki akun.</p>
            <form method="POST" action="" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Nomor Pendaftaran</label>
                <input type="text" class="form-control" name="username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Mohon Isi Nomor Pendaftaran anda
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">NISN</label>
                </div>
                <input type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Mohon isi NISN anda
                </div>
              </div>

              <div class="form-group text-right">
                <button type="submit" name="btnlogin" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Belum memiliki akun? <a href="pendaftaran">Buat akun baru</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; <?php echo date('Y'); ?> <?php echo $user['nama_lengkap']; ?>. Created with passion by PPLG.
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-12 order-lg-3 order-1 background-walk-y position-relative overlay-gradient-bottom" data-background="assets/assets_stisla/img/unsplash/sekolah.png" style="height: 100vh;">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5">
              <div class="mb-5 pb-3">
                <h3 class="mb-2 display-6 font-weight-bold"><?php echo $user['nama_lengkap']; ?></h3>
                <h5 class="font-weight-normal text-muted-transparent">Jakarta Selatan, Indonesia</h5>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/assets_stisla/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="assets/assets_stisla/js/scripts.js"></script>
  <script src="assets/assets_stisla/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>

<?php
$cek    = $user;
$nama   = $cek->nama_lengkap;
?>

<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?php echo date('Y'); ?> <?= $nama ?>. Created with passion by PPLG.
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  <?php
  foreach ($pesan as $pes) {
    if($pes->pesan != NULL) {
  ?>
<script>
  document.getElementById('notif').className = 'nav-link nav-link-lg message-toggle beep';
// += to keep existing classes
</script>
  <?php
    }
  }
  ?>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/assets_stisla/js/page/components-chat-box.js"></script>
  <script src="assets/assets_stisla/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/assets_stisla/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="assets/assets_stisla/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="assets/assets_stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/assets_stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/assets_stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="assets/assets_stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/assets_stisla/js/scripts.js"></script>
  <script src="assets/assets_stisla/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/assets_stisla/js/page/index-0.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('li a[href="'+ url +'"]').parent().addClass('active');
        $('li a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
    
        const flashData = $('.flash-data').data('flashdata');
        const flashDataLogin = $('.flash-data-login').data('flashdata');

        if (flashData) {
        Swal.fire({
            title: 'Kamu Berhasil Mendaftar',
            text: flashData,
            icon: 'success'
          })
        }

        if (flashDataLogin) {
        Swal.fire({
            position: 'top-end',
            title: 'Kamu Berhasil Login',
            text: flashDataLogin,
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })
        }
      </script>
<script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
</script>
</body>
</html>
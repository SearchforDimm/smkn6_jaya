      <?php
      defined('BASEPATH') or exit('No direct script access allowed');
      $id = $this->db->get('tbl_user')->row_array();
      ?>
      </div>
      </div>
      <!-- /main content -->
      </div>
      <!-- /page content -->
      </div>
      <!-- /page container -->
      <!-- Footer -->
      <div class="navbar navbar-default navbar-fixed-bottom footer" style="background-color:#275555ff;">
        <ul class="nav navbar-nav visible-xs-block">
          <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="footer">
          <div class="navbar-text" style="color: ivory;">
            Copyright &copy; <?php echo date('Y'); ?> <a href="" class="navbar-link"><?php echo $id['nama_lengkap']; ?></a>
          </div>
        </div>
      </div>
      <!-- /footer -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
        const flashData = $('.flash-data').data('flashdata');
        const flashDataLogin = $('.flash-data-login').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Data Asesi',
        text: 'Berhasil ' + flashData,
        icon: 'success'
      })
}
if (flashDataLogin) {
    Swal.fire({
        title: flashDataLogin,
        text: 'Jangan berikan Username dan Password kepada siapapun. ',
        icon: 'success'
      })
}
$('.tombol-hapus').on('click', function(e) {
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Data akan dihapus!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus data!',
  cancelButtonText: 'Batal!'
}).then((result) => {
  if (result.isConfirmed) {
    document.location.href = href;
  }
})
});
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
          return true;
        }
      </script>
      </body>

      </html>
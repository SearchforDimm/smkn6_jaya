<?php
$cek    = $user;
$nama   = $cek->nama_lengkap;
?>

<!-- </div>
</div>
</body>

<footer class="main-footer" >
  <div class="footer-left">
    Copyright &copy; <?php echo date('Y'); ?> <?= $nama ?>. Created with passion by Dimas & Muzhaffar.
  </div>
</footer> -->

<?php

foreach ($countpemrogramandasar as $berhitung) {
  $hitungpemrogramandasar = $berhitung;
}
foreach ($countpemrogramanweb as $berhitung) {
  $hitungpemrogramanweb = $berhitung;
}
foreach ($countpemrogramanobjek as $berhitung) {
  $hitungpemrogramanobjek = $berhitung;
}
foreach ($countinstalasi as $berhitung) {
  $hitunginstalasi = $berhitung;
}
foreach ($countkonfigurasiperangkat as $berhitung) {
  $hitungkonfigurasiperangkat = $berhitung;
}
foreach ($countkonfigurasirouting as $berhitung) {
  $hitungkonfigurasirouting = $berhitung;
}
foreach ($countdesaingrafis as $berhitung) {
  $hitungdesaingrafis = $berhitung;
}
foreach ($countpercetakan as $berhitung) {
  $hitungpercetakan = $berhitung;
}
foreach ($countanimasi as $berhitung) {
  $hitunganimasi = $berhitung;
}
foreach ($countpengolahan as $berhitung) {
  $hitungpengolahan = $berhitung;
}
foreach ($countpengoperasian as $berhitung) {
  $hitungpengoperasian = $berhitung;
}
foreach ($countpelayanan as $berhitung) {
  $hitungpelayanan = $berhitung;
}
foreach ($countrpl as $berhitung) {
  $hitungrpl = $berhitung;
}
foreach ($counttkj as $berhitung) {
  $hitungtkj = $berhitung;
}
foreach ($countmm as $berhitung) {
  $hitungmm = $berhitung;
}
foreach ($countpkm as $berhitung) {
  $hitungpkm = $berhitung;
}
?>
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
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
<script src="assets/assets_stisla/js/page/bootstrap-modal.js"></script>

<!-- Page Specific JS File -->
<script src="assets/assets_stisla/js/page/index-0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  $(document).ready(function() {
    var url = window.location;
    $('li a[href="' + url + '"]').parent().addClass('active');
    $('li a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');
  });

  var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Pemrograman Dasar', 'Pemrograman Web', 'Pemrograman Berorientasi Objek', 'Instalasi Jaringan Komputer Berbasis Kabel', 'Konfigurasi Perangkat Jaringan Komputer', 'Konfigurasi Perangkat Jaringan Komputer', 'Desain Grafis', 'Desain Grafis Percetakan', 'Animasi 2D', 'Pengolahan Audio Video', 'Pengoperasian Aplikasi Komputer Akuntansi', 'Pelayanan Perbankan'],
      datasets: [{
        label: 'Total Data',
        data: [<?php echo $hitungpemrogramandasar ?>, <?php echo $hitungpemrogramanweb ?>, <?php echo $hitungpemrogramanobjek ?>, <?php echo $hitunginstalasi ?>, <?php echo $hitungkonfigurasiperangkat ?>, <?php echo $hitungkonfigurasirouting ?>, <?php echo $hitungdesaingrafis ?>, <?php echo $hitungpercetakan ?>, <?php echo $hitunganimasi ?>, <?php echo $hitungpengolahan ?>, <?php echo $hitungpengoperasian ?>, <?php echo $hitungpelayanan ?>, ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  var ctk = document.getElementById('myChart').getContext('2d');
  var myChart2 = new Chart(ctk, {
    type: 'doughnut',
    data: {
      labels: ['RPL', 'TKJ', 'MM', 'PKM'],
      datasets: [{
        label: 'Total Data',
        data: [<?php echo $hitungrpl ?>, <?php echo $hitungtkj ?>, <?php echo $hitungmm ?>, <?php echo $hitungpkm ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<script type="text/javascript">
  const flashData = $('.flash-data').data('flashdata');
  const flashDataStatus = $('.flash-data-tutup-buka').data('flashdata');
  const flashDataLogin = $('.flash-data-login').data('flashdata');

  if (flashData) {
    Swal.fire({
      title: 'Kamu Berhasil Mendaftar',
      text: flashData,
      icon: 'success'
    })
  }

  if (flashDataStatus) {
    Swal.fire({
      title: 'Berhasil',
      text: flashDataStatus,
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
  const flashData = $('.flash-data').data('flashdata');
  const flashDataDaftar = $('.flash-data-daftar').data('flashdata');
  const flashDataProfil = $('.flash-data-profil').data('flashdata');

  if (flashDataProfil) {
    Swal.fire({
      title: 'Data Admin',
      text: 'Berhasil ' + flashData,
      icon: 'success'
    })
  }

  if (flashDataDaftar) {
    Swal.fire({
      title: flashDataDaftar,
      icon: 'success'
    })
  }

  if (flashData) {
    Swal.fire({
      title: 'Berhasil',
      text: flashData,
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

  $('.tombol-verifikasi').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan Terverifikasi!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Verifikasi!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });


  $('.tombol-batal-verifikasi').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan batal Terverifikasi!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Batal Verifikasi!',
      cancelButtonText: 'Cancel!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-tidak-lulus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Asesi akan Tidak Lulus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Yakin!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-lulus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Asesi Akan Lulus!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Yakin!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-batal').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Status Asesi Sekarang Akan Dibatalkan!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Batalkan!',
      cancelButtonText: 'Cancel!'
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

  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<script src="assets/assets_lsp/js/scripts.js"></script>
</body>

</html>
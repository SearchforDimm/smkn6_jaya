<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>
<?php
$soa = $this->db->get('tbl_siswa');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $user['nama_lengkap']; ?></title>
    <base href="<?= base_url(); ?>" />
	<!--<script src="<?= base_url('js/modernizr.js') ?>"></script>-->
    <!-- CSS files -->
	<link rel="icon" href="<?= base_url('assets/dist/img/logo.png')?>">
    <link href="<?= base_url('assets/dist/css/style.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/bootstrap.css')?>" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<style>
        
.headshape {
	background-image: url("<?= base_url('assets/dist/img/Bg Shape.png')?>");
	background-repeat: no-repeat;
	background-position-x: 79px;
	margin-top: -20px;
}

.shape {
  background-image: url("<?= base_url('assets/dist/img/Group 1423.png')?>");
  background-repeat: no-repeat;
}

.text-section {
	background-image: url("<?= base_url('assets/dist/img/Group 182.png')?>");
}
    </style>
</head>

<body class="antialiased">
    <div class="page">
    <div class="content">
	  	<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="<?= base_url()?>" class="navbar-brand text-uppercase font-weight-bold"><img src="<?= base_url('assets/dist/img/logo.png')?>" alt="" style="width: 48px;" /> LSP SMKN 6 JAKARTA</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#top" class="nav-link text-uppercase font-weight-bold">Beranda</a></li>
                    <li class="nav-item active"><a href="#tahapan" class="nav-link text-uppercase font-weight-bold">Tahapan</a></li>
                    <li class="nav-item"><a href="#faq" class="nav-link text-uppercase font-weight-bold">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="" id="top"></div>    
<div class="container-fluid headsection">
      <div class="row">
        <div class="col-md-6 text-head">
          <h2 style="margin-top: 150px; @media only screen and (max-width: 720px) {margin-top: 0}">Pendaftaran<span> Sertifikasi Online</span></h2>
          <h2>LSP <span> SMKN 6 JAKARTA</span></h2>
          <p></p>
          <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
                            <span>
                            <a style="font-size: 18px" href="<?= base_url('pendaftaran')?>" class="btn btn-primary btn-lg btn-daftar mb-2">DAFTAR ONLINE</a>
                            <a style="font-size: 18px" href="<?= base_url('logcs')?>" class="btn btn-primary btn-lg btn-daftar mb-2"><?php if($ceks == '') {echo "MASUK";}else{echo "PANEL";}?></a>
                                <br>
                            </span>
                        <?php } else { ?>
                            <span class="skills">
                            </span>
                           <br>

                            <span>
                                <a href="javascript:void(0);" class="btn btn-danger btn-lg" style="font-family:'Poppins'; border-radius:20px;"><i class="fa fa-times"></i> &nbsp;<b>Pendaftaran Sertifikasi Online DITUTUP</b></a>
                                <br>
                            </span>
                        <?php } ?>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center headshape">
            <div data-aos="fade-up">
            <img src="<?= base_url('assets/dist/img/logo-smkn6jakarta-1101x1500.png') ?>" width="300px" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
    <div class="" id="tahapan"></div>
    <div class="container-fluid container-card mt-5" data-aos="zoom-in">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12">
          <div class="card">
            <div class="box">
              <div class="content">
                <h2>01</h2>
                <h4>Mengisi Form FR-APL-01</h4>
                <p>Mendaftar dan mengisi form FR-APL-01 secara online melalui tombol daftar yang tertera diatas.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12">
          <div class="card">
            <div class="box">
              <div class="content">
                <h2>02</h2>
                <h4>Mengisi Form FR-APL-02</h4>
                <p>Mengisi form FR-APL-02 setelah mengisi form FR-APL-01(mendaftar).
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12">
          <div class="card">
            <div class="box">
              <div class="content">
                <h2>03</h2>
                <h4>Menunggu Konfirmasi</h4>
                <p>Menunggu proses konfirmasi dari admin LSP SMKN 6 JAKARTA untuk dinyatakan lolos/tidak.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12">
          <div class="card">
            <div class="box">
              <div class="content">
                <h2>04</h2>
                <h4>Datang ke tempat LSP</h4>
                <p>Datang ke tempat LSP SMKN 6 JAKARTA untuk ke tahap asesmen.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="" id="faq"></div>
    <div class="container-fluid faqshape" style="margin-top:100px;">
      <div class="row" style="margin-bottom: 50px;">
      <div class="col-md-1 col-sm-12 col-lg-1"></div>
      <div class="col-md-4 col-sm-12 col-lg-4" data-aos="fade-right" class="img-fluid" alt="Responsive image">
        <img src="<?= base_url('assets/dist/img/Group 1423.png')?>" alt="Responsive image" class="img-fluid">
      </div>
      <div class="col-md-1 col-lg-1 col-sm-12">
      </div>
        <div class="col-sm-12 col-md-5 col-lg-5 mt-3 center faq" data-aos="fade-left">
					<div id="accordion">
						<div class="accordion-card">
							<div class="accordion-card__header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<h5 class="mb-0">
									Bagaimana cara mendaftar sertifikasi online?
								</h5>
								<i class="fa fa-caret-down drop-icon"></i>
							</div>					  
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="accordion-card__body">
								Cara untuk mendaftar sertifikasi online di LSP SMKN 6 JAKARTA cukup tekan tombol daftar yang ada diatas lalu nanti anda akan diarahkan untuk mengisi form pendaftaran, setelah itu anda akan tertuju ke halaman form asesmen mandiri untuk menilai diri anda sendiri mampukah untuk menyelesaikan sebuah kompetensi tersebut. Setelah terdaftar nantinya anda akan diarahkan ke halaman dashboard asesi yang nantinya akan dikirimkan pengumuman lolos/tidak serta pesan untuk proses asesmen berikutnya.
								</div>
							</div>
						</div>
						<div class="accordion-card">
							<div class="accordion-card__header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<h5 class="mb-0">
									Bagaimana apabila lupa password?
								</h5>
								<i class="fa fa-caret-down drop-icon"></i>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="accordion-card__body">
								  Saat ini belum ada fitur untuk mengubah password. Tetapi untuk mencegah terjadinya lupa password, saat berada di halaman dashboard asesi catat nomor pendaftaran dan NISN untuk nanti melakukan login.
								</div>
							</div>
						</div>
					</div>
				</div>
        <div class="col-md-1 col-sm-12 col-lg-1"></div>
    </div>
</div>

    
<button id="btnScrollToTop">
				<i class="material-icons">arrow_upward</i>
			</button>
<!-- Libs JS -->
<script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/libs/jquery/dist/jquery.slim.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/dist/js/chocolat.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>

<!-- Tabler Core -->
<script>
    document.body.style.display = "block"
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    gsap.registerPlugin(TextPlugin);
    gsap.from(".text-head h2 span", {duration: 2, text: ""})
    gsap.to(".text-head p", {duration: 3, text: "SMKN 6 JAKARTA membuka pendaftaran peserta sertifikasi online tahun ajaran 2024-2025."})

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

const btnScrollToTop = document.querySelector('#btnScrollToTop');

btnScrollToTop.addEventListener("click", function (){
  window.scrollTo(0,0);
});
  </script>
</body>

</html>
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
  <link rel="icon" href="<?= base_url('assets/dist/img/logo.png') ?>">
  <link href="<?= base_url('assets/dist/css/style.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/bootstrap.css') ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="<?= base_url('assets/assets_lsp/css/child/homepage.css') ?>" rel="stylesheet" />

  <style>
    .headshape {
      background-image: url("<?= base_url('assets/dist/img/Bg Shape.png') ?>");
      background-repeat: no-repeat;
      background-position-x: 79px;
      position: absolute;
      top: -60px;
      right: 0;
      z-index: -9999;
    }

    .shape {
      background-image: url("<?= base_url('assets/dist/img/Group 1423.png') ?>");
      background-repeat: no-repeat;
    }

    .text-section {
      background-image: url("<?= base_url('assets/dist/img/Group 182.png') ?>");
    }
  </style>
</head>

<body>



  <nav class="navbar fixed-top navbar-expandr">
    <div class="nav-wrapper container-fw ">
      <div class="logo-nav">
        <img src="<?= base_url('assets/dist/img/logo.png') ?>" alt="logo-img" />
        <p class="logo-text">LSP SMKN 6 JAKARTA</p>
      </div>
      <div class="menu-nav">
        <a href="#top" class="nav-link">Beranda</a>
        <a href="#tahapan" class="nav-link">Tahapan</a>
        <a href="#faq" class="nav-link">FAQ</a>
        <a href="<?= base_url('about') ?>" class="nav-link">About Us</a>
      </div>
      <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <div class="hero-wrapper" style="margin-bottom: 200px">
    <div class="hero-content">
      <div class="hero-left">
        <div class=" text-head">
          <h2 style="margin-top: 150px; @media only screen and (max-width: 720px) {margin-top: 0}">Pendaftaran Sertifikasi Online </h2>
          <h2> <span> LSP SMKN 6 JAKARTA</span></h2>
          <p>SMKN 6 JAKARTA membuka pendaftaran peserta sertifikasi online tahun ajaran 2024-2025.</p>
          <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
            <span class="daftar-button">
              <a style="font-size: 18px" href="<?= base_url('pendaftaran') ?>" class="tombol-aksi tombol-print">DAFTAR ONLINE</a>
              <a style="font-size: 18px" href="<?= base_url('logcs') ?>" class="tombol-aksi tombol-print">
                <?php if ($ceks == '') {
                  echo "MASUK";
                } else {
                  echo "PANEL";
                } ?></a>
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
      </div>
      <div class="hero-right headshape">
        <div data-aos="fade-up">
          <img src="<?= base_url('assets/dist/img/logo-smkn6jakarta-1101x1500.png') ?>" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
  <div class="" id="tahapan"></div>
  <div class="container-fluid container-card tahapan-wrapper" data-aos="zoom-in">
    <div class="tahapan-row container-fw">
      <div class="card card-tahapan">
        <div class="box">
          <div class="content">
            <h2>01</h2>
            <h4>Mengisi Form FR-APL-01</h4>
            <p>Mendaftar dan mengisi form FR-APL-01 secara online melalui tombol daftar yang tertera diatas.
            </p>
          </div>
        </div>
      </div>
      <div class="card card-tahapan">
        <div class="box">
          <div class="content">
            <h2>02</h2>
            <h4>Mengisi Form FR-APL-02</h4>
            <p>Mengisi form FR-APL-02 setelah mengisi form FR-APL-01(mendaftar).
            </p>
          </div>
        </div>
      </div>
      <div class="card card-tahapan">
        <div class="box">
          <div class="content">
            <h2>03</h2>
            <h4>Menunggu Konfirmasi</h4>
            <p>Menunggu proses konfirmasi dari admin LSP SMKN 6 JAKARTA untuk dinyatakan lolos/tidak.
            </p>
          </div>
        </div>
      </div>
      <div class="card card-tahapan">
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


  <div class="faq-wrapper container-fw" id="faq">
    <div class="faq-hero">
      <h1>Frequently asked question</h1>
      <p>Tanya Jawab Seputar Sertifikasi di LSP SMKN 6
      </p>
    </div>
    <div class="faq-content">

      <div class="accordion-group">
        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span>Apa itu LSP SMKN 6?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              <span>LSP (Lembaga Sertifikasi Profesi) SMKN 6 adalah lembaga yang bertugas memberikan sertifikasi kompetensi kepada siswa, khususnya yang bersekolah di SMKN 6, agar memiliki sertifikasi resmi di bidang keahlian tertentu. Sertifikasi ini diakui secara nasional dan menjadi bukti kompetensi siswa di dunia kerja.</span>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span>Apa saja program sertifikasi yang ditawarkan di LSP SMKN 6?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              <span>LSP SMKN 6 menawarkan sertifikasi di berbagai bidang sesuai jurusan yang ada di sekolah, seperti Teknik Komputer dan Jaringan, Multimedia, Akuntansi, dan lain-lain. Setiap program bertujuan untuk memastikan siswa memiliki keterampilan sesuai standar industri.

              </span>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span> Bagaimana cara mendaftar sertifikasi di LSP SMKN 6?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              <span>Untuk mendaftar, siswa perlu mengunjungi halaman pendaftaran di website LSP SMKN 6, melengkapi formulir pendaftaran online, dan mengikuti prosedur yang tertera. Tim LSP akan menghubungi siswa untuk informasi lebih lanjut tentang tahapan sertifikasi.

              </span>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span>Apakah sertifikasi ini memiliki masa berlaku?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              <span>Ya, sebagian besar sertifikasi memiliki masa berlaku yang bervariasi tergantung pada jenis sertifikasi dan bidang keahlian. Rincian masa berlaku akan tercantum pada sertifikat atau bisa ditanyakan langsung kepada pihak LSP SMKN 6.</span>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span>Apa manfaat dari memiliki sertifikasi LSP bagi siswa?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              <span>Sertifikasi LSP memberikan bukti resmi bahwa siswa memiliki kompetensi di bidang tertentu, yang diakui oleh dunia industri dan pendidikan. Sertifikasi ini dapat meningkatkan peluang kerja dan memberikan nilai tambah dalam melanjutkan pendidikan.

              </span>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-trigger" data-accordion="trigger">
            <span>Bagaimana cara menghubungi LSP SMKN 6 untuk informasi lebih lanjut?</span>
            <span class="accordion-icon">
              <svg class="vertical-cross" viewBox="0 0 24 24">
                <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="2" />
                <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
          </button>
          <div class="accordion-content" data-accordion="content">
            <div class="contents">
              Untuk informasi lebih lanjut, Anda dapat mengunjungi halaman "Kontak Kami" di website, di mana tercantum nomor telepon, email, dan alamat kantor LSP SMKN 6. Pihak LSP juga tersedia untuk menjawab pertanyaan melalui media sosial resmi sekolah.

              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">
            LSP SMKN 6 Jakarta adalah lembaga sertifikasi profesi yang bertujuan untuk mempersiapkan siswa SMKN 6 dalam menghadapi dunia kerja melalui uji kompetensi bersertifikat. Sebagai bagian dari program sertifikasi resmi yang terlisensi oleh Badan Nasional Sertifikasi Profesi (BNSP), LSP SMKN 6 memberikan sertifikasi yang diakui secara nasional, sesuai dengan standar industri. Melalui LSP, siswa memperoleh bukti keterampilan dan kompetensi yang meningkatkan daya saing mereka di dunia kerja dan pendidikan</p>
        </div>

        <div class="col-xs-6 col-md-3 border-left-footer">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#top">Beranda</a></li>
            <li><a href="#tahapan">Tahapan</a></li>
            <li><a href="#faq">Faq</a></li>
            <li><a href="#faq">About Us</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class=" copyright-footer">
      <div class="main-footer">
        <p class="copyright-text"></p> Copyright &copy; <?php echo date('Y'); ?> SMKN 6 Jakarta. Created with passion by Dimas Rifqi & Ahmad Muzhaffar.
        </p>
      </div>
    </div>
  </footer>

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


  <script type="text/javascript">
    function toggleMenu() {
      const menu = document.querySelector('.menu-nav');
      const hamburger = document.querySelector('.hamburger');
      menu.classList.toggle('active');
      hamburger.classList.toggle('active');
    }
  </script>
  <script type="text/javascript">
    document.querySelectorAll('[data-accordion="trigger"]').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const content = trigger.nextElementSibling;
        const isOpen = content.getAttribute('data-open') !== null;

        document.querySelectorAll('[data-accordion="content"]').forEach(c => c.removeAttribute('data-open'));
        document.querySelectorAll('.vertical-cross').forEach(icon => icon.style.transform = "scaleY(1)");

        if (!isOpen) {
          content.setAttribute('data-open', '');
          trigger.querySelector('.vertical-cross').style.transform = "scaleY(0)";
        }
      });
    });
  </script>
  <!-- Tabler Core -->
  <script>
    document.body.style.display = "block"
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    gsap.registerPlugin(TextPlugin);
    gsap.from(".text-head h2 span", {
      duration: 2,
      text: ""
    })
    gsap.to(".text-head p", {
      duration: 3,
      text: "SMKN 6 JAKARTA membuka pendaftaran peserta sertifikasi online tahun ajaran 2024-2025."
    })

    $(function() {
      $(window).on('scroll', function() {
        if ($(window).scrollTop() > 10) {
          $('.navbar').addClass('active');
        } else {
          $('.navbar').removeClass('active');
        }
      });
    });

    const btnScrollToTop = document.querySelector('#btnScrollToTop');

    btnScrollToTop.addEventListener("click", function() {
      window.scrollTo(0, 0);
    });
  </script>
</body>

</html>
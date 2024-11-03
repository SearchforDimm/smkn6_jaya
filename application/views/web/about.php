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
                <a href="<?= base_url() ?>" class="nav-link">Beranda</a>
                <a href="<?= base_url('about') ?>" class="nav-link">About Us</a>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="hero-wrapper">
        <div class="hero-content" style="height: 600px">
            <div class="hero-left">
                <div class=" text-head">
                    <h2 style="margin-top: 250px; @media only screen and (max-width: 720px) {margin-top: 0}">About Us</h2>
                    <p>Tentang kami, SMKN 6 Jakarta</p>
                </div>
            </div>
            <div class="hero-right headshape">
                <div data-aos="fade-up">
                    <img src="<?= base_url('assets/dist/img/logo-smkn6jakarta-1101x1500.png') ?>" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>


    <div class="about-wrapper">
        <div class="about container-fw">
            <div class="left-about">
                <img src="<?= base_url('assets/images/smkn6-about.png') ?>" alt="">
            </div>

            <div class="right-about">
                <h4>About Us</h4>
                <p>LSP SMKN 6 Jakarta adalah lembaga sertifikasi profesi yang bertujuan untuk mempersiapkan siswa SMKN 6 dalam menghadapi dunia kerja melalui uji kompetensi bersertifikat. Sebagai bagian dari program sertifikasi resmi yang terlisensi oleh Badan Nasional Sertifikasi Profesi (BNSP), LSP SMKN 6 memberikan sertifikasi yang diakui secara nasional, sesuai dengan standar industri. Melalui LSP, siswa memperoleh bukti keterampilan dan kompetensi yang meningkatkan daya saing mereka di dunia kerja dan pendidikan</p>
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
            text: "Tentang kami, SMKN 6 Jakarta."
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
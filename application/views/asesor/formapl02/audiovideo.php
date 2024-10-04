<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
foreach($signature as $sig) {
    $ttd = $sig;
}
$tgl = date('Y-m-d');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo base_url(); ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/assets_stisla/css/components.css">
  <script type="text/javascript" src="assets/js/signature-pad.js"></script>
  
  <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<?php foreach ($kompetensi_audiovideo as $kmp) :?>   
    <div class="container">
<b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Multimedia 5.7.4. Pengolahan Audio Video</td>
</tr>
<tr>
    <td>Nomor</td>
    <td>:</td>
    <td>-</td>
</tr>
</table>
<br>
<table class="table table-bordered">
<tr>
    <td><b>PANDUAN ASESMEN MANDIRI</b></td>
</tr>
<tr>
    <td><b>Instruksi</b><br>
        <ul>
            <li>Baca setiap pertanyaan di kolom sebelah kiri.</li>
            <li>Beri tanda centang pada kotak jika Anda yakin dapat melakukan tugas yang dijelaskan.</li>
            <li>Isi kolom di sebelah kanan dengan mendaftar bukti yang Anda miliki untuk menunjukkan bahwa Anda melakukan tugas-tugas ini.</li>
        </ul>
    </td>
</tr>
</table>
<br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.004.01<br>Memperagakan pengetahuan dan syarat-syarat multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Menampilkan pengetahuan multimedia dan industri percetakan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Istilah dan perbendaharaan kata bidang multimedia digunakan secara benar dan akurat. <br>
                    1.2	Ruang lingkup produksi multimedia dideskripsikan. <br>
                    1.3	Permasalahan sehubungan dengan pembuatan produk percetakan dan produk yang berhubungan dengan multimedia dideskripsikan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el1?>"><?= $kmp->buktiunit1el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menampilkan pengetahuan tentang kebijakan & peraturan pemerintah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Prinsip dasar dan kewajiban sehubungan dengan bidang berikut: copyright, K3, perlindungan lingkungan, akses dan kejelasan, penghargaan industri dijabarkan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el2?>"><?= $kmp->buktiunit1el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menampilkan pengetahuan proses pra cetak</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                3.1	Prinsip dasar dibalik fungsi-fungsi pra cetak berikut: produksi image (typesetting, scanning, graphic arts camera), penggabungan image (manual dan elektronik), image output (film, plates, direct to press) dijabarkan.<br>
                3.2	Berbagai tipe image (line, half-tone, dll) dan kegunaannya dijabarkan. <br>
                3.3	Jenis output setting yang berbeda, misalnya pengukuran layar dan sudut (angles), bentuk, dll dan menjelaskan bagaimana hal-hal tersebut mempengaruhi hasil akhir produk cetak diidentifikasi.<br>
                3.4	Berbagai jenis output yang dibutuhkan untuk jenis media dan proses percetakan yang berbeda diidentifikasi.  <br>
                3.5	Berbagai jenis output devide, seperti film setters, plate setters, analogue proofs, digital proofs diidentifikasi.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el3?>"><?= $kmp->buktiunit1el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menampilkan pengetahuan teknik multimedia dan persyaratannya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Desain yang sesuai atau tidak sesuai untuk multimedia diidentifikasi.<br>
                    4.2	Kriteria untuk memilih visual, audio atau text delivery untuk menampilkan elemen informasi tertentu dijabarkan. <br>
                    4.3 Bagaimana fungsi teks dapat bervariasi pada penampilan Multimedia untuk keperluan yang berbeda dijelaskan. <br>
                    4.4	Kriteria untuk memilih resolusi grafik dan format dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                    4.5	Kriteria untuk memilih format audio untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                    4.6	Kriteria untuk memilih format video untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                    4.7	Kriteria untuk memilih format animasi untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                    4.8	Platform multimedia dan persyaratan sistem komputer untuk produk multimedia yang berbeda diidentifikasi. <br>
                    4.9	Software yang sesuai untuk membuat produk multimedia diidentifikasi. <br>
                    4.10 Fungsi-fungsi pada sebuah sistem navigasi efektif dijabarkan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el4?>"><?= $kmp->buktiunit1el4?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="5">
                <li>Elemen:Menampilkan pengetahuan teknik multimedia dan persyaratannya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Teori warna dari warna additive (terang); RGB dijelaskan.<br>
                    5.2	Teori warna dari warna subtractive (pigmen);CMYK dijelaskan. <br>
                    5.3	Hubungan antara range warna visual RGB dan CMYK dijelaskan. <br>
                    5.4	Hubungan antara bayangan dan bagian berwarna gelap untuk koreksi pada suara dan warna dijelaskan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el5?>"><?= $kmp->buktiunit1el5?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="6">
                <li>Elemen:Menampilkan pengetahuan teknik multimedia dan persyaratannya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    6.1	Elemen biaya utama pada produksi multimedia diidentifikasi.<br>
                    6.2	Cara untuk meminimalkan penggunaan material tanpa mempengaruhi kualitas hasil diidentifikasi.<br>
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit1el6 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit1el6?>"><?= $kmp->buktiunit1el6?></a>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.05.01<br>Mengidentifikasi komponen multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Mengidentifikasi komponen elektronika multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Teknologi Komputer termasuk CPU, ROM, RAM, storage devices, monitor, dan peralatan input sehubungan dengan multimedia diidentifikasi dan dijelaskan fungsi-fungsinya. <br>
                    1.2	Peralatan analog dan digital yang relevan dengan multimedia diidentifikasi dan dikenali. <br>
                    1.3	Properti dari data yang telah dikenal didefinisikan dengan benar menjadi spesifikasi. <br>
                    1.4	Permasalahan sehubungan dengan perubahan teknologi yang cepat termasuk media elektronik dan fotografi digital didiskusikan untuk mendapatkan hasil yang spesifik.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit2el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit2el1?>"><?= $kmp->buktiunit2el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Mengeksplorasi ruang lingkup multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Ruang lingkup multimedia dieksplorasi dan dijelaskan secara relevan dengan sektor industri. <br>
                    2.2	Peran pembuatan proyek multimedia diidentifikasi dan dijelaskan secara benar.<br>
                    2.3	Beragam komponen-komponen proyek multimedia termasuk teks, grafik, fotografi, tipografi, suara, animasi dan video diperinci secara benar ke dalam media komponen. <br>
                    2.4	Kegunaan multimeda dan hubungannya dengan pra cetak untuk mendapatkan hasil yang spesifik dijabarkan. <br>
                    2.5	Perbedaan antara media pasif dan interaktif dieksplorasi dan dijelaskan secara benar. <br>
                    2.6	Fungsi-fungsi software multimedia kontemporer sehubungan dengan teks, grafik, fotografi, tipografi, suara, animasi, dan video, diidentifikasi untuk memastikan aplikasi pada hasil telah relevan. <br>
                    2.7	Kegunaan multimedia sehubungan dengan berbagai hasil termasuk surat kabar, majalah, sheet fed tradisional, percetakan digital, halaman www internet, bill board digital dan CD ROM diidentifikasi dan kesesuaian multimedia untuk hasil tersebut didiskusikan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit2el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit2el2?>"><?= $kmp->buktiunit2el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menilai fungsi dan kegunaan sistem operasi multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Pengenalan fungsi sistem operasi kontemporer termasuk DOS, UNIX, OS/2, VMS, Macintosh, Sistem Windows dan Sistem Emerging diidentifikasi secara benar. <br>
                    3.2	Format disk Sistem Operasi diidentifikasi secara benar.<br>
                    3.3	Fungsi dan struktur sistem operasi diidentifikasi secara benar. <br>
                    3.4	Compression software yang sesuai dengan sistem operasi diidentifikasi
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit2el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit2el3?>"><?= $kmp->buktiunit2el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menilai fungsi dan kegunaan sistem operasi multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Atribut multimedia secara umum didefinisikan sesuai relasinya dengan sektor industri.<br>
                    4.2	Atribut multimedia secara spesialisasi didefinisikan sesuai relasinya dengan sektor industri.<br>
                    4.3	Kepentingan resolusi diteliti secara relevan dengan mode penampilan multimedia.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit2el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit2el4?>"><?= $kmp->buktiunit2el4?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.007.01<br>Memilih dan Memakai Software dan Hardware untuk Multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Mengidentifikasi komponen elektronika multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasi persyaratan fungsi yang akurat, komplit dan sesuai prioritas  sesuai keperluan dengan referensi semua tipe media. <br>
                    1.2	Mengidentifikasi persyaratan yang berlawanan dan overlapping. <br>
                    1.3	Mendokumentasikan Persyaratan fungsi dan memvalidasi.<br>
                    1.4	Mengidentifikasi dan memvalidasi Sumber-sumber dan pembiayaan yang tersedia .
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit3el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit3el1?>"><?= $kmp->buktiunit3el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Memilih peralatan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Mengidentifikasi dan mengevaluasi Produk-produk dan peralatan yang relevan dengan referensi persyaratan fungsi. <br>
                    2.2	Mengidentifikasi dan mengevaluasi Kemandirian produk dan peralatan dengan referensi pada persyaratan fungsi dan arsitektur sistem.<br>
                    2.3	Mengidentifikasi dan mendokumentasikan Produk terbaik dan solusi peralatan, termasuk keterbatasan-keterbatasan <br>
                    2.4	Memerlukan peralatan yang dipilih dan dipesan sebagaimana sehubungan dengan kebijaksanaan perusahaan penjualan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit3el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit3el2?>"><?= $kmp->buktiunit3el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mengkonfigurasi dan menguji peralatan yang telah dipasang</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Memasang dan menkonfigurasi Peralatan menurut petunjuk dari vendor dengan referensi pada sistem arsitektur dan persyaratan fungsi pelanggan. <br>
                    3.2	Menyesuaikan Sistem arsitektur dan konfigurasi sebagaimana keperluan.<br>
                    3.3	Menyiapkan dan menjadwalkan Tes untuk dilaksanakan sebagaimana keperluan.<br>
                    3.4	Melacak, menterjemahkan dan memperbaiki Error sebagaimana keperluan. <br>
                    3.5	Membuat Perubahan sebagaimana diperlukan berdasar pada hasil pengujian. <br>
                    3.6	mendokumentasikan Konfigurasi peralatan sesuai permintaan pelanggan. <br>
                    3.7	mengidentifikasi, mendokumentasi, dan melaporkan Implikasi pembuatan professional dengan referensi pada kebijaksanaan perusahaan.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit3el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit3el3?>"><?= $kmp->buktiunit3el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menggunakan peralatan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Melakukan pendidikan dan pelatihan pemakai peralatan sesuai keperluan dengan referensi pada kebijaksanaan perusahaan. <br>
                    4.2	menggunakan peralatan sesuai petunjuk dari vendor.<br>
                    4.3	Mengevaluasi peralatan berdasarkan referensi kebutuhan klien.<br>
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit3el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit3el4?>"><?= $kmp->buktiunit3el4?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.062.01<br>Menyiapkan Bahan dan Dokumen untuk Editing</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Menerima dan mendokumentasikan mater</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Materi uncut, baik image maupun suara, diterima, diidentifikasi dengan benar, dilabelisasi, dan dikodekan <br>
                    1.2	Format kompatibilitas semua materi uncut dipastikan dan disiapkan bila perlu <br>
                    1.3	Semua materi diarsip sesuai dengan prosedur organisasi<br>
                    1.4	Pengumpulan dan update semua dokumen yang dibutuhkan secara akurat untuk melacak persiapan <br>
                    1.5	Semua aktifitas dilakukan sesuai dengan prosedur kesehatan dan keselamatan kerja
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit4el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit4el1?>"><?= $kmp->buktiunit4el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menciptakan image dan lembar logging </li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Lembar logging untuk dokumen rekaman suara dibuat sesuai dengan prosedur organisasi<br>
                    2.2	 Lembar logging diselesaikan dan diperiksa akurasinya sebelum dibagikan kepada para personel
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit4el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit4el2?>"><?= $kmp->buktiunit4el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mensinkronkan gambar dan suara </li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Metode yang tepat untuk mensejajarkan gambar dan suara diidentifikasi<br>
                    3.2	Image uncut dan suara disejajarkan secara benar untuk keperluan evaluasi dan editing. <br>
                    3.3	Keperluan edit suara dipersiapkan
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit4el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit4el3?>"><?= $kmp->buktiunit4el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menyiapkan dan memberikan petunjuk editing </li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Dokumentasi petunjuk editing yang akurat untuk digunakan oleh para personil yang terlibat dalam semua tahapan pasca produksi dikumpulkan<br>
                    4.2	Produksi telah diselesaikan dan dikembalikan <br>
                    4.3	Berpartisipasi dalam evaluasi produk sepanjang semua tahapan mulai dari proses editing, kemudian di update dan dibagikan petunjuk lebih lanjut <br>
                    4.4	Kepastian terpenuhinya syarat teknis dan kreatif dilakukan dengan berpartisipasi dalam  evaluasi produk editing akhir <br>
                    4.5	Semua dokumentasi di-update secara akurat sepanjang proses editing dan perekaman serta dibuat arsipnya sesuai dengan kebutuhan tempat kerja.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit4el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit4el4?>"><?= $kmp->buktiunit4el4?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.064.01<br>Menjalankan Sistem Editing Non-Linear</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Mempersiapkan penggunaan peralatan editing</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Batas waktu untuk penyelesaian berbagai tahapan proses editing ditetapkan untuk memastikan terpenuhinya tenggat waktu. <br>
                    1.2	Software yang cocok untuk memenuhi kebutuhan editing dipilih dan diperiksa untuk dapat dioperasikan<br>
                    1.3	Semua peralatan hardware editing diperiksa untuk memastikan alat tersebut berfungsi dan cocok untuk hasil yang diinginkan<br>
                    1.4	Setiap kesalahan dalam penggunaan peralatan editing ditangani sesuai prosedur organisasi<br>
                    1.5	Sumber dan materi editing habis pakai dicari dan dipastikan materi tersebut tersedia dalam jumlah cukup untuk pemenuhan jadwal editing dan anggaran <br>
                    1.6	Input device pada recording device dipasang dan diperiksa untuk memastikan masih dapat berfungsi <br>
                    1.7	Source material diterima untuk diedit dan dipastikan formatnya sesuai dengan peralatan editing <br>
                    1.8	Source material ditangani dengan hati-hati  supaya tidak rusak <br>
                    1.9	 Setiap dokumentasi yang dibutuhkan diselesaikan untuk dokumentasi tanda terima materi
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit5el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit5el1?>"><?= $kmp->buktiunit5el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Mengedit gambar dan suara sesuai dengan syarat pada penjelasan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Gambar, suara dan gambar diam diedit dalam urutan yang dibutuhkan, sesuai syarat kreatif pada penjelasan <br>
                    2.2	Fungsi program digunakan untuk membuat dan memasukkan grafik, transisi dan efek khusus ke dalam kompilasi.<br>
                    2.3	Level sound output ditempatkan<br>
                    2.4	Pengulangan kualitas teknis materi yang sudah diedit dan dimonitor untuk identifikasi masalah potensial dilakukan dalam proses editing atau digitizing, dan dilakukan tindakan remedial seperlunya untuk memperbaiki kualitas teknis<br>
                    2.5	Teknik manajemen file yang efektif digunakan sepanjang proses editing <br>
                    2.6	Back up data dilakukan pada interval reguler dan  dimonitor space hard drive pada basis reguler,serta dilakukan tindakan untuk mempertahankan <br>
                    2.7	space hard drive cukup untuk durasi edit
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit5el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit5el2?>"><?= $kmp->buktiunit5el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Memperbaiki hasil edit</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Program software editing digunakan untuk melihat urutan produksi / program dan dilakukan perbaikan editing<br>
                    3.2	Semua titik insersi diperiksa dan diedit secara bersih, halus dan sesuai dengan kebutuhan  produksi<br>
                    3.3	Software dimanipulasi untuk menyelesaikan setiap masalah dengan gambar dan suara yang teridentifikasi<br>
                    3.4	File dan retrifikasi shot dan pengurutannya yang dibutuhkan sesuai dengan petunjuk operasional peralatan yang digunakan
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit5el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit5el3?>"><?= $kmp->buktiunit5el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Mengekspor hasil kompilisasi dan file dan arsipkan pekerjaan editing</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1 Pengulangan digitalisasi sejumlah kompilasi dilakukan dengan menggunakan format dan setting yang benar, seperti yang dibutuhkan<br>
                    4.2	Hasil editing pada media penyimpan yang benar diputar dan dibuat copynya<br>
                    4.3 Daftar keputusan edit (EDL) dibuat dan disimpan pada disk<br>
                    4.4 Dipastikan hasil edit dan transfer dari disk dengan system editing digital ke data recorder <br>
                    4.5	Disk penyimpan editing dibersihkan ketika proses editing diputuskan sudah selesai
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit5el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit5el4?>"><?= $kmp->buktiunit5el4?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="5">
                <li>Elemen:Menyelesaikan pekerjaan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Setiap peralatan yang rusak dan perlu perbaikan dilaporkan dan didokumentasikan pada personel yang bersangkutan<br>
                    5.2	Tempat kerja ditinggalkan dalam keadaan seperti sediakala atau keadaan yang lebih baik, dengan memastikan tidak ada dampak merugikan terhadap tempat kerja.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit5el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit5el5?>"><?= $kmp->buktiunit5el5?></a>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.072.01<br>Menggabungkan Audio ke Dalam Sajian Multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Mengidentifikasi dan penjabaran format audio digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Feature-feature audio analog dan digital dibedakan untuk suatu range penggunaan.<br>
                    1.2	Amplitudo, sound wave, frekuensi, mono dan stereo didefinisikan secara benar dan fungsi-fungsinya dijelaskan.<br>
                    1.3	Format audio digital kontemporer diidentifikasi dan dijelaskan sesuai dengan hasil yang didefinisikan.<br>
                    1.4	Rate data untuk sumber digital besar diperinci sesuai dengan hasil yang didefinisikan.<br>
                    1.5	Metode untuk menyimpan dan membuat output audio digital dijabarkan sesuai dengan range  sumber dan tujuan<br>
                    1.6	Teknik percontohan dan sumber untuk contoh audio digital ditampilkan untuk hasil yang didefinisikan <br>
                    1.7	Teknologi MIDI dieksplorasi dan kegunaannya dijelaskan
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit6el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit6el1?>"><?= $kmp->buktiunit6el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menggunakan software audio digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Software audio yang sesuai dinilai dandipilih untuk pekerjaan.<br>
                    2.2	Pemasukan dan pengeluaran software yang telah dipilih ditampilkan dan peralatan dan feature-feature program digunakan secara benar.<br>
                    2.3	Ditampilkan editing dan manipulasi audio, serta penggunaan peralatan dan feature-feature program secara benar.<br>
                    2.4	Suara disimpan dan dibuka menggunakan format file yang telah dipilih
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit6el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit6el2?>"><?= $kmp->buktiunit6el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menggunakan software audio digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Pengeditan frame audio single dan multiple ditampilkan sesuai dengan hasil yang didefinisikan.<br>
                    3.2	Audio digital track multiple digabungkan sesuai dengan spesifikasi.<br>
                    3.3	Encoding waktu diaplikasikan ke track audio  digital single dan multiple sesuai dengan spesifikasi.<br>
                    3.4	Desain storybook diaplikasikan ke produksi  rangkaian audio digital untuk menghasilkan hasil yang didefinisikan. <br>
                    3.5	Track audio yang dimasukkan ke dalam rangkaian produksi multimedia sesuai dengan spesifikasi.
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit6el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit6el3?>"><?= $kmp->buktiunit6el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Membangun track audio digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Teknik untuk menangkap audio digital  suara diidentifikasikan dan dijelaskan secara benar.<br>
                    4.2	Noise (gangguan) pada rekaman suara dihilangkan pada sumber dan atau (treated).<br>
                    4.3	Efek khusus dan teknik mixing digunakan pada track audio sesuai dengan spesifikasi.<br>
                    4.4	Composer digunakan untuk menciptakan track audio digital sesuai dengan spesifikasi.<br>
                    4.5	MIDI dan sound card digunakan untuk menciptakan audio digital sesuai dengan  spesifikasi. <br>
                    4.6	Suatu track audio diproduksi menggunakan software dan hardware konstruksi track yang sesuai. <br>
                    4.7	Track audio disimpan ke dalam format file yang sesuai
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit6el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit6el4?>"><?= $kmp->buktiunit6el4?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.074.01<br>Menggabungkan Video ke Dalam Sajian Multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Mengidentifikasi dan penjabaran format video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Range software video diidentifikasi dan feature-feature yang membedakan diteliti<br>
                    1.2	Software video kontemporer dipilih yang sesuai dengan range hasil yang diberikan<br>
                    1.3	Faktor-faktor yang terbatas pada hardware komputer pada produksi video diidentifikasi untuk pekerjaan spesifik<br>
                    1.4	Media digital untuk video dijelaskan sesuai dengan  sektor industri<br>
                    1.5	Perbedaan kualitas dan ukuran gambar ditampilkan untuk menghasilkan hasil yang diinginkan <br>
                    1.6	Pemasukan data, pemrosesan, dan output dijelaskan sesuai dengan video <br>
                    1.7	Format yang digunakan untuk menciptakan rangkaian video komputer yang diberikan, dianalisa dan didiskusikan untuk hasil yang spesifik
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit7el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el1?>"><?= $kmp->buktiunit7el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menggunakan software video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Software video digital yang sesuai dinilai dan dipilih untuk pekerjaan<br>
                    2.2	Pemasukan dan pengeluaran software video digital yang dipilih dan serta penggunaan peralatan dan feature-featurenya program secara benar, ditampilkan<br>
                    2.3	Software pengeditan video digital digunakan untuk menggabung asset video yang diberikan<br>
                    2.4	Video disimpan dan dibuka menggunakan format file yang telah dipilih
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit7el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el2?>"><?= $kmp->buktiunit7el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Merancang dan mengedit video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Software video digital dipilih sesuai dengan hasil yang diperlukan<br>
                    3.2	Asset video digabungkan menggunakan software pengeditan video digital<br>
                    3.3	Variasi pada rate frame video dikendalikan  sesuai dengan pekerjaan yang akan dilaksanakan<br>
                    3.4	Teknik penulisan waktu diaplikasikan pada frame video sesuai dengan pekerjaan yang akan dilaksanakan <br>
                    3.5	Video digital disimpan menggunakan teknik file  yang sesuai
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit7el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el3?>"><?= $kmp->buktiunit7el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menampilkan rangkaian video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Video digital diuji dan digabungkan dengan gambar digital lain, suara dan atau animasi untuk menciptakan rangkaian multimedia<br>
                    4.2	Rangkaian multimedia termasuk video disimpan  dan ditampilkan
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit7el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el4?>"><?= $kmp->buktiunit7el4?></a>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td>Nama Asesi: <br> <?= $kmp->nama_lengkap ?></td>
            <td>Tanggal : <br> <?= $kmp->tgl_siswa ?></td>
            <td>Tanda Tangan Asesi : <br> <img src="<?= $ttd->img ?>" alt="" width="200" height="150"></td>
        </tr>
        <form action="<?= base_url('panel_asesor/submit_tinjauan')?>" method="POST">
        <?php if($kmp->nama_asesor == NULL) {?>
        <tr>
            <td colspan="3">Ditinjau oleh Asesor: <input type="hidden" name="id_siswa" value="<?= $kmp->id_siswa ?>"><input type="hidden" name="tgl_asesor" class="form-control" value="<?= date($tgl);?>"><input type="text" name="nama_asesor" placeholder="Masukkan nama asesor" class="form-control mb-2"><button type="submit" class="btn btn-primary">Kirim</button></td>
        </tr>
        <?php } else { ?>
        <tr>
            <td colspan="3" style="background-color:#fabf8f;"><b>Ditinjau oleh Asesor:</b>&emsp;<?= $kmp->nama_asesor ?></td>
        </tr>
        <?php } ?>
        </form>
        <tr>
            <td><b>Nama Asesor:</b> <br> <?= $kmp->nama_asesor ?></td>
        <?php if($kmp->status_pendaftaran == NULL) {?>
            <td><b>Rekomendasi:</b> <br> Asesmen dapat dilanjutkan/tidak <br>dapat dilanjutkan</td>
        <?php } elseif($kmp->status_pendaftaran == 'lulus') {?>
            <td><b>Rekomendasi:</b> <br> Asesmen dapat dilanjutkan/<s>tidak <br>dapat dilanjutkan</s></td>
        <?php } elseif($kmp->status_pendaftaran == 'tidak lulus') {?>
            <td><b>Rekomendasi:</b> <br> <s>Asesmen dapat dilanjutkan</s>/<br>tidak dapat dilanjutkan</td>
        <?php } ?>
        <?php if ($kmp->ttd_asesor == NULL) {?>
            <td><b>Tanda Tangan dan Tanggal: </b>
                <br> 
                <div class="boxarea">
                    <h5>Tanda Tangan Asesor Disini!</h5>
                <input type="hidden" value="<?= $kmp->id_siswa?>" id="id_siswa">
                    <div class="signature-pad" id="signature-pad">
                        <div class="m-signature-pad">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="button" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        <?php } elseif($kmp->ttd_asesor != NULL) {?>
            <td><b>Tanda Tangan dan Tanggal: </b> <br> <img src="<?= $kmp->ttd_asesor?>" alt="" width="150" height="100"> <br> <?= $kmp->tgl_asesor?></td>
        <?php }?>
        </tr>
    </table>
    <br>
    <a href="panel_asesor/set_pengumuman" class="btn btn-primary">Kembali</a>
    <br><br><br>
    <?php endforeach; ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Peringatan!</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
          Isi Tanda Tangan sebelum mengirim!
        </div>
      </div>
    </div>
  </div>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

    var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;


    function resizeCanvas() {

      var ratio =  window.devicePixelRatio || 1;
      canvas.width = canvas.offsetWidth * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      canvas.getContext("2d").scale(ratio, ratio);
    }
    signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function (event) {
      signaturePad.clear();
    });
    saveButton.addEventListener("click", function (event) {
      
      if (signaturePad.isEmpty()) {
        $('#myModal').modal('show');
      }

      else {
       
        $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>signature/insert_ttd_asesor",
          data: {'image': signaturePad.toDataURL(),'id_siswa':$('#id_siswa').val()},
          success: function(datas1)
          {            
            signaturePad.clear();
            window.location.href = window.location.href;
          }
        });
      }
    }); 

  </script>
    <style type="text/css">

    .m-signature-pad-body
    {
    border: 1px dashed #ccc;
    border-radius: 5px;
    width:85%;
    color: #bbbabb;
    float: left;
    position: relative;
    }
    .m-signature-pad-footer
    {
    float: right;
    position: relative;
    margin-top: 10px;
    }
    </style>
</body>
</html>
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
          <br><br>
          <div class="container">
<?php foreach($kompetensi_pbo as $kmp) : ?>
<b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II Pada Kompetensi Keahlian Rekayasa Perangkat Lunak 5.7.3. Pemograman Berorentasi Objek</td>
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
            <td colspan="3">LOG.OO01.002.01<br>Menerapkan Prinsip-prinsip Keselamatan Dan Kesehatan Kerja Di Lingkungan Kerja</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen:Mengikuti praktek-praktek kerja yang aman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Melaksanakan kerja dengan aman sehubungan dengan kebijakan dan prosedur perusahaan serta persyaratan perundang-undangan?<br>
                    1.2	Melakukan kegiatan rumah tangga perusahaan sesuai dengan prosedur perusahaan?<br>
                    1.3	Mendemontrasikan tanggung jawab dan tugas-tugas karyawan dimengerti dalam kegiatan sehari-hari? <br>
                    1.4	Memakai perlengkapan pelindung diri dan disimpan sesuai dengan prosedur perusahaan? <br>
                    1.5	Menggunakan semua perlengkapan dan alat-alat keselamatan sesuai dengan persyaratan perundang-undangan dan prosedur perusahaan? <br>
                    1.6	Mengenali tanda-tanda/simbol dan diikuti sesuai instruksi? <br>
                    1.7	Melaksanakan Semua pedoman penanganan sesuai dengan persyaratan, prosedur perusahaan dan pedoman Komisi Kesehatan dan Keselamatan Kerja  Nasional yang sah? <br>
                    1.8	 Mengenali perlengkapan darurat dan didemonstrasikan dengan tepat?
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
                <li>Elemen: Melaporkan bahaya-bahaya ditempat kerja</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Melaporkan bahaya-bahaya di tempat kerja selama waktu kerja dikenali dan kepada orang yang tepat sesuai dengan prosedur pengoperasian standar.?
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
                <li>Elemen: Melaporkan bahaya-bahaya ditempat kerja</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mendemontrasikan cara-cara menghubungi personil yang tepat dan layanan darurat jika terjadi kecelakaan? <br>
                    3.2	Melaksanakan bila diperlukan prosedur kondisi darurat dan evakuasi (pengungsian) dan dimengerti? <br>
                    3.3	Mengikuti dalam keadaan darurat, prosedur evakuasi perusahaan?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">LOG.OO02.001.01<br>Menerapkan Prinsip-prinsip Keselamatan Dan Kesehatan Kerja Di Lingkungan Kerja</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Memahami dan mengikuti operasi (kerja) yang terstandar maupun persyaratan spesifikasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengikuti instruksi/menjalankan tugas dalam sistem perbaikan kualitas.?<br>
                    1.2	Memastikan kesesuaian menurut spesifikasi?<br>
                    1.3	Mendeteksi kerusakan dan dilaporkan menurut prosedur operasi (kerja) yang terstandar (SOP)?<br>
                    1.4	Memonitor pelaksanaan cara kerja maupun kualitas produksi atau pelayanan untuk memastikan kepuasan pelanggan?
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
                <li>Elemen: Digunakan dalam perbaikan kualitas</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Mengikutsertakan proses prosedur perbaikan?<br>
                    2.2	Mengatur penempatan user interface dialog secara sekuensial?<br>
                    2.3	Partisipasi dalam perbaikan internal/eksternal, hubungan pelanggan/pemasok?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.OP01.002.01<br>Mengidentifikasi Aspek Kode Etik Dan HKI Di Bidang TIK</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Mengidentifikasi kode etik yang berlaku di dunia TIK</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasi norma yang berlaku di dunia TIK.?<br>
                    1.2	Memahami aspek legal atas dokumen elektronik hasil karya orang lain?
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
                <li>Elemen: Mengidentifikasi hal-hal yang berkaitan dengan HKI di dunia TIK.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Memahami copyright piranti lunak dan isu hukum berkaitan dengan menggandakan dan membagi file dapat.?<br>
                    2.2 Memahami akibat yang dapat terjadi jika bertukar file pada suatu jaringan internet?<br>
                    2.3 Mengenalkan dan memahami istilah-istilah shareware, freeware dan user license?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.005.02<br>Mengimplementasikan User Interface</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: : Mengidentifikasi rancangan user interface</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Mengidentifikasi rancangan user interface sesuai kebutuhan?<br>
                    1.2  Mengidentifikasi komponen user interface dialog sesuai konteks rancangan proses?<br>
                    1.3 Menjelaskan urutan dari akses komponen user interface dialog?<br>
                    1.4 Membuat simulasi (mock-up) dari aplikasi yang akan dikembangkan?
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
                <li>Elemen: Melakukan implementasi rancangan user interface</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Menerapkan menu program sesuai dengan rancangan program?<br>
                    2.2 Mengatur penempatan user interface dialog secara sekuensial?<br>
                    2.3 Menyesuaikan seting aktif-pasif komponen user interface dengan urutan alur proses?<br>
                    2.4 Menentukan bentuk style dari komponen user interface? Menerapkan simulasi suatu proses yang sesungguhnya?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.010.01<br>Menerapkan Perintah Eksekusi Bahasa Pemrograman Berbasis Teks, Grafik, dan Multimedia.</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: : Mengidentifikasi mekanisme running atau eksekusi source code.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Mengidentifikasikan cara dan tools untuk mengeksekusi source code?<br>
                    1.2  Mengidentifikasikan parameter untuk mengeksekusi source code?<br>
                    1.3  Mengidentifikasikan peletakan source code sehingga bisa dieksekusi dengan benar?<br>
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
                <li>Elemen:: Mengeksekusi source code.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Menggunakan source code dieksekusi sesuai dengan mekanisme eksekusi source code dari tools pemrograman yang?<br>
                    2.2  Mengidentifikasikan perbedaan antara running,  debugging, atau membuat executable file?
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
                <li>Elemen:: Mengidentifikasi hasil eksekusi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Merencanakan source code berhasil dieksekusi sesuai scenario?<br>
                    3.2	Mengidentifikasikan jika eksekusi source code gagal/tidak berhasil, sumber permasalahan?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.012.01<br>Melakukan Pengaturan Software Tools Pemrograman</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: : Melakukan konfigurasi tools untuk pemrograman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Menentukan target hasil dari konfigurasi?<br>
                    1.2  Menggunakan tools pemrograman setelah dikonfigurasikan, tetap bisa sebagaimana mestinya?
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
                <li>Elemen: Menggunakan tools sesuai kebutuhan pembuatan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Mengindentifikasikan fitur-fitur dasar yang dibutuhkan untuk mendukung pembuatan program?<br>
                    2.2 Menguasai fitur-fitur dasar tools untuk pembuatan program?
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.018.02<br>Mengimplementasikan Pemrograman Berorientasi Objek</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Membuat program berorientasi objek dengan memanfaatkan class</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Membuatkan Program dengan menggunakan  class?<br>
                    1.2  Membuatkan properti class yang akan direalisasikan dalam bentuk prosedur/fungsi?<br>
                    1.3 Membuatkan data didalam class mandiri?<br>
                    1.4 Mengelola hak  akses  dari  tipe  data  (private, protected, public)?
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
                <li>Elemen: Menggunakan tipe data dan control program pada metode atau operasi dari suatu kelas</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Mengindentifikasikan Tipe data?<br>
                    2.2 Menguasai sintaks program sesuai dengan bahasa pemrogramnnya?<br>
                    2.3 Menguasai control program?
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
                <li>Elemen: Membuat program dengan konsep berbasis objek</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Menterapkan inheritance pada class?<br>
                    3.2	Menterapkan Polymorphism pada class?<br>
                    3.3	Menterapkan Overloading pada class?
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
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el2?>"><?= $kmp->buktiunit7el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen: Membuat program object oriented dengan interface dan paket</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Membuat interface class program?<br>
                    3.2	Membuat paket dengan program?
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
        <tr>
            <td>
            <ol start="5">
                <li>Elemen: Mengkompilasi Program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Mengkoreksi kesalahan dapat?<br>
                    5.2	Menghasilkan program bebas salah sintaks?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit7el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit7el5?>"><?= $kmp->buktiunit7el5?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.020.02<br>Menggunakan SQL</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Mempersiapkan perangkat lunak aplikasi data deskripsi/SQL</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Memasang perangkat lunak aplikasi SQL?<br>
                    1.2  Menjalankan perangkat lunak aplikasi SQL?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el1?>"><?= $kmp->buktiunit8el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Menggunakan fitur aplikasi SQL</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Mengindentifikasikan fitur pengolahan DML?<br>
                    2.2 Mengeksekusi fitur pengolahan DML sesuai kebutuhan?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el2?>"><?= $kmp->buktiunit8el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Mengisi tabel</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mengisi tabel data menggunakan perintah DML.?<br>
                    3.2	Membangkitkan indeks?<br>
                    3.3  Membentuk view tabel sesuai kebutuhan?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el3?>"><?= $kmp->buktiunit8el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen: Melakukan operasi relasional</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Mengidentifikasi fitur pengolahan DML.?<br>
                    4.2	Mempergunakan perintah DML untuk manipulasi antar table? <br>
                    4.3 Mempergunakan perintah DML untuk manipulasi   antar-view?<br>
                    4.4  Mentuliskan Perintah DML secara efisien?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el4?>"><?= $kmp->buktiunit8el4?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="5">
                <li>Elemen: Membuat stored procedure</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Membuat stored Procedure dengan perintah SQL?<br>
                    5.2 Memperiksa prosedur diuji input dan outputnya?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el5?>"><?= $kmp->buktiunit8el5?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="6">
                <li>Elemen: Membuat function</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    6.1	Membuat function dengan perintah SQL?<br>
                    6.2 Mentuliskan perintah SQL pada function secara efisien?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el6 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el6?>"><?= $kmp->buktiunit8el6?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="7">
                <li>Elemen: Membuat trigger</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    7.1	Mengidentifikasi trigger dengan perintah SQL?<br>
                    7.2 Menguji kesesuaian hasil trigger?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el7 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el7?>"><?= $kmp->buktiunit8el7?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="8">
                <li>Elemen: Melakukan perintah commit dan rollback</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    8.1	Melakukan perubahan data  dengan perintah commit?<br>
                    8.2 Melakukan pembatalan penulisan data dengan rollback?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit8el8 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit8el8?>"><?= $kmp->buktiunit8el8?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.023.02<br>Membuat Dokumen Kode Program</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Melakukan identifikasi kode program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1  Mengidentifikasikan modul program?<br>
                    1.2  Mengidentifikasikan parameter yang dipergunakan?<br>
                    1.3  Menjelaskan algoritma cara kerjanya?<br>
                    1.4  Memberikan komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada)?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit9el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit9el1?>"><?= $kmp->buktiunit9el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Membuat dokumentasi modul program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Membuat dokumentasi modul sesuai dengan identitas untuk memudahkan pelacakan?<br>
                    2.2 Menerapkan identifikasi dokumentasi?<br>
                    2.3 Menjelaskan Kegunaan modul?<br>
                    2.4 Merevisi dokumen sesuai perubahan kode program?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit9el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit9el2?>"><?= $kmp->buktiunit9el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Membuat dokumentasi fungsi, prosedur atau method program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Membuat dokumentasi fungsi, prosedur atau metod?<br>
                    3.2	Menjelaskan kemungkinan eksepsi?<br>
                    3.3  Merevisi dokumen sesuai perubahan kode program?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit9el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit9el3?>"><?= $kmp->buktiunit9el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen: Men-generate dokumentasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Mengidentifikasika tools untuk generate dokumentasi? <br>
                    4.2  Melakukan generate dokumentasi?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit9el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit9el4?>"><?= $kmp->buktiunit9el4?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.030.002<br>Menerapkan Pemrograman Multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Menjelaskan kebutuhan platform</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Mengidentifikasikan hardware sesuai kebutuhan?<br>
                    1.2  Mengidentifikasikan software sesuai kebutuhan?<br>
                    1.3  Mengidentifikasikan persyaratan sistem operasi?<br>
                    1.4  Mengidentifikasikan persyaratan aplikasi dasar?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit10el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit10el1?>"><?= $kmp->buktiunit10el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Mempersiapkan bahasa pengolahan multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1  Menguasai konsep bahasa pemrograman untuk membuat aplikasi multimedia interaktif?<br>
                    2.2  Membuat perencanaan sebelum mulai menulis program?<br>
                    2.3  Menetapkan timeline (termasuk frame dan sections)?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit10el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit10el2?>"><?= $kmp->buktiunit10el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Menggunakan syntax khusus multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Menggunakan syntax sesuai aturan/ grammar.?<br>
                    3.2	Menggunakan tipe data dengan benar?<br>
                    3.3	Mendeklarasikan variabel dengan benar?<br>
                    3.4	Menggunakan operator untuk manipulasi nilai dalam ekspresi?<br>
                    3.5	Memberikan komentar?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit10el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit10el3?>"><?= $kmp->buktiunit10el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen: Menggunakan statement</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Membuat statement multiple untuk frame yang sama?<br>
                    4.2	Menetapkan target path?<br>
                    4.3  Menggunakan algoritma khusus multimedia?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit10el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit10el4?>"><?= $kmp->buktiunit10el4?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="5">
                <li>Elemen: Menetapkan kompatibilitas dari hardware dan software</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Mengidentifikasikan kebutuhan minimal hardware?<br>
                    5.2	Mengidentifikasikan kebutuhan minimal software?<br>
                    5.3	Menginstal aplikasi dapat pada platform sesuai spesikasi?<br>
                    5.4  Menjalankan aplikasi dapat dijalankan pada platform. sesuai spesikasi?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit10el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit10el5?>"><?= $kmp->buktiunit10el5?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.62010.033.02<br>Melaksanakan Pengujian Unit Program</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Menentukan kebutuhan uji coba dalam pengembangan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasikan prosedur uji coba aplikasi sesuai dengan software development life cycle?<br>
                    1.2	Menentukan tools uji coba?<br>
                    1.3  Mengidentifikasikan standar dan kondisi uji coba?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit11el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit11el1?>"><?= $kmp->buktiunit11el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Mempersiapkan dokumentasi uji coba</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menentukan kebutuhan untuk uji coba?<br>
                    2.2	Melaksanakan uji coba dengan variasi kondisi dapat?<br>
                    2.3  Membuatkan skenario uji coba?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit11el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit11el2?>"><?= $kmp->buktiunit11el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Mempersiapkan data uji</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mengidentifikasikan data uji unit tes?<br>
                    3.2  Membangkitkan data uji unit tes?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit11el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit11el3?>"><?= $kmp->buktiunit11el3?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen: Melaksanakan prosedur uji coba</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Mendisankan skenario uji coba.?<br>
                    4.2	Mendisankan prosedur uji coba dalam algoritma?<br>
                    4.3 Melaksanakan uji coba?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit11el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit11el4?>"><?= $kmp->buktiunit11el4?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="5">
                <li>Elemen: Mengevaluasi hasil uji coba</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Mencatatkan hasil uji coba?<br>
                    5.2	Menganalisis hasil uji coba?<br>
                    5.3	Melaporkan prosedur uji coba?<br>
                    5.4  Menyelesaikan kesalahan/error.?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit11el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit11el5?>"><?= $kmp->buktiunit11el5?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.042.01<br>Melakukan Konfigurasi Perangkat Lunak Sesuai Environment (Development, Staging, Production)</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Melakukan analisis keberadaan dan kebutuhan environment</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasikan jumlah keberadaan environment sesuai kebutuhan?<br>
                    1.2 Mengidentifikasikan spesifikasi masing-masing environment?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el1?>"><?= $kmp->buktiunit12el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Melakukan konfigurasi perangkat lunak masing-masing environment</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Membuat konfigurasi environment yang menjadi bagian perangkat lunak?<br>
                    2.2	Melakukan aktivasi konfigurasi perangkat lunak pada satu waktu?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el2?>"><?= $kmp->buktiunit12el2?></a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.046.01<br>Melakukan Logging Aplikasi</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol>
                <li>Elemen: Analisis informasi yang perlu di log pada suatu aplikasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasikan informasi kritikal yang perlu untuk di log?<br>
                    1.2	Menentukan lama penyimpanan informasi log?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit13el1 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit13el1?>"><?= $kmp->buktiunit13el1?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen: Membuat modul pembuatan log aplikasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menentukan mekanisme pembuatan log aplikasi?<br>
                    2.2	Membuat modul pembuatan log dari aplikasi berjalan?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit13el2 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit13el2?>"><?= $kmp->buktiunit13el2?></a>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Membuat modul pengambilan data dan informasi log</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Menentukan mekanisme pengumpulan log aplikasi untuk analisis.?<br>
                    3.2	Membuat modul pengambilan data log dari aplikasi berjalan dibuat?
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit13el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit13el3?>"><?= $kmp->buktiunit13el3?></a>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td>Nama Asesi: <br> <?= $kmp->nama_lengkap ?></td>
            <td>Tanggal : <br> <?= $kmp->tgl_siswa ?></td>
            <td>Tanda Tangan Asesi : <br> <img src="<?= $ttd->img ?>" alt="" width="200" height="150"></td>
        </tr>
        <form action="<?= base_url('panel_admin/submit_tinjauan')?>" method="POST">
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
    <a href="panel_admin/set_pengumuman" class="btn btn-primary">Kembali</a>
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
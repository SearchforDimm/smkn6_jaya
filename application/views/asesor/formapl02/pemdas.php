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
<?php foreach($kompetensi_pemdas as $kmp) : ?>
    <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II Pada Kompetensi Keahlian Rekayasa Perangkat Lunak 5.7.1. Pemograman Dasar</td>
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
                <li>Elemen: Mengikuti praktek-praktek kerja yang aman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Melaksanakan kerja dengan aman sehubungan dengan kebijakan dan prosedur perusahaan serta persyaratan perundang-undangan?<br>
                    1.2	Melakukan kegiatan rumah tangga perusahaan sesuai dengan prosedur perusahaan?<br>
                    1.3	Mendemontrasikan tanggung jawab dan tugas-tugas karyawan dimengerti dalam kegiatan sehari-hari?<br>
                    1.4	Memakai perlengkapan pelindung diri dan disimpan sesuai dengan prosedur perusahaan?<br>
                    1.5	Menggunakan semua perlengkapan dan alat-alat keselamatan sesuai dengan persyaratan perundang-undangan dan prosedur perusahaan?<br>
                    1.6	Mengenali tanda-tanda/simbol dan diikuti sesuai instruksi?<br>
                    1.7	Melaksanakan Semua pedoman penanganan sesuai dengan persyaratan, prosedur perusahaan dan pedoman Komisi Kesehatan dan Keselamatan Kerja  Nasional yang sah? <br>
                    1.8 Mengenali perlengkapan darurat dan didemonstrasikan dengan tepat?
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
                <li>Elemen: Mengikuti prosedur-prosedur darurat</li>
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
            <td colspan="3">LOG.OO01.004.01<br>Merencanakan tugas rutin</td>
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
                <li>Elemen: Mengenali persyaratan tugas</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengerti dan mampu menjelaskan instruksi-instruksi tentang prosedur. <br>
                    1.2	Mengerti dan mampu menjelaskan spesifikasi yang relevan terhadap hasil-hasil tugas.<br>
                    1.3	Mengenali hasil-hasil tugas. <br>
                    1.4	Mengenali syarat-syarat tugas seperti waktu penyelesaian dan ukuran kualitas.
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
                <li>Elemen: Merencanakan langkah langkah yang dibutuhkan untuk menyelesaikan tugas</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Mengerti dan mampu menjelaskan instruksi-instruksi dan spesifikasi-spesifikasi yang ada, langkah-langkah atau kegiatan-kegiatan individu yang diperlukan untuk melaksanakan tugas. <br>
                    2.2	Mencantumkan rangkaian kegiatan yang perlu diselesaikan dalam rencana. <br>
                    2.3	Memeriksa langkah-langkah dan hasil yang direncanakan untuk menjamin kesesuaian dengan instruksi-instruksi dan spesifikasi-spesifikasi yang relevan.
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
                <li>Elemen: Mengulas rencana</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mengenali hasil-hasil dan membandingkan dengan sasaran-sasaran (yang direncanakan) instruksi-instruksi tugas, spesifikasi-spesifikasi dan syarat-syarat tugas. <br>
                    3.2	Mampu memperbaiki rencana, jika perlu, untuk memenuhi sasaran-sasaran dan syarat-syarat tugas yang lebih baik.
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
                    1.1	Mengidentifikasi norma yang berlaku di dunia TIK.<br>
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
                    2.1  Memahami copyright piranti lunak dan isu hukum berkaitan dengan menggandakan dan membagi file dapat. <br>
                    2.2	Memahami akibat yang dapat terjadi jika bertukar file pada suatu jaringan internet.<br>
                    2.3	Mengenalkan dan memahami istilah-istilah shareware, freeware dan user license.
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
            <td colspan="3">J.620100.004.02<br>Menggunakan Struktur Data</td>
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
                <li>Elemen: Mengidentifikasi konsep data dan struktur data</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasi konsep data dan struktur data sesuai dengan konteks permasalahan.<br>
                    1.2	Membandingkan alternatif struktur data, kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan
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
                <li>Elemen: Menerapkan struktur data dan akses terhadap struktur data tersebut</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Mengimplementasikan struktur data sesuai dengan bahasa pemrograman yang akan dipergunakan. <br>
                    2.2	Menyatakan akses terhadap data dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai
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
                <li>Elemen: Mengidentifikasi rancangan user interface</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasi rancangan user interface sesuai kebutuhan<br>
                    1.2	Mengidentifikasi komponen user interface dialog sesuai konteks rancangan proses <br>
                    1.3	Menjelaskan urutan dari akses komponen user interface dialog <br>
                    1.4	Membuat simulasi (mock-up) dari aplikasi yang akan dikembangkan
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
                <li>Elemen: Melakukan implementasi rancangan user interface</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menerapkan menu program sesuai dengan rancangan program. <br>
                    2.2	Mengatur penempatan user interface dialog secara sekuensial. <br>
                    2.3	Menyesuaikan seting aktif-pasif komponen user interface dengan urutan alur proses. <br>
                    2.4	Menentukan bentuk style dari komponen user interface. <br>
                    2.5	Menerapkan simulasi suatu proses yang sesungguhnya.
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.011.01<br>Melakukan instalasi software tools pemrograman</td>
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
                <li>Elemen: Mengidentifikasi entitas yang terkait dengan lingkup program yang akan dibuat beserta hubungannya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasikan entitas yang menggambarkan sistem yang dibuat sesuai dokumen perancangan.<br>
                    1.2	Membuat berbagai diagram dari entity yang telah didefinisikan.
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
                <li>Elemen: Membuat query informasi dasar terhadap model data yang telah dikembangkan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Membuat informasi yang diperlukan oleh aplikasi dapat dihasilkan dengan efisien dari model.<br>
                    2.2	Mengimplementasikan diagram berdasar entitas dan hubungan yang telah diidentifikasi menggunakan tools yang ada.
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
            <td colspan="3">J.620100.012.01<br>Melakukan Pengaturan Software Tools  Pemrograman</td>
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
                <li>Elemen: Mengidentifikasi entitas yang terkait dengan lingkup program yang akan dibuat beserta hubungannya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Menentukan target hasil dari konfigurasi<br>
                    1.2	Menggunakan tools pemrograman setelah dikonfigurasikan, tetap bisa sebagaimana mestinya
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
                <li>Elemen: Menggunakan tools sesuai kebutuhan pembuatan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Mengindentifikasikan fitur-fitur dasar yang dibutuhkan untuk mendukung pembuatan program.<br>
                    2.2	Menguasai fitur-fitur dasar tools untuk pembuatan program.
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.017.01<br>Mengimplementasikan Pemrograman Terstruktur</td>
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
                <li>Elemen: Menggunakan tipe data dan control program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Menentukan tipe data yang sesuai standar.<br>
                    1.2	Menggunakan syntax program yang digunakan sesuai standar. <br>
                    1.3	Menggunakan struktur kontrol program yang digunakan sesuai standar.
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
                <li>Elemen: Membuat program sederhana</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Membuat program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran.<br>
                    2.2	Menggunakan struktur kontrol percabangan dan pengulangan dalam membuat program.
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
                <li>Elemen: Membuat program menggunakan prosedur dan fungsi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Membuat program dengan menggunakan prosedur sesuai aturan penulisan program.<br>
                    3.2	Membuat program dengan menggunakan fungsi sesuai aturan penulisan program. <br>
                    3.3	Membuat program dengan menggunakan prosedur dan fungsi secara bersamaan sesuai aturan penulisan program. <br>
                    3.4	Memberikan keterangan untuk setiap prosedur dan fungsi.
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
                <li>Elemen: Membuat program menggunakan array</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Menentukan dimensi array.<br>
                    4.2	Menentukan tipe data array.<br>
                    4.3	Menentukan panjang array.<br>
                    4.4	Menggunakan pengurutan array.
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
                <li>Elemen: Membuat program untuk akses file</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Membuat program untuk menulis data dalam media penyimpan.<br>
                    5.2	Membuat program untuk membaca data dari media penyimpan.
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
                <li>Elemen: Mengkompilasi Program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    6.1	Mengoreksi kesalahan program.<br>
                    6.2	Membebaskan kesalahan syntax dalam program.
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.022.02<br>Mengimplementasikan Algoritma Pemrograman</td>
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
                <li>Elemen: Menjelaskan varian dan invarian</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Menjelaskan Tipe data sesuai kaidah pemrograman.<br>
                    1.2	Menjelaskan Variabel sesuai kaidah pemrograman.<br>
                    1.3	Menjelaskan Konstanta sesuai kaidah pemrograman.
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
                <li>Elemen: Membuat alur logika pemrograman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menentukan Metode yang sesuai<br>
                    2.2	Menentukan Komponen yang dibutuhkan <br>
                    2.3	Menetapkan Relasi antar komponen <br>
                    2.4	Menetapkan Alur mulai dan selesai
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
                <li>Elemen: Menerapkan teknik dasar algoritma umum</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Membuat Algoritma untuk sorting<br>
                    3.2	Membuat Algoritma untuk searching
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
                <li>Elemen: Menggunakan prosedur dan fungsi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Menidentifikasi Konsep  penggunaan  kembali  prosedur dan fungsi<br>
                    4.2	Menggunakan Prosedur<br>
                    4.3	Menggunakan Fungsi
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
        <tr>
            <td>
            <ol start="5">
                <li>Elemen: Mengidentifikasikan kompleksitas algoritma</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Mengidentifikasi Kompleksitas waktu algoritma<br>
                    5.2	Mengidentifikasi Kompleksitas penggunaan memory algoritma
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit9el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit9el5?>"><?= $kmp->buktiunit9el5?></a>

            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.025.02<br>Melakukan Debugging</td>
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
                <li>Elemen: Mempersiapkan kode program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Menyiapkan Kode program sesuai spesifikasi<br>
                    1.2	Menyiapkan Debugging  tools  untuk  melihat  proses suatu modul
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
                <li>Elemen: Melakukan debugging</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menggunakan Kode program dikompilasi sesuai bahasa pemrograman<br>
                    2.2	Menganalisis Kriteria lulus build<br>
                    2.3	Menganalisis Kriteria eksekusi aplikasi<br>
                    2.4	Mencatat Kode kesalahan
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
                <li>Elemen: Memperbaiki program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Merumuskan Perbaikan terhadap kesalahan kompilasi maupun build<br>
                    3.2	Melakukan Perbaikan
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
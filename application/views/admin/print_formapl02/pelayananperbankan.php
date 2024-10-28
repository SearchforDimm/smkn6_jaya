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
    
    <style>
        a {
            text-decoration: none!important;
            color: black;
        }
      
      .table-bordered td {
          border:1px solid black!important;
      }
    </style>
  
  <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
          <br><br>
          <div class="container">
    <?php foreach ($kompetensi_pelayananperbankan as $kmp) :?>
    <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Perbankan dan Keuangan Mikro 5.7.1. Pelayanan Perbankan</td>
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
            <td colspan="3">M.692000.001.02<br>Menerapkan Prinsip-prinsip Praktik Profesional dalam Bekerja</td>
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
                <li>Elemen:Mengidentifikasi luas, sektor dan tanggung jawab industri</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Aspek-aspek eksternal yang mempengaruhi profesi teknisi akuntansi diidentifikasi dalam menjalankan pekerjaan <br>
                    1.2	Peran dan tanggung jawab berbagai pihak yang terlibat dalam profesi teknisi akuntansi diidentifikasi dalam menjalankan pekerjaan
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
                <li>Elemen:Menerapkan pedoman, prosedur, dan aturan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Informasi yang berhubungan dengan hukum, peraturan dan kode etik dikumpulkan dan dianalisa <br>
                    2.2	Informasi yang berhubungan dengan hukum, peraturan dan kode etik dalam kaitannya dengan pihak yang bersangkutan di tempat kerja ditentukan <br>
                    2.3	Ketentuan tentang praktik kerja yang relevan dipergunakan sebagai dasar untuk menjalankan pekerjaan dan pengambilan keputusan secara beretika
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
                <li>Elemen:Mengelola informasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Dokumen, laporan, data, dan kalkulasi dianalisis dan diorganisir sesuai kebutuhan konsumen dan/atau organisasi <br>
                    3.2	Informasi disajikan dalam format yang sesuai dengan kebutuhan pengguna informasi
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
                <li>Elemen:Merencanakan penyelesaian pekerjaan dengan mempertimbangkan keterbatasan waktu dan sumber daya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Tugas yang	harus diselesaikan dan kondisi yang relevan ditentukan.<br>
                    4.2	Pekerjaan direncanakan secara mandiri maupun secara tim untuk periode tertentu dengan mempertimbangkan sumber daya, waktu dan skala prioritas <br>
                    4.3	Perubahan	teknologi dan	organisaasi kerja dapat diadaptasi
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
                <li>Elemen:Merancang dan mengelola kompetensi personal</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Kebutuhan pengembangan kompetensi dan sasaran pengembangan diidentifikasi dan dikaji ulang secara periodik<br>
                    5.2	Kebutuhan kompetensi, otorisasi, dan lisensi diidentifikasi
                    5.3	Kesempatan pengembangan profesional yang menggambarkan kebutuhan dan sasaran diselesaikan dalam jangka waktu tertentu
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">M.692000.002.02<br>Menerapkan Praktik- Praktik Kesehatan Dan Keselamatan Di Tempat Kerja</td>
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
                <li>Elemen:Mengikuti prosedur kerja untuk mengidentifikasi bahaya dan pengendalian resiko.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Bahaya di tempat kerja dikenali dan dilaporkan kepada yang berwenang sesuai dengan prosedur tempat kerja.<br>
                    1.2	Prosedur tempat kerja dan instruksi kerja untuk mengendalikan resiko diikuti secara akurat. <br>
                    1.3	Prosedur tempat kerja yang berkaitan dengan kecelakaan, api, dan darurat diikuti dimana diperlukan dalam lingkup penyebab dan kompetensi karyawan. <br>
                    1.4	Seluruh area kerja dijaga tetap bersih dan bebas dari gangguan. <br>
                    1.5	Seluruh pintu darurat dikenali dan bebas setiap waktu.
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
                <li>Elemen:Berkontribusi untuk berpartisipasi dalam pengaturan manajemen kesehatan dan keselamatan kerja.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Isu-isu kesehatan dan keselamatan kerja diinformasikan kepada aparat yang berwenang sesuai dengan prosedur tempat kerja yang relevan.<br>
                    2.2	Kontribusi kepada manajemen kesehatan dan keselamatan kerja di tempat kerja dibuat sesuai dengan kebijakan dan prosedur organisasi dan dalam lingkup tanggung jawab dan kompetensi karyawan.<br>
                    2.3	Dokumen kesehatan dan keselamatan kerja yang relevan diidentifikasi, secara periodik diperiksa, dan rekomendasinya ditindaklanjuti. <br>
                    2.4	Klarifikasi kewajiban, prosedur dan praktik-praktik kesehatan dan keselamatan kerja ditinjau kembali bila diperlukan.
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
                <li>Elemen:Menerapkan praktik praktik kesehatan dan keselamatan kerja.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Prosedur kesehatan dan keselamatan kerja diterapkan setiap waktu dalam pekerjaan sehari-hari. <br>
                    3.2	Peringatan bahaya dan tanda-tanda keselamatan dikenali dan diobservasi. <br>
                    3.3	Teknik-teknik penanganan keselamatan secara manual dan tehnik keselamatan operasi peralatan diterapkan setiap waktu. <br>
                    3.4	Prosedur pertolongan pertama secara darurat diikuti. <br>
                    3.5	Situasi yang secara potensial berbahaya diidentifikasi, meliputi kegagalan dan peralatan berbahaya, secara langsung dilaporkan. <br>
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
            <td colspan="3">K.64BPR00.001.1 <br>Menerapkan Standar Layanan Perbankan</td>
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
                <li>Elemen:Mempersiapkan pelayanan kepada nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Penampilan dipenuhi sesuai dengan standar yang ditetapkan <br>
                    1.2	Kebersihan dan kerapihan ruang kerja dipastikan sesuai dengan standar yang ditetapkan <br>
                    Pengetahuan produk, jasa dan standar prosedur pelayanan diidentifikasi
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
                <li>Elemen:Melaksanakan standar layanan perbankan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Komunikasi dengan nasabah dilaksanakan dengan bahasa dan intonasi yang sesuai secara terbuka, profesional, ramah dan sopan <br>
                    2.2	Sikap menghargai dan ketulusan dalam memberikan layanan diterapkan <br>
                    2.3	Penjelasan	produk	disampaikan	sesuai dengan prosedur yang telah ditetapkan <br>
                    2.4 Kebutuhan dan keluhan nasabah ditindaklanjuti sesuai dengan prosedur yang telah ditetapkan 
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
                <li>Elemen:Memberikan masukan mengenai peningkatan standar layanan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Masukan nasabah terkait dengan layanan diinventarisasi <br>
                    3.2	Masukan nasabah yang telah diinventarisasi disampaikan kepada pejabat yang berwenang di bidang pelayanan <br>
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">K.641266.001.01<br>Melakukan Proses Awal Hari</td>
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
                <li>Elemen:Mempersiapkan proses awal hari</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Ruang lingkup, tugas dan tanggung  jawab seorang teller dijelaskan sesuai dengan job description yang ditetapkan bank.<br>
                    1.2	Sistem dan prosedur transaksi untuk melayani nasabah dijelaskan sesuai dengan kebijakan yang ditetapkan oleh bank <br>
                    1.3	Batasan kewenangan bertransaksi dengan nasabah diidentifikasi berdasarkan pada kebijakan yang ditetapkan oleh bank.
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
                <li>Elemen:Mengidentifikasi transaksi yang dibutuhkan oleh nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Jenis produk dana pihak ketiga dan layanan jasa lainnya terkait pelayanan teller diidentifikasi sesuai dengan yang ditawarkan oleh bank.<br>
                    2.2	Persyaratan tentang jenis produk/layanan terkait dengan pelayanan teller diidentifikasi sesuai dengan sistem dan prosedur bank.<br>
                    2.3	Risiko setiap jenis produk dan layanan terkait dengan layanan teller diidentifikasi sesuai dengan kebijakan bank dan atau praktik umum perbankan 
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
                <li>Elemen:Mempersiapkan kebutuhan dana tunai</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Pemenuhan kebutuhan dana tunai dilakukan dengan mengikuti sistem dan prosedur bank.<br>
                    3.2	Formulir transaksi dipersiapkan sesuai dengan sistem dan prosedur bank.
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">K.641266.002.01<br>Melakukan Transaksi dengan Nasabah</td>
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
                <li>Elemen:Mengidentifikasi transaksi nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Permintaan layanan perbankan yang diajukan oleh nasabah diidentifikasi sesuai dengan jenis produk/layanan yang ditawarkan oleh bank (tunai/non tunai)<br>
                    1.2	Formulir dan dokumentasi layanan yang diajukan nasabah diverifikasi sesuai dengan kebijakan, system dan prosedur bank <br>
                    1.3	Tindakan contingency seperti rekomendasi pelaporan kepada PPATK, enhance due diligence dan penolakan transaksi dilakukan apabila terdapat indikasi transaksi AML
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
                <li>Elemen:Melakukan layanan transaksi tunai dengan nasabah.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Setoran tunai dari nasabah diterima sesuai dengan sistem prosedur bank.<br>
                    2.2	Pembayaran tunai dilakukan kepada nasabah sesuai dengan system dan prosedur bank.  <br>
                    2.3	Transaksi tunai di atas dibukukan sesuai dengan system dan prosedur bank <br>
                    2.4	Formulir dan dokumen transaksi nasabah divalidasi sesuai dengan system dan prosedur bank.
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
                <li>Elemen:Melakukan layanan transaksi non-tunai dengan nasabah.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Formulir dan dokumen transaksi non- tunai nasabah diverifikasi sesuai dengan system dan prosedur bank<br>
                    3.2	Transaksi non-tunai di atas dibukukan sesuai dengan sistem dan prosedur bank. <br>
                    3.3	Transaksi non tunai nasabah divalidasi sesuai dengan system dan prosedur bank.
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
            <td colspan="3">K.641266.003.01<br>Melakukan Proses Akhir Hari</td>
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
                <li>Elemen:Menyerahkan uang tunai dan dokumen transaksi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Uang tunai dan dokumen transaksi diserahkan kepada supervisor (head teller/operation head).<br>
                    1.2	Laporan transaksi harian teller dibuat secara manual atau menggunakan sistem aplikasi sistem IT ditutup termasuk laporan transaksi yang belum terselesaikan, rekomendasi laporan transaksi keuangan tunai (CTR) dan transaksi keuangan mencurigakan (STR) Sistem dan prosedur customer service dijelaskan sesuai dengan kebijakan yang ditetapkan oleh bank.
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
                <li>Elemen:Menutup transaksi harian</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Transaksi harian teller ditutup dengan penyerahan laporan dan menutup menu dalam aplikasi system IT.<br>
                    2.2 Mematikan komputer dan meninggalkan tempat kerja tanpa membawa uang tunai dan dokumen transaksi. <br>
                    2.3 Penambahan bahan informasi seperti leafle, brocure dan booklet serta materi lain yang terkait dengan produk/ layanan bank disampaikan kepada nasabah/calon nasabah untuk memperjelas produk/layanan bank.
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
            <td colspan="3">K.641266.004.01<br>Memberikan Informasi Produk Dan Jasa Bank</td>
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
                <li>Elemen:Menyiapkan penyampaian informasi  Produk bank kepada nasabah/calon nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.2	Ruang lingkup, tugas dan tanggung jawab seorang customer service dijelaskan sesuai dengan Job Description yang ditetapkan bank.<br>
                    1.3	Sistem dan prosedur customer service dijelaskan sesuai dengan kebijakan yang ditetapkan oleh bank. <br>
                    1.4	Materi promosi, leaflet/brosur dan booklet serta bahan promosi lain yang terkait dengan produk dan layanan yang ditawarkan oleh bank disiapkan. <br>
                    1.5	Suku bunga simpanan pihak ketiga,  suku bunga berbagai jenis kredit, tarif jasa layanan, kurs valuta asing diperoleh dari sumber yang benar sesuai dengan kebijakan bank.
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
                <li>Elemen:Menyampaikan informasi produk/layanan bank.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Informasi produk/layanan bank disampaikan kepada nasabah/ calon nasabah dengan metode sesuai dengankebijakan bank (via telpon, tatap muka, pameran).<br>
                    2.2 Penambahan bahan informasi seperti leafle, brocure dan booklet serta materi lain yang terkait dengan produk/ layanan bank disampaikan kepada nasabah/calon nasabah untuk memperjelas produk/layanan bank.<br>
                    2.3 Respon dan pertanyaan dari nasabah/ calon nasabah atas produk/layanan bank ditanggapi dengan penjelasan yang tepat dan penuh empati untuk menumbuhkan ketertarikan yang bersangkutan kepada produk/layanan bank. <br>
                    2.4 Minat atau ketertarikan atau belum tertarik dari calon nasabah kepada produk/layanan bank dipastikan kepada yang bersangkutan dengan cara yang sopan dan empati. <br>
                    2.5 Program tindak lanjut untuk memformalkan ketertarikan nasabah/ calon nasabah terhadap produk/ layanan bank dilakukan sesuai dengan prosedur yang diberlakukan. <br>
                    2.6 Adminstrasi dan dokumentasi pelaksanaan penyampaian informasi produk/layanan bank dilakukan dengan menggunakan format dan prosedur yang ditetapkan oleh bank.
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
            <td colspan="3">K.641266.005.01<br>Menangani Keluhan Nasabah</td>
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
                <li>Elemen:Menyiapkan penanganan keluhan nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Ruang lingkup, tugas dan tanggung jawab dalam penanganan keluhan nasabah dijelaskan sesuai dengan sistem dan prosedur bank.<br>
                    1.2	Sistem dan prosedur dalam penanganan keluhan nasabah diidentifikasi.<br>
                    1.3	Batasan kewenangan dalam penanganan keluhan nasabah diidentifikasi sesuai dengan kebijakan bank.
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
                <li>Elemen:Melayani keluhan nasabah.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Keluhan nasabah (lisan & tertulis) diterima sesuai dengan kebijakan, sistem dan prosedur yang ditetapkan bank.<br>
                    2.2	Informasi dan dokumen terkait keluhan nasabah dilengkapi sesuai dengan kebijakan bank.<br>
                    2.3	Kebijakan dan prosedur penanganan nasabah dijelaskan kepada nasabah atau perwakilan nasabah.<br>
                    2.4	Pengaduan nasabah diselesaikan sesuai dengan kewenangan customer service atau jika perlu dilimpahkan sebelumnya kepada unit/kantor yang berwenang sesuai dengan kebijakan dan prosedur bank.
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
                <li>Elemen:Melaporkan hasil penanganan pengaduan nasabah</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Rekapitulasi data pengaduan nasabah berdasarkan jenis produk, kategori permasalahan,status/hasil penyelesaian disusun secara periodik sesuai dengan system dan prosedur bank.<br>
                    3.2 Laporan penanganan keluhan nasabah disampaikan kepada unit terkait sesuai sistem dan prosedur bank. 
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">K.641266.006.01<br>Membuka Rekening</td>
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
                <li>Elemen:Menyiapkan pembukaan rekening</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Ruang lingkup dan batasan tugas pembukaan rekening baru (giro, tabungan, deposito) dijelaskan secara komprehensif sesuai dengan ketentuan bank dalam pembukaan rekening.<br>
                    1.2 Kebijakan dan prosedur pembukaan rekening baru diidentifikas sesuai dengan kebijakan bank.<br>
                    1.3 Kategori nasabah/calon nasabah/walk in customer berdasarkan tingkat risikonya dipelajari untuk dijadikan referensi dalam pembukaan rekening baru atau transaksi baru <br>
                    1.4 Daftar high risk customers (Political Exposed Person, daftar teroris) di update dari Bank Indonesia
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
                <li>Elemen:Melayani nasabah dalam pembukaan rekening baru</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Kehadiran nasabah/calon nasabah dan bukan nasabah disambut dengan standar layanan yang berlaku.<br>
                    2.2 Kehadiran nasabah/calon nasabah dan bukan nasabah diidentifikasi untuk memastikan jenis produk/layanan bank yang diinginkan.<br>
                    2.3 Ketentuan dan persyaratan pembukaan rekening baru disampaikan secara transparan sesuai dengan ketentuan yang berlaku<br>
                    2.4 Formulir dan dokumentasi nasabah/calon nasabah/walk in customer diverifikasi sesuai dengan ketentuan yang berlaku <br>
                    2.5 Customer Due Diligence dilakukan dan jika perlu dilakukan Enhance Due Diligence sesuai dengan kebijakan dan prosedur bank
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
                <li>Elemen:Memproses pembukaan rekening baru</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Formulir pembukaan rekening yang memenuhi syarat ditandatangani sesuai dengan ketentuan yang berlaku<br>
                    3.2 Rekening baru nasabah dicatat secara manual atau dalam aplikasi system IT bank sesuai dengan ketentuan yang berlaku. <br>
                    3.3 Permintaan pembukaan rekening baru dan transaksi yang tidak memenuhi persyaratan wajib ditolak sesuai dengan ketentuan Bank Indonesia. <br>
                    3.4 Copy formulir pembukaan rekening dan dokumen lainnya yang diperlukan, dijelaskan secara transparan hak/ kewajiban, manfaat/ risiko/biaya yang dihadapi nasabah. <br>
                    3.5 Formulir dan dokumen pendukung pembukaan rekening dan transaksi tersebut wajib didokumentasikan mengikuti ketentuan yang berlaku
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">K.641266.006.01<br>Memelihara rekening nasabah</td>
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
                <li>Elemen:Menyiapkan pembukaan rekening</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Ruang lingkup dan batasan tugas pemeliharaan	rekeningnasabah dijelaskan secara komprehensif sesuai dengan kebijakan bank dalam pelayanan kepada nasabah.<br>
                    1.2	Sistem dan prosedur pemeliharaan rekening nasabah yang ditetapkan oleh manajemen bank dikaji untuk memastikan pemahaman secara komprehensif atas kebijakan tersebut sebagai bagian dari  pengiasaan substansi dalammelaksanakan pekerjaan.<br>
                    1.3	Prosedur dan kewenangan akses data rekening nasabah dijelaskan sesuai dengan ketentuan yang diberlakukan dalam MIS bank.<br>
                    1.4	SOP dan petunjuk umum pemeliharaan rekening nassabah dijelaskan sesuai dengan kebijakan bank.
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
                <li>Elemen:Mengidentifikasi nasabah yang memerlukan perhatian</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Persyaratan parameter klasifikasi rekening nasabah diidentifikasi berdasar pada kebijakan pemeliharaan rekening bank yang ditetapkan oleh manajemen.<br>
                    2.2	Perkembangan rekening para nasabah dipantau melalui fasilitas MIS bank dan sumber resmi lainnya untuk mengetahui perkembangannya.<br>
                    2.3	Data dan informasi hasil pemantauan dievaluasi untuk memilih dan menetapkan	nasabah	yang membutuhkan “perhatian”.
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
                <li>Elemen:Menangani nasabah yang memerlukan perhatian</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Para nasabah  yang  memerlukan perhatian ditetapkan berdasar pada hasil analisis dan evaluasi dengan mempertimbangkan kondisi terkini, potensi yang dimiliki nasabah dan target bisnis bank.<br>
                    3.2	Data	dan	informasi	serta biodata nasabah yang memerlukan perhatian dicermati untuk penanganan lebih lanjut. <br>
                    3.3	Pendekatan secara personal kepada nasabah yang memerlukan perhatian dilakukan dengan komunikasi yang asertif untuk memastikan yang bersangkutan nyaman untuk dihubungi. <br>
                    3.4	Dialog dengan nasabah yang memerlukan perhatian dilakukan untuk membahas perkembangan rekening dan upaya peningkatannya.<br>
                    3.5	Upaya peningkatan investasi pada rekening nasabah dibahas dengan nasabah dengan menunjukan data pendukungan yang memperjelas keuntungan investasi. <br>
                    3.6	Hasil pembahasan untuk meningkatkan investasi atau pemeliharaan kualitas dan kuantitasi pada rekening nasabah direkam sesuai dengan sistem dan prosedur yang berlaku di bank. <br>
                    3.7	Hasil kegiatan pemeliharaan rekening nasabah dihimpun dan disusun dalam laporan kegiatan untuk disampaikan kepada pihak relevan dalam organisasi bank untuk program tindak lanjut. <br>
                    3.8	Adminstrasi	dan	dokumentasi pemeliharaan rekening nasabah dilakukan dengan menggunakan format dan prosedur yang ditetapkan oleh bank
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
        <?php if($kmp->nama_asesor == NULL) {?>
        <tr>
            <td colspan="3">Ditinjau oleh Asesor: <button class="btn btn-danger">BELUM ADA NAMA ASESOR!</button></td>
        </tr>
        <?php } else { ?>
        <tr>
            <td colspan="3" style="background-color:#fabf8f;"><b>Ditinjau oleh Asesor:</b>&emsp;<?= $kmp->nama_asesor ?></td>
        </tr>
        <?php } ?>
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
                <button class="btn btn-danger">BELUM ADA TANDA TANGAN ASESOR!</button>
            </td>
        <?php } elseif($kmp->ttd_asesor != NULL) {?>
            <td><b>Tanda Tangan dan Tanggal: </b> <br> <img src="<?= $kmp->ttd_asesor?>" alt="" width="150" height="100"> <br> <?= $kmp->tgl_asesor?></td>
        <?php }?>
        </tr>
    </table>
    <br><br><br>
    <?php endforeach; ?>
<script>
    window.print()
</script>
</body>
</html>
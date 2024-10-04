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
<?php foreach($kompetensi_pengoperasianaplikasi as $kmp) : ?>
    <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Perbankan dan Keuangan Mikro 5.7.2. Pengoperasian Aplikasi Komputer Akuntansi</td>
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
            <td colspan="3">M.692000.002.02<br>Mengoperasikan Paket Program Pengolah Angka/Spreadsheet</td>
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
                <li>Elemen:Mempersiapkan komputer dan paket program pengolah angka</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1.	Komputer yang dibutuhkan untuk mengoperasikan paket program pengolah angka disediakan<br>
                    1.2	Paket program pengolah angka siap dioperasikan <br>
                    1.3	Sumber data yang akan diolah dengan program pengolah angka disiapkan
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
                <li>Elemen:Mengentry data</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Karakter sel diidentifikasi<br>
                    2.2	Karakter data diidentifikasi<br>
                    2.3	Data dientry sesuai dengan karaktersel<br>
                    2.4	Hasil entry disesuaikan dengan sumber data
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
                <li>Elemen:Mengolah data dengan menggunakan fungsi-fungsi program pengolahan angka Kriteria Unjuk Kerja</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Data diolah dengan rumus matematika<br>
                    3.2	Data diolah dengan rumus statistik <br>
                    3.3	Data diolah dengan menggunakan rumus semi absolut, absolut dan fungsi logika <br>
                    3.4	Data diolah dengan menggunakan fungsi finansial <br>
                    3.5	Data diolah dengan menggunakan fungsi date-time <br>
                    3.6	Data diolah dengan menggunakan fungsi grafik
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
                <li>Elemen:membuat Laporan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	   Laporan dibuat dalam bentuk table <br>
                    4.2	   Laporan dibuat dalam bentuk grafik
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
            <td colspan="3">M.692000.002.02<br>Mengoperasikan Aplikasi Komputer Akuntansi</td>
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
                <li>Elemen:Menyiapkan data awal perusahaan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Peralatan dan perlengkapan yang dibutuhkan disiapkan<br>
                    1.2	Data perusahaan dibuat
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
                <li>Elemen:Menyusun Data Setup Awal dan Saldo Awal</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Daftar Akun disusun dan saldo awal akun dientry<br>
                    2.2	Kode Pajak disiapkan<br>
                    2.3	Kartu Piutang dan pelanggan dibuat dan saldo awal piutang dientry <br>
                    2.4	Kartu utang dan pemasok dibuat dan saldoawal utang dientry <br>
                    2.5	Kartu persediaan dibuat dan saldo awal persediaan dientry
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
                <li>Elemen:Melakukan entry transaksi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Transaksi yang akan dientry dianalisis<br>
                    3.2	Transaksi dientry	dengan menggunakan menu yang tepat <br>
                    3.3	Penyesuaian dientry dengan tepat <br>
                    3.4	Proses tutup buku dilakukan secara tepat
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
            <ol start="4">
                <li>Elemen:Mencetak laporan keuangan dan laporan lainnya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Laporan laba rugi dibuat sesuai dengan ketentuan SOP<br>
                    4.2	Laporan Laporan	neraca	dibuat	sesuai dengan ketentuan SOP <br>
                    4.3	Laporan	ekuitas	dibuat	sesuai	dengan ketentuan SOP <br>
                    4.4	Laporan arus	kas	dibuat	sesuai dengan ketentuan SOP <br>
                    4.5	Laporan piutang	dibuat	sesuai	dengan ketentuan SOP <br>
                    4.6	Laporan	Utang	dibuat	sesuai	dengan ketentuan SOP <br>
                    4.7	Laporan persediaan dibuat sesuai dengan ketentuan SOP
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
        <tr>
            <td>
            <ol start="5">
                <li>Elemen:Membuat backup file</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Backup file data dibuat sesuai dengan ketentuan SOP<br>
                    5.2	Backup file data disimpan dalam media penyimpanan data
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit4el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit4el5?>"><?= $kmp->buktiunit4el5?></a>
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
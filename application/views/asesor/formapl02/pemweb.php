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
<?php foreach($kompetensi_pemweb as $kmp) : ?>
    <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II Pada Kompetensi Keahlian Rekayasa Perangkat Lunak 5.7.2 Pemrograman Web</td>
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
            <td colspan="3">LOG.OO01.001.01<br>Melakukan Komunikasi Kerja Timbal Balik</td>
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
                <li>Elemen: Mengkomunikasikan informasi tentang tugas, proses, peristiwa atau keahlian-keahlian.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1.	Suatu pilihan teknik komunikasi yang tepat , misalnya telpon, secara langsung, laporan tertulis, sketsa-sketsa dsb, digunakan.<br>
                    1.2.	Pengoperasian ganda yang melibatkan beberapa topik/area dikomunikasikan.<br>
                    1.3.	Mendengar dilakukan tanpa terus menerus menginterupsi (memotong) pembicara yang sedang berbicara.<br>
                    1.4.	Pertanyaan-pertanyaan digunakan untuk mendapatkan informasi ekstra.<br>
                    1.5.	Sumber-sumber informasi yang benar dikenali.<br>
                    1.6.	Informasi dipilih dan diurutkan dengan tepat.<br>
                    1.7.	Laporan lisan dan tertulis dilakukan bila perlu. <br>
                    1.8.	Komunikasi didemonstrasikan baik dalam situasi akrab maupun tidak akrab dan untuk individu dan kelompok yang akrab maupun tidak akrab.
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
                <li>Elemen: Berpartisipasi dalam diskusi kelompok untuk mencapai hasil-hasil kerja yang tepat.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1.	Tanggapan-tanggapan dicari dan diberikan untuk orangorang dalam kelompok. <br>
                    2.2.	Kontribusi yang membangun dibuat berkenaan dengan proses produksi terkait. <br>
                    2.3.	Cita-cita dan tujuan dikomunikasikan.
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
                <li>Elemen: Mewakili pandangan kelompok terhadap orang lain.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Pandangan, pendapat orang lain dimengerti dan digambarkan dengan akurat.
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
            <td colspan="3">LOG.OO01.002.01<br>Menerapkan Prinsip-Prinsip Keselamatan Dan Kesehatan Kerja Di Lingkungan Kerja</td>
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
                <li>Elemen: Mengikuti praktek praktek kerja yang aman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Melaksanakan kerja dengan aman sehubungan dengan kebijakan dan prosedur perusahaan serta persyaratan perundang-undangan. <br>
                    1.2	Melakukan kegiatan rumah tangga perusahaan sesuai dengan prosedur perusahaan.<br>
                    1.3	Mengerti dan mendemonstrasikan tanggung jawab dan tugas-tugas karyawan dalam kegiatan sehari hari.<br>
                    1.4	Memakai dan menyimpan perlengkapan pelindung diri sesuai  dengan prosedur perusahaan.<br>
                    1.5	Menggunakan semua perlengkapan dan alat-alat keselamatan sesuai dengan persyaratan perundang-undangan dan prosedur perusahaan.<br>
                    1.6	Mengenali dan mengikuti tanda-tanda/simbol sesuai instruksi.<br>
                    1.7 Melaksanakan semua pedoman penanganan sesuai dengan persyaratan, prosedur perusahaan dan pedoman Komisi Kesehatan dan Keselamatan Kerja Nasional yang sah.<br>
                    1.8	Mengenali dan mendemonstrasikan perlengkapan darurat dengan tepat.
                </div>
            </ol>
            </td>
            <td>
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
                <li>Elemen: Mengeksekusi source code</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menggunakan source code dieksekusi sesuai dengan mekanisme eksekusi source code dari tools pemrograman<br>
                    2.2	Mengidentifikasi perbedaan antara running, debugging, atau membuat executable file 
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
                <li>Elemen: Mengidentifikasi hasil eksekusi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Merencanakan source code berhasil dieksekusi sesuai skenario. <br>
                    3.2	Mengidentifikasi jika eksekusi source code gagal/tidak berhasil, sumber permasalahan.
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
            <td colspan="3">LOG.0001.004.01<br>Merencanakan Tugas Rutin</td>
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
                    1.1	Instruksi-instruksi tentang prosedur diperoleh, dimengerti dan bila perlu dijelaskan.<br>
                    1.2	Spesifikasi yang	relevan	terhadap hasil-hasil tugas diperoleh, dimengerti dan bila perlu dijelaskan.<br>
                    1.3	Hasil-hasil tugas dikenali.<br>
                    1.4	Syarat-syarat tugas seperti waktu penyelesaian dan ukuran kualitas dikenali.
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
                <li>Elemen: Merencanakan langkah- langkah yang dibutuhkan untuk menyelesaikan tugas</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Berdasarkan instruksi-instruksi dan spesifikasi-spesifikasi yang ada, langkah-langkah atau kegiatan-kegiatan individu yang diperlukan untuk melaksanakan tugas dimengerti dan bila perlu dijelaskan.<br>
                    2.2	Rangkaian kegiatan yang perlu diselesaikan tercantum dalam rencana. <br>
                    2.3	Langkah-langkah dan hasil yang direncanakan diperiksa untuk menjamin kesesuaian dengan instruksi-instruksi dan spesifikasi-spesifikasi yang relevan
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
                <li>Elemen: Mengulas Rencana</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Hasil-hasil dikenali dan dibandingkan dengan sasaran- sasaran (yang direncanakan) instruksi-instruksi tugas, spesifikasi-spesifikasi dan syarat-syarat tugas. <br>
                    3.2	Jika perlu, rencana diperbaiki untuk memenuhi sasaran- sasaran dan syarat-syarat tugas yang lebih baik.
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
            <td colspan="3">LOG.0002.003.01<br>Melakukan Pekerjaan Yang Membutuhkan Kerjasama Tim</td>
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
                <li>Elemen: Menentukan peran dan lingkup tim</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Peran dan lingkup tim diidentifikasi dari informasi yang tersedia.<br>
                    1.2	Parameter tim, laporan hubungan dan tanggung jawab diidentifikasi dari diskusi tim serta sumber eksternal yang tepat.
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
                <li>Elemen: Mengidentifikasi peran dan tanggung jawab sendiri dalam tim</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Peran dan tanggung jawab sendiri di dalam lingkungan tim diidentifikasi<br>
                    2.2	Peran dan tanggung jawab anggota-anggota tim lainnya diidentifikasi dan dikenali. <br>
                    2.3	Laporan hubungan di dalam tim dan di luar	tim diidentifikasi.
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
                <li>Elemen: Merencanakan kegiatan tim</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Memberikan kontribusi untuk pengembangan rencana kerja tim berdasarkan pemahaman peran dan parameter tim dan keterampilan serta kompetensi sendiri
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
                <li>Elemen: Bekerja sebagai anggota tim</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Bentuk komunikasi yang efektif dan tepat digunakan serta interaksi dilakukan dengan anggota tim yang memberikan kontribusi untuk mengetahui kegiatan dan tujuan tim <br>
                    4.2	Kontribusi yang efektif dan sesuai dibuat untuk melengkapi aktivitas dan sasaran tim, berdasarkan keterampilan dan kompetensi masing-masing. <br>
                    4.3	Pedoman pelaporan yang disetujui tim diikuti dengan menggunakan prosedur operasi (kerja) yang terstandar (SOP).
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
            <td colspan="3">TIK.OP01.002.01<br>Mengidentifikasi Aspek Kode Etik Dan HKI di Bidang TIK</td>
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
                <li>Elemen: Mengidentifikasi kode etik yang berlaku di dunia TIK.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Norma	yang	berlaku	di	dunia TIK	dapat diidentifikasi.<br>
                    1.2	Aspek legal atas dokumen elektronik hasil karya orang lain dapat dipahami.
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
                <li>Elemen: Mengidentifikasi hal-hal yang berkaitan dengan HKI di dunia TIK.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Copyright piranti lunak dan isu hukum berkaitan dengan menggandakan dan membagi file dapat dipahami. <br>
                    2.2	Akibat yang dapat terjadi jika bertukar file pada suatu jaringan internet dapat dipahami. <br>
                    2.3	Istilah-istilah shareware, freeware dan user license dapat dikenal dan dipahami.
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
                <li>Elemen: Membuat modul pengambilan data dan informasi log</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mekanisme pengumpulan log aplikasi untuk analisis ditentukan. <br>
                    3.2	Modul	pengambilan	data	log dari aplikasi berjalan dibuat.
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
            <td colspan="3">J.620100.004.01<br>Menggunakan Struktur Data</td>
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
                    1.1	Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.<br>
                    1.2	Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.
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
                <li>Elemen: Menerapkan struktur data dan akses terhadap struktur data tersebut</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Struktur data diimplementasikan sesuai dengan bahasa pemrograman yang akan dipergunakan. <br>
                    2.2	Akses terhadap data dinyatakan dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai.
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
            <td colspan="3">J.620100.005.01<br>Mengimplementasikan User Interface</td>
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
                    1.1	Rancangan user interface diidentifikasi sesuai kebutuhan.<br>
                    1.2	Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses. <br>
                    1.3	Urutan dari akses komponen user interface dialog dijelaskan. <br>
                    1.4	Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat.
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
                <li>Elemen: Melakukan implementasi rancangan user  interface</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Menu program sesuai dengan rancangan program diterapkan. <br>
                    2.2 Penempatan user interface dialog diatur secara sekuensial. <br>
                    2.3 Setting aktif-pasif komponen user interface dialog disesuaikan dengan urutan alur proses. <br>
                    2.4	Bentuk style dari komponen user interface ditentukan. <br>
                    2.5	Penerapan simulasi dijadikan suatu proses yang sesungguhnya.
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
            <td colspan="3">J.620100.007.02<br>Mengimplementasikan Rancangan Entitas dan Keterkaitan antar Entitas</td>
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
                    1.1.	Entitas yang menggambarkan sistem yang dibuat dapat diidentifikasikan sesuai dokumen perancangan<br>
                    1.2.	Berbagai diagram dapat dibuat dari entity yang telah didefinisikan
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
                <li>Elemen: Membuat query informasi dasar terhadap model data yang telah dikembangkan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1.	Informasi yang diperlukan oleh aplikasi dapat dihasilkan dengan efisien dari model yang dibuat <br>
                    2.2.	Diagram berdasar entitas dan hubungan yang telah diidentifikasi dapat diimplementasikan menggunakan tools yang ada
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.009.02<br>Menggunakan Spesifikasi Program</td>
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
                <li>Elemen: Menggunakan metode pengembangan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Metode pengembangan aplikasi (software development) didefinisikan. <br>
                    1.2	Metode pengembangan aplikasi (software development) dipilih sesuai kebutuhan.
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
                <li>Elemen: Menggunakan diagram program dan deskripsi program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Diagram program dengan metodologi pengembangan sistem didefinisikan.  <br>
                    2.2	Metode pemodelan, diagram objek dan diagram komponen digunakan pada implementasi program sesuai dengan spesifikasi.
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
                <li>Elemen: Menerapkan hasil pemodelan ke dalam pengembangan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Hasil pemodelan yang mendukung kemampuan metodologi dipilih sesuai spesifikasi.  <br>
                    3.2	Hasil pemrograman (Integrated Development Environment-IDE) yang mendukung kemampuan metodologi bahasa pemrograman dipilih sesuai spesifikasi.
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
                <li>Elemen: Melakukan konfigurasi tools untuk pemrograman</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Target hasil dari konfigurasi ditentukan. <br>
                    1.2	Tools pemrograman setelah dikonfigurasikan, tetap bisa digunakan sebagaimana mestinya.
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
                <li>Elemen: Menggunakan tools sesuai kebutuhan pembuatan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Fitur-fitur dasar yang dibutuhkan untuk mendukung pembuatan program diidentifikasikan. <br>
                    2.2	Fitur-fitur dasar tools untuk pembuatan program dikuasai.
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.620100.017.02<br>Mengimplementasikan Pemrograman Terstruktur</td>
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
                    1.1	Tipe data yang sesuai standar ditentukan. <br>
                    1.2	Syntax program yang dikuasai digunakan sesuai standar. <br>
                    1.3	Struktur kontrol program yang dikuasai digunakan sesuai standar.
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
                <li>Elemen: Membuat program sederhana</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat. <br>
                    2.2	Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.
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
                <li>Elemen: Membuat program menggunakan prosedur dan fungsi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program.<br>
                    3.2	Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program. <br>
                    3.3	Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program. <br>
                    3.4	Keterangan untuk setiap prosedur dan fungsi telah diberikan.
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
                <li>Elemen: Membuat program menggunakan array</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Dimensi array telah ditentukan.<br>
                    4.2	Tipe data array telah ditentukan. <br>
                    4.3	Panjang array telah ditentukan.<br>
                    4.4	Pengurutan array telah digunakan.
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
                <li>Elemen: Membuat program untuk akses file</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    5.1	Program untuk menulis data dalam media penyimpan telah dibuat. <br>
                    5.2	Program untuk membaca data dari media penyimpan telah dibuat.
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
                <li>Elemen: Mempersiapkan perangkat lunak aplikasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1.	Perangkat lunak aplikasi SQL telah dipasang<br>
                    1.2.	Perangkat lunak aplikasi SQL dijalankan
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
                <li>Elemen: Menggunakan fitur aplikasi SQL</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1.	Fitur pengolahan DML diidentifikasikan <br>
                    2.2.	Fitur pengolahan DML dieksekusi sesuai kebutuhan
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
        <tr>
            <td>
            <ol start="3">
                <li>Elemen: Mengisi Tabel</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1. Table diisi data menggunakan perintah DML<br>
                    3.2. Indeks dibangkitkan<br>
                    3.3. View tabel dibentuk sesuai kebutuhan
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el3 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el3?>"><?= $kmp->buktiunit12el3?></a>

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
                    4.1. Fitur pengolahan DML diidentifikasikan<br>
                    4.2. Perintah DML dipergunakan untuk manipulasi antar tabel<br>
                    4.3. Perintah DML dipergunakan untuk manipulasi antar view<br>
                    4.4. Perintah DML ditulis secara efisien
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el4 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el4?>"><?= $kmp->buktiunit12el4?></a>

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
                    5.1. Stored Procedure dibuat dengan perintah SQL <br>
                    5.2. Prosedur diuji diperiksa input dan outputnya
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el5 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el5?>"><?= $kmp->buktiunit12el5?></a>

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
                    6.1. Function dibuat dengan perintah SQL <br>
                    6.2.	Perintah SQL pada function ditulis secara efisien
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el6 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el6?>"><?= $kmp->buktiunit12el6?></a>

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
                    7.1.	Trigger didefinisikan dengan perintah SQL<br>
                    7.2.	Kesesuaian hasil trigger diuji
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el7 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el7?>"><?= $kmp->buktiunit12el7?></a>

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
                    8.1. Perubahan data dengan perintah commit dilakukan SQL<br>
                    8.2. Pembatalan penulisan data dilakukan dengan rollback
                </div>
            </ol>
            </td>
            <?php if ($kmp->unit12el8 == 1) {?>
                <td>✓</td>
                <td></td>
            <?php }else {?>
                <td></td>
                <td>✓</td>
            <?php }?>
            <td>
            <a href="<?= base_url('assets/')?>upload/<?= $kmp->buktiunit12el8?>"><?= $kmp->buktiunit12el8?></a>

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
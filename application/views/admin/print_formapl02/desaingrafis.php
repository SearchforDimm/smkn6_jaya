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
    <?php foreach ($kompetensi_desaingrafis as $kmp) :?>    
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
            <ol>
                <li>Elemen:Mengembangkan persyaratan fungsi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Persyaratan fungsi yang akurat, komplit dan sesuai prioritas  diidentifikasi sesuai keperluan dengan referensi semua tipe media. <br>
                    1.2	Persyaratan yang berlawanan dan overlapping diidentifikasi. <br>
                    1.3	Persyaratan fungsi didokumentasi dan divalidasi oleh klien. <br>
                    1.4	Sumber-sumber dan pembiayaan yang tersedia diidentifikasi dan divalidasi oleh klien.
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
                <li>Elemen:Memilih peralatan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Produk-produk dan peralatan yang relevan diidentifikasi dan dievaluasi dengan referensi persyaratan fungsi. <br>
                    2.2	Kemandirian produk dan peralatan diidentifikasi dan dianalisa dengan referensi pada persyaratan fungsi dan arsitektur sistem. <br>
                    2.3	Produk terbaik dan solusi peralatan, termasuk keterbatasan-keterbatasan diidentifikasi dan didokumentasikan. <br>
                    2.4	Peralatan dipilih dan dipesan sebagaimana diperlukan sehubungan dengan kebijaksanaan perusahaan penjualan.
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
                <li>Elemen:Mengkonfigurasi dan menguji peralatan yang telah dipasang</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                3.1	Peralatan dipasang dan dikonfigurasi menurut petunjuk dari vendor dengan referensi pada sistem arsitektur dan persyaratan fungsi pelanggan.<br>
                3.2	Sistem arsitektur dan konfigurasi disesuaikan sebagaimana keperluan. <br>
                3.3	Tes disiapkan dan dijadwalkan untuk dilaksanakan sebagaimana keperluan.<br>
                3.4	Error dilacak, diterjemahkan dan diperbaiki sebagaimana keperluan.  <br>
                3.5	Perubahan dibuat sebagaimana diperlukan berdasar pada hasil pengujian. <br>
                3.6	Konfigurasi peralatan didokumentasikan sesuai permintaan pelanggan. <br>
                3.7	Implikasi pembuatan professional diidentifikasi, didokumentasi, dan dilaporkan dengan referensi pada kebijaksanaan perusahaan.
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
                <li>Elemen:Menggunakan peralatan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                4.1	Pendidikan dan pelatihan pemakai peralatan dilakukan sesuai keperluan dengan referensi pada kebijaksanaan perusahaan. <br>
                4.2	Peralatan digunakan sesuai petunjuk dari vendor. <br>
                4.3	Peralatan dievaluasi berdasarkan referensi kebutuhan klien. <br>
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM01.012.01<br>Mengikuti Prosedur Kesehatan, Keselamatan dan Keamanan Kerja</td>
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
                <li>Elemen:Mengembangkan persyaratan fungsi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Prosedur kesehatan, keselamatan dan keamanan dipatuhi dalam hubungannya dengan kebijakan organisasi legislasi yang relevan, persyaratan asuransi, dan rencana keamanan dimana sesuai. <br>
                    1.2	Pelanggaran dalam prosedur kesehatan, keselamatan dan keamanan diidentifikasikan dan dengan sesegera mungkin dilaporkan. <br>
                    1.3	Bekerja dengan aman dan dipastikan bahwa semua aktivitas kerja dilakukan dengan cara yang aman dan tidak menimbulkan bahaya bagi rekan sekerja atau masyarakat.
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
                <li>Elemen:Keadaan Darurat</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Sesi darurat dan yang potensial untuk menjadi darurat dikenali, serta ditentukan dan diambil langkah yang diperlukan dalam jangkauan tanggung jawab individu. <br>
                    2.2	Prosedur darurat diikuti dalam hubungannya dengan prosedur organisasi. <br>
                    2.3	Bantuan dari kolega dan / atau pihak berwenang yang lain dicari bila dinilai perlu. <br>
                    2.4	Detail sesi darurat dilaporkan secara akurat sebagaimana dibutuhkan dalam hubungannya dengan kebijakan organisasi.
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
                <li>Elemen:Memelihara standar keamanan pribadi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Pakaian keamanan yang sesuai, sepatu dan perlengkapan perlindungan pribadi digunakan. <br>
                    3.2	Pengukuran dilakukan untuk mencegah luka atau kerusakan yang berhubungan dengan aktivitas tempat kerja dan bahaya tempat kerja dapat dikontrol. <br>
                    3.3	Semua penanganan manual dalam hubungannya dengan persyaratan legal, kebijakan perusahaan dan panduan kesehatan dan keselamatan nasional dilakukan. <br>
                    3.4	Untuk mempertahankan lingkungan kerja dalam kondisi yang aman diperbantukan.
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
                <li>Elemen:Menggunakan peralatan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Isu kesehatan dan keselamatan tempat kerja yang membutuhkan perhatian diidentifikasi. <br>
                    4.2	Isu kesehatan dan keselamatan yang berhubungan dengan pekerjaan dengan orang yang didesain dalam hubungannya dengan persyaratan organisasi dan legislasi ditingkatkan.
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
            <td colspan="3">TIK.MM01.032.01<br>Membuat, Memanipulasi dan Menggabung Gambar 2D  </td>
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
                <li>Elemen:Melakukan pekerjaan dengan gambar digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Terminologi digital imaging digunakan dengan tepat dalam konteks yang ditentukan. <br>
                    1.2	Sejumlah format file grafik, manajemen file dan sistem transfer untuk storing, arriving, importing, exporting dan transfer digital images digunakan sebagai file elektronik. <br>
                    1.3	Vektor terkini dan program software untuk bitamapped graphic editing, serta properti dari Vector dan bitmapped images ditentukan. <br>
                    1.4	Bitmapped diubah ke Vector dan sebaliknya bila perlu, untuk pekerjaan-pekerjaan tertentu. <br>
                    1.5	Alat scan dioperasikan untuk mengubah continuous tone atau line image ke digitised data dengan memperhatikan tonal detail, half tones dan image correction.
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
                <li>Elemen:Menggunakan software grafik multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Software video digital yang tepat untuk pekerjaan tersebut dinilai dan dipilih. <br>
                    2.2	Software digital video editing digabungkan untuk menggabungkan aset video. <br>
                    2.3	Variasi pada video frame yang dibutuhkan dikontrol untuk pekerjaan yang akan dilakukan.<br>
                    2.4	Teknik time stamping diterapkan pada video frames yang sesuai dengan pekerjaan yang akan dilakukan.<br>
                    2.5	Video digital disimpan dengan menggunakan teknik file yang tepat.
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
                <li>Elemen:Membuat desain grafik multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Video track single dan multiple diedit untuk  mencapai output yang telah ditentukan. <br>
                    3.2	Multiple tracks dari video digital sesuai dengan spesifikasi digabungkan.<br>
                    3.3	Efek digital digunakan untuk modifikasi dan integrasi video tracks sesuai dengan spesifikasi.<br>
                    3.4	Time encoding diterapkan pada edited digital  video tracks single dan multiple sesuai dengan spesifikasi. <br>
                    3.5	Video track disisipkan pada rangkaian produksi multimedia sesuai dengan spesifikasi.
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
                <li>Elemen:Menyajikan rangkaian video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Desain untuk solusi paling tepat untuk digital imaging dilaporkan. <br>
                    4.2	Dibuat grafik yang menggunakan prinsip desain visual dengan menggunakan software yang sudah disiapkan untuk menghasilkan grafik bitmap atau Vector dan digital artwork.<br>
                    4.3	Teknik digital artwork 2D termasuk penggunaan dengan tepat untuk painting, editing dan pallets digunakan. <br>
                    4.4	Digital collages and montages dibuat dengan cara menyesuaikan image mode and resolusion, modifikasi gambar menggunakan  filter dan memilih  colour mode yang tepat untuk output. <br>
                    4.5	Desain grafik diedit, diperbaharui dan diperbaiki dengan menggunakan teknik seleksi yang tepat, special effect, cropping dan resizing gambar, dan menyimpan dengan menggunakan software yang disediakan. <br>
                    4.6	Gambar-gambar untuk kualitas kreatif, dramatis, dan teknis, dan ukuran file, dan kesesuaiannya dievaluasi untuk memenuhi syarat laporan <br>
                    4.7	Elemen-elemen desain visual digabungkan pada suatu rangkaian multimedia <br>
                    4.8	Grafik diuji dan dijalankan sebagai bagian dari presentasi multimedia. <br>
                    4.9	Desain disajikan dengan format yang tepat.
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
            <td colspan="3">TIK.MM01.053.01<br>Membuat Dan Memanipulasi Gambar-Gambar Digital</td>
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
                <li>Elemen:Menilai kualitas kamera digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Kecocokan software camera dengan system hardware dinilai dan dipilih software yang cocok untuk produksi. <br>
                    1.2	Resolusi pixel kamera disesuaikan dengan kualitas dan resolusi outcome / hasil yang dikehendaki.<br>
                    1.3	Kapasitas RAM kamera diperiksa untuk melihat kecocokannya dengan jumlah gambar yang perlu ditangkap kamera. <br>
                    1.4	Kecepatan shutter, panjang fokal dan mode feature kamera dinilai sesuai dengan kualitas dan kegunaan gambar yang dibutuhkan. <br>
                    1.5	Battery lithium ditangani dan disimpan sesuai dengan kebutuhan kesehatan dan keselamatan kerja.
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
                <li>Elemen:Mengambil foto dan upload gambar digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Fokus dan exposure dipertimbangkan dalam operasi kamera digital untuk memastikan penangkapan gambar sesuai dengan kebutuhan.<br>
                    2.2	Penggunaan software gambar digital dipastikan dengan benar termasuk memasukkan dan mengeluarkan software yang dipilih.<br>
                    2.3	Photo digital disimpan dan di-retrieve dengan menggunakan format file yang telah ditetapkan. <br>
                    2.4	Kamera digital di-loading dan dioperasikan sesuai dengan spesifikasi perusahaan dan sesuai dengan kualitas gambar yang akan difoto.<br>
                    2.5	IBM-PC atau Macintosh card interface / disk di-upload pada komputer dan gambar / image disimpan pada hard disk. <br>
                    2.4	File gambar fotografi dibuat dan disimpan sesuai dengan prosedur software. <br>
                    2.7	Enhance, crop, dan photographic image diubah secara elektronik untuk mengirimkan image yang dikehendaki. <br>
                    2.8	Photographic image diperiksa untuk kesesuaian dengan tujuan untuk memenuhi spesifikasi. <br>
                    2.9	Gambar fotografi untuk mode delivery yang relevan (print, CD-ROM, pendekatan visual dan keefektifan) ditentukan dan dikirim dengan benar.
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
                <li>Elemen:Menggabungkan photografi digital kedalam multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Peralatan yang dibutuhkan untuk transfer image diidentifikasi dan diorganisir.<br>
                    3.2	Stok dan materi yang dibutuhkan untuk transfer image, diidentifikasi dan diorganisir<br>
                    3.3	Peralatan teknik dioperasikan pada standar yang diperlukan untuk pentransferan yang benar.<br>
                    3.4	Hasil transfer diidentifikasi dengan jelas dan disimpan dengan aman. <br>
                    3.5	Hasil transfer dibagikan kepada personil yang relevan bilamana perlu.<br>
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
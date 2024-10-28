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
    <?php foreach ($kompetensi_desainpercetakan as $kmp) :?>
        <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Multimedia 5.7.2. Desain Grafis Percetakan</td>
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
            <td colspan="3">TIK.MM01.04.01<br>Memperagakan pengetahuan dan syarat-syarat multimedia</td>
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
                <li>Elemen:Menampilkan pengetahuan multimedia dan industri percetakan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Istilah dan perbendaharaan kata bidang multimedia digunakan secara benar dan akurat. <br>
                    1.2 Ruang lingkup produksi multimedia dideskripsikan. <br>
                    1.3 Permasalahan sehubungan dengan pembuatan produk percetakan dan produk yang berhubungan dengan multimedia dideskripsikan.
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
                    2.1	Prinsip dasar dan kewajiban sehubungan dengan bidang berikut: copyright, K3, perlindungan lingkungan, akses dan kejelasan, penghargaan industri dijabarkan. <br>
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
                3.1	Prinsip dasar dibalik fungsi-fungsi pra cetak berikut: produksi image (typesetting, scanning, graphic arts camera), penggabungan image (manual dan elektronik), image output (film, plates, direct to press) dijabarkan. <br>
                3.2 Berbagai tipe image (line, half-tone, dll) dan kegunaannya dijabarkan. <br>
                3.3	Jenis output setting yang berbeda, misalnya pengukuran layar dan sudut (angles), bentuk, dll dan menjelaskan bagaimana hal-hal tersebut mempengaruhi hasil akhir produk cetak diidentifikasi. <br>
                3.4	Berbagai jenis output yang dibutuhkan untuk jenis media dan proses percetakan yang berbeda diidentifikasi. <br>
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
                4.1	Desain yang sesuai atau tidak sesuai untuk multimedia diidentifikasi. <br>
                4.2	Kriteria untuk memilih visual, audio atau text delivery untuk menampilkan elemen informasi tertentu dijabarkan. <br>
                4.3 Bagaimana fungsi teks dapat bervariasi pada penampilan Multimedia untuk keperluan yang berbeda dijelaskan. <br>
                4.4	Kriteria untuk memilih resolusi grafik dan format dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                4.5	Kriteria untuk memilih format audio untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                4.6	Kriteria untuk memilih format video untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                4.7	Kriteria untuk memilih format animasi untuk multimedia dijabarkan dan diidentifikasi keuntungan dan keterbatasan dari berbagai format. <br>
                4.8	Platform multimedia dan persyaratan sistem komputer untuk produk multimedia yang berbeda diidentifikasi.
                4.9	Software yang sesuai untuk membuat produk multimedia diidentifikasi. <br>
                4.10	Fungsi-fungsi pada sebuah sistem navigasi efektif dijabarkan.
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
                5.1	Teori warna dari warna additive (terang); RGB dijelaskan. <br>
                5.2	Teori warna dari warna subtractive (pigmen);CMYK dijelaskan. <br>
                5.3	Hubungan antara range warna visual RGB dan CMYK dijelaskan. <br>
                5.4	Hubungan antara bayangan dan bagian berwarna gelap untuk koreksi pada suara dan warna dijelaskan. <br>
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
                6.1	Elemen biaya utama pada produksi multimedia diidentifikasi. <br>
                6.2	Cara untuk meminimalkan penggunaan material tanpa mempengaruhi kualitas hasil diidentifikasi. <br>
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
    <br>
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
            <ol>
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
                    2.2	Peran pembuatan proyek multimedia diidentifikasi dan dijelaskan secara benar. <br>
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
                    3.2	Format disk Sistem Operasi diidentifikasi secara benar. <br>
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
                    4.1	Atribut multimedia secara umum didefinisikan sesuai relasinya dengan sektor industri. <br>
                    4.2	Atribut multimedia secara spesialisasi didefinisikan sesuai relasinya dengan sektor industri. <br>
                    4.3	Kepentingan resolusi diteliti secara relevan dengan mode penampilan multimedia. <br>
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
            <td colspan="3">TIK.MM01.07.01<br>Memilih dan Memakai Software dan Hardware untuk Multimedia</td>
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
                <li>Elemen:Mengidentifikasi komponen elektronika multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Mengidentifikasi persyaratan fungsi yang akurat, komplit dan sesuai prioritas  sesuai keperluan dengan referensi semua tipe media. <br>
                    1.2	Mengidentifikasi persyaratan yang berlawanan dan overlapping. <br>
                    1.3	Mendokumentasikan Persyaratan fungsi dan memvalidasi. <br>
                    1.4	Mengidentifikasi dan memvalidasi Sumber-sumber dan pembiayaan yang tersedia.
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
                    2.2	Mengidentifikasi dan mengevaluasi Kemandirian produk dan peralatan dengan referensi pada persyaratan fungsi dan arsitektur sistem. <br>
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
                    3.2	Menyesuaikan Sistem arsitektur dan konfigurasi sebagaimana keperluan. <br>
                    3.3	Menyiapkan dan menjadwalkan Tes untuk dilaksanakan sebagaimana keperluan. <br>
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
                    4.2	menggunakan peralatan sesuai petunjuk dari vendor. <br>
                    4.3	Mengevaluasi peralatan berdasarkan referensi kebutuhan klien.
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
            <td colspan="3">TIK.MM02.032.01<br>Membuat, Memanipulasi dan Menggabung Gambar 2D</td>
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
                <li>Elemen:Melakukan pekerjaan dengan gambar digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Menggunakan terminologi digital imaging dengan tepat dalam konteks yang ditentukan. <br>
                    1.2	Menggunakan sejumlah format file grafik, manajemen file dan sistem transfer untuk storing, arriving, importing, exporting dan transfer digital images sebagai file elektronik. <br>
                    1.3	Menentukan Vektor terkini dan program software untuk bitamapped graphic editing, serta properti dari Vektor dan bitmapped images. <br>
                    1.4	Merubah bitmapped ke Vektor dan sebaliknya bila perlu, untuk pekerjaan-pekerjaan tertentu. <br>
                    1.5	Mengoperasikan alat scan untuk mengubah continuous tone atau line image ke digitised data dengan memperhatikan tonal detail, half tones dan image correction. 
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
                <li>Elemen:Menggunakan software grafik multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Menilai dan Memilih software video digital yang tepat untuk pekerjaan tersebut. <br>
                    2.2	Menggabungkan software digital video editing untuk menggabungkan aset video. <br>
                    2.3 Mengontrol variasi pada video frame yang dibutuhkan untuk pekerjaan yang akan. <br>
                    2.4 Menerapkan teknik time stamping pada video frames yang sesuai dengan pekerjaan yang akan dilakukan. <br>
                    2.5 Menyimpan video digital dengan menggunakan teknik file yang tepat.
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
                <li>Elemen:Membuat desain grafik multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Mengedit video track single dan multiple untuk mencapai output yang telah ditentukan. <br>
                    3.2	Menggabungkan multiple tracks dari video digital sesuai dengan spesifikasi. <br>
                    3.3	Menggunakan efek digital untuk modifikasi dan integrasi video tracks sesuai dengan spesifikasi <br>
                    3.4	Menerapkan time encoding pada edited digital video tracks single dan multiple sesuai dengan spesifikasi. <br>
                    3.5 Menyisipkan video track pada rangkaian produksi multimedia sesuai dengan spesifikasi.
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
                <li>Elemen:Menyajikan rangkaian video digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Melaporkan desain untuk solusi paling tepat untuk digital imaging. <br>
                    4.2	Membuat grafik yang menggunakan prinsip desain visual dengan menggunakan software yang sudah disiapkan untuk menghasilkan grafik bitmap atau Vector dan digital artwork. <br>
                    4.3	Menggunakan teknik digital artwork 2D termasuk penggunaan dengan tepat untuk painting, editing dan pallets. <br>
                    4.4	Membuat digital collages and montages dengan cara menyesuaikan image mode and resolusion, modifikasi gambar menggunakan  filter dan memilih colour mode yang tepat untuk output. <br>
                    4.5	Mengedit, memperbaharui dan memperbaiki desain grafik dengan menggunakan teknik seleksi yang tepat, special effect, cropping dan resizing gambar, dan menyimpan dengan menggunakan software yang disediakan. <br>
                    4.6	Mengevaluasi gambar-gambar untuk kualitas kreatif, dramatis, dan teknis, dan ukuran file, dan kesesuaiannya untuk memenuhi syarat laporan. <br>
                    4.7	Menggabungkan elemen-elemen desain visual pada suatu rangkaian multimedia. <br>
                    4.8	Menguji dan menjalankan grafik sebagai bagian dari presentasi multimedia. <br>
                    4.9	Menyajikan desain dengan format yang tepat.
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
            <td colspan="3">TIK.MM02.049.01<br>Menyiapkan dan Membuat Frame / Cel Berwarna</td>
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
                <li>Elemen:Membuat model warna dan tempat warna</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Dikoordinasikan dengan personil yang relevan serta dipastikan persyaratan visual dan warna sehingga persyaratan tersebut terpenuhi. <br>
                    1.2	Warna yang mencerminkan detail kerangka dalam laporan desain, dipilih. <br>
                    1.3	Model warna keseluruhan ditetapkan. <br>
                    1.4	Model warna yang dipilih untuk penyesuaian dengan media rekaman, diperiksa. <br>
                    1.5	Model warna yang dipilih sebelum digunakan, didapatkan persetujuan dari personel yang relevan untuk. <br>
                    1.6	Perubahan yang diperlukan pada model warna dibuat setelah konsultasi dengan personel yang relevan. <br>
                    1.7	Detail model warna disampaikan pada personil yang relevan bilamana perlu.
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
                <li>Elemen:Membuat model warna dan tempat warna</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Lembaran model diwarnai dengan menggunakan warna produksi yang dipilih.  <br>
                    2.2	 Semua warna dilabelisasi, diatur hingga susunannya jelas dan  logis serta dirakit dalam tempat warna produksi. <br>
                    2.3	 Model dan tempat warna tersebut dipastikan terlihat jelas dan aman. <br>
                    2.4	Model dan tempat warna disampaikan kepada personel yang relevan bilamana perlu. 
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
                <li>Elemen:Menjaga stok warna produksi dan pewarnaan tangan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Materi produksi dijaga sesuai dengan model  warna yang disepakati.  <br>
                    3.2	Pencampuran warna dilakukan supaya benar-benar sesuai dengan model warna. <br>
                    3.3	Warna-warna tersebut dipastikan tersedia dalam jumlah yang cukup untuk memenuhi kebutuhan produksi dan jumlah stok tidak melebihi batas anggaran. <br>
                    3.4	Stok disimpan dengan aman, dan dipastikan mudah diakses.
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
                <li>Elemen:Sel-sel warna</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Teknik pewarnaan digunakan  untuk membuat hasil seperti yang digambarkan dalam laporan desain.  <br>
                    4.2	Sel-sel diberi pewarnaan sehingga sel-sel itu persis cocok dengan model warna.  <br>
                    4.3	Permasalahan ditujukan kepada personel yang relevan sebelum sel-sel tersebut diselesaikan. <br>
                    4.4	Warna sel-sel tersebut dipastikan dibuat dalam batasan produksi dan memenuhi standar yang ditentukan dalam desain yang telah ditetapkan. <br>
                    4.5	Perubahan yang diperlukan untuk mewarnai sel-sel dilakukan setelah dikonsultasikan dengan personil yang sesuai. <br>
                    4.6	Karya seni ditangani dan disatukan  dengan hati-hati untuk memastikan bahwa karya seni tersebut masih bersih, tidak rusak, dan ditata dengan susunan yang ditentukan untuk tahapan produksi selanjutnya. <br>
                    4.7	Sel-sel diberi tanda dengan jelas dan dijaga keamanannya. <br>
                    4.8	Sel-sel disampaikan kepada personil yang sesuai bilamana perlu
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
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.053.01<br>Membuat Dan Memanipulasi Gambar-Gambar Digital</td>
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
                <li>Elemen:Menilai kualitas kamera digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Kecocokan software camera dengan system hardware dinilai dan dipilih software yang cocok untuk produksi. <br>
                    1.2	Resolusi pixel kamera disesuaikan dengan kualitas dan resolusi outcome / hasil yang dikehendaki. <br>
                    1.3	kapasitas RAM kamera diperiksa untuk melihat kecocokannya dengan jumlah gambar yang perlu ditangkap kamera. <br>
                    1.4	Kecepatan shutter, panjang fokal danmode feature kamera dinilai sesuai dengan kualitas dan kegunaan gambar yang dibutuhkan. <br>
                    1.5	Battery lithium ditangani dan disimpan sesuai dengan kebutuhan kesehatan dan keselamatan kerja.
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
                <li>Elemen:Mengambil foto dan upload gambar digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Fokus dan exposure dipertimbangkan dalam operasi kamera digital untuk memastikan penangkapan gambar sesuai dengan kebutuhan. <br>
                    2.2	Penggunaan software gambar digital dipastikan dengan benar termasuk memasukkan dan mengeluarkan software yang dipilih.<br>
                    2.3	Photo digital disimpan dan di-retrieve dengan menggunakan format file yang telah ditetapkan. <br>
                    2.4	Kamera digital di-loading dan dioperasikan sesuai dengan spesifikasi perusahaan dan sesuai dengan kualitas gambar yang akan difoto. <br>
                    2.5	IBM-PC atau Macintosh card interface / disk di-upload pada komputer dan gambar / image disimpan pada hard disk. <br>
                    2.6	File gambar fotografi dibuat dan disimpan sesuai dengan prosedur software. <br>
                    2.7	Enhance, crop, dan photographic image diubah secara elektronik untuk mengirimkan image yang dikehendaki. <br>
                    2.8	Photographic image diperiksa untuk kesesuaian dengan tujuan untuk memenuhi spesifikasi. <br>
                    2.9	Gambar fotografi untuk mode delivery yang relevan (print, CD-ROM,  pendekatan visual dan keefektifan ) ditentukan dan dikirim dengan benar.
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
                <li>Elemen:Menggabungkan photografi digital kedalam multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Peralatan yang dibutuhkan untuk transfer image diidentifikasi dan diorganisir.  <br>
                    3.2	Stok dan materi yang dibutuhkan untuk transfer image, diidentifikasi dan diorganisir	<br>
                    3.3	Peralatan teknik dioperasikan pada standar yang diperlukan untuk pentransferan yang benar.<br>
                    3.4	Hasil transfer diidentifikasi dengan jelas dan disimpan dengan aman.  <br>
                    3.5	Hasil transfer dibagikan kepada personil yang relevan bilamana perlu.
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
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.070.01<br>Menggabungkan Gambar 2D ke Dalam Sajian Multimedia</td>
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
                    1.1	Istilah yang benar untuk gambar digital digunakan dalam konteks yang spesifik. <br>
                    1.2	Penggunaan range format file grafik, majemen file dan sistem pemindahan ditampilkan secara benar, termasuk penyimpanan, importing, exporting, dan pemindahan gambar digital sebagai file elektronik. <br>
                    1.3	Program software untuk mengedit grafik bitmap   dan vector kontemporer diidentifikasi dan fitur- fiturnya dijelaskan<br>
                    1.4	Properties gambar vector dan bitmap   diidentifikasi dan fitur-fiturnya dijelaskan  <br>
                    1.5	Konversi dari bitmap ke gambar vector dan  sebaliknya ditampilkan untuk pekerjaan spesifik <br>
                    1.6	Peralatan scanning dioperasikan secara benar  untuk mengkonversikan nada atau garis gambar  berkelanjutan ke data digital, dengan  memperhatikan detil nada, halftone, resolusi dan koreksi gambar
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
                <li>Elemen:Menggunakan software grafik multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Grafik yang menggabungkan prinsip desain diciptakan dengan menggunakan software yang  telah dipilih <br>
                    2.2	Foto digital diedit (ditekankan dan ditambahkan) dan disimpan menggunakan software yang dipilih<br>
                    2.3	Foto digital digabungkan ke dalam rangkaian multimedia yang telah dipilih<br>
                    2.4	Hasil foto digital dievaluasi dan diinterpretasikan  secara layak untuk hasil akhir (end use) dan  dijalankan sebagai bagian dari tampilan  multimedia
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
                <li>Elemen:Menciptakan design grafik Multimedia 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Suatu design sederhana dinilai untuk solusi gambar digital yang sesuai <br>
                    3.2	Grafik yang menggabungkan prinsip desain diciptakan menggunakan software yang telah dipilih untuk menghasilkan grafik vector atau bitmap dan karya seni digital<br>
                    3.3 Grafik yang menggabungkan prinsip desain  diciptakan menggunakan software yang telah dipilih untuk menghasilkan grafik vector atau bitmap dan karya seni digital<br>
                    3.4	Susunan karya seni dan mozaik digital diciptakan  dengan menyesuaikan mode gambar dan  resolusi, modifikasi gambar menggunakan filter, memilih mode warna yang sesuai untuk hasil, dan membuat halftone serta pemisahan warna untuk prosedur percetakan yang relevan <br>
                    3.5	Desain grafik diedit (ditekankan dan ditambahkan) menggunakan teknik pemilihan yang akurat, special effect, cropping dan resize gambar, dan disimpan menggunakan software yang telah dipilih <br>
                    3.6	Elemen desain grafik disatukan ke dalam rangkaian multimedia
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
                <li>Elemen:Menampilkan karya seni digital 2D	</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Grafik diuji dan dijalankan sebagai bagian dari tampilan multimedia <br>
                    4.2	Gambar digital disiapkan secara professional untuk  tampilan multimedia menggunakan ‘mount cutter’<br>
                    4.3	Grafik diberi judul dan dilaminating sesuai ukuran tampilan<br>
                    4.4	Karya seni digital besar yang tidak berwarna  ditampilkan dibawah screened glass atau Perspex<br>
                    4.6	Gambar dipublikasikan secara elektronik bila diperlukan
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
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.071.01<br>Menggabungkan Fotografi Digital ke Dalam Sajian Multimedia</td>
        </tr>
        <tr>
            <td width="800"><b>Dapatkah Saya ..........?</b></td>
            <td width="50"><b>K</b></td>
            <td width="50"><b>BK</b></td>
            <td width="150"><b>Bukti yang relevan</b></td>
        </tr>
        <tr>
            <td>
            <ol start="1">
                <li>Elemen:Menggunakan kamera digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Kamera digital dioperasikan secara benar dengan pertimbangan fokus dan pencahayaan untuk dapat mengambil gambar digital dengan baik. <br>
                    1.2	Ditampilkan pemasukan dan pengeluaran software gambar digital yang dipilih dan peralatan serta fitur-fitur program digunakan secara benar <br>
                    1.3	Editing dan manipulasi foto serta penggunaan peralatan dan feature program  ditampilkan secara benar<br>
                    1.4	Foto digital disimpan dan dibuka menggunakan format file yang dipilih <br>
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
                <li>Elemen:Menggabungkan foto digital kedalam rangkaian multimedia</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Grafik yang menggabungkan prinsip desain diciptakan dengan menggunakan software yang  telah dipilih <br>
                    2.2	Foto digital diedit (ditekankan dan ditambahkan) dan disimpan menggunakan software yang dipilih <br>
                    2.3	Foto digital digabungkan ke dalam rangkaian multimedia yang telah dipilih<br>
                    2.4	Hasil foto digital dievaluasi dan diinterpretasikan  secara layak untuk hasil akhir (end use) dan  dijalankan sebagai bagian dari tampilan  multimedia<br>
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
                <li>Elemen:Menciptakan susunan karya seni foto digital dan grafik 2D</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Susunan karya seni dan mozaik digital diciptakan dengan menyesuaikan mode gambar dan resolusi, memodifikasi gambar menggunakan filter, memilih mode warna yang sesuai untuk hasil, dan menghasilkan halftone serta pemisahan warna untuk prosedur percetakan yang relevan
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
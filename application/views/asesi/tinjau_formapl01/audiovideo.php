<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
$tgl = date('Y-m-d');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
      .element-center {
          position: absolute;
          top:50%;
          left:50%;
      }
      
      .table-bordered td {
          border:1px solid black!important;
      }
  </style>
    <base href="<?php echo base_url(); ?>" />
    <title><?php echo $judul_web; ?> | <?= $user['nama_lengkap']?></title>
  </head>
  <body>
<div class="container">
    <br><br>
    <table class="table table-bordered">
        <tr>
            <td rowspan="3" width="150"><img src="img/logo.png" alt="" width="150" height="150"></td>
            <td colspan="4"><center><b>LSP-P1 SMK PLUS PELITA NUSANTARA</b></center></td>
        </tr>
        <tr>
            <td rowspan="2"><center><h3><b>FORMULIR</b></h3></center></td>
            <td>No. Dokumen</td>
            <td>:</td>
            <td>FR.APL.01</td>
        </tr>
        <tr>
            <td>Edisi/Revisi</td>
            <td>:</td>
            <td>01/00</td>
        </tr>
        <tr>
            <td rowspan="2" colspan="2"><center><h4><b>FR.APL.02<br>ASESMEN MANDIRI</b></h4></center></td>
            <td>Tanggal Berlaku</td>
            <td>:</td>
            <td>09 Nov 2021</td>
        </tr>
        <tr>
            <td>Halaman</td>
            <td>:</td>
            <td>-</td>
        </tr>
    </table>
    <br><br>
    <b>FR.APL.01.PERMOHONAN SERTIFIKASI KOMPETENSI</b>
    <br><br>
    <b>Bagian 1 : Rincian Data Pemohon Sertifikasi</b>
    <br>
    <p>Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini</p>
    <br>
    <b>a. Data Pribadi</b>
    <br>
    <table class="table table-borderless">
        <tr>
            <td width="325">Nama Lengkap</td>
            <td width="25">:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->nama_lengkap?></td>
        </tr>
        <tr>
            <td>No. KTP/NIK/Paspor</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->nik?></td>
        </tr>
        <tr>
            <td>Tempat / tgl. Lahir</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->tempat_lahir . ', ' . $asesi->tgl_lahir?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <?php if($asesi->jk == "Laki-Laki") { ?>
                <td style="border-bottom:1px solid black;">Laki-laki / <s>Wanita</s> *)</td>
            <?php } else {?>
                <td style="border-bottom:1px solid black;"><s>Laki-laki</s> / Wanita *)</td>
            <?php } ?>
        </tr>
        <tr>
            <td>Kebangsaan</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->kebangsaan ?></td>
        </tr>
        <tr>
            <td>Alamat rumah</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->alamat_siswa . '&emsp;&emsp;&emsp;&emsp;Kode pos : ' . $asesi->kode_pos?></td>
        </tr>
        <tr>
            <td>No. Telepon/E-mail</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= 'Rumah : - ' . ' <span style="margin-left:280px;">Kantor : </span>' . $asesi->no_telp_perusahaan . '<br>' . 'HP : ' . $asesi->no_hp_siswa . ' <span style="margin-left:212px;">E-mail : </span>' . $asesi->email ?></td>
        </tr>
        <tr>
            <td>Kualifikasi Pendidikan</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->nama_pdd?></td>
        </tr>
    </table>
    <p class="ml-3">*Coret yang tidak perlu</p>
    <br>
    <br>
    <b>b. Data Pekerjaan Sekarang</b>
    <br>
    <table class="table table-borderless">
        <tr>
            <td width="325">Nama Institusi / Perusahaan</td>
            <td width="25">:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->nama_perusahaan ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->jabatan ?></td>
        </tr>
        <tr>
            <td>Alamat kantor</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= $asesi->alamat_perusahaan . '<br>Kode pos: -'?></td>
        </tr>
        <tr>
            <td>No. Telp/Fax/E-mail</td>
            <td>:</td>
            <td style="border-bottom:1px solid black;"><?= 'Telp : ' . $asesi->no_telp_perusahaan . ' <span style="margin-left:280px;">Fax : </span>' . $asesi->no_fax . '<br>' . 'Email : ' . $asesi->email_perusahaan?></td>
        </tr>
    </table>
    <br><br>
    <b>Bagian 2: Data Sertifikasi</b>
    <br><br>
    <p>Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan, serta pengalaman kerja yang anda miliki.</p>
    <br>
    <table class="table table-bordered">
        <tr>
            <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
            <td>Judul</td>
            <td>:</td>
            <td>SKEMA SERTIFIKASI KKNI LEVEL II PADA KOMPETENSI MULTIMEDIA 5.7.4 PENGOLAHAN AUDIO VIDEO</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td><center><b>(Jangan diisi menunggu pengesahan BNSP)</b></center></td>
        </tr>
        <tr>
            <td colspan="2" rowspan="5">Tujuan Asesmen</td>
            <td>:</td>
            <?php if($asesi->tujuan_asesmen == "Sertifikasi") {?>
            <td><i class="far fa-check-square"></i> Sertifikasi</td>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Sertifikasi Ulang</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Pengakuan Kompetensi Terkini (PKT)</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Rekognisi Pembelajaran Lampau</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Lainnya</td>
            </tr>
            <?php } ?>
            <?php if($asesi->tujuan_asesmen == "Sertifikasi Ulang") {?>
            <td><i class="far fa-square"></i> Sertifikasi</td>
            <tr>
                <td></td>
                <td><i class="far fa-check-square"></i> Sertifikasi Ulang</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Pengakuan Kompetensi Terkini (PKT)</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Rekognisi Pembelajaran Lampau</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Lainnya</td>
            </tr>
            <?php } ?>
            <?php if($asesi->tujuan_asesmen == "Pengakuan Kompetensi Terkini (PKT)") {?>
            <td><i class="far fa-square"></i> Sertifikasi</td>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Sertifikasi Ulang</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-check-square"></i> Pengakuan Kompetensi Terkini (PKT)</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Rekognisi Pembelajaran Lampau</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Lainnya</td>
            </tr>
            <?php } ?>
            <?php if($asesi->tujuan_asesmen == "Rekognisi Pembelajaran Lampau") {?>
            <td><i class="far fa-square"></i> Sertifikasi</td>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Sertifikasi Ulang</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Pengakuan Kompetensi Terkini (PKT)</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-check-square"></i> Rekognisi Pembelajaran Lampau</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Lainnya</td>
            </tr>
            <?php } ?>
            <?php if($asesi->tujuan_asesmen == "Lainnya") {?>
            <td><i class="far fa-square"></i> Sertifikasi</td>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Sertifikasi Ulang</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Pengakuan Kompetensi Terkini (PKT)</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-square"></i> Rekognisi Pembelajaran Lampau</td>
            </tr>
            <tr>
                <td></td>
                <td><i class="far fa-check-square"></i> Lainnya</td>
            </tr>
            <?php } ?>
        </tr>
    </table>
    <br>
    <br>
    <p><b>Daftar Unit Kompetensi sesuai kemasan:</b></p>
    <table class="table table-bordered">
        <tr>
            <td>No.</td>
            <td>Kode Unit</td>
            <td>Judul Unit</td>
            <td><center>Jenis Standar<br>(Standar<br>Khusus/Standar<br>Internasional/SKKNI)</center></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>TIK.MM01.004.01</td>
            <td>Memperagakan pengetahuan dan syarat – syarat multimedia</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>TIK.MM01.005.01</td>
            <td>Mengidentifikasi komponen multimedia</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>TIK.MM01.007.01</td>
            <td>Memilih dan memakai software dan hardware untuk multimedia</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>TIK.MM02.062.01</td>
            <td>Menyiapkan bahan dan dokumen untuk editing</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TIK.MM02.064.01</td>
            <td>Menjalankan system editing non-linear</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>TIK.MM02.072.01</td>
            <td>Menggabungkan audio kedalam sajian multimedia</td>
            <td><center>SKKNI</center></td>
        </tr>
        <tr>
            <td>7.</td>
            <td>TIK.MM02.074.01</td>
            <td>Menggabungkan Video ke dalam sajian multimedia</td>
            <td><center>SKKNI</center></td>
        </tr>
    </table>
    <br><br>
    <b>Bagian 3 : Bukti Kelengkapan Pemohon</b>
    <br><br>
    <b>Bukti Persyaratan Dasar Pemohon</b>
    <table class="table table-bordered">
        <tr align="center">
            <td rowspan="2" width="20"><b>No.</b></td>
            <td rowspan="2"><b>Bukti Persyaratan Dasar</b></td>
            <td colspan="2"><b>Ada</b></td>
            <td rowspan="2"><b>Tidak Ada</b></td>
        </tr>
        <tr>
            <td><center><b>Memenuhi<br>Syarat</b></center></td>
            <td><center><b>Tidak<br>Memenuhi<br>Syarat</b></center></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>FC. Raport Semester 1-5</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.1</center></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>FC. PKL</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.2</center></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FC. Pelatihan Teknis</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.3</center></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>FC. KTP</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.4</center></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>FC. Kartu Keluarga</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.5</center></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Pas Photo 3x4 background merah</td>
            <td><center><i class="far fa-check-square"></center></td>
            <td><center><i class="far fa-square"></center></td>
            <td><center>3.6</center></td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td rowspan="3">
                <b>Rekomendasi (diisi oleh LSP):</b><br>
                Berdasarkan ketentuan persyaratan dasar, maka pemohon: <br>
                <?php if($asesi->status_verifikasi == 1) {?>
                    <b>Diterima/ <s>Tidak diterima</s></b> *) sebagai peserta sertifikasi <br>
                    *coret yang tidak sesuai
                <?php } else { echo 'belum ditentukan'; }?>
            </td>
            <td colspan="2"><b>Pemohon/ Kandidat:</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= $asesi->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>Tanda tangan/ <br>Tanggal</td>
            <td>
                <img src="<?= $signature->img ?>" alt="" width="200" height="150">
                <?= $asesi->tgl_siswa ?>
            </td>
        </tr>
        <tr>
            <td rowspan="4"><b>Catatan:</b></td>
            <td colspan="2"><b>Admin LSP :</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td></td>
        </tr>
        <tr>
            <td>No. Reg</td>
            <td></td>
        </tr>
        <tr>
            <td>Tanda tangan/ <br>Tanggal</td>
            <td></td>
        </tr>
    </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
$cek    = $user;
$id_user = $cek->id_siswa;
$no_pendaftaran = $cek->no_pendaftaran;
$nama    = $cek->nama_lengkap;
$id_komp = $cek->id_komp;
$kartu_pelajar  = $cek->kartu_pelajar;
$raport  = $cek->raport;
$kartu_keluarga  = $cek->kartu_keluarga;
$pas_photo  = $cek->pas_photo;
$sertifikat_pendukung  = $cek->sertifikat_pendukung;
$tgl = date('m-Y');
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>

<!-- BEGIN TOPBAR -->
          <br><br>

          <div class="flash-data-form2" data-flashdata="<?= $this->session->flashdata('msgform2'); ?>"></div>
        <!-- END TOPBAR -->
    <div class="container">
    <?php if($id_komp == 1) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_pemdas') ?>" method="post">
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
            <td>
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <!-- <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td> -->
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
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
            <td>
            <input type="radio" value="1" name="unit8el1" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el1" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el2" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el2" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el3" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el3" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el4" data-parsley-group="block20" data0radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el4" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el5" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el5" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el6" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el6" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    2.1	Membuat Algoritma untuk sorting<br>
                    2.2	Membuat Algoritma untuk searching
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit9el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el4" data-parsley-group="block26" data0radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el4" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el5" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el5" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php } ?>
<?php if($id_komp == 2) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_pemweb') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el4" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el4" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el1" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el1" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el2" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el2" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el4" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el4" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el5" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el5" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el1" data-parsley-group="block33" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el1" data-parsley-group="block33" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el2" data-parsley-group="block34" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el2" data-parsley-group="block34" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el3" data-parsley-group="block35" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el3" data-parsley-group="block35" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el4" data-parsley-group="block36" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el4" data-parsley-group="block36" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el5" data-parsley-group="block37" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el5" data-parsley-group="block37" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el6" data-parsley-group="block38" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el6" data-parsley-group="block38" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el7" data-parsley-group="block39" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el7" data-parsley-group="block39" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el7" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el8" data-parsley-group="block40" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el8" data-parsley-group="block40" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el8" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php } ?>
<?php if($id_komp == 3) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_pbo') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block7 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block11 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block12 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:: Menggunakan tools sesuai kebutuhan pembuatan program</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Mengindentifikasikan fitur-fitur dasar yang dibutuhkan untuk mendukung pembuatan program?<br>
                    2.2 Menguasai fitur-fitur dasar tools untuk pembuatan program?
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block14 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block16 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el3" data-parsley-group="block17 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el4" data-parsley-group="block18 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el5" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el5" data-parsley-group="block19 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el1" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el1" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el2" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el2" data-parsley-group="block21 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el3" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el3" data-parsley-group="block22 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el4" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el4" data-parsley-group="block23 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el5" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el5" data-parsley-group="block24 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el6" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el6" data-parsley-group="block25 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el7" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el7" data-parsley-group="block26 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el7" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el8" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el8" data-parsley-group="block27 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el8" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el4" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el4" data-parsley-group="block31 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el1" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el1" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el2" data-parsley-group="block33" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el2" data-parsley-group="block33" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el3" data-parsley-group="block34" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el3" data-parsley-group="block34" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el4" data-parsley-group="block35" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el4" data-parsley-group="block35 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el5" data-parsley-group="block36" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el5" data-parsley-group="block36 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el1" data-parsley-group="block37" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el1" data-parsley-group="block37" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el2" data-parsley-group="block38" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el2" data-parsley-group="block38" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el3" data-parsley-group="block39" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el3" data-parsley-group="block39" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el4" data-parsley-group="block40" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el4" data-parsley-group="block40 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit11el5" data-parsley-group="block41" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit11el5" data-parsley-group="block41 data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit11el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el1" data-parsley-group="block42" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el1" data-parsley-group="block42" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit12el2" data-parsley-group="block43" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit12el2" data-parsley-group="block43" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit12el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit13el1" data-parsley-group="block44" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit13el1" data-parsley-group="block44" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit13el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit13el2" data-parsley-group="block45" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit13el2" data-parsley-group="block45" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit13el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit13el3" data-parsley-group="block46" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit13el3" data-parsley-group="block46" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit13el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php } ?>
    <?php if($id_komp == 4) {?>
<b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Teknik Komputer dan Jaringan 5.7.1. Instalasi Jaringan Komputer Berbasis Kabel</td>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_instalasijaringan') ?>" method="post">
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.001.01<br>Mengumpulkan Kebutuhan Teknis Pengguna yang Menggunakan Jaringan</td>
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
                <li>Elemen:Melakukan survei teknis</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Daftar kebutuhan pengguna telah ditentukan<br>
                    1.2	Informasi yang dibutuhkan ditentukan <br>
                    1.3	Dokumen survei teknis dirancang
                </div>
            </ol>
            </td>
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Membuat daftar kebutuhan teknis pengguna jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Tabel untuk merangkum hasil survei teknis telah dipersiapkan  <br>
                    2.2	Kebutuhan teknis pengguna yang menggunakan jaringan dibuat<br>
                    2.3	Daftar jumlah kebutuhan pengguna dibuat
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.002.01<br>Mengumpulkan Data Peralatan Jaringan Dengan Teknologi yang Sesuai</td>
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
                <li>Elemen:Membuat daftar teknologi dan jaringan perangkat jaringan saat ini (existing)</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Daftar teknologi yang saat ini dipakai disusun<br>
                    1.2	Daftar perangkat jaringan yang ada beserta kinerjanya disusun
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Membuat daftar teknologi yang dapat memperbaiki kinerja jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Perkembangan yang ada dari semua teknologi yang dipakai dirangkum  <br>
                    2.2	Teknologi yang berpotensi meningkatkan kinerja jaringan ditentukan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.008.02<br>Menyiapkan Kabel Jaringan</td>
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
                <li>Elemen:Mempersiapkan peralatan dan bahan yang diperlukan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Spesifikasi jaringan diidentifikasi<br>
                    1.2	Bahan-bahan yang diperlukan disiapkan sesuai spesifikasi <br>
                    1.3	Peralatan yang sesuai disiapkan <br>
                    1.4	Alat ukur untuk pengujian disiapkan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Memasang konektor pada kabel jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Kabel dipotong sesuai keperluan dengan  mempertimbangkan standar batasan panjang maksimum kabel <br>
                    2.2	Kabel dikupas sesuai dengan ukuran konektor <br>
                    2.3	Konektor dipasang pada kabel sesuai dengan standar urutan warna <br>
                    2.4	Urutan warna kabel (jika ada warna) dipastikan sudah sesuai standar <br>
                    2.5	Bagian kabel dipasang ke dalam konektor
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menguji koneksi kabel</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Konektivitas antar pin pada kedua konektor yang berada di ujung kabel diuji dengan menggunakan alat ukur <br>
                    3.2	Hubungan antar perangkat jaringan diuji untuk memastikan konektivitas pada jaringan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.009.02<br>Memasang Kabel Jaringan</td>
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
                <li>Elemen:Merencanakan pengkabelan horizontal</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Prosedur instalasi jaringan yang aman baik dari segi elektris maupun konstruksi disiapkan<br>
                    1.2	Diagram jalur perkabelan dibuat <br>
                    1.3	Jadwal dan urutan penyelesaian pekerjaan ditentukan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menginstalasi pengkabelan horizontal</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Soket RJ-45 dipasang pada dinding di wiring closet <br>
                    2.2	Perangkat dalam wiring closet dipasang <br>
                    2.3	Terminal utama (main distribution frame) atau terminal cabang (intermediate distribution frame) dipasang jika diperlukan <br>
                    2.4	Jalur kabel disiapkan<br>
                    2.5	Pelabelan kabel dilakukan dengan benar
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Membuat dokumentasi pengkabelan terstruktur horizontal</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Topologi fisik jaringan digambarkan <br>
                    3.2	Topologi logis jaringan digambarkan <br>
                    3.3	Outlet dan jalur kabel dicatat <br>
                    3.4	Perangkat, MAC address dan IP address didokumentasikan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
    <?php }?>

    <?php if($id_komp == 5) {?>
        <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Teknik Komputer dan Jaringan 5.7.2. Konfigurasi Perangkat Jaringan Komputer</td>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_konfigurasiperangkat') ?>" method="post">
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.005.02<br>Menentukan Spesifikasi Perangkat Jaringan</td>
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
                <li>Elemen:Mempersiapkan peralatan dan bahan/materi yang diperlukan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Topologi jaringan yang membutuhkan perangkat baru ditentukan. <br>
                    1.2. Daftar perangkat jaringan dan rancangan kapasitasnya dibuat. <br>
                    1.3. Perangkat	komputer yang akan terhubung ke jaringan dipersiapkan.
                </div>
            </ol>
            </td>
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Mengumpulkan informasi mengenai perangkat jaringan yang ada di pasaran</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Daftar perangkat jaringan yang dapat memenuhi kebutuhan dari berbagai vendor dibuat.  <br>
                    2.2	Rentang kapasitas yang mencakup perangkat jaringan yang ada di pasaran dituliskan.<br>
                    2.3	Nilai kapasitas yang dapat dipenuhi oleh beberapa vendor ditentukan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menuliskan spesifikasi perangkat jaringan untuk keperluan pengguna.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1. Dokumen spesifikasi perangkat  jaringan dibuat. <br>
                    3.2. Spesifikasi yang sesuai dengan pasar dan kebutuhan dikumpulkan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.010.02<br>Memasang Jaringan Nirkabel</td>
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
                <li>Elemen:Menentukan spesifikasi perangkat</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Kebutuhan detail dari perangkat ditetapkan sesuai dengan kebutuhan jaringan saat ini dan masa yang akan datang. <br>
                    1.2. Kapasitas jaringan saat ini dan  masa yang akan datang ditetapkan sesuai dengan kebutuhan jumlah pengguna saat ini dan masa yang akan datang.  <br>
                    1.3. Kebutuhan keamanan dan manajemen jaringan ditetapkan sesuai dengan kebutuhan jaringan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menginstalasi perangkat</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1. Perangkat dengan fitur yang tepat dipilih berdasarkan kebutuhan teknis. <br>
                    2.2. Perangkat dipasang sesuai dengan kebutuhan teknis.  <br>
                    2.3. Perangkat nirkabel dikonfigurasi untuk dapat berinteraksi dengan perangkat jaringan lainnya.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menguji perangkat</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1. Rencana pengujian ditetapkan berdasarkan standar pengujian yang berlaku.<br>
                    3.2. Penyesuaian jaringan dilakukan sesuai dengan hasil pengujian.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.003.02<br>Merancang Topologi Jaringan</td>
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
                <li>Elemen:Menentukan kebutuhan pengguna secara keseluruhan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1. Ruang lingkup jaringan diidentifikasi  sesuai dengan usulan.  <br>
                    1.2. Besarnya kapasitas jaringan dihitung berdasarkan kebutuhan bisnis.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Membuat spesifikasi topologi jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1. Besaran bandwidth setiap segmen telah ditentukan.  <br>
                    2.2. Topologi lokasi penempatan perangkat jaringan telah dipilih dengan mempertimbangkan jarak dan jumlah pengguna. <br>
                    2.3. Fitur-fitur fisik dipertimbangkan sebagai hasil dari desain jaringan <br>
                    2.4.Peta jaringan sesuai dengan keadaan gedung/lapangan dibuat <br>
                    2.5.Rancangan kebutuhan perkabelan disusun. <br>
                    2.6. Biaya keseluruhan diperhitungkan <br>
                    2.7. Analisis proyeksi pengembangan jaringan dibuat.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.004.01<br>Merancang Pengaamatan Jaringan</td>
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
                <li>Elemen:Mengidentifikasi sistem operasi pada jaringan.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1.	Sistem operasi yang berjalan di jaringan diidentifikasi.   <br>
                    1.2.	Informasi cara menginstal dan mengkonfigurasi jaringan pada sistem operasi yang dipakai dikumpulkan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Membagi alamat jaringan pada perangkat jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1.	Jumlah node (host) jaringan ditentukan berdasarkan kebutuhan pengguna.  <br>
                    2.2.	Kelas atau segmen alamat jaringan ditentukan berdasarkan besarnya jumlah node (host) jaringan. <br>
                    2.3.	Node atau perangkat jaringan diberi alamat jaringan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mendokumentasikan pengalamatan jaringan.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1.	Alamat masing-masing node atau perangkat jaringan dicatat.  <br>
                    3.2.	Dokumentasi pengalamatan jaringan 
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.012.02<br>Mengkonfigurasi Switch pada Jaringan</td>
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
                <li>Elemen:Menentukan spesifikasi switch.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1.	Kapasitas jaringan disesuaikan berdasarkan dokumentasi kebutuhan bisnis saat ini. <br>
                    1.2.	Tipe dan jumlah switch ditetapkan berdasarkan kebutuhan jaringan saat ini.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Memilih switch yang tepat</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1.	Switch dengan fitur yang cocok dipilih sesuai kebutuhan. <br>
                    2.2.	Jumlah port disesuaikan dengan kebutuhan jaringan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Memasang switch</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1. Switch dan perangkat pendukungnya dipasang berdasarkan kebutuhan jaringan. <br>
                    3.2. Hubungan antar switch atau perangkat jaringan dibuat dengan menyambungkan kabel jaringan. <br>
                    3.3. Switch dikonfigurasi berdasarkan kebutuhan jaringan. <br>
                    3.4. Switch ditempatkan di area yang aman.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menguji switch pada jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1.	Perangkat switch diuji berdasarkan petunjuk pengujian. <br>
                    4.2.	Perangkat switch dipastikan terhubung dengan perangkat jaringan yang lain.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el4" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el4" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.011.02<br>Memasang Perangkat Jaringan ke dalam Sistem Jaringan</td>
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
                <li>Elemen:Menetapkan persyaratan perangkat jaringan dari pengguna.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Perangkat jaringan diidentifikasi sesuai dengan kebutuhan jaringan. <br>
                    1.2	Persyaratan dianalisis sesuai kebutuhan teknis dan pengguna. <br>
                    1.3	Persyaratan pengguna dievaluasi sesuai pedoman organisasi.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menyiapkan perangkat jaringan.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Perangkat jaringan dipilih sesuai dengan kebutuhan.  <br>
                    2.2	Perangkat jaringan dievaluasi sesuai dengan kebutuhan.  <br>
                    2.3	Perangkat jaringan ditetapkan sesuai dengan kebutuhan. <br>
                    2.4	Peraturan lisensi dan keamanan ditetapkan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Meng-install perangkat keras jaringan.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Instalasi diatur agar tidak ada gangguan pada operasional jaringan.  <br>
                    3.2	Perangkat keras dipasang sesuai dengan prosedur instalasi.<br>
                    3.3	Instalasi dikonfigurasi sesuai kebutuhan pengguna.<br>
                    3.4	Instalasi yang telah terpasang diuji untuk menjamin terpenuhinya kebutuhan pengguna.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el3" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el3" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Menyediakan dukungan untuk produk-produk yang diinstal.</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1	Dokumentasi petunjuk pengoperasian dibuat untuk pengguna.<br>
                    4.2	Instruksi secara individu pada pengguna diberikan sesuai kebutuhan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el4" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el4" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
    <?php }?>
    <?php if($id_komp == 6) {?>
        <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Teknik Komputer dan Jaringan 5.7.3. Konfigurasi Routing Pada Perangkat Jaringan Komputer</td>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_konfigurasirouting') ?>" method="post">
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000,013.02<br>Mengkonfigurasi Routing pada Perangkat Jaringan dalam Satu Autonomous System</td>
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
                <li>Elemen:Menyiapkan perangkat jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Mengiidentifikasi konfigurasi routing  <br>
                    1.2	Mententukan akses konfigurasi ke perangkat jaringan
                </div>
            </ol>
            </td>
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Mengkonfigurasi router pada perangkat jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Mengkonfigurasi Interface pada router  <br>
                    2.2 Menghubungan antar router dikonfigurasi.<br>
                    2.3 Mengaktifkan Routing pada router.<br>
                    2.4 Mengkonfigurasi Default routing 
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Menguji routing pada perangkat jaringan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Mengkoneksi antar perangkat yang terhubung ke jaringan dibangun. <br>
                    3.2 Mengkoneksi perangkat yang terhubung ke jaringan dengan perangkat lain di luar jaringan yang telah valid dicoba melalui default routing.<br>
                    3.3 Mengidentifikasikan hasil percobaan default routing.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Mendokumentasikan konfigurasi routing</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1 Mengkonfigurasi routing disimpan.  <br>
                    4.2 Membuat dokumentasi konfigurasi routing dibuat.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000,015.01<br>Memonitor Keamanan dan Pengaturan Akun Pengguna dalam Jaringan Komputer</td>
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
                <li>Elemen:Mengidentifikasi dan memodifikasi  akun pengguna agar selalu terkendali</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Mengidentifikasikan isian akun standar pengguna sesuai dengan kebijakan keamanan.   <br>
                    1.2 Mengidentifikasi hak akses user/pengguna. <br>
                    1.3 Mengatur hak akses user/pengguna sesuai kebutuhan jabatan, bagian dan pekerjaan. <br>
                    1.4  Memodifikasi akun pengguna yang telah dibuat dengan keamanan yang longgar sesuai dengan kebijakan akses dan keamanan.  <br>
                    1.5 Menampilkan pesan resmi yang sesuai dengan akun pengguna  saat pengguna log on.  <br>
                    1.6  Mengimplementasikan utilitas yang sesuai untuk menguji ketangguhan sandi yang digunakan user/pengguna. <br>
                    1.7 Meninjau ulang prosedur kendali akun untuk memastikan bahwa pengguna yang telah keluar dihapus atau dinonaktifkan akunnya. <br>
                    1.8 Memastikan layanan informasi firewall dan antivirus aktif dan telah diakses untuk mengidentifikasi ancaman keamanan yang sudah dikenal dan terbaru dengan menggunakan perangkat lunak dan atau perangkat keras yang sesuai.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Memastikan akses yang  aman ke file dan sumber daya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1 Meninjau ulang fitur-fitur akses dan keamanan yang terkandung dalam sistem operasi jaringan.  <br>
                    2.2 Mengembangkan skema kategori keamanan file. <br>
                    2.3 Mengimplementasikan peningkatan kesadaran pengguna dalam masalah pengaturan keamanan. <br>
                    2.4 Memonitor keamanan jaringan dari ancaman seperti hacker, eavesdropping, virus dan lainnya.  <br>
                    2.5 Menerapkan perangkat lunak anti virus dan firewall  pada server dan workstation.  <br>
                    2.6 Melakukan update antivirus dan firewall. <br>
                    2.7 Menerapkan fasilitas enkripsi bawaan dan tambahan dengan tepat.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mengembangkan Service Level Agreement (Perjanjian Tingkat Layanan) atau SLA</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Mengunakan perangkat lunak dari pihak ketiga yang sesuai  untuk mengevaluasi dan melaporkan keamanan dalam jaringan.  <br>
                    3.2 Meninjau ulang log dan laporan audit untuk mengidentifikasi gangguan dan ancaman keamanan.<br>
                    3.3 Melaksanakan pemeriksaan kesalahan dan aktivitas lain untuk memastikan bahwa prosedur tidak dilewati. <br>
                    3.4 Mempersiapkan serta mempresentasikan laporan audit dan rekomendasi-rekomendasi kepada manajemen senior dan persetujuan untuk penggantian diperoleh.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.611000.023.01<br>Mengganti Perangkat Jaringan Sesuai dengan Kebutuhan Baru</td>
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
                <li>Elemen:Menyiapkan Data dokumentasi dari jaringan yang berjalan</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1 Mengidentifikasi dokumentasi jaringan  sesuai dengan kebutuhan. <br>
                    1.2 Menganalisis data log dari server syslog berdasarkan prosesor dan memory.  <br>
                    1.3 Mempantau data realtime dari device dalam beberapa waktu.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Menganalisis kebutuhan secara physical</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1  Menghitung kebutuhan jumlah port berdasarkan jumlah user yang akan dipakai. <br>
                    2.2 Menyesesuaikan jumlah port dan kemampuan peralatan dengan spesifikasi peralatan yang akan dipakai.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mendokumentasi konfigurasi yang sedang beroperasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1 Mendokumentasikan konfigurasi perangkat yang akan diganti.<br>
                    3.2 Menginformasikan pengguna tentang waktu untuk melakukan penggantian peralatan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="4">
                <li>Elemen:Mengganti peralatan sesuai dengan konfigurasi sebelumnya</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    4.1 Mengganti peralatan sesuai dengan kebutuhan. <br>
                    4.2 Mengkonfigurasi peralatan  sesuai dengan dokumentasi. <br>
                    4.3 Menguji peralatan sesuai dengan kebutuhan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
    <?php }?>
    <?php if($id_komp == 7) {?>
        <b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Multimedia 5.7.1. Desain Grafis</td>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_desaingrafis') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el4" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el4" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
    <?php }?>

<?php if($id_komp == 8) {?>

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
<form action="<?php echo base_url('formapl2/tambah_formapl2_desainpercetakan') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el4" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el4" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el3" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el3" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el4" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el4" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td><b>Bukti yang relevan</b></td>
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
            <td>
            <input type="radio" value="1" name="unit8el1" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el1" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el2" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el2" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el3" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el3" data-parsley-group="block32" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php } ?>

<?php if($id_komp == 9) {?>
<b>FR.APL.02. ASESMEN MANDIRI</b>
<table class="table table-bordered">
<tr>
    <td rowspan="2">Skema Sertifikasi<br>(KKNI/<s>Okupasi</s>/Klaster)</td>
    <td>Judul</td>
    <td width="10">:</td>
    <td>Level II pada Kompetensi Keahlian Multimedia 5.7.3. Animasi 2D</td>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.052.01<br>Membuat Rekaman Gambar Berurutan Untuk Animasi</td>
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
                <li>Elemen:Merekam panel storyboard animasi</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Peralatan yang dibutuhkan untuk proses rekaman, diidentifikasi dan diorganisir <br>
                    1.2	Potongan-potongan kertas dibuat dan semua materi yang dibutuhkan untuk direkam, diorganisir; dan kesemuanya dibersihkan serta diamankan. <br>
                    1.3	Peralatan teknik dioperasikan pada suatu standar yang diperlukan dalam rekaman. <br>
                    1.4	Panel storyboard direkam pada suatu standar yang dapat diterima untuk pandangan pencitraan. <br>
                    1.5	Rekaman tersebut dipastikan sesuai dengan instruksi yang tertulis dalam laporan. <br>
                    1.6	Rekaman pada personil yang relevan diberikan bilamana diperlukan.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="2">
                <li>Elemen:Merekam adegan yang dianimasikan dan dalam tiga dimensi
                </li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    2.1	Garis image direkam pada standar yang dapat diterima untuk tinjauan pencitraan. <br>
                    2.2	Image diedit secara terpisah untuk dicocokkan dengan laporan dan disimpan untuk tinjauan. <br>
                    2.3	Adegan yang telah diedit diidentifikasi dengan jelas dan disimpan dengan  aman. <br>
                    2.4	Rekaman yang sudah selesai dibagikan kepada personil yang relevan bila perlu. <br>
                    2.5	Jenis, jumlah, standard model, dan sets yang harus dibuat, diidentifikasi.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            <ol start="3">
                <li>Elemen:Mentransfer hasil rekaman pada dunia digital</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    3.1	Peralatan yang dibutuhkan untuk transfer image diidentifikasi dan diorganisir. <br>
                    3.2	Stok dan materi yang dibutuhkan untuk transfer image, diidentifikasi dan diorganisir <br>
                    3.3	Peralatan teknik dioperasikan pada standar yang diperlukan untuk pentransferan yang benar. <br>
                    3.4	Hasil transfer diidentifikasi dengan jelas dan disimpan dengan aman. <br>
                    3.5	Hasil transfer dibagikan kepada personel yang relevan bilamana perlu.
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">TIK.MM02.064.01<br>Menjalankan Sistem Editing Non-Linear</td>
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
                <li>Elemen:Mempersiapkan penggunaan peralatan editing</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Batas waktu untuk penyelesaian berbagai tahapan proses editing ditetapkan untuk memastikan terpenuhinya tenggat waktu. <br>
                    1.2	Software yang cocok untuk memenuhi kebutuhan editing dipilih dan diperiksa untuk dapat dioperasikan <br>
                    1.3	Semua peralatan hardware editing diperiksa untuk memastikan alat tersebut berfungsi dan cocok untuk hasil yang diinginkan <br>
                    1.4	Setiap kesalahan dalam penggunaan peralatan editing ditangani sesuai prosedur organisasi <br>
                    1.5	Sumber dan materi editing habis pakai dicari dan dipastikan materi tersebut tersedia dalam jumlah cukup untuk pemenuhan jadwal editing dan anggaran <br>
                    1.6	Input device pada recording device dipasang dan diperiksa untuk memastikan masih dapat  berfungsi <br>
                    1.7	Source material diterima untuk diedit dan dipastikan formatnya sesuai dengan peralatan editing <br>
                    1.8	Source material ditangani dengan hati-hati  supaya tidak rusak <br>
                    1.9	Setiap dokumentasi yang dibutuhkan diselesaikan untuk dokumentasi tanda terima materi 
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    2.2	Fungsi program digunakan untuk membuat dan memasukkan grafik, transisi dan efek khusus ke dalam kompilasi. <br>
                    2.3	Level sound output ditempatkan <br>
                    2.4	Pengulangan kualitas teknis materi yang sudah diedit dan dimonitor untuk identifikasi masalah potensial dilakukan dalam proses editing atau digitizing, dan dilakukan tindakan remedial seperlunya untuk memperbaiki kualitas teknis <br>
                    2.5	Teknik manajemen file yang efektif digunakan sepanjang proses editing <br>
                    2.6	Back up data dilakukan pada interval reguler dan  dimonitor space hard drive pada basis reguler,serta dilakukan tindakan untuk mempertahankan <br>
                    2.7	space hard drive cukup untuk durasi edit
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    3.1	Program software editing digunakan untuk melihat urutan produksi / program dan dilakukan perbaikan editing <br>
                    3.2	Semua titik insersi diperiksa dan diedit secara bersih, halus dan sesuai dengan kebutuhan produksi <br>
                    3.3	Software dimanipulasi untuk menyelesaikan setiap masalah dengan gambar dan suara yang teridentifikasi <br>
                    3.4	File dan retrifikasi shot dan pengurutannya yang dibutuhkan sesuai dengan petunjuk operasional peralatan yang digunakan
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el3" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el3" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    4.1	 Pengulangan digitalisasi sejumlah kompilasi dilakukan dengan menggunakan format dan setting yang benar, seperti yang dibutuhkan <br>
                    4.2	 Hasil editing pada media penyimpan yang benar diputar dan dibuat copynya <br>
                    4.3 Daftar keputusan edit (EDL) dibuat dan disimpan pada disk <br>
                    4.4 Dipastikan hasil edit dan transfer dari disk dengan system editing digital ke data recorder <br>
                    4.5	Disk penyimpan editing dibersihkan ketika proses editing diputuskan sudah selesai
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el4" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el4" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    5.1	Setiap peralatan yang rusak dan perlu perbaikan dilaporkan dan didokumentasikan pada personel yang bersangkutan <br>
                    5.2	Tempat kerja ditinggalkan dalam keadaan seperti sediakala atau keadaan yang lebih baik, dengan memastikan tidak ada dampak merugikan terhadap tempat kerja
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el5" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="1" name="unit6el5" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td><br>Unit Kompetensi</td>
            <td colspan="3">J.591120.006.01<br>Melakukan Penyuntingan Suara dan Gambar Bercerita (Animatic/Previsualisation)</td>
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
                <li>Elemen:Mempersiapkan penggunaan peralatan editing</li>
                <ul>
                    <li>Kriteria Unjuk Kerja:</li>
                </ul>
                <div style="margin-left:40px">
                    1.1	Batas waktu untuk penyelesaian berbagai tahapan proses editing ditetapkan untuk memastikan terpenuhinya tenggat waktu. <br>
                    1.2	Software yang cocok untuk memenuhi kebutuhan editing dipilih dan diperiksa untuk dapat dioperasikan <br>
                    1.3	Semua peralatan hardware editing diperiksa untuk memastikan alat tersebut berfungsi dan cocok untuk hasil yang diinginkan <br>
                    1.4	Setiap kesalahan dalam penggunaan peralatan editing ditangani sesuai prosedur organisasi <br>
                    1.5	Sumber dan materi editing habis pakai dicari dan dipastikan materi tersebut tersedia dalam jumlah cukup untuk pemenuhan jadwal editing dan anggaran <br>
                    1.6	Input device pada recording device dipasang dan diperiksa untuk memastikan masih dapat  berfungsi <br>
                    1.7	Source material diterima untuk diedit dan dipastikan formatnya sesuai dengan peralatan editing <br>
                    1.8	Source material ditangani dengan hati-hati  supaya tidak rusak <br>
                    1.9	Setiap dokumentasi yang dibutuhkan diselesaikan untuk dokumentasi tanda terima materi 
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php } ?>

<?php if($id_komp == 10) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_audiovideo') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el6" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el6" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el4" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el4" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el4" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el4" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el5" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el5" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el3" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el3" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el4" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el4" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el3" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el4" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el4" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php }?>

<?php if($id_komp == 11) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_pengoperasianaplikasi') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el4" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el4" data-parsley-group="block12" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el4" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el4" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el5" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el5" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row">
         <div class="container-fluid">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad" style="margin-top:-60px;">
                        <div class="m-signature-pad" style="margin-left:-50px">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php }?>

<?php if($id_komp == 12) {?>
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
<form action="<?php echo base_url('formapl2/tambah_formapl2_pelayananperbankan') ?>" method="post">
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
            <td>
            <input type="hidden" name="id_siswa" value="<?php echo $id_user ?>">
            <input type="hidden" name="no_pendaftaran" value="<?php echo $no_pendaftaran ?>">
            <input type="radio" value="1" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el1" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el2" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el3" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el4" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el4" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit1el5" data-parsley-group="block5" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit1el5" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el1" data-parsley-group="block6" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el2" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el2" data-parsley-group="block7" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit2el3" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit2el3" data-parsley-group="block8" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit2el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el1" data-parsley-group="block9" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
                    4  Kebutuhan dan keluhan nasabah ditindaklanjuti sesuai dengan prosedur yang telah ditetapkan 
                </div>
            </ol>
            </td>
            <td>
            <input type="radio" value="1" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el2" data-parsley-group="block10" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit3el3" data-parsley-group="block11" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit3el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el1" data-parsley-group="block13" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el2" data-parsley-group="block14" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit4el3" data-parsley-group="block15" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit4el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el1" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el1" data-parsley-group="block16" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el2" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el2" data-parsley-group="block17" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit5el3" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit5el3" data-parsley-group="block18" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit5el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el1" data-parsley-group="block19" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit6el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit6el2" data-parsley-group="block20" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit6el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el1" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el1" data-parsley-group="block21" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit7el2" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit7el2" data-parsley-group="block22" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit7el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el1" data-parsley-group="block23" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el2" data-parsley-group="block24" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit8el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit8el3" data-parsley-group="block25" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit8el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el1" data-parsley-group="block26" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el2" data-parsley-group="block27" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit9el3" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit9el3" data-parsley-group="block28" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit9el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el1" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el1" data-parsley-group="block29" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el1" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el2" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el2" data-parsley-group="block30" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el2" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
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
            <td>
            <input type="radio" value="1" name="unit10el3" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
            <input type="radio" value="0" name="unit10el3" data-parsley-group="block31" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required>
            </td>
            <td>
                <select name="buktiunit10el3" class="form-control" id="">
                    <option value="">Pilih Bukti Relevan</option>
                    <option value="<?php echo $kartu_pelajar ?>"><?php echo $kartu_pelajar ?></option>
                    <option value="<?php echo $raport ?>"><?php echo $raport ?></option>
                    <option value="<?php echo $kartu_keluarga ?>"><?php echo $kartu_keluarga ?></option>
                    <option value="<?php echo $pas_photo ?>"><?php echo $pas_photo ?></option>
                    <option value="<?php echo $sertifikat_pendukung ?>"><?php echo $sertifikat_pendukung ?></option>
                </select>
            </td>
        </tr>
    </table>
    <section>
     <div class="row mt-5">
         <div class="container">
             <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="boxarea">
                    <h5>Tanda Tangan Disini!</h5>
                    <div class="signature-pad" id="signature-pad">
                        <div class="m-signature-pad">
                            <div class="m-signature-pad-body">
                                <canvas width="625" height="318"></canvas>
                            </div>
                            <div class="m-signature-pad-footer">
                                <button type="button" data-action="clear" class="btn btn-danger"><i class="fa fa-trash-o"></i> Bersihkan</button>
                                <button type="submit" id="save2" data-action="save" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
<form>
<?php }?>
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

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/assets_stisla/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="assets/assets_stisla/js/scripts.js"></script>
  <script src="assets/assets_stisla/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/assets_stisla/js/page/index-0.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
        const flashDataForm = $('.flash-data-form2').data('flashdata');
        const flashDataLogin = $('.flash-data-login').data('flashdata');

        if (flashDataForm) {
        Swal.fire({
            title: 'Kamu Berhasil Mengisi Form APL 01',
            text: flashDataForm,
            icon: 'success'
          })
        }

        if (flashDataLogin) {
        Swal.fire({
            position: 'top-end',
            title: 'Kamu Berhasil Login',
            text: flashData,
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })
        }

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
          url: "<?php echo base_url();?>signature/insert_single_signature",
          data: {'image': signaturePad.toDataURL()}
        });
      }
    }); 
  </script>
<style type="text/css">
    canvas {
    border: 1px dashed #ccc;
    border-radius: 5px;
    color: #bbbabb;
    margin-top: 65px;
    }
  .signature-pad {
      margin-left: 35px;
  }
  .m-signature-pad-footer
  {
    margin-bottom: 100px;
    margin-top: 10px;
  }
</style>
</body>
</html>
</body>
</html>
  </body>
</html>
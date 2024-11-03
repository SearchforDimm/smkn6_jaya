<?php
$cek    = $user;
$id_asesor = $cek->id_user;
$nama_lengkap = $cek->nama_lengkap;


$tgl = date('m-Y');
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$cek = $user;
$nama = $cek->nama_lengkap;
$email = '';
$level = 'Admin';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');


?>
<div class="main-content">

    <section class="section-act">

        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Form Kirim Pesan</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Kirim Pesan</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_asesor/kirim_pesan'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="content-wrapper-all">
            <div class="content-wrapper">
                <div class="message-form">
                    <form method="POST" action="<?php echo base_url('panel_asesor/kirim_pesan_aksi') ?>">
                        <?php foreach ($asesi as $as) : ?>
                            <input type="hidden" name="id_siswa" value="<?php echo $as->id_siswa ?>">
                            <input type="hidden" name="email" value="<?php echo $as->email ?>">
                            <input type="hidden" name="nama_lengkap_asesi" value="<?php echo $as->nama_lengkap ?>">
                            <input type="hidden" name="nama_lengkap" value="<?php echo $nama_lengkap ?>">
                            <input type="hidden" name="no_pendaftaran" value="<?php echo $as->no_pendaftaran ?>">
                            <input type="hidden" name="id_user" value="<?php echo $id_asesor ?>">
                            <label for="pesan">Tuliskan pesan anda untuk Asesi</label>
                            <textarea type="text" name="pesan" autofocus required></textarea>
                        <?php endforeach; ?>
                        <?php echo form_error('pesan', '<span class="text-small text-danger">', '</span>') ?>
                        <button type="submit" name="btnlogin" class="btn-message">Kirim!</button>

                    </form>
                </div>
            </div>
        </div>
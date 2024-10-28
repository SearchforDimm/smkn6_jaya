<?php
foreach ($detail as $dt) {
    $kompetensi = $dt->kompetensi;
}
?>

<?php
$cek    = $user;
$id_asesor = $cek->id_user;

$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
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
                <p>Ini Adalah Laman Detail Asesor</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Detail Asesor</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_asesor'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>


        <div class="content-row content-mt">
            <!-- Main Content -->
            <div class="main-column">
                <div class="card">
                    <div class="card-header">
                        <h5>Informasi Pribadi</h5>
                    </div>
                    <div class="card-body-detail">
                        <div class="table-responsive">
                            <table class="custom-table">
                                <?php foreach ($detail as $user) : ?>
                                    <tr>
                                        <th width="20%">Nama Lengkap</th>
                                        <th width="1%">:</th>
                                        <td><?php echo ucwords($user->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <th>:</th>
                                        <td><?php echo $user->username; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <th>:</th>
                                        <td><?php echo $user->password ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <td><?php echo $user->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td><?php echo $user->email ?></td>
                                    </tr>
                                    <tr>
                                        <th>No. Telp</th>
                                        <th>:</th>
                                        <td><?php echo $user->telp; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan</th>
                                        <th>:</th>
                                        <td><?php echo $user->jurusan; ?></td>
                                    </tr>
                            </table>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Content -->
            <div class="side-column">
                <div class="card">
                    <div class="card-body-detail-profile card-body-detail text-center">
                        <img src="<?= base_url('img/asesor/'); ?><?php echo $user->foto ?>" alt="<?php echo $user->nama_lengkap; ?>" class="profile-img">
                        <hr>
                        <div><strong>Tanggal Daftar:</strong> <?php echo date($user->tgl_daftar); ?></div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</div>
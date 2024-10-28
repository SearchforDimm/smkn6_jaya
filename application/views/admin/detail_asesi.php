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
                <p>Ini Adalah Laman Detail Asesi</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Detail Asesi</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_asesi'); ?>"> Back </a>
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
                                        <th>No. Pendaftaran</th>
                                        <td><?php echo $user->no_pendaftaran; ?></td>
                                    </tr>
                                    <tr>
                                        <th>NIK</th>
                                        <td><?php echo $user->nik; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?php echo ucwords($user->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo $user->jk; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat, Tgl Lahir</th>
                                        <td><?php echo "$user->tempat_lahir, " . $this->lib_data->tgl_id($user->tgl_lahir); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?php echo $user->alamat_siswa; ?>, <?php echo $user->desa; ?>, <?php echo $user->kec; ?>, <?php echo $user->kab; ?> <?php echo $user->kode_pos; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No. Handphone</th>
                                        <td><?php echo $user->no_hp_siswa; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kompetensi</th>
                                        <td><?php echo $kompetensi; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Content -->
            <div class="side-column">
                <div class="card">
                <div class="card-body-detail card-body-detail-profile text-center">
                        <img src="<?= base_url('assets/upload/'); ?><?php echo $user->pas_photo ?>" alt="<?php echo $user->nama_lengkap; ?>" class="profile-img">
                        <hr>
                        <div><strong>Tanggal Daftar:</strong> <?php echo date($user->tgl_siswa); ?></div>
                        <div><strong>No. Pendaftaran:</strong> <?php echo $user->no_pendaftaran; ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Information -->
        <div class="content-row job-fw">
            <div class="main-column">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="custom-table">
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <td><?php echo $user->nama_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td><?php echo $user->jabatan; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat Perusahaan</th>
                                    <td><?php echo $user->alamat_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>Email Perusahaan</th>
                                    <td><?php echo $user->email_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>No Telp Perusahaan</th>
                                    <td><?php echo $user->no_telp_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>No Fax Perusahaan</th>
                                    <td><?php echo $user->no_fax; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
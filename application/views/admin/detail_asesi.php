<?php
foreach($detail as $dt) {
    $kompetensi = $dt->kompetensi;
}
?>
    <div class="main-content">
        <section class="section">
            <section class="section-header">
                <h1>Biodata Asesi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                    <div class="breadcrumb-item active"><a href="panel_admin/data_asesi">Data Asesi</a></div>
                    <div class="breadcrumb-item">Detail Asesi</div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-9">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                <?php foreach($detail as $user) :?>
                                <tr>
                                    <th width="20%">NO. PENDAFTARAN</th>
                                    <th width="1%">:</th>
                                    <td><?php echo $user->no_pendaftaran; ?></td>
                                </tr>
                                <tr>
                                    <th>NIK</th>
                                    <th>:</th>
                                    <td><?php echo $user->nik; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>:</th>
                                    <td><?php echo ucwords($user->nama_lengkap); ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <td><?php echo $user->jk; ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat, Tgl Lahir</th>
                                    <th>:</th>
                                    <td><?php echo "$user->tempat_lahir, " . $this->lib_data->tgl_id($user->tgl_lahir); ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <td><?php echo $user->alamat_siswa; ?> , <?php echo $user->desa; ?> <?php echo $user->kec; ?> <?php echo $user->kab; ?> <?php echo $user->kode_pos; ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Tinggal</th>
                                    <th>:</th>
                                    <td><?php echo $user->alamat_siswa; ?></td>
                                </tr>
                                <tr>
                                    <th>No. Handphone</th>
                                    <th>:</th>
                                    <td><?php echo $user->no_hp_siswa; ?></td>
                                </tr>
                                <tr>
                                    <th>Kompetensi</th>
                                    <th>:</th>
                                    <td><?php echo $kompetensi; ?></td>
                                </tr>
                                </table>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <img src="<?= base_url('assets/upload/');?><?php echo $user->pas_photo?>" alt="<?php echo $user->nama_lengkap; ?>" class="" width="176">
                            </center><br><br><br>
                            <hr style="margin-top:0px;">
                            <b>Tanggal Daftar</b> : <br>
                            <?php echo date($user->tgl_siswa);?>
                            <hr>
                            <b>No. Pendaftaran : </b><?php echo $user->no_pendaftaran; ?>
                            <p>&emsp;</p><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="icon-library2"></i> <h5>Data Pekerjaan</h5>
                            <hr><br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                <tr>
                                    <th width="30%">Nama Perusahaan</th>
                                    <th width="1%">:</th>
                                    <td><?php echo $user->nama_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Jabatan</th>
                                    <th width="1%">:</th>
                                    <td><?php echo $user->jabatan; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat Perusahaan</th>
                                    <th>:</th>
                                    <td><?php echo $user->alamat_perusahaan; ?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <th>Email Perusahaan</th>
                                    <th>:</th>
                                    <td><?php echo $user->email_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>No Telp Perusahaan</th>
                                    <th>:</th>
                                    <td><?php echo $user->no_telp_perusahaan; ?></td>
                                </tr>
                                <tr>
                                    <th>No Fax Perusahaan</th>
                                    <th>:</th>
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

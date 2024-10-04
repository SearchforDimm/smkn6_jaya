    <div class="main-content">
        <section class="section">
            <section class="section-header">
                <h1>Biodata Asesor</h1>
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_admin/data_asesor">Data Asesor</a></div>
                <div class="breadcrumb-item">Detail Asesor</div>
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
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <img src="<?= base_url('img/asesor/');?><?php echo $user->foto?>" alt="<?php echo $user->nama_lengkap; ?>" class="" width="176">
                            </center><br><br><br>
                            <hr style="margin-top:0px;">
                            <b>Tanggal Daftar</b> : <br>
                            <?php echo date($user->tgl_daftar);?>
                            <hr>
                            <p>&emsp;</p><br>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

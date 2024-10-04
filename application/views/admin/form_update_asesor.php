<?php 
$cek    = $user;
$id_asesor = $cek->id_user;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ubah Data Asesor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_admin/data_asesor">Data Asesor</a></div>
                <div class="breadcrumb-item">Form Ubah Asesor</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach ($asesor as $as) : ?>
                <form action="<?php echo base_url('panel_admin/update_asesor_aksi') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                                            <label>Nama Lengkap Asesor</label>
                                            <input type="hidden" name="id_user" class="form-control" value="<?= $as->id_user?>">
                                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $as->nama_lengkap?>">
                                            <?php echo form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                    <div class="form-group">
                                        <label>Username Asesor</label>
                                        <input type="text" name="username" class="form-control" value="<?= $as->username?>">
                                        <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="<?= $as->password?>">
                                        <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?= $as->alamat?>">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?= $as->email?>">
                                        <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" name="telp" class="form-control" value="<?= $as->telp?>">
                                        <?php echo form_error('telp', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <input type="text" name="level" class="form-control" value="asesor" readonly>
                                        <?php echo form_error('level', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Jurusan</label> <br>
                                        <select name="jurusan" id="" class="custom-select">
                                            <option value="<?= $as->jurusan?>"><?= $as->jurusan?></option>
                                            <option value="RPL">RPL</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="MM">MM</option>
                                            <option value="PKM">PKM</option>
                                        </select>
                                        <?php echo form_error('jurusan', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
        <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
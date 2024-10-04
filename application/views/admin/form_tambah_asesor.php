<?php
 $now = date_create('now')->format('Y-m-d H:i:s');
 $tgl=date('d-m-Y H:i:s');
 ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Asesor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_admin/data_asesor">Data Asesor</a></div>
                <div class="breadcrumb-item">Form Tambah Asesor</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('panel_admin/tambah_asesor_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Lengkap Asesor</label>
                                        <input type="hidden" name="tgl_daftar" class="form-control" value="<?= $now?>">
                                        <input type="text" name="nama_lengkap" class="form-control">
                                        <?php echo form_error('nama_lengkap', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username Asesor</label>
                                        <input type="text" name="username" class="form-control">
                                        <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                        <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" name="telp" class="form-control">
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
                                            <option value="">--Pilih Jurusan--</option>
                                            <option value="RPL">RPL</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="MM">MM</option>
                                            <option value="PKM">PKM</option>
                                        </select>
                                        <?php echo form_error('jurusan', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label> <br>
                                        <input type="file" name="foto" class="form-control">
                                        <?php echo form_error('foto', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                            <button type="submit" class="btn btn-primary ">Simpan</button>
                            <button type="reset" class="btn btn-danger "> reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
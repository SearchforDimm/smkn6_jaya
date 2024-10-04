<?php 
$cek    = $user;
$id_asesor = $cek->id_user;
$nama_lengkap = $cek->nama_lengkap;
$now = date_create('now')->format('Y-m-d H:i:s');
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kirim Pesan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_asesor/kirim_pesan">Kirim Pesan</a></div>
                <div class="breadcrumb-item">Form Kirim Pesan</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('panel_asesor/kirim_pesan_aksi') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <?php foreach ($asesi as $as) : ?>
                                            <input type="hidden" name="id_siswa" value="<?php echo $as->id_siswa ?>">
                                            <input type="hidden" name="email" value="<?php echo $as->email ?>">
                                            <input type="hidden" name="nama_lengkap_asesi" value="<?php echo $as->nama_lengkap ?>">
                                            <input type="hidden" name="nama_lengkap" value="<?php echo $nama_lengkap ?>">
                                            <input type="hidden" name="no_pendaftaran" value="<?php echo $as->no_pendaftaran ?>">
                                            <input type="hidden" name="id_user" value="<?php echo $id_asesor ?>">
                                            <textarea class="form-control" name="pesan" rows="3"></textarea>
                                        <?php endforeach;?>
                                            <?php echo form_error('pesan', '<span class="text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <button type="reset" class="btn btn-danger ">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
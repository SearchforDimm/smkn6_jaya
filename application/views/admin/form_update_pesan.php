<?php 
$cek    = $user;
$id_asesor = $cek->id_user;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ubah Pesan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_admin/data_pesan">Data Pesan</a></div>
                <div class="breadcrumb-item">Form Ubah Pesan</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach ($pesan as $as) : ?>
                <form action="<?php echo base_url('panel_admin/update_pesan_aksi') ?>" method="post">
                <div class="form-group">
                    <label>Pesan</label>
                    <input type="hidden" name="id_pesan" class="form-control" value="<?= $as->id_pesan?>">
                    <input type="hidden" name="id_user" class="form-control" value="<?= $as->id_user?>">
                    <input type="hidden" name="id_siswa" class="form-control" value="<?= $as->id_siswa?>">
                    <input type="hidden" name="no_pendaftaran" class="form-control" value="<?= $as->no_pendaftaran?>">
                    <input type="hidden" name="waktu" class="form-control" value="<?= $as->waktu?>">
                    <input type="text" name="pesan" class="form-control" value="<?= $as->pesan?>">
                    <?php echo form_error('pesan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
        <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
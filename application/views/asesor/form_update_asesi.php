<?php 
$cek    = $user;
$id_asesor = $cek->id_user;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ubah Data Asesi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item active"><a href="panel_asesor">Data Asesi</a></div>
                <div class="breadcrumb-item">Ubah Data Asesi</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach ($asesi as $as) : ?>
                <form action="<?php echo base_url('panel_asesor/update_asesi_aksi') ?>" method="post">
                    <div class="form-group">
                    <label for="">No Pendaftaran</label>
                    <input type="hidden" name="id_siswa" value="<?php echo $as->id_siswa ?>">
                    <input type="hidden" name="tgl_siswa" value="<?php echo $as->tgl_siswa ?>">
                    <input type="hidden" name="status_verifikasi" value="<?php echo $as->status_verifikasi ?>">
                    <input type="hidden" name="status_pendaftaran" value="<?php echo $as->status_pendaftaran ?>">
                    <input type="hidden" name="kartu_pelajar" value="<?php echo $as->kartu_pelajar ?>">
                    <input type="hidden" name="raport" value="<?php echo $as->raport ?>">
                    <input type="hidden" name="kartu_keluarga" value="<?php echo $as->kartu_keluarga ?>">
                    <input type="hidden" name="pas_photo" value="<?php echo $as->pas_photo ?>">
                    <input type="hidden" name="sertifikat_pendukung" value="<?php echo $as->sertifikat_pendukung ?>">
                    <input type="hidden" name="agama" value="<?php echo $as->agama ?>">
                    <input type="text" name="no_pendaftaran" class="form-control" value="<?php echo $as->no_pendaftaran ?>">
                    <?php echo form_error('no_pendaftaran', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $as->password ?>">
                    <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">NIS</label>
                    <input type="text" name="nis" class="form-control" value="<?php echo $as->nis ?>">
                    <?php echo form_error('nis', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">NISN</label>
                    <input type="text" name="nisn" class="form-control" value="<?php echo $as->nisn ?>">
                    <?php echo form_error('nisn', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo $as->nik ?>">
                    <?php echo form_error('nik', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $as->nama_lengkap ?>">
                    <?php echo form_error('nama_lengkap', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control">
                        <option value="<?php echo $as->jk ?>"><?php echo $as->jk ?></option>
                        <option value="Laki-laki">Laki - laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <?php echo form_error('jk', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Pendidikan Terakhir</label>
                    <input type="text" name="pd_terakhir" class="form-control" value="<?php echo $as->pd_terakhir ?>">
                    <?php echo form_error('pd_terakhir', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $as->tempat_lahir ?>">
                    <?php echo form_error('tempat_lahir', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $as->tgl_lahir ?>">
                    <?php echo form_error('tgl_lahir', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Alamat Asesi</label>
                    <input type="text" name="alamat_siswa" class="form-control" value="<?php echo $as->alamat_siswa ?>">
                    <?php echo form_error('alamat_siswa', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Jenis Tinggal</label>
                    <input type="text" name="jenis_tinggal" class="form-control" value="<?php echo $as->jenis_tinggal ?>">
                    <?php echo form_error('jenis_tinggal', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Desa</label>
                    <input type="text" name="desa" class="form-control" value="<?php echo $as->desa ?>">
                    <?php echo form_error('desa', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Kecamatan</label>
                    <input type="text" name="kec" class="form-control" value="<?php echo $as->kec ?>">
                    <?php echo form_error('kec', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Kabupaten</label>
                    <input type="text" name="kab" class="form-control" value="<?php echo $as->kab ?>">
                    <?php echo form_error('kab', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Provinsi</label>
                    <input type="text" name="prov" class="form-control" value="<?php echo $as->prov ?>">
                    <?php echo form_error('prov', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" value="<?php echo $as->kode_pos ?>">
                    <?php echo form_error('kode_pos', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">No HP Asesi</label>
                    <input type="text" name="no_hp_siswa" class="form-control" value="<?php echo $as->no_hp_siswa ?>">
                    <?php echo form_error('no_hp_siswa', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $as->email ?>">
                    <?php echo form_error('email', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Kompetensi</label>
                    <select name="id_komp" id="" class="form-control">
                        <option value="<?php echo $as->id_komp ?>"><?php echo $as->kompetensi ?></option>
                        <?php foreach($kompetensi as $komp) {?>
                        <option value="<?= $komp->id_komp?>"><?= $komp->kompetensi?></option>
                        <?php }?>
                    </select>
                    <?php echo form_error('id_komp', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="<?php echo $as->nama_perusahaan ?>">
                    <?php echo form_error('nama_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="<?php echo $as->jabatan ?>">
                    <?php echo form_error('jabatan', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Alamat Perusahaan</label>
                    <input type="text" name="alamat_perusahaan" class="form-control" value="<?php echo $as->alamat_perusahaan ?>">
                    <?php echo form_error('alamat_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">No Telp Perusahaan</label>
                    <input type="text" name="no_telp_perusahaan" class="form-control" value="<?php echo $as->no_telp_perusahaan ?>">
                    <?php echo form_error('no_telp_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">No Fax</label>
                    <input type="text" name="no_fax" class="form-control" value="<?php echo $as->no_fax ?>">
                    <?php echo form_error('no_fax', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Email Perusahaan</label>
                    <input type="text" name="email_perusahaan" class="form-control" value="<?php echo $as->email_perusahaan ?>">
                    <?php echo form_error('email_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="">Tujuan Asesmen</label>
                    <select name="tujuan_asesmen" id="" class="form-control">
                        <option value="<?php echo $as->tujuan_asesmen ?>"><?php echo $as->tujuan_asesmen ?></option>
                        <option value="Sertifikasi">Sertifikasi</option>
                        <option value="Sertifikasi Ulang">Sertifikasi Ulang</option>
                        <option value="Pengakuan Kompetensi Terkini(PKT)">Pengakuan Kompetensi Terkini (PKT)</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <?php echo form_error('tujuan_asesmen', '<span class="text-small text-danger">', '</span>') ?>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
        <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
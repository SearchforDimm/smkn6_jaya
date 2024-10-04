<?php 
$cek    = $user;
$jurusan = $cek->jurusan;
?>
<?php if ($jurusan == 'RPL') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Kelulusan Calon Asesi Rekayasa Perangkat Lunak</h1>
        </section>
        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-3 ml-auto mb-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                </div>
                                <select class="form-control" name="thn" onchange="thn()">
                                    <?php for ($i = date('Y'); $i >= 2021; $i--) { ?>
                                    <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                                        echo "selected";
                                                                        } ?>>Tahun <?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30px;">No.</th>
                                        <th>No. Pendaftaran</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Bukti Relevan</th>
                                        <th class="text-center">Hasil Sertifikasi Mandiri</th>
                                        <th class="text-center">Status Lulus</th>
                                        <th class="text-center" width="180">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($v_siswarpl->result() as $baris) { ?>
                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('panel_asesor/download_kartupelajar/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Download Kartu Pelajar</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_raport/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Raport</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_kartukeluarga/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Kartu Keluarga</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_pasphoto/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Pas Photo</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_sertifikatpendukung/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mb-3"><i class="fas fa-check-circle"></i> Download Sertifikat Pendukung</a>
                                    </td>
                                    <td><a href="<?php echo base_url('panel_asesor/sertifikasi_mandiri/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Lihat Sertifikasi Mandiri</a></td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                            <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                            <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                            <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == '') { ?>
                                            <a href="panel_asesor/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-tidak-lulus" title="Tidak Lulus"><i class="icon-cross3"></i> Tidak Lulus</a>
                                            <a href="panel_asesor/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs tombol-lulus" title="Lulus"><i class="icon-checkmark4"></i> Lulus</a>
                                        <?php } else { ?>
                                            <a href="panel_asesor/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-batal" title="Batalkan"><i class="icon-cross3"></i> Batal</a>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    </tr>
                                <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>
<?php if ($jurusan == 'TKJ') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Kelulusan Calon Asesi Teknik Komputer dan Jaringan</h1>
        </section>
        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-3 ml-auto mb-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                </div>
                                <select class="form-control" name="thn" onchange="thn()">
                                    <?php for ($i = date('Y'); $i >= 2021; $i--) { ?>
                                    <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                                        echo "selected";
                                                                        } ?>>Tahun <?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30px;">No.</th>
                                        <th>No. Pendaftaran</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Bukti Relevan</th>
                                        <th class="text-center">Hasil Sertifikasi Mandiri</th>
                                        <th class="text-center">Status Lulus</th>
                                        <th class="text-center" width="180">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($v_siswatkj->result() as $baris) { ?>
                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('panel_asesor/download_kartupelajar/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Download Kartu Pelajar</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_raport/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Raport</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_kartukeluarga/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Kartu Keluarga</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_pasphoto/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Pas Photo</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_sertifikatpendukung/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mb-3"><i class="fas fa-check-circle"></i> Download Sertifikat Pendukung</a>
                                    </td>
                                    <td><a href="<?php echo base_url('panel_asesor/sertifikasi_mandiri/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Lihat Sertifikasi Mandiri</a></td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                            <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                            <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                            <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == '') { ?>
                                            <a href="panel_asesor/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-tidak-lulus" title="Tidak Lulus"><i class="icon-cross3"></i> Tidak Lulus</a>
                                            <a href="panel_asesor/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs tombol-lulus" title="Lulus"><i class="icon-checkmark4"></i> Lulus</a>
                                        <?php } else { ?>
                                            <a href="panel_asesor/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-batal" title="Batalkan"><i class="icon-cross3"></i> Batal</a>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    </tr>
                                <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>
<?php if ($jurusan == 'MM') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Kelulusan Calon Asesi Multimedia</h1>
        </section>
        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-3 ml-auto mb-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                </div>
                                <select class="form-control" name="thn" onchange="thn()">
                                    <?php for ($i = date('Y'); $i >= 2021; $i--) { ?>
                                    <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                                        echo "selected";
                                                                        } ?>>Tahun <?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30px;">No.</th>
                                        <th>No. Pendaftaran</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Bukti Relevan</th>
                                        <th class="text-center">Hasil Sertifikasi Mandiri</th>
                                        <th class="text-center">Status Lulus</th>
                                        <th class="text-center" width="180">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($v_siswamm->result() as $baris) { ?>
                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('panel_asesor/download_kartupelajar/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Download Kartu Pelajar</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_raport/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Raport</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_kartukeluarga/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Kartu Keluarga</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_pasphoto/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Pas Photo</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_sertifikatpendukung/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mb-3"><i class="fas fa-check-circle"></i> Download Sertifikat Pendukung</a>
                                    </td>
                                    <td><a href="<?php echo base_url('panel_asesor/sertifikasi_mandiri/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Lihat Sertifikasi Mandiri</a></td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                            <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                            <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                            <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == '') { ?>
                                            <a href="panel_asesor/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-tidak-lulus" title="Tidak Lulus"><i class="icon-cross3"></i> Tidak Lulus</a>
                                            <a href="panel_asesor/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs tombol-lulus" title="Lulus"><i class="icon-checkmark4"></i> Lulus</a>
                                        <?php } else { ?>
                                            <a href="panel_asesor/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-batal" title="Batalkan"><i class="icon-cross3"></i> Batal</a>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    </tr>
                                <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>
<?php if ($jurusan == 'PKM') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Kelulusan Calon Asesi Perbankan dan Keuangan Mikro</h1>
        </section>
        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-3 ml-auto mb-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                </div>
                                <select class="form-control" name="thn" onchange="thn()">
                                    <?php for ($i = date('Y'); $i >= 2021; $i--) { ?>
                                    <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                                        echo "selected";
                                                                        } ?>>Tahun <?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30px;">No.</th>
                                        <th>No. Pendaftaran</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th class="text-center">Bukti Relevan</th>
                                        <th class="text-center">Hasil Sertifikasi Mandiri</th>
                                        <th class="text-center">Status Lulus</th>
                                        <th class="text-center" width="180">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($v_siswapkm->result() as $baris) { ?>
                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('panel_asesor/download_kartupelajar/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Download Kartu Pelajar</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_raport/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Raport</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_kartukeluarga/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Kartu Keluarga</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_pasphoto/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1"><i class="fas fa-check-circle"></i> Download Pas Photo</a> <br>
                                        <a href="<?php echo base_url('panel_asesor/download_sertifikatpendukung/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mb-3"><i class="fas fa-check-circle"></i> Download Sertifikat Pendukung</a>
                                    </td>
                                    <td><a href="<?php echo base_url('panel_asesor/sertifikasi_mandiri/' . $baris->id_siswa) ?>" class="btn btn-sm btn-primary m-1 mt-3"><i class="fas fa-check-circle"></i> Lihat Sertifikasi Mandiri</a></td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                            <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                            <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                            <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                        <?php if ($baris->status_pendaftaran == '') { ?>
                                            <a href="panel_asesor/set_pengumuman/tdk_lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-tidak-lulus" title="Tidak Lulus"><i class="icon-cross3"></i> Tidak Lulus</a>
                                            <a href="panel_asesor/set_pengumuman/lulus/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs tombol-lulus" title="Lulus"><i class="icon-checkmark4"></i> Lulus</a>
                                        <?php } else { ?>
                                            <a href="panel_asesor/set_pengumuman/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs tombol-batal" title="Batalkan"><i class="icon-cross3"></i> Batal</a>
                                        <?php } ?>
                                        </center>
                                    </td>
                                    </tr>
                                <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>

<script type="text/javascript">
      function thn() {
        var thn = $('[name="thn"]').val();
        window.location = "panel_asesor/verifikasi/thn/" + thn;
      }

      $('[name="thn"]').select2({
        placeholder: "- Tahun -"
      });
    </script>
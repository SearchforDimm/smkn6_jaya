<?php 
$cek    = $user;
$jurusan = $cek->jurusan;
?>

<?php if($jurusan == 'RPL') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Asesi Rekayasa Perangkat Lunak</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item">Data Asesi</div>
            </div>
        </section>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kompetensi</th>
                                    <th>Status Lulus</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($asesi_rpl as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nis; ?></td>
                                    <td><?php echo $baris->nisn; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->jk; ?></td>
                                    <td><?php echo $baris->alamat_siswa; ?></td>
                                    <td><?php if($baris->id_komp == 1) {
                                        echo 'Pemrograman Dasar';
                                    } elseif ($baris->id_komp == 2) {
                                        echo 'Pemrograman Web';
                                    } elseif ($baris->id_komp == 3) {
                                        echo 'Pemrograman Berorientasi Objek';
                                    } elseif ($baris->id_komp == 4) {
                                        echo 'Instalasi Jaringan Komputer Berbasis Kabel';
                                    } elseif ($baris->id_komp == 5) {
                                        echo 'Konfigurasi Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 6) {
                                        echo 'Konfigurasi Routing Pada Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 7) {
                                        echo 'Desain Grafis';
                                    } elseif ($baris->id_komp == 8) {
                                        echo 'Desain Grafis Percetakan';
                                    } elseif ($baris->id_komp == 9) {
                                        echo 'Animasi 2D';
                                    } elseif ($baris->id_komp == 10) {
                                        echo 'Pengolahan Audio Video';
                                    } elseif ($baris->id_komp == 11) {
                                        echo 'Pengoperasian Aplikasi Komputer Akuntansi';
                                    } elseif ($baris->id_komp == 12) {
                                        echo 'Pelayanan Perbankan';
                                    }?>
                                    </td>
                                    <td align="center">
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                        <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                            <a href="<?php echo base_url('panel_asesor/detail_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/delete_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/update_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>

<?php if($jurusan == 'TKJ') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Asesi Teknik Komputer dan Jaringan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item">Data Asesi</div>
            </div>
        </section>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kompetensi</th>
                                    <th>Status Lulus</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($asesi_tkj as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nis; ?></td>
                                    <td><?php echo $baris->nisn; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->jk; ?></td>
                                    <td><?php echo $baris->alamat_siswa; ?></td>
                                    <td><?php if($baris->id_komp == 1) {
                                        echo 'Pemrograman Dasar';
                                    } elseif ($baris->id_komp == 2) {
                                        echo 'Pemrograman Web';
                                    } elseif ($baris->id_komp == 3) {
                                        echo 'Pemrograman Berorientasi Objek';
                                    } elseif ($baris->id_komp == 4) {
                                        echo 'Instalasi Jaringan Komputer Berbasis Kabel';
                                    } elseif ($baris->id_komp == 5) {
                                        echo 'Konfigurasi Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 6) {
                                        echo 'Konfigurasi Routing Pada Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 7) {
                                        echo 'Desain Grafis';
                                    } elseif ($baris->id_komp == 8) {
                                        echo 'Desain Grafis Percetakan';
                                    } elseif ($baris->id_komp == 9) {
                                        echo 'Animasi 2D';
                                    } elseif ($baris->id_komp == 10) {
                                        echo 'Pengolahan Audio Video';
                                    } elseif ($baris->id_komp == 11) {
                                        echo 'Pengoperasian Aplikasi Komputer Akuntansi';
                                    } elseif ($baris->id_komp == 12) {
                                        echo 'Pelayanan Perbankan';
                                    }?>
                                    </td>
                                    <td align="center">
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                        <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                            <a href="<?php echo base_url('panel_asesor/detail_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/delete_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/update_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>

<?php if($jurusan == 'MM') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Asesi Multimedia</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item">Data Asesi</div>
            </div>
        </section>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kompetensi</th>
                                    <th>Status Lulus</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($asesi_mm as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nis; ?></td>
                                    <td><?php echo $baris->nisn; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->jk; ?></td>
                                    <td><?php echo $baris->alamat_siswa; ?></td>
                                    <td><?php if($baris->id_komp == 1) {
                                        echo 'Pemrograman Dasar';
                                    } elseif ($baris->id_komp == 2) {
                                        echo 'Pemrograman Web';
                                    } elseif ($baris->id_komp == 3) {
                                        echo 'Pemrograman Berorientasi Objek';
                                    } elseif ($baris->id_komp == 4) {
                                        echo 'Instalasi Jaringan Komputer Berbasis Kabel';
                                    } elseif ($baris->id_komp == 5) {
                                        echo 'Konfigurasi Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 6) {
                                        echo 'Konfigurasi Routing Pada Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 7) {
                                        echo 'Desain Grafis';
                                    } elseif ($baris->id_komp == 8) {
                                        echo 'Desain Grafis Percetakan';
                                    } elseif ($baris->id_komp == 9) {
                                        echo 'Animasi 2D';
                                    } elseif ($baris->id_komp == 10) {
                                        echo 'Pengolahan Audio Video';
                                    } elseif ($baris->id_komp == 11) {
                                        echo 'Pengoperasian Aplikasi Komputer Akuntansi';
                                    } elseif ($baris->id_komp == 12) {
                                        echo 'Pelayanan Perbankan';
                                    }?>
                                    </td>
                                    <td align="center">
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                        <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                            <a href="<?php echo base_url('panel_asesor/detail_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/delete_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/update_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>

<?php if($jurusan == 'PKM') {?>
<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Asesi Perbankan dan Keuangan Mikro</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_asesor">Beranda</a></div>
                <div class="breadcrumb-item">Data Asesi</div>
            </div>
        </section>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kompetensi</th>
                                    <th>Status Lulus</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($asesi_pkm as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->no_pendaftaran; ?></td>
                                    <td><?php echo $baris->nis; ?></td>
                                    <td><?php echo $baris->nisn; ?></td>
                                    <td><?php echo $baris->nik; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->jk; ?></td>
                                    <td><?php echo $baris->alamat_siswa; ?></td>
                                    <td><?php if($baris->id_komp == 1) {
                                        echo 'Pemrograman Dasar';
                                    } elseif ($baris->id_komp == 2) {
                                        echo 'Pemrograman Web';
                                    } elseif ($baris->id_komp == 3) {
                                        echo 'Pemrograman Berorientasi Objek';
                                    } elseif ($baris->id_komp == 4) {
                                        echo 'Instalasi Jaringan Komputer Berbasis Kabel';
                                    } elseif ($baris->id_komp == 5) {
                                        echo 'Konfigurasi Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 6) {
                                        echo 'Konfigurasi Routing Pada Perangkat Jaringan Komputer';
                                    } elseif ($baris->id_komp == 7) {
                                        echo 'Desain Grafis';
                                    } elseif ($baris->id_komp == 8) {
                                        echo 'Desain Grafis Percetakan';
                                    } elseif ($baris->id_komp == 9) {
                                        echo 'Animasi 2D';
                                    } elseif ($baris->id_komp == 10) {
                                        echo 'Pengolahan Audio Video';
                                    } elseif ($baris->id_komp == 11) {
                                        echo 'Pengoperasian Aplikasi Komputer Akuntansi';
                                    } elseif ($baris->id_komp == 12) {
                                        echo 'Pelayanan Perbankan';
                                    }?>
                                    </td>
                                    <td align="center">
                                        <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="badge badge-success">Lulus</label>
                                        <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="badge badge-danger">Tidak Lulus</label>
                                        <?php } else { ?>
                                        <label class="badge badge-warning">Proses</label>
                                        <?php } ?>
                                    </td>
                                    <td align="center">
                                            <a href="<?php echo base_url('panel_asesor/detail_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/delete_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?php echo base_url('panel_asesor/update_asesi/') . $baris->id_siswa ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php }?>
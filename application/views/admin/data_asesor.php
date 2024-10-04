<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Asesor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item">Data Asesor</div>
            </div>
        </section>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <a href="panel_admin/tambah_asesor" class="btn btn-primary mb-2 ml-3">Tambah Asesor</a>
                        </div>
                        <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Jurusan</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($asesor as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->username; ?></td>
                                    <td><?php echo $baris->password; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->alamat; ?></td>
                                    <td><?php echo $baris->email; ?></td>
                                    <td><?php echo $baris->telp; ?></td>
                                    <td><?php echo $baris->jurusan; ?></td>
                                    <td align="center">
                                            <a href="<?php echo base_url('panel_admin/detail_asesor/') . $baris->id_user ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="<?php echo base_url('panel_admin/delete_asesor/') . $baris->id_user ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            <a href="<?php echo base_url('panel_admin/update_asesor/') . $baris->id_user ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
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
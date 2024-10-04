<div class="main-content">
    <section class="section">
        <section class="section-header">
            <h1>Data Pesan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item">Data Pesan</div>
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
                                    <th>No</th>
                                    <th>Pengirim</th>
                                    <th>Penerima</th>
                                    <th>Pesan</th>
                                    <th>Waktu</th>
                                    <th>Jurusan</th>
                                    <th width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($pesan as $baris) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $baris->pengirim; ?></td>
                                    <td><?php echo $baris->nama_lengkap; ?></td>
                                    <td><?php echo $baris->pesan; ?></td>
                                    <td><?php echo $baris->waktu; ?></td>
                                    <td><?php echo $baris->jurusan; ?></td>
                                    <td align="center">
                                        <a href="<?php echo base_url('panel_asesor/delete_pesan/') . $baris->id_pesan ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                        <a href="<?php echo base_url('panel_asesor/update_pesan/') . $baris->id_pesan ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
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
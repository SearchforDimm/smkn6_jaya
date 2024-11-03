<?php
$cek    = $user;
$id_asesor = $cek->id_user;

$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
$nama = $cek->nama_lengkap;
$email = '';
$level = 'Admin';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');


?>


<head>
    <style>
        /* General form layout */
        .form-group {
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 14px;
            text-align: left;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: border-color 0.2s;
        }

        /* Input and select focus effect */
        .form-group input:focus,
        .form-group select:focus {
            border-color: #3a57e8;
            outline: none;
        }

        /* Error message styling */
        .text-small.text-danger {
            font-size: 12px;
            color: #e74c3c;
            margin-top: 5px;
            display: block;
        }

        button[type="reset"] {
            margin-left: 10px;
        }

        .verif-resp {
            display: flex;
            justify-content: center;
        }

        .tombol-aksi {
            border: none;
            transition: .3s all ease;
            cursor: pointer;
        }

        .verif_red:hover {
            background-color: #dd0909;


        }

        .tombol-print:hover {
            background-color: #007bff;

        }


        /* Card styles */
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 300px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        /* Form submit and reset buttons */
        button[type="submit"],
        button[type="reset"] {
            width: 150px;
            padding: 10px;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-group {
                margin-bottom: 15px;
            }

            .form-group input,
            .form-group select {
                font-size: 13px;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            button[type="reset"] {
                margin-left: 0;
            }
        }
    </style>
</head>
<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Update Asesi</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Update Asesi</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_asesi'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="card">
            <div class="card-body">
                <?php foreach ($asesi as $as) : ?>
                    <form action="<?php echo base_url('panel_admin/update_asesi_aksi') ?>" method="post">
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
                            <input required type="text" name="password" class="form-control" value="<?php echo $as->password ?>">
                            <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">NIS</label>
                            <input required type="text" name="nis" class="form-control" value="<?php echo $as->nis ?>">
                            <?php echo form_error('nis', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input required type="text" name="nisn" class="form-control" value="<?php echo $as->nisn ?>">
                            <?php echo form_error('nisn', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input required type="text" name="nik" class="form-control" value="<?php echo $as->nik ?>">
                            <?php echo form_error('nik', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input required type="text" name="nama_lengkap" class="form-control" value="<?php echo $as->nama_lengkap ?>">
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
                            <input required type="text" name="pd_terakhir" class="form-control" value="<?php echo $as->pd_terakhir ?>">
                            <?php echo form_error('pd_terakhir', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir" class="form-control" value="<?php echo $as->tempat_lahir ?>">
                            <?php echo form_error('tempat_lahir', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input required type="text" name="tgl_lahir" class="form-control" value="<?php echo $as->tgl_lahir ?>">
                            <?php echo form_error('tgl_lahir', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Asesi</label>
                            <input required type="text" name="alamat_siswa" class="form-control" value="<?php echo $as->alamat_siswa ?>">
                            <?php echo form_error('alamat_siswa', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Tinggal</label>
                            <input required type="text" name="jenis_tinggal" class="form-control" value="<?php echo $as->jenis_tinggal ?>">
                            <?php echo form_error('jenis_tinggal', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Desa</label>
                            <input required type="text" name="desa" class="form-control" value="<?php echo $as->desa ?>">
                            <?php echo form_error('desa', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input required type="text" name="kec" class="form-control" value="<?php echo $as->kec ?>">
                            <?php echo form_error('kec', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input required type="text" name="kab" class="form-control" value="<?php echo $as->kab ?>">
                            <?php echo form_error('kab', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input required type="text" name="prov" class="form-control" value="<?php echo $as->prov ?>">
                            <?php echo form_error('prov', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input required type="text" name="kode_pos" class="form-control" value="<?php echo $as->kode_pos ?>">
                            <?php echo form_error('kode_pos', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">No HP Asesi</label>
                            <input required type="text" name="no_hp_siswa" class="form-control" value="<?php echo $as->no_hp_siswa ?>">
                            <?php echo form_error('no_hp_siswa', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input required type="text" name="email" class="form-control" value="<?php echo $as->email ?>">
                            <?php echo form_error('email', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kompetensi</label>
                            <select name="id_komp" id="" class="form-control">
                                <option value="<?php echo $as->id_komp ?>"><?php echo $as->kompetensi ?></option>
                                <?php foreach ($kompetensi as $komp) { ?>
                                    <option value="<?= $komp->id_komp ?>"><?= $komp->kompetensi ?></option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('id_komp', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input required type="text" name="nama_perusahaan" class="form-control" value="<?php echo $as->nama_perusahaan ?>">
                            <?php echo form_error('nama_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <input required type="text" name="jabatan" class="form-control" value="<?php echo $as->jabatan ?>">
                            <?php echo form_error('jabatan', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Perusahaan</label>
                            <input required type="text" name="alamat_perusahaan" class="form-control" value="<?php echo $as->alamat_perusahaan ?>">
                            <?php echo form_error('alamat_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">No Telp Perusahaan</label>
                            <input required type="text" name="no_telp_perusahaan" class="form-control" value="<?php echo $as->no_telp_perusahaan ?>">
                            <?php echo form_error('no_telp_perusahaan', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">No Fax</label>
                            <input required type="text" name="no_fax" class="form-control" value="<?php echo $as->no_fax ?>">
                            <?php echo form_error('no_fax', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email Perusahaan</label>
                            <input required type="text" name="email_perusahaan" class="form-control" value="<?php echo $as->email_perusahaan ?>">
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

                        <div class="verif-resp">

                            <button type="submit" class="tombol-aksi tombol-print">Submit</button>
                            <button type="reset" class="tombol-aksi verif_red">Reset</button>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
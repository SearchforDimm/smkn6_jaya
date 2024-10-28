<?php
$now = date_create('now')->format('Y-m-d H:i:s');
$tgl = date('d-m-Y H:i:s');
?>

<?php
$cek = $user;
$id_user = $cek->id_user;
$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$cek = $user;
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
                <p>Ini Adalah Laman Tambah Asesor</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Tambah Asesor</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_asesor'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>


        <div class="card">
            <div class="card-body-detail">
                <form method="POST" action="<?php echo base_url('panel_admin/tambah_asesor_aksi') ?>" enctype="multipart/form-data">
                    <form action="<?php echo base_url('panel_admin/update_asesor_aksi') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Lengkap Asesor</label>
                            <input type="hidden" name="tgl_daftar" class="form-control" value="<?= $now ?>">
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


                        <div class="verif-resp">

                            <button type="submit" class="tombol-aksi tombol-print">Submit</button>
                            <button type="reset" class="tombol-aksi verif_red">Reset</button>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</div>
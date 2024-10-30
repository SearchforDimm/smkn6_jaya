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
                <p>Ini Adalah Laman Update Pesan</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Update Pesan</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_pesan'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="card">
            <div class="card-body">
                <?php foreach ($pesan as $as) : ?>
                    <form action="<?php echo base_url('panel_asesor/update_pesan_aksi') ?>" method="post">
                        <div class="form-group">
                            <label>Pesan</label>
                            <input type="hidden" name="id_pesan" class="form-control" value="<?= $as->id_pesan ?>">
                            <input type="hidden" name="id_user" class="form-control" value="<?= $as->id_user ?>">
                            <input type="hidden" name="id_siswa" class="form-control" value="<?= $as->id_siswa ?>">
                            <input type="hidden" name="no_pendaftaran" class="form-control" value="<?= $as->no_pendaftaran ?>">
                            <input type="hidden" name="waktu" class="form-control" value="<?= $as->waktu ?>">
                            <input type="text" name="pesan" class="form-control" value="<?= $as->pesan ?>">
                            <?php echo form_error('pesan', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="verif-resp">

                            <button type="submit" class="tombol-aksi tombol-print">Submit</button>
                            <button type="reset" class="tombol-aksi verif_red">Reset</button>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
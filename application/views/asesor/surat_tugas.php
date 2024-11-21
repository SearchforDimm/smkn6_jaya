<?php
$cek    = $user;
$id_asesor = $cek->id_user;

$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
$email = '';
$level = 'asesor';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');
?>

<div class="main-content">
    <section class="section-act">

        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?= ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Surat Tugas</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Surat Tugas</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url('panel_admin/'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="table-wrap">
            <table id="data-table">
                <thead>
                    <tr>
                        <th scope="col" onclick="sortTable(0)">Nama Jadwal</th>
                        <th scope="col" onclick="sortTable(1)">Tanggal</th>
                        <th scope="col" onclick="sortTable(2)">Asesor Kompetensi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <td>USK-2024-RPL-SMKN 6 JAKARTA (28 & 29 MARET) di TUK SMKN 6 JAKARTA</td>
                    <td>28 Maret 2024</td>
                    <td>Dimas Rifqi S.TI | Ahmad Muzhaffar S.TI</td>
                    <td class="verif-resp">
                        <a class="tombol-aksi tombol-print" href="<?php echo base_url('panel_asesor/print_surat_tugas/') ?>">
                            <i class="bx bx-printer "></i>
                    </td>
                    </a>
                </tbody>
            </table>
        </div>
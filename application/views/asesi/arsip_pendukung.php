<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$email  = '';
$level  = 'Calon Asesi';
$menu     = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Arsip Bukti</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Arsip Bukti</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_siswa/'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="table-wrap">


            <table id="data-table">
                <thead>
                    <tr>
                        <th scope="col" onclick="sortTable(0)">Nama Dokumen</th>
                        <th scope="col" onclick="sortTable(1)">Jenis Dokumen</th>
                        <th scope="col" onclick="sortTable(2)">Nama File</th>
                        <th scope="col" onclick="sortTable(3)">Download</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <td>Raport</td>
                    <td>Raport</td>
                    <td>Raport_Dimas.pdf</td>
                    <td><i class='bx bx-cloud-download'></i></td>
                    <td><i class="bx bx-edit"></i></td>
                </tbody>
            </table>
        </div>
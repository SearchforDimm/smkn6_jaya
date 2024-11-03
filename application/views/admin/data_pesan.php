<?php
foreach ($detail as $dt) {
    $kompetensi = $dt->kompetensi;
}
?>

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

<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Data Pesan</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Data Pesan</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>
        <div class="table-wrap">
            <div class="table-heading">

                <div class="table-entries">
                    <div class="select-wrapper">
                        <p>Show</p>
                        <div class="select-wrap">
                            <select name="entries" id="entries">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        <p>entries</p>
                    </div>
                    <div class="search_box">
                        <i class="bx bx-search"></i>
                        <input type="text" id="search" placeholder="Search..." onkeyup="searchTable()" />
                    </div>
                </div>
            </div>

            <table id="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th width="300">Pengirim</th>
                        <th width="300">Penerima</th>
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

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><img alt="image" src="img/asesor/<?= $baris->foto ?>" class="rounded-circle" style="width:35px; height:35px" data-toggle="tooltip" title="" data-original-title="<?php echo $baris->pengirim; ?>">&emsp;<?php echo $baris->pengirim; ?></td>
                            <td style="display:flex; align-items:center"><img alt="image" src="assets/upload/<?= $baris->pas_photo ?>" class="rounded-circle" style="width:35px; height:35px" data-toggle="tooltip" title="" data-original-title="<?php echo $baris->nama_lengkap; ?>">&emsp;<?php echo $baris->nama_lengkap; ?></td>
                            <td><?php echo $baris->pesan; ?></td>
                            <td><?php echo $baris->waktu; ?></td>
                            <td><?php echo $baris->jurusan; ?></td>


                            <td class="verif-resp three-action-btn">
                                <a style="width: 50%;" href="<?php echo base_url('panel_admin/delete_pesan/') . $baris->id_pesan ?>" class="tombol-aksi tombol-print tombol-hapus"><i class="bx bx-trash"></i></a>

                                <a style="width: 50%;" href="<?php echo base_url('panel_admin/update_pesan/') . $baris->id_pesan ?>" class="tombol-aksi tombol-print"><i class="bx bx-edit-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                    } ?>


                    </tr>
                </tbody>
            </table>
            <div id="pagination"></div>
            <div id="showing-info"></div>
        </div>
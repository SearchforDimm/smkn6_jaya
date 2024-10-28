<?php
$cek    = $user;
$jurusan = $cek->jurusan;
?>

<?php
$cek = $user;
$id_user = $cek->id_user;
$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
$cek = $user;
$nama = $cek->nama_lengkap;
$email = '';
$level = 'Admin';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');

$jurusan_titles = [
    'RPL' => 'Rekayasa Perangkat Lunak',
    'TKJ' => 'Teknik Komputer dan Jaringan',
    'MM' => 'Multimedia',
    'PKM' => 'Perbankan dan Keuangan Mikro',
];

$kompetensi_titles = [
    1 => 'Pemrograman Dasar',
    2 => 'Pemrograman Web',
    3 => 'Pemrograman Berorientasi Objek',
    4 => 'Instalasi Jaringan Komputer Berbasis Kabel',
    5 => 'Konfigurasi Perangkat Jaringan Komputer',
    6 => 'Konfigurasi Routing Pada Perangkat Jaringan Komputer',
    7 => 'Desain Grafis',
    8 => 'Desain Grafis Percetakan',
    9 => 'Animasi 2D',
    10 => 'Pengolahan Audio Video',
    11 => 'Pengoperasian Aplikasi Komputer Akuntansi',
    12 => 'Pelayanan Perbankan',
];

$asesi_data = [
    'RPL' => $asesi_rpl,
    'TKJ' => $asesi_tkj,
    'MM' => $asesi_mm,
    'PKM' => $asesi_pkm,
];

if (isset($jurusan_titles[$jurusan])) { ?>
    <div class="main-content">

        <section class="section-act">

            <main class="main">
                <div class="welcome-container">
                    <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                    <p>Ini Adalah Laman Data Asesi</p>
                    <div class="welcome-tab">
                        <span>
                            <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Data Asesi</h3>
                        </span>

                        <div class="button">
                            <a href="<?php echo base_url(uri: 'panel_admin'); ?>"> Back </a>
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
                            <th scope="col" onclick="sortTable(0)">No.</th>
                            <th scope="col" onclick="sortTable(1)">No. Pendaftaran</th>
                            <th scope="col" onclick="sortTable(2)">NIS</th>
                            <th scope="col" onclick="sortTable(3)">NISN</th>
                            <th scope="col" onclick="sortTable(4)">NIK</th>
                            <th scope="col" onclick="sortTable(5)">Nama Lengkap</th>
                            <th scope="col" onclick="sortTable(6)">Jenis Kelamin</th>
                            <th scope="col" onclick="sortTable(7)">Alamat</th>
                            <th scope="col" onclick="sortTable(8)">Kompetensi</th>
                            <th scope="col">Status Lulus</th>
                            <th scope="col" width="200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($asesi_data[$jurusan] as $baris) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $baris->no_pendaftaran; ?></td>
                                <td><?= $baris->nis; ?></td>
                                <td><?= $baris->nisn; ?></td>
                                <td><?= $baris->nik; ?></td>
                                <td><?= $baris->nama_lengkap; ?></td>
                                <td><?= $baris->jk; ?></td>
                                <td><?= $baris->alamat_siswa; ?></td>
                                <td><?= $kompetensi_titles[$baris->id_komp] ?? 'Kompetensi Tidak Ditemukan'; ?></td>
                                <td class="verif-resp">
                                    <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="verif_capsule verif_green">Lulus</label>
                                    <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="verif_capsule verif_red">Tidak Lulus</label>
                                    <?php } else { ?>
                                        <label class="verif_capsule verif_yellow">Proses</label>
                                    <?php } ?>
                                </td>
                                <td class="verif-resp three-action-btn">
                                    <a href="<?php echo base_url('panel_asesor/delete_asesi/') . $baris->id_siswa ?>" class="tombol-aksi tombol-print tombol-hapus"><i class="bx bx-trash"></i></a>
                                    <a href="<?php echo base_url('panel_asesor/detail_asesi/') . $baris->id_siswa ?>" class="tombol-aksi tombol-print"><i class="bx bx-search-alt-2"></i></a>
                                    <a href="<?php echo base_url('panel_asesor/update_asesi/') . $baris->id_siswa ?>" class="tombol-aksi tombol-print"><i class="bx bx-edit-alt"></i></a>
                                </td>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div id="pagination"></div>
                <div id="showing-info"></div>
            </div>
        </section>

    </div>
<?php } ?>
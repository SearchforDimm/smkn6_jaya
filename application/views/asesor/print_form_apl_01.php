<?php
$cek    = $user;
$jurusan = $cek->jurusan;
?>
<?php
$cek = $user;
$nama   = $cek->nama_lengkap;

$jurusan = $cek->jurusan;

$jurusan_data = [
    'RPL' => $asesi_rpl,
    'TKJ' => $asesi_tkj,
    'MM' => $asesi_mm,
    'PKM' => $asesi_pkm
];

if (array_key_exists($jurusan, $jurusan_data)) {
    $data = $jurusan_data[$jurusan];
?>

    <div class="main-content">
        <section class="section-act">
            <main class="main">
                <div class="welcome-container">
                    <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                    <p>Ini Adalah Laman Form APL 01</p>
                    <div class="welcome-tab">
                        <span>
                            <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Form APL 01</h3>
                        </span>

                        <div class="button">
                            <a href="<?php echo base_url(uri: 'panel_asesor/print'); ?>"> Back </a>
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
                            <th scope="col" onclick="sortTable(0)">No</th>
                            <th scope="col" onclick="sortTable(1)">No. Pendaftaraan</th>
                            <th scope="col" onclick="sortTable(2)">NIS</th>
                            <th scope="col" onclick="sortTable(3)">NISN</th>
                            <th scope="col" onclick="sortTable(4)">NIK</th>
                            <th scope="col" onclick="sortTable(5)">Nama Lengkap</th>
                            <th scope="col" onclick="sortTable(6)">Jenis Kelamin</th>
                            <th scope="col" onclick="sortTable(7)">Alamat</th>
                            <th scope="col" onclick="sortTable(8)">Kompetensi</th>
                            <th scope="col" onclick="sortTable(9)">Status Lulus</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($data as $baris) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $baris->no_pendaftaran; ?></td>
                                <td><?php echo $baris->nis; ?></td>
                                <td><?php echo $baris->nisn; ?></td>
                                <td><?php echo $baris->nik; ?></td>
                                <td><?php echo $baris->nama_lengkap; ?></td>
                                <td><?php echo $baris->jk; ?></td>
                                <td><?php echo $baris->alamat_siswa; ?></td>
                                <td><?php if ($baris->id_komp == 1) {
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
                                    } ?>
                                </td>
                                <td class="verif-resp">
                                    <?php if ($baris->status_pendaftaran == 'lulus') { ?>
                                        <label class="verif_capsule verif_green">Lulus</label>
                                    <?php } elseif ($baris->status_pendaftaran == 'tidak lulus') { ?>
                                        <label class="verif_capsule verif_red">Tidak Lulus</label>
                                    <?php } else { ?>
                                        <label class="verif_capsule verif_yellow">Proses</label>
                                    <?php } ?>
                                </td>
                                <td class="td-flex-col-pt">
                                    <a href="<?php echo base_url('panel_asesor/print_form1_aksi/') . $baris->id_siswa ?>"
                                        class="tombol-aksi tombol-print">
                                        <i class="bx bx-printer">
                                        </i> <a />
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
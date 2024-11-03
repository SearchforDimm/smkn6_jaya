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

<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Kelulusan</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i>Kelulusan</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>


        <div class="table-wrap">
            <div class="table-heading">
                <div class="table-form-wrap">
                    <div class="table-form">
                        <p>Sort by Year</p>
                        <select class="form-control" name="thn" onchange="thn()">
                            <?php for ($i = date('Y'); $i >= 2021; $i--) { ?>
                                <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                                        echo "selected";
                                                                    } ?>>Tahun <?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
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
                        <th scope="col" onclick="sortTable(2)">NIK</th>
                        <th scope="col" onclick="sortTable(3)">Nama Lengkap</th>
                        <th scope="col" class="verif-resp">Bukti Relevan</th>
                        <th scope="col" class="verif-resp">Hasil Sertifikasi Mandiri</th>
                        <th scope="col" class="verif-resp">Status Lulus</th>
                        <th scope="col" width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;


                    foreach ($v_siswa as $baris) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($baris->no_pendaftaran) ?></td>
                            <td><?= htmlspecialchars($baris->nik) ?></td>
                            <td><?= htmlspecialchars($baris->nama_lengkap) ?></td>
                            <td class="verif-resp download-data-verif">
                                <a href="<?= base_url('panel_admin/download_kartupelajar/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-download"><i class="bx bx-download"></i> Kartu Pelajar</a><br>
                                <a href="<?= base_url('panel_admin/download_raport/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-download"><i class="bx bx-download"></i> Raport</a><br>
                                <a href="<?= base_url('panel_admin/download_kartukeluarga/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-download"><i class="bx bx-download"></i> Kartu Keluarga</a><br>
                                <a href="<?= base_url('panel_admin/download_pasphoto/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-download"><i class="bx bx-download"></i> Pas Photo</a><br>
                                <a href="<?= base_url('panel_admin/download_sertifikatpendukung/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-download"><i class="bx bx-download"></i> Sertifikat Pendukung</a>
                            </td>
                            <td class="verif-resp">
                                <a href="<?= base_url('panel_admin/sertifikasi_mandiri/' . $baris->id_siswa) ?>" class="tombol-aksi tombol-print"><i class="bx bx-show"></i> Sertifikasi Mandiri</a>
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
                                <?php if ($baris->status_pendaftaran == '') { ?>
                                    <a href="<?= base_url('panel_admin/set_pengumuman/tdk_lulus/' . $baris->no_pendaftaran); ?>" class="tombol-verifikasi tombol-unverif-admin-red" title="Tidak Lulus"><i class="bx bx-x"></i> Tidak Lulus</a>
                                    <a href="<?= base_url('panel_admin/set_pengumuman/lulus/' . $baris->no_pendaftaran); ?>" class="tombol-verifikasi tombol-verif-admin-green tombol-lulus" title="Lulus"><i class="bx bx-check"></i> Lulus</a>
                                <?php } else { ?>
                                    <a href="<?= base_url('panel_admin/set_pengumuman/batal/' . $baris->no_pendaftaran); ?>" class="tombol-verifikasi tombol-unverif-admin-red tombol-batal" title="Batalkan"><i class="bx bx-x-circle"></i> Batal</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php }

                    ?>

                </tbody>
            </table>
            <div id="pagination"></div>
            <div id="showing-info"></div>
        </div>

        <script type="text/javascript">
            let currentPage = 1;
            let rowsPerPage = 10;

            document.getElementById('entries').addEventListener('change', function() {
                rowsPerPage = parseInt(this.value);
                currentPage = 1;
                paginateTable();
            });

            function paginateTable() {
                const table = document.getElementById('data-table');
                const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                const totalRows = rows.length;
                const totalPages = Math.ceil(totalRows / rowsPerPage);
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                // Display rows for current page
                for (let i = 0; i < totalRows; i++) {
                    rows[i].style.display = (i >= start && i < end) ? '' : 'none';
                }

                // Update showing info
                document.getElementById('showing-info').innerHTML = `Showing ${start + 1} to ${Math.min(end, totalRows)} of ${totalRows} entries`;

                // Create pagination buttons
                const pagination = document.getElementById('pagination');
                pagination.innerHTML = '';
                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement('button');
                    btn.innerHTML = i;
                    btn.classList.add('page-btn');
                    if (i === currentPage) {
                        btn.classList.add('active');
                    }
                    btn.onclick = function() {
                        currentPage = i;
                        paginateTable();
                    };
                    pagination.appendChild(btn);
                }
            }

            function initializeTable() {
                const headers = document.querySelectorAll('#data-table th');
                headers.forEach((header, index) => {
                    // Set the initial sort order to ascending ('asc')
                    header.setAttribute('data-sort-order', 'asc');

                    // Set a default sort icon (up arrow) on load for sortable columns
                    if (header.onclick) {
                        header.innerHTML = header.innerText + ' \u25B2'; // Up arrow
                    }
                });
            }

            function sortTable(columnIndex) {
                const table = document.getElementById('data-table');
                const headers = table.querySelectorAll('th');
                const rows = Array.from(table.querySelectorAll('tbody tr'));

                const currentHeader = headers[columnIndex];
                const isAscending = currentHeader.getAttribute('data-sort-order') === 'asc';

                headers.forEach((header, index) => {
                    if (index !== columnIndex) {
                        header.removeAttribute('data-sort-order');
                        header.setAttribute('data-sort-order', 'asc');
                        header.innerHTML = header.innerText.replace(/[\u25B2\u25BC]/g, '') + ' \u25B2'; // Reset other headers to ascending (up arrow)
                    }
                });

                rows.sort((rowA, rowB) => {
                    const cellA = rowA.querySelectorAll('td')[columnIndex].innerText;
                    const cellB = rowB.querySelectorAll('td')[columnIndex].innerText;

                    if (!isNaN(cellA) && !isNaN(cellB)) {
                        return isAscending ? cellA - cellB : cellB - cellA;
                    } else {
                        return isAscending ?
                            cellA.localeCompare(cellB) :
                            cellB.localeCompare(cellA);
                    }
                });

                const newSortOrder = isAscending ? 'desc' : 'asc';
                currentHeader.setAttribute('data-sort-order', newSortOrder);

                // Update the clicked header with the correct arrow icon
                currentHeader.innerHTML = currentHeader.innerText.replace(/[\u25B2\u25BC]/g, '') + (newSortOrder === 'asc' ? ' \u25B2' : ' \u25BC'); // Toggle between up (▲) and down (▼) arrow

                rows.forEach(row => table.querySelector('tbody').appendChild(row));
            }

            // Call the initializeTable function when the page loads
            window.onload = function() {
                initializeTable();
                paginateTable(); // If you have pagination function, call it here as well
            };



            function searchTable() {
                const searchTerm = document.getElementById('search').value.toLowerCase();
                const rows = document.querySelectorAll('#data-table tbody tr');

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    const match = Array.from(cells).some(cell => cell.innerText.toLowerCase().includes(searchTerm));
                    row.style.display = match ? '' : 'none';
                });
            }

            function thn() {
                var thn = $('[name="thn"]').val();
                console.log("Selected year: " + thn);
                window.location = "panel_admin/set_pengumuman/thn/" + thn;
                $(document).ready(function() {
                    $('[name="thn"]').select2({
                        placeholder: "- Tahun -"
                    });
                });

            }
        </script>
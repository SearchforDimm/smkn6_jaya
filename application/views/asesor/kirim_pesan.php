<?php
$cek = $user;
$id_user = $cek->id_user;
$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$nama = $cek->nama_lengkap;
$email = '';
$level = 'Admin';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');


?>
<?php
$cek = $user;
$jurusan = $cek->jurusan;

$jurusan_data = [
    'RPL' => $asesirpl,
    'TKJ' => $asesitkj,
    'MM' => $asesimm,
    'PKM' => $asesipkm
];

if (array_key_exists($jurusan, $jurusan_data)) {
    $data = $jurusan_data[$jurusan];
?>


    <div class="main-content">
        <section class="section-act">
            <main class="main">
                <div class="welcome-container">
                    <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                    <p>Ini Adalah Laman Kirim Pesan</p>
                    <div class="welcome-tab">
                        <span>
                            <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Kirim Pesan</h3>
                        </span>

                        <div class="button">
                            <a href="<?php echo base_url(uri: 'panel_asesor'); ?>"> Back </a>
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
                                    <a href="<?php echo base_url('panel_asesor/kirim_pesan_asesi/') . $baris->id_siswa ?>"
                                        class="tombol-aksi tombol-print">
                                        <i class="bx bx-envelope">
                                        </i>Kirim Pesan <a />
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
        window.location = "panel_asesor/set_pengumuman/thn/" + thn;
        $(document).ready(function() {
            $('[name="thn"]').select2({
                placeholder: "- Tahun -"
            });
        });

    }
</script>
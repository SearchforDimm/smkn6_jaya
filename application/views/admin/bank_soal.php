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
<!-- Main Content -->
<div class="main-content">
    <section class="section section-act">

        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Bank Soal</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Bank Soal</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="bank-soal-wrapper" style="margin-top: 270px">
            <div class="bank-soal-header">
                <h1 class="bank_soal_title">
                    Bank Soal
                </h1>
                <div class="table-add-button">
                    <a class="button" href="<?php echo base_url(uri: 'panel_admin/form_banksoal'); ?>"> Tambah Bank Soal <i class="bx bx-plus"></i> </a>
                </div>
            </div>
            <div class="bank-soal">
                <div class="code-warning-wrap">
                    <p>Kode Warna :</p>
                    <div class="code-warning">
                        <div class="box-color warning-grey"></div>
                        <p>Tidak digunakan (bisa dihapus)</p>
                    </div>
                    <div class="code-warning">
                        <div class="box-color warning-yellow"></div>
                        <p>Digunakan Jadwal</p>
                    </div>
                    <div class="code-warning">
                        <div class="box-color warning-red"></div>
                        <p>Digunakan Siswa</p>
                    </div>
                </div>
                <div class="bank-filter-wrap">
                    <div class="bank-filter">
                        <p>Filter by Jurusan</p>
                        <select name="" id="select-bank">
                            <option value="DKV">DKV</option>
                            <option value="MPLB">MPLB</option>
                            <option value="PERKANTORAN">PERKANTORAN</option>
                            <option value="AKUNTANSI">AKUNTANSI</option>
                        </select>
                        <i class="bx bx-chevron-down"></i>

                    </div>
                    <div class="delete-bank">
                        <a class="button" href="#"> Delete Selected <i class="bx bx-trash"></i> </a>
                    </div>
                </div>
                <div class="table-wrap table-bordered" style="margin-top: 20px">
                    <table id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Mapel</th>
                                <th>Kelas</th>
                                <th width="200">Aksi</th>
                                <th>

                                    <input type="checkbox" class="checkbox-bank" id="select-all">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="action-resp">
                                        <div class="box-color warning-grey"></div>
                                        <p>CNTHSOAL</p>
                                    </div>
                                </td>
                                <td>DKV</td>
                                <td class="verif-resp">
                                    <div class="action-resp">

                                        <a href="" class="tombol-aksi tombol-print">XII RPL</a>
                                    </div>
                                </td>
                                <td class="verif-resp">
                                    <div class="action-resp">
                                        <div class="box-color warning-orange"><i class="bx bx-pencil"></i></div>
                                        <div class="box-color warning-green"><i class="bx bx-plus"></i></div>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="checkbox-bank">
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="action-resp">
                                        <div class="box-color warning-grey"></div>
                                        <p>CNTHSOAL</p>
                                    </div>
                                </td>
                                <td>KONSENTRASI KEAHLIAN RPL</td>
                                <td class="verif-resp">
                                    <div class="action-resp">

                                        <a href="" class="tombol-aksi tombol-print">XII RPL</a>
                                    </div>
                                </td>
                                <td class="verif-resp">
                                    <div class="action-resp">
                                        <div class="box-color warning-orange">
                                            <a href="<?php echo base_url(uri: 'panel_admin/form_update_bank'); ?>" style="width: 100%">
                                                <i class="bx bx-pencil"></i>
                                            </a>
                                        </div>
                                        <div class="box-color warning-green">
                                            <a href="<?php echo base_url(uri: 'panel_admin/form_tambah_bank'); ?>" style="width: 100%">
                                                <i class="bx bx-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="checkbox-bank">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectBank = document.getElementById('select-bank');
        const deleteButton = document.querySelector('.delete-bank .button');
        const selectAllCheckbox = document.getElementById('select-all');
        const checkboxes = document.querySelectorAll('.checkbox-bank');
        const rows = document.querySelectorAll('#data-table tbody tr');

        // Enable/disable delete button based on checkbox selection
        function updateDeleteButtonState() {
            const selectedCheckboxes = document.querySelectorAll('.checkbox-bank:checked');
            if (selectedCheckboxes.length > 0) {
                deleteButton.classList.remove('disabled');
            } else {
                deleteButton.classList.add('disabled');
            }
        }

        // Toggle individual checkboxes based on "Select All" checkbox
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = selectAllCheckbox.checked;
            checkboxes.forEach(checkbox => {
                checkbox.checked = isChecked;
            });
            updateDeleteButtonState(); // Update button state after changing checkboxes
        });

        // Update button state when any row checkbox is clicked
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                updateDeleteButtonState();

                // If any checkbox is unchecked, uncheck "Select All" checkbox
                if (!checkbox.checked) {
                    selectAllCheckbox.checked = false;
                }
                // If all checkboxes are checked, check "Select All" checkbox
                else if (Array.from(checkboxes).every(cb => cb.checked)) {
                    selectAllCheckbox.checked = true;
                }
            });
        });

        selectBank.addEventListener('change', function() {
            const selectedJurusan = selectBank.value;
            rows.forEach(row => {
                const cell = row.cells[2]; // The 'Mapel' cell (Jurusan information)
                if (selectedJurusan === '' || cell.textContent.includes(selectedJurusan)) {
                    row.style.display = ''; // Show row
                } else {
                    row.style.display = 'none'; // Hide row
                }
            });
        });


        // Initialize button state on page load
        updateDeleteButtonState();
    });
</script>
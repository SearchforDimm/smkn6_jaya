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
        .info-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            width: 40%;
            padding: 5px 0;
        }


        .info {
            display: flex;
            flex-direction: column;
        }

        .info-right {
            text-align: right;
        }

        .info-soal-wrap {
            width: 20%;
            height: 100%;
            padding: 20px 10px;
            border-radius: 10px;
        }

        .info-soal-success {
            background-color: green;
        }

        .info-soal-warning {
            background-color: red;
        }

        .info-soal {
            display: flex;
            color: #fff;
            font-weight: 500;
            font-size: 12px;
            flex-direction: column;
            text-align: center;
        }

        .info-soal p:nth-child(2) {
            font-weight: bold;
            font-size: 20px;
        }

        .status-warning {
            color: red;
            font-weight: bold;
        }

        .status-success {
            color: green;
            font-weight: bold;
        }

        .save-button {
            margin-top: 10px;
            background-color: #007bff;
            height: 50px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .question-types {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .tab-button {
            text-decoration: none;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            background-color: white;
        }

        .tab-button.active {
            background-color: #3a57e8;
            color: white;
        }

        .questions {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            position: relative;
            overflow-x: auto;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            min-width: 170px;
            /* Set minimum width for each column */

        }

        .warning {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .add-question-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .tombol-aksi {
            border-radius: 10px !important;
            border: none;
            outline: none;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .info-section {
                flex-direction: column;
            }

            .info-right-tabs {
                text-align: right;
            }

            .info-row {
                width: 100%;
            }

            .info-soal-wrap {
                width: 100%
            }


            .tab-button {
                padding: 8px;
                font-size: 14px;
            }

            table th,
            table td {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            .info-row div {
                font-size: 14px;
            }

            .tab-button {
                font-size: 12px;
                padding: 6px;
            }

            .save-button,
            .add-question-button {
                padding: 8px;
                font-size: 14px;
            }

            table th,
            table td {
                font-size: 12px;
                padding: 6px;
            }
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            /* Enable horizontal scrolling */
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on iOS */
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
            /* Prevents the table from being too small */
        }

        thead th {
            padding: 10px;
            text-align: center;
        }

        tbody td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .multiple-choice-section {
            width: 100%;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Header */
        .multiple-choice-section>.header-choice {
            width: 100%;
            margin-bottom: 20px;
        }

        .multiple-choice-section>.header-choice label {
            display: flex;
            gap: 10px;
            align-items: center;
            font-weight: bold;
            cursor: pointer;
        }

        .summary {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .save-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #0056b3;
        }

        /* Question List */
        .question-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .question-item {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            background-color: #fdfdfd;
        }

        .checkbox-label {
            margin-right: 10px;
        }

        .question-content {
            flex-grow: 1;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        .edit-button,
        .delete-button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .edit-button:hover {
            color: #007bff;
        }

        .delete-button:hover {
            color: #d9534f;
        }

        /* Stacked Table Layout for Mobile */
    </style>
</head>

<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Tambah Soal</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Tambah Soal</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/data_asesi'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>


        <section class="tambah-soal" style="margin-top: 300px; background-color: #fff; padding: 20px 30px">
            <section class="info-section">
                <div class="info-row">
                    <div class="info">
                        <p>Kode Bank Soal</p>
                        <p>Mata Pelajaran</p>
                        <p>Guru</p>
                        <p>Kelas</p>
                    </div>
                    <div class="info info-right-tabs">
                        <p>CNTHSOAL</p>
                        <p>KONSENTRASI KEAHLIAN RPL</p>
                        <p>Guru, S.Pd</p>
                        <p>XII RPL</p>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info">
                        <p>Total Seharusnya</p>
                        <p>Total Soal dibuat</p>
                        <p>Total ditampilkan</p>
                        <p>Keterangan</p>
                    </div>
                    <div class="info info-right">
                        <p>17</p>
                        <p>2</p>
                        <p>0</p>
                        <p class="status-success">Selesai</p>
                        <!-- <p class="status-warning">Belum Selesai</p> -->
                    </div>
                </div>
                <!-- <div class="info-soal-wrap info-soal-warning"> -->
                <div class="info-soal-wrap info-soal-success">
                    <div class="info-soal">
                        <p>Pembuatan Soal</p>
                        <p>Belum Selesai</p>
                        <p>Pembuatan Soal Masih Kurang</p>
                    </div>
                </div>
            </section>

            <section class="question-types">
                <button class="tab-button active">Pilihan Ganda</button>
                <a href="<?php echo base_url(uri: 'panel_admin/form_tambah_soal'); ?>"" class=" tab-button active">Tambah Soal +</a>
            </section>

            <section class="questions">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Jenis Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Bobot Nilai</th>
                                <th>Point Per-nomor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pilihan Ganda</td>
                                <td>
                                    <div>Seharusnya: 5</div>
                                    <div>Telah dibuat: 2</div>
                                    <div>Ditampilkan: 0</div>
                                </td>
                                <td>50</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="warning">
                    <p>Soal PILIHAN GANDA masih kurang, klik tombol (+Tambah/Edit Soal) untuk menambahkan.</p>
                    <p>Jumlah soal yang ditampilkan tidak sama dengan jumlah seharusnya.</p>
                </div>
            </section>

            <section class="multiple-choice-section">
                <div class="header-choice">
                    <label>
                        <input type="checkbox" id="select-all">
                        Pilih Semua PG
                    </label>
                    <div class="summary">
                        <span>Jumlah PG Terpilih: <span id="selected-count">0</span></span>
                        <button class="save-button">Simpan Soal Terpilih</button>
                    </div>
                </div>
                <div class="question-list">
                    <div class="question-item">
                        <label class="checkbox-label">
                            <input type="checkbox" class="question-checkbox">
                        </label>
                        <div class="question-content">
                            <p>1.</p>
                            <p>A.</p>
                            <p>B.</p>
                            <p>C.</p>
                            <p>D.</p>
                            <p><b>Jawaban:</b></p>
                        </div>
                        <div class="action-buttons">
                            <button class="edit-button">✎</button>
                            <button class="delete-button">🗑️</button>
                        </div>
                    </div>
                    <div class="question-item">
                        <label class="checkbox-label">
                            <input type="checkbox" class="question-checkbox">
                        </label>
                        <div class="question-content">
                            <p>2.</p>
                            <p>A.</p>
                            <p>B.</p>
                            <p>C.</p>
                            <p>D.</p>
                            <p><b>Jawaban:</b></p>
                        </div>
                        <div class="action-buttons">
                            <button class="edit-button">✎</button>
                            <button class="delete-button">🗑️</button>
                        </div>
                    </div>
                </div>
            </section>
        </section>




        <script>
            const selectAllCheckbox = document.getElementById("select-all");
            const questionCheckboxes = document.querySelectorAll(".question-checkbox");
            const selectedCountSpan = document.getElementById("selected-count");

            // Handle "Select All" functionality
            selectAllCheckbox.addEventListener("change", () => {
                const isChecked = selectAllCheckbox.checked;
                questionCheckboxes.forEach((checkbox) => {
                    checkbox.checked = isChecked;
                });
                updateSelectedCount();
            });

            // Handle individual checkbox change
            questionCheckboxes.forEach((checkbox) => {
                checkbox.addEventListener("change", () => {
                    if (!checkbox.checked) {
                        selectAllCheckbox.checked = false; // Uncheck "Select All" if any box is unchecked
                    } else if (
                        Array.from(questionCheckboxes).every((box) => box.checked)
                    ) {
                        selectAllCheckbox.checked = true; // Check "Select All" if all boxes are checked
                    }
                    updateSelectedCount();
                });
            });

            // Update the count of selected questions
            function updateSelectedCount() {
                const selectedCount = Array.from(questionCheckboxes).filter(
                    (checkbox) => checkbox.checked
                ).length;
                selectedCountSpan.textContent = selectedCount;
            }
        </script>
<?php
$cek    = $user;
$id_asesor = $cek->id_user;
$nama_lengkap = $cek->nama_lengkap;


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
                <p>Ini Adalah Form Bank Soal</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Form Bank Soal</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_admin/bank_soal'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>


        <div class="form_banksoal_wrapper" style="margin-top: 270px">
            <div class="bank-soal-header">
                <h1 class="bank_soal_title">
                    Bank Soal
                </h1>
                <div class="table-add-button">
                    <a class="button" href="<?php echo base_url(uri: 'panel_admin/bank_soal'); ?>"> Save <i class="bx bx-plus"></i> </a>
                </div>
            </div>

            <div class="form-soal-content">
                <div class="form-row">
                    <div class="form-bank">
                        <label>Kode Bank Soal</label>
                        <input type="text">
                    </div>
                    <div class="form-bank">
                        <label>Mata Pelajaran</label>
                        <select>
                            <option value="">--Pilih Mata Pelajaran--</option>
                            <option value="RPL">RPL</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MM">MM</option>
                        </select>
                    </div>
                    <div class="form-bank">
                        <label>Guru Pengampu</label>
                        <input type="text">
                    </div>
                    <div class="form-bank">
                        <label>Pilih Kelas</label>
                        <select>
                            <option value="">--Pilih Kelas--</option>
                            <option value="XII RPL">XII RPL</option>
                            <option value="XII AKL">XII AKL</option>
                            <option value="XII ANIMASI">XII ANIMASI</option>
                            <option value="XII DKV">XII DKV</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-bank-blue">
                        <div class="form-bank-row">
                            <label>Jumlah Soal Pilihan Ganda</label>
                            <input type="text" id="jumlahSoal" placeholder="0" value="0">
                        </div>
                        <div class="form-bank-row">
                            <label>Bobot %</label>
                            <input type="text" id="bobot" placeholder="0" value="0">
                        </div>
                        <div class="form-bank-row">
                            <label>Opsi Jawaban</label>
                            <select name="" id="">
                                <option value="">--Pilih Opsi Jawaban--</option>
                                <option value="1">3 (A, B, C)</option>
                                <option value="2">4 (A, B, C, D)</option>
                                <option value="3">5 (A, B, C, D, E)</option>
                            </select>
                        </div>
                    </div>

                    <div class="total-soal-wrapper">
                        <div class="total-soal">
                            <h3>Total Soal</h3>
                            <h4 id="totalSoal">0</h4>
                        </div>
                        <div class="total-bobot">
                            <h3>Total Bobot</h3>
                            <h4 id="totalBobot">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</div>

<script>
    // Fungsi untuk memperbarui total soal
    function updateJumlahSoal() {
        // Ambil nilai dari input 'Jumlah Soal'
        const jumlahSoal = parseInt(document.getElementById("jumlahSoal").value) || 0;

        // Tampilkan jumlah soal di elemen 'totalSoal'
        document.getElementById("totalSoal").innerText = jumlahSoal;
    }

    // Fungsi untuk memperbarui bobot
    function updateBobot() {
        // Ambil nilai dari input 'Bobot'
        const bobot = parseInt(document.getElementById("bobot").value) || 0;

        // Tampilkan bobot di elemen 'totalBobot'
        document.getElementById("totalBobot").innerText = bobot;
    }

    // Tambahkan event listener pada input jumlah soal dan bobot
    document.getElementById("jumlahSoal").addEventListener("input", updateJumlahSoal);
    document.getElementById("bobot").addEventListener("input", updateBobot);
</script>
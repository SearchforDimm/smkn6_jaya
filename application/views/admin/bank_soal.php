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
                    <a class="button" href="<?php echo base_url(uri: 'panel_admin/tambah_asesor'); ?>"> Tambah Bank Soal <i class="bx bx-plus"></i> </a>
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
                        <a class="button" href="<?php echo base_url(uri: 'panel_admin/tambah_asesor'); ?>"> Delete Selected <i class="bx bx-trash"></i> </a>
                        <input type="checkbox">
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
                                <th></th>
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
                                <td>KONSENTRASI KEAHLIAN RPL</td>
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
                                    <input type="checkbox" style="width: 30px">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
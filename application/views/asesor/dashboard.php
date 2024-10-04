<?php
$cek    = $user;
$id_user = $cek->id_user;
$nama    = $cek->nama_lengkap;
$level   = $cek->level;

$tgl = date('m-Y');
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$jurusan = $cek->jurusan;
$email  = '';
$level  = 'Asesor';
$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

foreach($countpemrogramandasar as $berhitung) {
  $hitungpemrogramandasar = $berhitung;
}
foreach($countpemrogramanweb as $berhitung) {
  $hitungpemrogramanweb = $berhitung;
}
foreach($countpemrogramanobjek as $berhitung) {
  $hitungpemrogramanobjek = $berhitung;
}
foreach($countinstalasi as $berhitung) {
  $hitunginstalasi = $berhitung;
}
foreach($countkonfigurasiperangkat as $berhitung) {
  $hitungkonfigurasiperangkat = $berhitung;
}
foreach($countkonfigurasirouting as $berhitung) {
  $hitungkonfigurasirouting = $berhitung;
}
foreach($countdesaingrafis as $berhitung) {
  $hitungdesaingrafis = $berhitung;
}
foreach($countpercetakan as $berhitung) {
  $hitungpercetakan = $berhitung;
}
foreach($countanimasi as $berhitung) {
  $hitunganimasi = $berhitung;
}
foreach($countpengolahan as $berhitung) {
  $hitungpengolahan = $berhitung;
}
foreach($countpengoperasian as $berhitung) {
  $hitungpengoperasian = $berhitung;
}
foreach($countpelayanan as $berhitung) {
  $hitungpelayanan = $berhitung;
}
foreach($countrpl as $berhitung) {
  $hitungrpl = $berhitung;
}
foreach($counttkj as $berhitung) {
  $hitungtkj = $berhitung;
}
foreach($countmm as $berhitung) {
  $hitungmm = $berhitung;
}
foreach($countpkm as $berhitung) {
  $hitungpkm = $berhitung;
}
?>
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Beranda</h1>
        </div>
        <!--<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>-->
        <div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>

        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card card-primary" id="mycard-dimiss">
                  <div class="card-header">
                    <h4>Selamat Datang!</h4>
                    <div class="card-header-action">
                      <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger" href="#"><i class="fas fa-times"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                  <p>Selamat Datang, <?php echo ucwords($nama); ?> anda sedang login sebagai <?php echo ucwords($level);?>  <?= $jurusan?></p>
                  </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-primary">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>JUMLAH PENDAFTAR <?= $jurusan ?></h4>
                  </div>
                  <div class="card-body">
                  <?php
                  if($jurusan == 'RPL') {
                    $thn_ini = date('Y');
                    $where ="tbl_siswa.id_komp >='1' AND tbl_siswa.id_komp <='3'";
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    $this->db->where($where);
                    echo number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); 
                  } elseif($jurusan == 'TKJ') {
                    $thn_ini = date('Y');
                    $where ="tbl_siswa.id_komp >='4' AND tbl_siswa.id_komp <='6'";
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    $this->db->where($where);
                    echo number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); 
                  } elseif($jurusan == 'MM') {
                    $thn_ini = date('Y');
                    $where ="tbl_siswa.id_komp >='7' AND tbl_siswa.id_komp <='10'";
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    $this->db->where($where);
                    echo number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); 
                  } elseif ($jurusan == 'PKM') {
                    $thn_ini = date('Y');
                    $where ="tbl_siswa.id_komp >='11' AND tbl_siswa.id_komp <='12'";
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    $this->db->where($where);
                    echo number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); 
                  }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-success">
                <div class="card-icon bg-success">
                  <i class="fas fa-user-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>TOTAL LULUS PENDAFTARAN SERTIFIKASI <?php echo $thn_ini; ?></h4>
                  </div>
                  <div class="card-body">
                  <?php
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    echo number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='lulus'")->num_rows(), 0, ",", ".");  ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-danger">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user-times"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>TOTAL TIDAK LULUS PENDAFTARAN SERTIFIKASI <?php echo $thn_ini; ?></h4>
                  </div>
                  <div class="card-body">
                  <?php
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    echo number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='tidak lulus'")->num_rows(), 0, ",", ".");  ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-warning">
                <div class="card-icon bg-warning">
                  <i class="fas fa-user-times"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>TOTAL ASESI BELUM TERVERIFIKASI <?php echo $thn_ini; ?></h4>
                  </div>
                  <div class="card-body">
                  <?php
                    $this->db->like('tgl_siswa', $thn_ini, 'after');
                    echo number_format($this->db->get_where('tbl_siswa', "status_verifikasi is null")->num_rows(), 0, ",", ".");  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-12 col-lg-8">
                <div class="card card-info">
                  <div class="card-header">
                    <h4>Total Data Asesi / Kompetensi <?= $jurusan?></h4>
                    <div class="card-header-action">
                      <a href="#summary-chart" data-tab="summary-tab" class="btn active">Chart</a>
                      <a href="#summary-text" data-tab="summary-tab" class="btn">Text</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="summary">
                      <div data-tab-group="summary-tab" id="summary-text">
                        <table class="table table-striped">
                          <?php if($jurusan == "RPL") {?>
                            <tr>
                              <td><h6>Pemrograman Dasar</h6></td>
                              <td>:</td>
                              <td><?= $hitungpemrogramandasar ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Pemrograman Web</h6></td>
                              <td>:</td>
                              <td><?= $hitungpemrogramanweb ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Pemrograman Beriorientasi Objek</h6></td>
                              <td>:</td>
                              <td><?= $hitungpemrogramanobjek ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <?php } elseif($jurusan == "TKJ") {?>
                            <tr>
                              <td><h6>Instalasi Jaringan Komputer Berbasis Kabel</h6></td>
                              <td>:</td>
                              <td><?= $hitunginstalasi ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Konfigurasi Perangkat Jaringan Komputer</h6></td>
                              <td>:</td>
                              <td><?= $hitungkonfigurasiperangkat ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Konfigurasi Routing Pada Perangkat Jaringan Komputer</h6></td>
                              <td>:</td>
                              <td><?= $hitungkonfigurasirouting ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <?php } elseif($jurusan == "MM") {?>
                            <tr>
                              <td><h6>Desain Grafis</h6></td>
                              <td>:</td>
                              <td><?= $hitungdesaingrafis ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Desain Grafis Percetakan</h6></td>
                              <td>:</td>
                              <td><?= $hitungpercetakan ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Animasi 2D</h6></td>
                              <td>:</td>
                              <td><?= $hitunganimasi ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Pengolahan Audio Video</h6></td>
                              <td>:</td>
                              <td><?= $hitungpengolahan ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <?php } elseif ($jurusan == "PKM") {?>
                            <tr>
                              <td><h6>Pengoperasian Aplikasi Komputer Akuntansi</h6></td>
                              <td>:</td>
                              <td><?= $hitungpengoperasian ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <tr>
                              <td><h6>Pelayanan Perbankan</h6></td>
                              <td>:</td>
                              <td><?= $hitungpelayanan ?>&emsp;&emsp;Asesi</td>
                            </tr>
                            <?php } ?>
                        </table>
                      </div>
                      <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <canvas id="myChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card card-info">
                  <div class="card-header">
                    <h4>Total Data Asesi / Jurusan</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart" class="mb-1"></canvas>
                    <br><br>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-6">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Asesi Yang Sedang Online</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                      <?php foreach($asesionline as $online) :?>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="assets/upload/<?= $online->pas_photo ?>">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold"><?= $online->nama_lengkap?></div>
                          <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                      <?php foreach($asesioffline as $offline) :?>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="assets/upload/<?= $offline->pas_photo ?>">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold"><?= $offline->nama_lengkap?></div>
                          <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Asesor Yang Sedang Online</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse2" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse2">
                    <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                      <?php foreach($asesoronline as $online) :?>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="img/asesor/<?= $online->foto ?>">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold"><?= $online->nama_lengkap?></div>
                          <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                      <?php foreach($asesoroffline as $offline) :?>
                      <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="img/asesor/<?= $offline->foto ?>">
                        <div class="media-body">
                          <div class="mt-0 mb-1 font-weight-bold"><?= $offline->nama_lengkap?></div>
                          <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>

              
              </div>

      </section>
    </div>
    </div>

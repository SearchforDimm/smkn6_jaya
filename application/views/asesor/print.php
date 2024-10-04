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
$email  = '';
$level  = 'Asesor';
$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Beranda</h1>
        </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-primary">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>PRINT FORM FR APL 01</h4>
                  </div>
                  <div class="card-body">
                      <a href="panel_asesor/print_form_apl_01">
                      <div class="bg-primary p-5">
                        <center>
                            <i class="fa fa-user center" style="font-size: 1000%; color:#fff;"></i>
                        </center>
                      </a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-success">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>PRINT FORM FR APL 02</h4>
                  </div>
                  <div class="card-body">
                      <a href="panel_asesor/print_form_apl_02">
                      <div class="bg-success p-5">
                        <center>
                            <i class="fa fa-user center" style="font-size: 1000%; color:#fff;"></i>
                        </center>
                      </a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

              
              </div>
      </section>
    </div>
    </div>

  

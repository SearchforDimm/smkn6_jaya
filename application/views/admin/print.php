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
$level  = 'Admin';
$menu     = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section section-act">
    <main class="main">
      <div class="welcome-container">
        <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
        <p>Ini Adalah Laman Print</p>
        <div class="welcome-tab">
          <span>
            <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> <?= ucwords($sub_menu) ?></h3>
          </span>

          <div class="button">
            <a href="<?php echo base_url(uri: 'panel_admin'); ?>"> Back </a>
          </div>
        </div>
      </div>
    </main>


    <div class="print-wrapper">
      <div class="print">
        <div class="print-content">
          <div class="print-footer">
            <h1>Print Form FR APL 01</h1>
          </div>
          <a href="panel_admin/print_form_apl_01">
            <div class="print-header">
              <i class="bx bx-printer"></i>
            </div>
          </a>
        </div>
        <div class="print-content">
          <div class="print-footer">
            <h1>Print Form FR APL 02</h1>
          </div>
          <a href="panel_admin/print_form_apl_02">
            <div class="print-header">
              <i class="bx bx-printer"></i>
            </div>
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
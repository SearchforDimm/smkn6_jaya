<?php
foreach ($pesan as $pes) {
    $msg = $pes;
}
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pesan</h1>
        </div>


        <div class="row">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card chat-box card-primary" id="mychatbox2">
                  <div class="card-header">
                    <h4>Pesan</h4>
                  </div>
                  <div class="card-body chat-content" style="height: 600px!important;">
                  <?php foreach($pesan as $pes) :?>
                    <div class="chat-item chat-left">
                      <img alt="image" src="<?= base_url('img/asesor/');?><?= $pes->foto?>" style="width:40px; height:40px">
                      <div class="chat-details">
                        <div class="chat-text"><?= $pes->pesan?></div>
                        <div class="chat-time"><?= $pes->waktu?></div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  </div>
                  <div class="card-footer chat-form">
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Online</h4>
                  </div>
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
          </div>
        </section>
    </section>
</div>
<?php
$user = $user;
$level = $user->level; ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ubah Password</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="panel_admin">Beranda</a></div>
                <div class="breadcrumb-item">Ubah Password</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <?php
              echo $this->session->flashdata('msg2');
              ?>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Password Lama</label>
                  <div class="col-lg-9">
                    <input type="password" name="password_lama" class="form-control" value="" placeholder="Password Lama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Password Baru</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control" value="" placeholder="Password Baru" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Ulangi Password Baru</label>
                  <div class="col-lg-9">
                    <input type="password" name="password2" class="form-control" value="" placeholder="Ulangi Password Baru" required>
                  </div>
                </div>

            </fieldset>
            <div class="col-md-12">
              <hr style="margin-top:-10px;">
              <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
            </form>
            </div>
        </div>
    </section>
</div>
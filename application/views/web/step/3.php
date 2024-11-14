<div class="panel">
  <div class="panel-heading" style="background: #6777EF; color: honeydew;">
    <h2 align="center" style="margin-top: 10px;">FORM ISIAN FR-APL-01<br><b>ALAMAT CALON ASESI</b> </h2>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <hr>
    <p>c.&emsp;Data Permohonan Sertifikasi</p>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Tujuan Asesmen <span
          class="text-danger">*</span></label>
      <div class="col-sm-9">
        <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label>
            <input type="radio" value="Sertifikasi" name="tujuan_asesmen" data-parsley-group="block1"
              data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]'
              required></i> &nbsp;Sertifikasi
          </label>
        </div>
        <!--<div class="radio" style="margin-top:3px;margin-left:-20px;">-->
        <!--  <label>-->
        <!--    <input type="radio" value="Sertifikasi Ulang" name="tujuan_asesmen" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]' required></i> &nbsp;Sertifikasi Ulang-->
        <!--  </label>-->
        <!--</div>-->
        <!--<div class="radio" style="margin-top:3px;margin-left:-20px;">-->
        <!--  <label>-->
        <!--    <input type="radio" value="Pengakuan Kompetensi Terkini(PKT)" name="tujuan_asesmen" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]' required></i> &nbsp;Pengakuan Kompetensi Terkini(PKT)-->
        <!--  </label>-->
        <!--</div>-->
        <!--<div class="radio" style="margin-top:3px;margin-left:-20px;">-->
        <!--  <label>-->
        <!--    <input type="radio" value="Rekognisi Pembelajaran Lampau" name="tujuan_asesmen" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]' required></i> &nbsp;Rekognisi Pembelajaran Lampau-->
        <!--  </label>-->
        <!--</div>-->
        <!--<div id="condition-error-tujuan" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>-->
        <!--<div class="radio" style="margin-top:3px;margin-left:-20px;">-->
        <!--  <label>-->
        <!--    <input type="radio" value="Lainnya" name="tujuan_asesmen" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]' required></i> &nbsp;Lainnya-->
        <!--  </label>-->
        <!--</div>-->
        <div id="condition-error-tujuan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jurusan <span
          class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label for="jurusan_dkv">
            <input type="radio" value="DKV" name="jurusan" id="jurusan_dkv" data-parsley-group="block1"
              data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error-tujuan"]'
              required></i> &nbsp;Desain Komunikasi Visual (DKV)
          </label>
        </div>

        <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label id="jurusan_akl">
            <input type="radio" value="DKV" name="jurusan" id="jurusan_akl" data-parsley-group="block1"
              data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-komp-ahli"]' required></i>
            &nbsp;Akuntansi (AKL)
          </label>
        </div>

        <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label id="jurusan_bdp">
            <input type="radio" value="DKV" name="jurusan" id="jurusan_bdp" data-parsley-group="block1"
              data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-komp-ahli"]' required></i>
            &nbsp;Bisnis Daring dan Pemasaran (BDP)
          </label>
        </div>
      </div>
      <div id="pesan_komentar">*Pilih jurusan Anda</div>
      <div id="error-komp-ahli"
        style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
    </div>


    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Skema Sertifikasi <span
          class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Skema Sertifikasi yang Diinginkan"
          name="id_komp" data-parsley-group="block1" data-parsley-errors-container='div[id="error-komp-ahli"]' required>
          <option value="">Pilih salah satu</option>
          <?php foreach ($v_komp as $baris): ?>
            <option value="<?php echo $baris->id_komp; ?>"><?php echo $baris->kompetensi; ?></option>
          <?php endforeach; ?>
        </select>
        <div id="pesan_komentar">*Pilih skema sertifikasi yang diinginkan</div>
        <div id="error-komp-ahli"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

  </div>

</div>

<div class="col-md-12">
  <div>
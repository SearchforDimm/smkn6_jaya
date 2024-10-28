<?php
$now = date_create('now')->format('Y-m-d H:i:s');
?>
<div class="panel">
  <div class="panel-heading" style="background: #6777EF; color: honeydew;">
    <h2 align="center" style="margin-top: 10px;">FORM ISIAN FR-APL-01<br><b>IDENTITAS DIRI CALON ASESI</b> </h2>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <p>a.&emsp;Data Pribadi</p>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Pendaftaran <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="hidden" name="tgl_siswa" value="<?= $now ?>">
        <input type="text" name="nis" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);"
          maxlength="30" placeholder="Nomor Induk Siswa" data-parsley-group="block1"
          data-parsley-errors-container='div[id="error-nis"]' value="<?= $id_daftar; ?>" readonly required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nis"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        <div id="pesan_komentar">*Jangan mengganti isian ini.</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Asesi"
          maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">N.I.S <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);"
          maxlength="10" placeholder="Nomor Induk Siswa" data-parsley-group="block1"
          data-parsley-errors-container='div[id="error-nisn"]'>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nisn"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        <div id="pesan_komentar">*Sesuai</div>
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK Asesi <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nik" class="form-control bg-blue" placeholder="NIK Asesi" maxlength="100"
          data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-nik"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nik"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
      </div>
    </div> -->

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan Terakhir <span
          class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Skema Sertifikasi yang Diinginkan"
          name="pd_terakhir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-pd-terakhir"]'
          required>
          <option value="">Pilih salah satu</option>
          <option value="3">SMK</option>
          <!-- <?php foreach ($v_pdd as $baris): ?>
            <option value="<?php echo $baris->id_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
          <?php endforeach; ?> -->
        </select>
        <div id="error-pd-terakhir"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Jenis Kelamin <span
          class="text-danger">*</span></label>
      <div class="col-sm-9">
        <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label>
            <input type="radio" value="Laki-Laki" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue"
              data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-male"></i>
            &nbsp;Laki-laki
          </label>
        </div>
        <div class="radio" style="margin-left:-20px;">
          <label>
            <input type="radio" value="Perempuan" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue"
              data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-female"></i>
            &nbsp;Perempuan
          </label>
        </div>
        <div id="condition-error"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="tempat_lahir" class="form-control bg-blue class"
          placeholder="Tempat Kelahiran Calon Asesi" data-parsley-group="block1"
          data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-tempat_lahir"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span
          class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <div class="col-sm-12 col-md-4 col-lg-4" style="padding:0px">
          <select class="form-control bg-blue class" name="tgl_lahir" data-parsley-group="block1"
            data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
            <option value="" selected>Pilih Tanggal</option>
            <?php for ($i = 1; $i <= 31; $i++) {
              if ($i < 10) {
                $i = "0" . $i;
              } ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
          </select>
          <div id="error-tgl_lahir"
            style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4" style="padding:0px">
          <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir"
            data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
            <option value="" selected>Pilih Bulan</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
          <div id="error-bln_lahir"
            style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4" style="padding:0px">
          <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir"
            data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
            <option value="" selected>Pilih Tahun Lahir</option>
            <?php
            $thn_max = date('Y') - 2;
            for ($i = 1990; $i <= $thn_max; $i++) { ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
          </select>
          <div id="error-thn_lahir"
            style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone/WA <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="no_hp_siswa" class="form-control bg-blue class" maxlength="14"
          onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Calon Siswa" data-parsley-group="block1"
          data-parsley-errors-container='div[id="error-no_hp_siswa"]' required>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-no_hp_siswa"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Email <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="email" class="form-control bg-blue" placeholder="Alamat email Calon Asesi"
          maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-email"]' required>
        <i class="fa fa-envelope-o" style="margin-left:15px;"></i>
        <div id="error-email"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>
    &emsp;
    <hr>
    <p>b.&emsp;Data Pekerjaan Sekarang</p>
    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Perusahaan <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_perusahaan" class="form-control bg-blue" placeholder="Alamat email Calon Asesi"
          maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-nama_perusahaan"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-nama_perusahaan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jabatan <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="jabatan" class="form-control bg-blue" placeholder="Alamat email Calon Asesi"
          maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-jabatan"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-jabatan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="alamat_perusahaan" class="form-control bg-blue class"
          placeholder="Alamat Perusahaan Calon Asesi" data-parsley-group="block1"
          data-parsley-errors-container='div[id="error-alamat_perusahaan"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-alamat_perusahaan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Telp <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="no_telp_perusahaan" class="form-control bg-blue class" maxlength="14"
          onkeypress="return hanyaAngka(this);" placeholder="No. Telp Perusahaan Calon Asesi"
          data-parsley-group="block1" data-parsley-errors-container='div[id="error-no_telp_perusahaan"]' required>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-no_telp_perusahaan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Email Perusahaan <span
          class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="email_perusahaan" class="form-control bg-blue" placeholder="Alamat email Calon Asesi"
          maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue"
          data-parsley-errors-container='div[id="error-email_perusahaan"]' required>
        <i class="fa fa-envelope-o" style="margin-left:15px;"></i>
        <div id="error-email_perusahaan"
          style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
      </div>
    </div>
    &emsp;
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
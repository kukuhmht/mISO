<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->
<!--=========================HEAD=========================-->
<?php $this->load->view('layout/head');?>
<!--=======================END HEAD=======================-->
<!--=========================HEADER=========================-->
<div class="navbar-upper">
  <nav class="z-depth-0">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <a href="<?php echo base_url('superadmin/setting_akun');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i><?php echo $title ?></a>
		</div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<br>
<br>
<br>
<br>
<div class="row">
	<div class="col s7">
		<div class="card input-field col s12">
		  <input required id="nama required" name="nama" type="text" class="validate" />
		  <label for="nama">nama</label>
		</div>
	</div>
	<div class="col s5">
		<div class="card input-field col s12">
		  <input required id="username required" name="username" type="text" class="validate" />
		  <label for="username">username</label>
		</div>
	</div>
	<div class="col s5">
		<div class="card input-field col s12">
		  <input required id="password required" name="password" type="text" class="validate" />
		  <label for="password">password</label>
		</div>
	</div>
	<div class="col s6">
		<div class="col s12" style="margin-top:26px;">
		  <select required id="hak_akses required" name="hak_akses" class="browser-default validate">
			<option selected disabled> Hak Akses </option>
			<option name="Unit Kerja"> Unit Kerja </option>
			<option name="WMM"> WMM </option>
			<option name="Kepala Sekolah"> Kepala Sekolah </option>
		  </select>
		</div>
	</div>
	<div class="col s12 center">
		<br><br>
		<button type="submit" class="btn blue waves-effect waves-light"> simpan </button>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
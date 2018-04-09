<!--
===============Author===============
-Kukuh M HidayaTullah (05 April 2018)

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
<form action="<?php echo base_url('superadmin/setting_akun/tambah');?>" method="post">
<div class="row">
	<div class="col s12 m7">
		<div class="input-field col s12">
		  <input required id="nama" name="nama" type="text" class="validate" />
		  <label for="nama">nama</label>
		</div>
	</div>
	<div class="col s12 m5">
		<div class="input-field col s12">
		  <input required id="username" name="username" type="text" class="validate" />
		  <label for="username">username</label>
		</div>
	</div>
	<div class="col s12 m5">
		<div class="input-field col s12">
		  <input required id="password" name="password" type="text" class="validate" />
		  <label for="password">password</label>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="col s12" style="margin-top:26px;">
		  <select required id="id_hakakses" name="id_hakakses" class="browser-default validate">
			<option selected disabled> Hak Akses </option>
			<option value="1"> Admin </option>
			<option value="2"> Unit Kerja </option>
			<option value="3"> WMM </option>
			<option value="4"> Kepala Sekolah </option>
		  </select>
		</div>
	</div>
	<div class="col s12 center">
		<br><br>
		<button type="submit" class="btn blue waves-effect waves-light"> simpan </button>
	</div>
</div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
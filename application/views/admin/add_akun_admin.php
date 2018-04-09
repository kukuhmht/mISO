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
<form action="<?php echo base_url('superadmin/setting_akun/tambah_admin');?>" method="post">
<div class="row">
  <div class="col s1"></div>
  <div class="card col s10">
    <br>
	<div class="col s12 m7">
		<div class="input-field col s12">
		  <input required id="nama" name="nama" type="text" class="validate" />
		  <label for="nama">Nama</label>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="input-field col s12">
		  <input required id="username" name="username" type="text" class="validate" />
		  <label for="username">username</label>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="input-field col s12">
		  <input required id="password" name="password" type="text" class="validate" />
		  <label for="password">password</label>
		</div>
	</div>
	<div class="col s12">
		<br>
		<button type="submit" class="right btn blue waves-effect waves-light"> simpan </button>
		<br>
		<br>
		<br>
	</div>
  </div>
  <div class="col s1"></div>
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
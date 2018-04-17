<!--
===============Author===============
-Kukuh M HidayaTullah (28 Maret 2018)

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
          <a href="<?php echo base_url('dashboard/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?></a>          
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<br>
<div class="container">
<div class="row">
	<div class="col s3"></div>
	<form action="<?php echo base_url('login_wmm/index/signin'); ?>" method="post">
	<div class="col s6">
		<div class="card col s12 animated fadeInUp">
		  <div class="col s12">
			<br>
			<center class="card red-text animated fadeInDown" style="margin-bottom:5px;"> <?php echo $this->session->flashdata('pesan'); ?> </center>
			<h3 style="margin-bottom:5px;">Masuk </h3>
			<span> Gunakan Akun Wakil Management Mutu </span>
			<br>
			<br>
		  </div>
		  <div class="col s12">
			<div class="input-field col s12">
			  <input required id="username required" name="username" type="text" class="validate">
			  <label for="username">username</label>
			</div>
			<div class="input-field col s12">
			  <input required id="password required" name="password" type="password" class="validate">
			  <label for="password">password</label>
			</div>
			<br>
			<br>
		  </div>
		  <div class="col s12">
			<br>
			<button class="btn blue right waves-effect waves-light"> masuk </button>
			<br>
			<br>
			<br>
			<br>
			<br>
		  </div>
		</div>
	</div>
	</form>
</div>
</div>
<!--=========================HEADER=========================-->
<?php $this->load->view('layout/footer');?>
<!--=======================END HEADER=======================-->
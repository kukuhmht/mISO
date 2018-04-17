<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (07 April 2018)

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
          <a href="<?php echo base_url('unit_kerja/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?></a>          
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<form action="<?php echo base_url('unit_kerja/profile/update/'.$this->session->userdata('id_user'));?>" method="post">
<div class="row">
	<div class="col s12 m4 left">
		<img class="responsive-img" src="<?php echo base_url('assets/images/user1.png');?>" />
	</div>
	<div class="col s12 m6">
		<span class="card-title col s12"> Unit Kerja </span>
		<div class="card col s12">
			<span class="card-title"> <?php echo $this->session->userdata('nama');?> </span>
		</div>
		<span class="card-title col s12"> Username </span>
		<div class="card col s12">
			<span class="card-title"> <?php echo $this->session->userdata('username');?> </span>
		</div>
		<div class="col s12">
		  <ul class="collapsible">
			<li>
			  <div class="collapsible-header">Ubah Password</div>
			  <div class="collapsible-body transparent">
				<div class="input-field col s12">
				  <input readonly required id="password_lama" name="password_lama" value="<?php echo $this->session->userdata('password');?>" type="password" class="validate" />
				  <label for="password_lama">Password Lama</label>
				</div>
				<div class="input-field col s12">
				  <input required id="password" name="password" type="password" class="validate" />
				  <label for="password">Password Baru</label>
				</div>
				<div class="col s12 center">
					<button type="submit" class="btn blue waves-effect waves-light"> ubah password </button>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	</div>
</div>


<!--=========================MODALS=========================-->
<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
<!--
===============Author===============
-Kukuh M HidayaTullah (22 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<!--=========================HEAD=========================-->
<?php $this->load->view('layout/head');?>
<!--=======================END HEAD=======================-->

<!--=========================HEADER=========================-->
<?php $this->load->view('layout/header');?>
<!--=======================END HEADER=======================-->
<br>
<div class="row">
	<div class="col s12" style="margin-top:-30px;">
		<div class="center">
			<h4> Gunakan Akun yang Sesuai dengan Profesi Anda </h4>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>
	<div class="col s12 m4">
		<a href="<?php echo base_url('login_unit_kerja/index');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/unit_kerja.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> Unit Kerja </h5>
		</div>
		</a>
	</div>
	
	<div class="col s12 m4">
		<a href="<?php echo base_url('login_wmm/index');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/kepala_unit.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> WMM </h5>
		</div>
		</a>
	</div>
	
	<div class="col s12 m4">
		<a href="<?php echo base_url('login_kepala_sekolah/index');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/kepala_sekolah.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> Kepala Sekolah </h5>
		</div>
		</a>
	</div>
</div>
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
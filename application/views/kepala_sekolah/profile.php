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
          <a href="<?php echo base_url('kepala_sekolah/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?> </a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<div class="row">
	<div class="col s4 left">
		<img class="responsive-img" src="<?php echo base_url('assets/images/pelog5.JPG');?>" />
	</div>
	<div class="col s6">
		<span class="card-title col s12"> Unit Kerja </span>
		<div class="card col s12">
			<span class="card-title"> nama </span>
		</div>
		<span class="card-title col s12"> Username </span>
		<div class="card col s12">
			<span class="card-title"> username </span>
		</div>
		<div class="col s12">
		  <ul class="collapsible">
			<li>
			  <div class="collapsible-header">Ubah Password</div>
			  <div class="collapsible-body transparent">
				<div class="input-field col s12">
				  <input required id="password required" name="password" type="text" class="validate" />
				  <label for="password">Password Lama</label>
				</div>
				<div class="input-field col s12">
				  <input required id="password required" name="password" type="text" class="validate" />
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


<!--MODAL-->
  <div id="notifikasi" class="modal">
    <div class="modal-content">
      <h4>Notifikasi <a href="#!" class="right modal-action modal-close btn-flat"><i class="material-icons">clear</i></a></h4>
      <table class="bordered">
		<tbody>
			<tr>
				<td> Wakil Management Mutu nama </td>
				<td> nama_notif </td>
				<td> tgl_notif </td>
			</tr>
		</tbody>
	  </table>
    </div>
  </div>
<!--END MODAL-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
<!--
===============Author===============
-Kukuh M HidayaTullah (22 Maret 2018)
-Kukuh M HidayaTullah (23 Maret 2018)
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (30 Maret 2018)

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
<div class="container">
<form action="<?php echo base_url('unit_kerja/upload_dokumen/tambah');?>" method="post">
<div class="row">
	<div class="col s12">
	  <div class="col s12">
		<div class="input-field col s7">
		  <input required id="nama_dokumen required" name="nama_dokumen" type="text" class="validate" />
		  <label for="nama_dokumen">Nama Dokumen</label>
		</div>
		<div class="col s4 right" style="margin-top:20px;">
		  <select required id="id_jenispos" name="id_jenispos" class="browser-default validate">
			<?php foreach($jenis_pos as $row) { ?>
			  <option value="<?php echo $row->id_jenispos ?>"> <?php echo $row->jenis_pos ?> </option>
			<?php } ?>
		  </select>
		</div>
	  </div>
	  <div class="col s12">
		<center>
			<a href="https://drive.google.com/drive/folders/1mVpdgNah0MeC0O8uL1010ffcFcEMGvgo?usp=sharing" target="_blank" class="btn-large waves-effect waves-light blue">upload dokumen via Google Drive <i class="material-icons" style="font-size:15px;">open_in_new</i></a>&nbsp;&nbsp;&nbsp;
			<a href="#about_google_drive" class="modal-trigger"><i class="material-icons grey-text">help</i></a>
		</center>
		<div class="input-field col s12">
		  <input required id="dokumen_path required" name="dokumen_path" type="text" placeholder="Contoh URL: https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview" />
		  <label for="dokumen_path">URL File</label>
		  <span style="font-weight:12px;font-size:12px;color:red;">1. masukan URL yang dapat dibagikan disini dan harus meyerupai contoh URL berikut: <i>https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/<b>preview</b></i><br>2. ubah <b>view</b> di bagian akhir URL menjadi <b>preview</b><br></span>
		 <br>
		</div>
		<div class="col s12">
		  <ul class="collapsible">
			<li>
			  <div class="collapsible-header">lihat video cara upload dokumen</div>
			  <div class="collapsible-body">
				<video class="container responsive-video" controls>
				  <source src="<?php echo base_url('assets/video/mISO - Upload Dokumen ISO via Google Drive.avi');?>" type="video/avi">
				</video>
			  </div>
			</li>
		  </ul>
		</div>
		<div class="input-field col s10">
			<label>Catatan Dokumen</label>
			<textarea id="catatan" name="catatan" class="materialize-textarea"></textarea>
		</div>
	  </div>
	</div>
	
	<div class="col s1 right">
		<button class="waves-effect waves-light btn green" type="submit" value="upload" name="upload"> Upload </button>
	</div>
</div>
</form>
</div>

<!--=========================MODALS=========================-->
<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
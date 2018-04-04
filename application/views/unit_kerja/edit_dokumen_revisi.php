<!--
===============Author===============
-Kukuh M HidayaTullah (23 Maret 2018)
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
          <a href="<?php echo base_url('unit_kerja/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?></a>          
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<div class="container">
<form action="<?php echo base_url('unit_kerja/upload_dokumen_revisi/update/'.$id_dokumen);?>" method="post">
<div class="row">
	<div class="col s12">
	  <div class="col s7" style="margin-left:-14px;">
		<select required id="id_dokumen required" name="id_dokumen" class="browser-default validate">
		 <?php foreach($ambil_dokumen as $row) { ?>
		  <option value="<?php echo $row->id_dokumen ?>" <?php echo ($row->id_dokumen == $id_dokumen ? 'selected' : '') ?> > <?php echo $row->nama_dokumen ?> | <?php echo $row->jenis_pos ?></option>
		 <?php } ?>
		</select>
	  </div>
	  <div class="card col s12">
		<div class="col s12 center">
		  <br>
		  <a href="https://drive.google.com/drive/folders/1mVpdgNah0MeC0O8uL1010ffcFcEMGvgo?usp=sharing" target="_blank" class="btn-large waves-effect waves-light blue">upload dokumen via Google Drive <i class="material-icons" style="font-size:15px;">open_in_new</i></a>&nbsp;&nbsp;&nbsp;
		  <a href="#about_google_drive" class="modal-trigger"><i class="material-icons grey-text">help</i></a>
		</div>
		<div class="input-field col s12">
		  <input required id="dokumen_path required" name="dokumen_path" value="<?php echo $dokumen_path ?>" type="text" />
		  <label for="dokumen_path">URL File</label>
		  <span style="font-weight:12px;font-size:12px;color:red;">1. masukan URL yang dapat dibagikan disini dan harus meyerupai contoh URL berikut: <i>https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/<b>preview</b></i><br>2. ubah <b>view</b> di bagian akhir URL menjadi <b>preview</b><br></span>
		 <br>
		</div>
		<div class="col s12">
		  <ul class="collapsible">
			<li>
			  <div class="collapsible-header">lihat video cara upload dokumen</div>
			  <div class="collapsible-body">
				<div class="video-container">
				  <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	  </div>
	  <div class="card col s12">
		<div class="input-field col s10">
          <textarea required id="tempat_revisi required" name="tempat_revisi" class="materialize-textarea"><?php echo $tempat_revisi ?></textarea>
          <label for="tempat_revisi">Tempat yang di Revisi</label>
        </div>
		<div class="input-field col s12">
          <textarea required id="semula_berbunyi required" name="semula_berbunyi" class="materialize-textarea"><?php echo $semula_berbunyi ?></textarea>
          <label for="semula_berbunyi">Semula Berbunyi</label>
        </div>
		<div class="input-field col s12">
          <textarea required id="diusulkan_menjadi required" name="diusulkan_menjadi" class="materialize-textarea"><?php echo $diusulkan_menjadi ?></textarea>
          <label for="diusulkan_menjadi">Diusulkan agar Menjadi</label>
        </div>
		<div class="input-field col s12">
          <textarea required id="alasan_usulan required" name="alasan_usulan" class="materialize-textarea"><?php echo $alasan_usulan ?></textarea>
          <label for="alasan_usulan"> Alasan Usulan </label>
        </div>
	  </div>
	  <div class="card col s10">
		<div class="input-field col s10">
			<label>Catatan Dokumen</label>
			<textarea id="catatan_revisi" name="catatan_revisi" class="materialize-textarea"><?php echo $catatan_revisi ?></textarea>
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
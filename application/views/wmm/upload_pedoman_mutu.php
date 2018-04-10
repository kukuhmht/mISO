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
          <a href="<?php echo base_url('wmm/pedoman_mutu');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?></a>          
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<br>
<div class="container">
<form action="<?php echo base_url('wmm/pedoman_mutu/tambah');?>" method="post">
<div class="row">
	<div class="col s12">
	  <div class="col s12">
		<div class="input-field col s7">
		  <input required id="nama_dokumen required" name="nama_dokumen" type="text" class="validate" />
		  <label for="nama_dokumen">Nama Pedoman Mutu</label>
		</div>
	  </div>
	  <div class="col s12">
		<center>
		  <a href="https://drive.google.com/drive/u/1/folders/1FSfSprjL7KAIDEFoIS_1eWHnkUQ66TLL?usp=sharing" target="_blank" class="btn-large waves-effect waves-light blue">upload dokumen via Google Drive <i class="material-icons" style="font-size:15px;">open_in_new</i></a>&nbsp;&nbsp;&nbsp;
		  <a href="#about_google_drive" class="modal-trigger"><i class="material-icons grey-text">help</i></a>
		</center>
		<div class="input-field col s12">
		  <input id="dokumen_path" name="dokumen_path" type="text" placeholder="Contoh URL: https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview" />
		  <label for="dokumen_path">URL File</label>
		  <span style="font-weight:12px;font-size:12px;color:red;">1. masukan URL yang dapat dibagikan disini dan harus meyerupai contoh URL berikut: <i>https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/<b>preview</b></i><br>2. ubah <b>view</b> di bagian akhir URL menjadi <b>preview</b><br></span>
		 <br>
		</div>
		<div class="col s12">
		  <ul class="collapsible">
			<li>
			  <div class="collapsible-header animated fadeInDown">lihat video cara upload dokumen</div>
			  <div class="collapsible-body">
				<div class="video-container">
				  <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
		<div class="col s12">
			<ul class="collapsible popout" data-collapsible="accordion">
				<li>
				  <div class="collapsible-header"><i class="material-icons">send</i>Kirim ke Unit Kerja</div>
				  <div class="collapsible-body">
					<input type="checkbox" id="select-all" />
					<label class="black-text" for="select-all">Pilih Semua Unit</label>
				  </div>
				   <?php foreach($ambil_unit as $key => $row) { ?>
				  <div class="collapsible-body">
					<input class="second" value="<?php echo $row->id_unit ?>" name="id_unit" type="checkbox" id="selected<?php echo $key ?>" />
					<label for="selected<?php echo $key ?>"><?php echo $row->nama_unit ?></label>
				  </div>
				   <?php } ?>
				</li>
			</ul>
		</div>
		<div class="input-field col s10">
			<label>Catatan Pedoman Mutu</label>
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

<!--MODAL-->
<div id="about_google_drive" class="modal modal-fixed-footer">
	<div class="modal-content">
	  <h4>Kenapa di Upload ke Google Drive?</h4>
	  <p>A bunch of text</p>
	</div>
	<div class="modal-footer">
	  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok, Paham</a>
	</div>
</div>
<!--END MODAL-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
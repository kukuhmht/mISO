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
<form action="<?php echo base_url('superadmin/setting_akun/tambah_unitkerja');?>" method="post">
<div class="row">
  <div class="col s1"></div>
  <div class="card col s10">
    <br>
	<div class="col s12">
		<select required id="nama" name="nama" class="browser-default validate">
		  <option selected disabled> Pilih Unit </option>
		 <?php foreach($ambil_unit as $row) { ?>
		  <option value="<?php echo $row->nama_unit ?>"> <?php echo $row->nama_unit ?> </option>
		 <?php } ?>
		</select>
	</div>
<!--<div class="col s12">
		<select required id="nama" name="nama" class="browser-default validate">
		  <option selected disabled> Pilih Unit </option>
		  <optgroup label="Bidang">
			<option value="Humas dan Hubin"> Humas dan Hubin </option>
			<option value="Kesiswaan"> Kesiswaan </option>
			<option value="Kurikulum"> Kurikulum </option>
			<option value="Penelitian dan Pengembangan"> Penelitian dan Pengembangan </option>
			<option value="Sarana dan Prasarana"> Sarana dan Prasarana </option>
			<option value="Sumber Daya Manusia"> Sumber Daya Manusia </option>
		  </optgroup>
		  <optgroup label="Kompetensi Keahlian">
			<option value="Administrasi Perkantoran"> Administrasi Perkantoran </option>
			<option value="Administrasi Akuntansi"> Administrasi Akuntansi </option>
			<option value="Administrasi Pemasaran"> Administrasi Pemasaran </option>
			<option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
			<option value="Multimedia"> Multimedia </option>
			<option value="Teknik Komputer dan Jaringan"> Teknik Komputer dan Jaringan </option>
		  </optgroup>
		  <optgroup label="Lainnya">
			<option value="Bimbingan Konseling"> Bimbingan Konseling </option>
			<option value="ICT"> ICT </option>
			<option value="Lingkungan Hidup"> Lingkungan Hidup </option>
			<option value="Perpustakaan"> Perpustakaan </option>
			<option value="Tata Usaha"> Tata Usaha </option>
		  </optgroup>
	    </select>
	</div> -->
	<div class="col s12 m6">
		<div class="input-field col s12">
		  <input required id="username" name="username" type="text" class="validate" />
		  <label for="username">username</label>
		</div>
	</div>
	<div class="col s12 m6">
		<div class="input-field col s12">
		  <input required id="password" name="password" type="password" class="validate" />
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
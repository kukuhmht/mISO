<!--Upload Google Drive-->
<div id="about_google_drive" class="modal modal-fixed-footer">
	<div class="modal-content">
	  <h4>Kenapa di Upload ke Google Drive?</h4>
	  <p>A bunch of text</p>
	</div>
	<div class="modal-footer">
	  <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat ">Ok, Paham</a>
	</div>
</div>
<!--end Upload Google Drive-->

<!-- Pedoman Mutu -->
  <div id="pedoman_mutu" class="modal">
    <div class="modal-content">
      <h4>Pedoman Mutu <a href="#!" class="right modal-action modal-close btn-flat"><i class="material-icons">clear</i></a></h4>
      <p>
		<iframe src="https://drive.google.com/dokumen/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview" width="100%" height="375px" style="border: none;" allowfullscreen></iframe>
	  </p>
    </div>
  </div>
<!-- end Pedoman Mutu -->
  
<!-- Cara Download -->
  <div id="download" class="modal">
    <div class="modal-content">
      <h4>Cara Download</h4>
      <p>untuk mengunduh file, silahkan klik tombol <i class="material-icons">open_in_new</i> di pojok kanan atas preview file tersebut.</p>
      <p>jika sudah terbuka di tab baru, lalu pilih <i class="material-icons">file_download</i> di pojok kanan atas</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat">Oke, Paham</a>
    </div>
  </div>
<!-- end Cara Download-->
  
<!-- Notifikasi -->
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
<!-- end Notifikasi -->

<!-- Daftar Unit Kerja -->
  <div id="unitkerja" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Daftar Unit Kerja</h4>
		<table>
			<thead>
				<tr>
					<th> Bidang </th>
					<th> Kompetensi Keahlian </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/humas_hubin');?>">Humas dan Hubin</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/administrasi_perkantoran');?>">Administrasi Perkantoran</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/ict');?>">ICT</a> </td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/kesiswaan');?>">Kesiswaan </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/administrasi_akuntansi');?>">Administrasi Akuntansi </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/bimbingan_konseling');?>">Bimbingan Konseling</a> </td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/kurikulum');?>">Kurikulum</a< </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/administrasi_pemasaran');?>">Administrasi Pemasaran</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/lingkungan_hidup');?>">Lingkungan Hidup</a> </td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/pelitbang');?>">Penelitian dan Pengembangan</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/multimedia');?>">Multimedia</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/perpustakaan');?>">Perpustakaan</a> </td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/sarana_prasarana');?>">Sarana dan Prasarana</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/tkj');?>">Teknik Komputer dan Jaringan</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/tata_usaha');?>">Tata Usaha</a> </td>
				</tr>
				<tr>
					<td> <a href="<?php echo base_url('wmm/dokumen/sdm');?>">Sumber Daya Manusia</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/rpl');?>">Rekayasa Perangkat Lunak</a> </td>
					<td> <a href="<?php echo base_url('wmm/dokumen/unit_produksi');?>">Unit Produksi</a> </td>
				</tr>
			</tbody>
		</table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat"><i class="material-icons black-text">clear</i></a>
    </div>
  </div>
<!-- end Daftar Unit Kerja -->

<!-- Filter Tanggal WMM -->
  <div id="filter" class="modal bottom-sheet">
   <form action="<?php echo base_url('');?>" method="post">
    <div class="modal-content">
      <h4>Filter Dokumen <i class="material-icons" style="font-size:35px;">event_note</i> <button type="submit" class="right btn blue waves-effect waves-light">filter</button></h4>
		<ul class="collection">
		  <li class="collection-item">
		   <div class="col s4">
			<label>Bulan</label>
			<select required id="bulan required" name="bulan" class="browser-default validate">
			 <?php foreach($ambil_bulan as $row) { ?>
			  <option value="<?php echo $row->tgl ?>"> <?php echo $row->tgl ?> </option>
			 <?php } ?>
			</select>
		   </div>
		  </li>
		  <li class="collection-item">
			<label>Tahun</label>
			<select required id="tahun" name="tahun" class="browser-default validate">
				<option value="2017"> 2017 </option>
				<option value="2018"> 2018 </option>
			</select>
		  </li>
		</ul>
    </div>
   </form>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">clear</i></a>
    </div>
  </div>
<!-- end Filter Tanggal WMM -->
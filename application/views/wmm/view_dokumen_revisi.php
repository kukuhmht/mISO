<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)

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
          <a href="<?php echo base_url('wmm/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?> <b><?php echo $nama_dokumen ?></b></a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<div class="row">
	<div class="col s12 m3">
		<div class="card col s12">
			<span class="card-title grey-text">Informasi Dokumen</span>
			<div class="divider"></div>
			<table class="bordered">
				<tbody>
					<tr>
						<td class="grey-text">Di upload oleh</td>
						<td>
							<b><?php echo $nama ?></b>
							<?php
							if($nama == '')
							{
								echo "<span style='font-size:12px;'>tidak di ketahui</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Di upload pada</td>
						<td>
							<b style="font-size:12px;"><?php echo $tgl_upload ?></b>
							<?php
							if($tgl_upload == '')
							{
								echo "<span style='font-size:12px;'>belum di upload</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Jenis POS</td>
						<td>
							<b style="font-size:12px;"><?php echo $jenis_pos ?></b>
							<?php
							if($jenis_pos == '')
							{
								echo "<span style='font-size:12px;'>tidak ada pos</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Status dokumen</td>
						<td>
							<b style="font-size:12px;"><?php echo $status_dokumen ?></b>
							<?php
							if($status_dokumen == '')
							{
								echo "<span style='font-size:12px;'>tidak di ketahui</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Status pengiriman</td>
						<td>
							<b style="font-size:12px;"><?php echo $status_pengiriman ?></b>
							<?php
							if($status_pengiriman == '')
							{
								echo "<span style='font-size:12px;'>tidak ada</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Tanggal dikirim</td>
						<td>
							<b style="font-size:12px;"><?php echo $tgl_dikirim ?></b>
							<?php
							if($tgl_dikirim == '')
							{
								echo "<span style='font-size:12px;'>dokumen belum di kirim</span>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td class="grey-text">Tanggal diterima</td>
						<td>
							<b style="font-size:12px;"><?php echo $tgl_diterima ?></b>
							<?php
							if($tgl_diterima == '')
							{
								echo "<span style='font-size:12px;'>dokumen belum diterima WMM</span>";
							}
							?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="card col s12">
			<table>
				<tbody>
					<tr>
						<td>
							<span class="grey-text"> Catatan Dokumen <br></span>
							<span style='font-size:13px;'><?php echo $catatan ?></span> 
							<?php
							if($catatan == '')
							{
								echo "<center style='font-size:12px;'>tidak ada catatan</center>";
							}
							?>
						</td>
					</tr>
				</tbody>
			</table>			
		</div>
	</div>
	
  <form action="<?php echo base_url('wmm/home/kirim_dokumen_revisi/'.$id_dokumen); ?>" method="post">
	<div class="col s12 m9 right">
		<div class="card">
		  <div class="col s12">
			<span class="grey-text card-title">Informasi Dokumen Revisi</span>
			<div class="divider"></div><br>
		  </div>
		  <div class="col s6">
			<span class="grey-text">Dokumen </span><br>
			<div class="card col s12">
			  <span> <?php echo $nama_dokumen ?> </span>
			  <?php
			  if($nama_dokumen == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada dokumen </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s5 right">
			<span class="grey-text">Tanggal di usulkan </span><br>
			<div class="card col s12">
			  <span> <?php echo $tgl_diusulkan ?> </span>
			  <?php
			  if($tgl_diusulkan == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> belum di usulkan  </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s10">
			<span class="grey-text">Tempat yang di Revisi</span><br>
			<div class="card col s12">
			  <span> <?php echo $tempat_revisi ?> </span>
			  <?php
			  if($tempat_revisi == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada revisi </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s6">
			<span class="grey-text">Semula Berbunyi</span><br>
			<div class="card col s12">
			  <span> <?php echo $semula_berbunyi ?> </span>
			  <?php
			  if($semula_berbunyi == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada revisi </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s6">
			<span class="grey-text">Diusulkan agar Menjadi</span><br>
			<div class="card col s12">
			  <span> <?php echo $diusulkan_menjadi ?> </span>
			  <?php
			  if($diusulkan_menjadi == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada revisi </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s8">
			<span class="grey-text">Alasan Usulan</span><br>
			<div class="card col s12">
			  <span> <?php echo $alasan_usulan ?> </span>
			  <?php
			  if($nama_dokumen == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada alasan usulan </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s4 right">
			<span class="grey-text">Status Usulan Revisi</span><br>
			<div class="card col s12">
			  <p>
				<input <?php if ($status_usulanrevisi == 'Disetujui'){?> checked <?php } ?> name="status_usulanrevisi" value="Disetujui" type="radio" id="Disetujui" />
				<label for="Disetujui">Disetujui</label>
			  </p>
			  <p>
				<input <?php if ($status_usulanrevisi == 'Tidak Disetujui'){?> checked <?php } ?> name="status_usulanrevisi" value="Tidak Disetujui" type="radio" id="Tidak Disetujui" />
				<label for="Tidak Disetujui">Tidak Disetujui</label>
			  </p>
			</div>
		  </div>
		  <div class="col s8">
			<span class="grey-text">Catatan</span><br>
			<div class="card col s12">
			  <span> <?php echo $catatan_revisi ?> </span>
			  <?php
			  if($catatan_revisi == '')
			  {
				echo "<span class='grey-text' style='font-size:12px;'> tidak ada catatan </span>";
			  }
			  ?>
			</div>
		  </div>
		  <div class="col s5">
			<div class="input-field col s12">
			  <textarea id="pesan_revisi" name="pesan_revisi" class="materialize-textarea"><?php echo $pesan_revisi ?></textarea>
			  <label for="pesan_revisi">Berikan Pesan Kepada Unit Kerja</label>
			</div>
		  </div>
		  <div class="col s6 center">
			<br>
			<br>
			<button class="btn waves-effect waves-light green"> kirim laporan </button>
		  </div>
		</div>

		<div class="col s12">
		<ul class="collapsible">
			<li>
			  <div class="collapsible-header blue white-text"><i class="material-icons" style="margin-top:-3px;">folder_open</i>Lihat Dokumen</div>
			  <div class="collapsible-body">
			  <span>
				<iframe
				src="<?php echo $dokumen_path ?>" width="100%" height="600px" style="border: none;">
				</iframe>
			  </span>
			  </div>
			</li>
		</ul>
		</div>
	</div>
  </form>
</div>


<!--MODAL-->
<div id="modal" class="modal modal-fixed-footer">
	<div class="modal-content">
	  <h4>Judul Modal</h4>
	  <p>A bunch of text</p>
	</div>
	<div class="modal-footer">
	  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat "><i class="material-icons">clear</i></a>
	</div>
</div>
<!--END MODAL-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
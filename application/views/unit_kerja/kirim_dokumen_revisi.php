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
          <a href="<?php echo base_url('unit_kerja/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?> </a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<div class="row">
	<div class="col s12">
		<div class="card col s5 blue">
			<br>
			<span class="center white-text" style="font-size:23px;"> Apakah Dokumen Revisi ini Sudah Siap Dikirim? </span><br><br>
		  <center>
			<a href="<?php echo base_url('unit_kerja/home/kirim_dokumen_revisi/'.$id_dokumen); ?>" class="btn green waves-effect waves-light"> Ya, Kirim </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo base_url('unit_kerja/upload_dokumen_revisi/edit/'.$id_dokumen); ?>" class="btn red waves-effect waves-light"> Tidak, Edit </a>
			<br>
			<br>
		  </center>
		</div>
		<div class="card blue col s6 right">
			<h5 class="white-text"> <?php echo $nama_dokumen ?> </h5>
		</div>
	</div>
</div>



<div class="row" style="margin-top:-50px;">
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
								echo "<span style='font-size:12px;'>belum terkirim</span>";
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
			  <span>
				<?php
				if($nama_dokumen == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada dokumen</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s5 right">
			<span class="grey-text">Tanggal di usulkan </span><br>
			<div class="card col s12">
			  <span> <?php echo $tgl_diusulkan ?> </span>
			  <span>
				<?php
				if($tgl_diusulkan == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>belum di usulkan</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s10">
			<span class="grey-text">Tempat yang di Revisi</span><br>
			<div class="card col s12">
			  <span> <?php echo $tempat_revisi ?> </span>
			  <span>
				<?php
				if($tempat_revisi == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada revisi</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s6">
			<span class="grey-text">Semula Berbunyi</span><br>
			<div class="card col s12">
			  <span> <?php echo $semula_berbunyi ?> </span>
			  <span>
				<?php
				if($semula_berbunyi == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada revisi</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s6">
			<span class="grey-text">Diusulkan agar Menjadi</span><br>
			<div class="card col s12">
			  <span> <?php echo $diusulkan_menjadi ?> </span>
			  <span>
				<?php
				if($diusulkan_menjadi == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada usulan</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s8">
			<span class="grey-text">Alasan Usulan</span><br>
			<div class="card col s12">
			  <span> <?php echo $alasan_usulan ?> </span>
			  <span>
				<?php
				if($alasan_usulan == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada alasan usulan</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s4 right">
			<span class="grey-text">Status Dokumen</span><br>
			<div class="card col s12">
			  <span> <?php echo $status_usulanrevisi ?> </span>
			  <span>
				<?php
				if($status_usulanrevisi == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>belum disetujui</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s4">
			<span class="grey-text">Tanggal Disetujui</span><br>
			<div class="card col s12">
			  <span> <?php echo $tgl_persetujuan ?> </span>
			  <span>
				<?php
				if($tgl_persetujuan == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>belum dsetujui</center>";
				}
				?>
			  </span>
			</div>
		  </div>
		  <div class="col s8">
			<span class="grey-text">Catatan</span><br>
			<div class="card col s12">
			  <span> <?php echo $catatan_revisi ?> </span>
			  <span>
				<?php
				if($catatan_revisi == '')
				{
					echo "<center class='grey-text' style='font-size:12px;'>tidak ada catatan</center>";
				}
				?>
			  </span>
			</div>
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
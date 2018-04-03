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
          <a href="<?php echo base_url('wmm/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?> <b><?php echo $nama_dokumen ?></b></b></a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<div class="row">
	<div class="col s12 m3">
		<div class="card col s12">
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
								echo "<span style='font-size:12px;'>tidak ada POS</span>";
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
								echo "<span style='font-size:12px;'>belum ada konfirmasi</span>";
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
								echo "<span style='font-size:12px;'>belum di kirim</span>";
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
								echo "<span style='font-size:12px;'>dokumen belum diterima Kepala Sekolah</span>";
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
		<div class="card col s12">
			<iframe
			src="<?php echo $dokumen_path ?>" width="100%" height="1000" style="border: none;">
			</iframe>
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
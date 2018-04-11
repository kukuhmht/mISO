<!--
===============Author===============
-Kukuh M HidayaTullah (04 April 2018)
-Kukuh M HidayaTullah (10 April 2018)
-Kukuh M HidayaTullah (11 April 2018)

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
          <a href="<?php echo base_url('wmm/pedoman_mutu');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?> <b><?php echo $nama_dokumen ?></b></b></a>
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
							<b><?php echo $this->session->userdata('nama'); ?></b>
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
						<td class="grey-text">Tanggal dikirim</td>
						<td>
							<b style="font-size:12px;"><?php echo $tgl_dikirim ?></b>
							<?php
							if($tgl_dikirim == '')
							{
								echo "<span style='font-size:12px;'>belum di publish</span>";
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
		
		<div class="card col s12">
			<table>
				<tbody>
					<tr>
						<td>
							<span class="grey-text"> Dikirim ke Unit Kerja <br></span>
						  <?php foreach($ambil_unit as $row) { ?>
							<div class="chip">
							  <?php echo $row->nama_unit ?>
							</div>
						  <?php } ?>
							<?php
							if($nama_unit == '')
							{
								echo "<center style='font-size:12px;'>tidak ada Unit yang di Pilih</center>";
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

<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/modals'); ?>
<!--=======================END FOOTER=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
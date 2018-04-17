<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)
-Kukuh M HidayaTullah (03 April 2018)
-Kukuh M HidayaTullah (04 April 2018)
-Kukuh M HidayaTullah (13 April 2018)

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
          <a href="<?php echo base_url('wmm/home');?>" class="brand-logo" style="display:block;float:left;"><?php echo $title ?></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            
            <li>
              
              <form action="<?php echo base_url('wmm/dokumen/unit_kerja');?>" method="post" style="height:64px;">
                <div class="input-field">
                  <input id="search" name="search" type="search" placeholder="Cari Dokumen Unit Kerja">
                  <label class="label-icon" for="search"><i class="material-icons" style="margin-top:-12px;">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
              
            </li>
            <li><a href="#filterwmm" class="waves-effect waves-light modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="Filter Dokumen"><i class="material-icons">filter_list</i></a></li>
            <li><a href="#notifikasi" class="waves-effect waves-light modal-trigger"><i class="material-icons">notifications</i></a></li>
            <li><a href="#profile" class="dropdown-button" data-activates="profile"><i class="material-icons">person</i></a></li>
            
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
</div>

<div class="navbar-lower">
  <nav class="z-depth-0 nav-extended transparent">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a class="fadeInLogo brand-logo animated slideInUp">
            <!-- M -->
            <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
            <img class="responsive-img" src="<?php echo base_url('assets/images/logo_v1.png'); ?>" style="margin-top:7px;"/>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a class="waves-effect waves-light modal-trigger" href="#unitkerja" style="font-size:20px;">Daftar Unit Kerja <i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/pedoman_mutu'); ?>">Pedoman Mutu</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/home'); ?>">Dokumen WMM</a></li>
			<li><a class="waves-effect waves-light blue" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/dokumen/unit_kerja'); ?>">Dokumen Unit Kerja</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/dokumen/dokumen_revisi'); ?>">Dokumen Revisi</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/laporan_dokumen'); ?>">Laporan Dokumen</a></li>
          </ul>
        </div>
      <div class="nav-content">
        <div class="col s12 nav-content blue lighten-2">
            <ul class="side-nav grey darken-2" id="mobile-demo">        
        <li class="sidenav-header blue lighten-2">
          <div class="row">
            <div class="col s4">
                <img src="<?php echo base_url('assets/images/user.png');?>" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('nama');?> &nbsp;&nbsp;&nbsp;<i class="material-icons right">arrow_drop_down</i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="<?php echo base_url('wmm/profile');?>"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="<?php echo base_url('help');?>"><i class="material-icons">help</i>Help</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('login_wmm/index/logout');?>"><i class="material-icons">exit_to_app</i>Logout</a></li>
                </ul>
            </div>
          </div>
        </li>
              <!--  
              <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">file_upload</i>Upload Dokumen<i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
						<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/upload_dokumen');?>">Dokumen WMM</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/pedoman_mutu');?>">Pedoman Mutu</a></li>
                      </ul>
                    </div>
                  </li>
	  			  <li><div class="divider"></div></li>
                </ul>
              </li>
			  -->
			  <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Dokumen <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/pedoman_mutu');?>"><i class="material-icons">description</i>Pedoman Mutu</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/home');?>"><i class="material-icons">note</i>Dokumen WMM</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/unit_kerja');?>"><i class="material-icons">insert_drive_file</i>Dokumen Unit Kerja</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/dokumen_revisi');?>"><i class="material-icons">autorenew</i>Revisi Dokumen Unit Kerja</a></li>
                        <li><div class="divider"></div></li>
                      </ul>
                    </div>
                  </li>
				  <li><div class="divider"></div></li>
                </ul>
              </li>
			  <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i> Dokumen Unit Kerja<i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
					    <ul class="collapsible collapsible-accordion">
						<li><div class="divider"></li>
                        <li><a class="collapsible-header waves-effect waves-blue">Bidang <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
							<div class="collapsible-body">
							  <ul>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/humas_hubin');?>">&nbsp;&nbsp;&nbsp; Humas dan Hubin</a> </li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/kesiswaan');?>">&nbsp;&nbsp;&nbsp; Kesiswaan</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/kurikulum');?>">&nbsp;&nbsp;&nbsp; Kurikulum</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/pelitbang');?>">&nbsp;&nbsp;&nbsp; Penelitian dan Pengembangan</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/sarana_prasarana');?>">&nbsp;&nbsp;&nbsp; Sarana dan Prasarana</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/sdm');?>">&nbsp;&nbsp;&nbsp; Sumber Daya Manusia</a></li>
								<li><div class="divider"></div></li>
							  </ul>
							</div>
						</li>
						</ul>
						<ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect waves-blue">Kompetensi Keahlian <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
							<div class="collapsible-body">
							  <ul>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/administrasi_perkantoran');?>">&nbsp;&nbsp;&nbsp; Administrasi Perkantoran</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/administrasi_akuntansi');?>">&nbsp;&nbsp;&nbsp; Administrasi Akuntansi</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/administrasi_pemasaran');?>">&nbsp;&nbsp;&nbsp; Administrasi Pemasaran</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/rpl');?>">&nbsp;&nbsp;&nbsp; Rekayasa Perangkat Lunak</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/multimedia');?>">&nbsp;&nbsp;&nbsp; Multimedia</a></li>
								<li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/tkj');?>">&nbsp;&nbsp;&nbsp; Teknik Komputer & Jaringan</a></li>
								<li><div class="divider"></div></li>
							  </ul>
							</div>
						</li>
						</ul>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/bimbingan_konseling');?>">Bimbingan Konseling</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/ict');?>">ICT</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/lingkungan_hidup');?>">Lingkungan Hidup</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/perpustakaan');?>">Perpustakaan</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/tata_usaha');?>">Tata Usaha</a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/dokumen/unit_produksi');?>">Unit Produksi</a></li>
                        <li><div class="divider"></div></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="white"><div class="divider"></div></li>
              <li class="white"><a href="<?php echo base_url('wmm/laporan_dokumen');?>" class="waves-effect waves-blue modal-trigger"><i class="material-icons">chrome_reader_mode</i> Laporan Dokumen </a></li>
              <li class="white"><div class="divider"></div></li>
              <li class="white"><a href="#notifikasi" class="waves-effect waves-blue modal-trigger"><i class="material-icons">notifications</i> Notifikasi<span class="new badge right yellow darken-3"></span></a></li>

              <li class="sidenav-footer grey darken-2">
                <div class="row">  
                  <div class="social-icons">
                    <div class="col s2">
                      <a href="https://facebook.com/kukuh.mhidayatullah" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
                    </div>
                    <div class="col s2">
                      <a href="https://instagram.com/kukuhmht" target="_blank"> <i class="fab fa-instagram"></i> </a>
                    </div>
                    <div class="col s2">
                      <a href="https://twitter.com/pelog15" target="_blank"><i class="fab fa-twitter-square"></i></a></i>
                    </div>
                    <div class="col s2">
                      <a href="https://plus.google.com/u/2/+KukuhPelog15" target="_blank"><i class="fab fa-google-plus-square"></i></a></i>
                    </div>
                    <div class="col s2">
                      <a href="https://www.youtube.com/channel/UC37AU_znOXTpSSmnxL6neHQ" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col s2">
                      <a href="https://github.com/kukuhpelog/" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      
      <!-- Dropdown Structure -->
      <ul id="daftar_unitkerja" class="dropdown-content">
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Humas dan Hubin</a> </li>
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Kesiswaan</a></li>
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Kurikulum</a></li>
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Penelitian dan Pengembangan</a></li>
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Sarana dan Prasarana</a></li>
		<li><a class="waves-effect waves-blue" href="#dokumenunitkerja">&nbsp;&nbsp;&nbsp; Sumber Daya Manusia</a></li>
      </ul>
	  
	  <ul id="profile" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('wmm/profile');?>"><i class="material-icons">person</i> Profile</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('login_wmm/index/logout');?>"><i class="material-icons">exit_to_app</i>Keluar</a></li>
      </ul>

    </div>
  </nav>
</div>
</div>
<!--=======================END HEADER=======================-->
<div class="row" style="margin-top:-25px;">
  <div class="col s12">
	<?php foreach($list_dokumen_unit_kerja as $row) { ?>
	<div class="col s12 m4">
	  <div class="col s12">
		<div class="card hoverable">
			<div class="card-image">
				<iframe
				src="<?php echo $row->dokumen_path ?>" width="100%" height="200px" style="border: none;" allowfullscreen>
				</iframe>
			</div>
			<div class="card-content">
			  <span class="activator grey-text text-darken-4"><b><?php echo $row->nama_dokumen ?></b> <i class="material-icons right">more_vert</i> <br></span>
			  <span class="grey-text"> <b><?php echo $row->nama ?></b> <br> </span>
			  
			  <div class="chip left">
				<?php echo $row->jenis_pos ?>
				<?php
				if($row->id_jenispos == '')
				{
					echo "<span style='font-size:12px;'> <b>tidak ada Jenis POS</b> </span>";
				}
				?>
			  </div>
			  
			  <div class="chip right">
				<?php echo $row->status_dokumen ?>
				<?php
				if($row->status_dokumen == '')
				{
					echo "<span style='font-size:12px;'> <b>belum ada konfirmasi</b> </span>";
				}
				?>
			  </div>
			  
			  <br><br><br>
			  <a href="<?php echo base_url('wmm/home/view_dokumen_unit_kerja/'.$row->id_dokumen); ?>" class="waves-effect waves-light btn green"> view detail </a>
			  <a href="#download" class="waves-effect waves-light btn red right modal-trigger"> <i class="material-icons">file_download</i> </a>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4"><?php echo $row->nama_dokumen ?><i class="material-icons right">close</i></span>

				<table class="bordered">
					<tbody>
						<tr>
							<td>
								<span class="grey-text" style="font-size:12px;"> Di upload </span>
							</td>
							<td>
								<span class="grey-text" style="font-size:12px;"> <b><?php echo $row->tgl_upload ?></b> </span>
							</td>
						</tr>
						<tr>
							<td>
								<span class="grey-text" style="font-size:12px;"> Di kirim </span>
							</td>
							<td>
								<span class="grey-text" style="font-size:12px;"> <b><?php echo $row->tgl_dikirim ?></b> </span>
								<?php
								if($row->tgl_dikirim == '')
								{
									echo "<span class='grey-text' style='font-size:12px;'> <b>belum di kirim</b> </span>";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>
								<span class="grey-text" style="font-size:12px;"> Diterima </span>
							</td>
							<td>
								<span class="grey-text" style="font-size:12px;"> <b><?php echo $row->tgl_diterima ?></b> </span>
								<?php
								if($row->tgl_diterima == '')
								{
									echo "<span class='grey-text' style='font-size:12px;'> <b>belum di terima</b> </span>";
								}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			  
			  <p><?php echo $row->catatan ?></p>
			  <?php
			  if($row->catatan == '')
			  {
				echo "<center class='grey-text' style='font-size:12px;'> <b>tidak ada catatan</b> </center>";
			  }
			  ?>
			</div>
		</div>
		</form>
	  </div>
	</div>
	<?php } ?>
  </div>
  
  <?php if(count($list_dokumen_unit_kerja) == 0) { ?>
  <div class="col s12 center">
    <br>
    <br>
    <br>
    <br>
    <br>
      <i class="material-icons large blue-text">folder</i><br>
      <h5>Belum ada Dokumen yang di Upload oleh Unit Kerja</h5><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <?php } ?>
</div>

<!--=========================MODALS=========================-->
<!-- Filter Tanggal WMM -->
  <div id="filterwmm" class="modal bottom-sheet">
   <form action="<?php echo base_url('wmm/home/filter_unitkerja');?>" method="post">
    <div class="modal-content">
      <h4>Filter Dokumen <i class="material-icons" style="font-size:35px;">event_note</i> <button type="submit" class="right btn blue waves-effect waves-light">filter</button></h4>
		<ul class="collection">
		  <li class="collection-item">
		   <div class="col s4">
			<label>Bulan</label>
			<select required id="tgl" name="tgl" class="browser-default validate">
			 <?php foreach($ambil_bulan as $row) { ?>
			  <option value="<?php echo $row->tgl_id ?>"> <?php echo $row->tgl ?> </option>
			  <option disabled> Bulan disini hanya tersedia jika ada Dokumen di bulan tersebut </option>
			 <?php } ?>
			 <?php if(count($ambil_bulan) == 0) { ?>
			  <option> tidak tersedia, karena tidak ada dokumen yang dikirim </option>
			 <?php } ?>
			</select>
		   </div>
		  </li>
		  <li class="collection-item">
			<label>Tahun</label>
			<select required id="tahun" name="tahun" class="browser-default validate">
			 <?php foreach($ambil_tahun as $row) { ?>
			  <option value="<?php echo $row->tahun ?>"> <?php echo $row->tahun ?> </option>
			  <option disabled> Tahun disini hanya tersedia jika ada Dokumen di tahun tersebut </option>
			 <?php } ?>
			 <?php if(count($ambil_tahun) == 0) { ?>
			  <option> tidak tersedia, karena tidak ada dokumen yang dikirim </option>
			 <?php } ?>
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

<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
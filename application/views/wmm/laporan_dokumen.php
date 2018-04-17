<!--
===============Author===============
-Kukuh M HidayaTullah (07 April 2018)
-Kukuh M HidayaTullah (10 April 2018)
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
              
              <form action="<?php echo base_url('wmm/laporan_dokumen');?>" method="post" style="height:64px;">
                <div class="input-field">
                  <input id="search" name="search" type="search" placeholder="Cari Laporan Dokumen">
                  <label class="label-icon" for="search"><i class="material-icons" style="margin-top:-12px;">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
              
            </li>
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
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/pedoman_mutu'); ?>">Pedoman Mutu</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/home'); ?>">Dokumen WMM</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/dokumen/unit_kerja'); ?>">Dokumen Unit Kerja</a></li>
			<li><a class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/dokumen/dokumen_revisi'); ?>">Dokumen Revisi</a></li>
			<li><a class="waves-effect waves-light blue" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300" href="<?php echo base_url('wmm/laporan_dokumen'); ?>">Laporan Dokumen</a></li>
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

			  <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Dokumen <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('wmm/pedoman_mutu');?>"><i class="material-icons">description</i>Pedoman Mutu</a></li>
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
      <ul id="upload_dokumen" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('wmm/upload_dokumen');?>"><i class="material-icons">create_new_folder</i>Dokumen Baru</a></li>
        <li><a class="blue-text" href="<?php echo base_url('wmm/pedoman_mutu');?>"><i class="material-icons">insert_drive_file</i>Pedoman Mutu</a></li>
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
<div class="row" style="margin-top:-30px;">
  <div class="col s12">
   <div class="card">
	<table id="laporan" class="responsive striped bordered">
	  <thead>
		<tr>
			<th> No. </th>
			<th> Dokumen </th>
			<th> Tanggal Dikirim </th>
			<th> Keterangan </th>
		</tr>
	  </thead>
	  <tbody>
   	   <?php $no=1; foreach($list_laporan as $row) { ?>
		<tr>
			<td> <?php echo $no++ ?> </td>
			<td> <?php echo $row->nama_dokumen ?> </td>
			<td> <?php echo $row->tanggal ?> </td>
			<td> <?php echo $row->keterangan ?> </td>
		</tr>
		<div class="fixed-action-btn">
		  <a href="<?php echo base_url('wmm/laporan_dokumen/cetaklaporan_pdf');?>" class="blue lighten-3 btn-floating btn-large waves-effect waves-light tooltipped" data-position="left" data-delay="50" data-tooltip="Export ke PDF"><i class="material-icons white-text" style="font-size:30px;">picture_as_pdf</i></a>
		</div>
	   <?php } ?>
	   <?php if(count ($list_laporan) == 0) { ?>
		<tr>
		  <td colspan=4>
			<h4 class="center grey-text"> Belum Ada Laporan </h4>
		  </td>
		</tr>
		<div class="fixed-action-btn">
		  <a class="blue lighten-3 btn-floating btn-large tooltipped" data-position="left" data-delay="50" data-tooltip="Tidak Bisa Export, Karena Data Laporan Tidak Ada"><i class="material-icons white-text" style="font-size:30px;">picture_as_pdf</i></a>
		</div>
	   <?php } ?>
	  </tbody>
	</table>
   </div>
  </div>
</div>
<!--=========================MODALS=========================-->
<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
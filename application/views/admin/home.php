<!--
===============Author===============
-Kukuh M HidayaTullah (22 Maret 2018)
-Kukuh M HidayaTullah (30 Maret 2018)

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
          <a href="" class="brand-logo" style="display:block;float:left;"><?php echo $title ?></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            
            <li>
              
              <form style="height:64px;">
                <div class="input-field ">
                  <input id="search" type="search" required placeholder="Search">
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
  <nav class="z-depth-0">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a href="<?php echo base_url('superadmin/home');?>" class="fadeInLogo brand-logo animated slideInUp">
            <!-- M -->
            <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
            <i class="large material-icons">important_devices</i>
          </a>
        </div>
        <div class="nav-content">
          <div class="col s12 nav-content blue lighten-2">
            <ul class="side-nav grey darken-2" id="mobile-demo">        
        <li class="sidenav-header blue lighten-2">
          <div class="row">
            <div class="col s4">
                <img src="https://gravatar.com/avatar/961997eb7fd5c22b3e12fb3c8ca14e11?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('nama');?> &nbsp;&nbsp;&nbsp;<i class="material-icons right">arrow_drop_down</i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="<?php echo base_url('superadmin/profile');?>"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="<?php echo base_url('help');?>"><i class="material-icons">help</i>Help</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout');?>"><i class="material-icons">exit_to_app</i>Logout</a></li>
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
                        <li><a class="waves-effect waves-blue" href="#dokumen_terkirim"><i class="material-icons">fullscreen</i>Dokumen Terkirim<span class="new badge right green lighten-1" data-badge-caption='terkirim'></span></a></li>
                        <li><a class="waves-effect waves-blue" href="#dokumen_belum_terkirim"><i class="material-icons">swap_horiz</i>Dokumen Belum Terkirim<span class="new badge right red" data-badge-caption="belum terkirim"></span></a></li>
                        <li><div class="divider"></div></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="white">
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i>Dokumen Revisi <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
						<li><a class="waves-effect waves-blue" href="#dokumen_revisi_terkirim"><i class="material-icons">fullscreen</i>Dokumen Terkirim<span class="new badge right green lighten-1" data-badge-caption="terkirim"></span></a></li>
                        <li><a class="waves-effect waves-blue" href="#dokumen_revisi_belum_terkirim"><i class="material-icons">swap_horiz</i>Dokumen Belum Terkirim<span class="new badge right red" data-badge-caption="belum terkirim"></span></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="white"><div class="divider"></div></li>
              <li class="white"><a href="#notifikasi" class="waves-effect waves-blue modal-trigger"><i class="material-icons">notifications</i> Notifikasi<span class="new badge right yellow darken-3"></span></a></li>

              <li class="sidenav-footer grey darken-2">
                <div class="row">  
                  <div class="social-icons">
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-linkedin-square"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-facebook-official"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-twitter"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-google-plus"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-pinterest"></a></i>
                    </div>
                    <div class="col s2">
                      <a href="#"><i class="fa fa-lg fa-youtube"></a></i>
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
        <li><a href="<?php echo base_url('superadmin/upload_dokumen');?>">Dokumen Baru</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('superadmin/upload_dokumen_revisi');?>">Dokumen Revisi</a></li>
      </ul>
	  
	  <ul id="profile" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('superadmin/profile');?>"><i class="material-icons">person</i> Profile</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('admin/logout');?>"><i class="material-icons">exit_to_app</i>Keluar</a></li>
      </ul>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<?php if (isset($message_display)) { ?>
<div class="row">
	<div class="col s12">
		<div class="col s3"></div>
		<div class="card col s12 m6">
			<span>
			  <?php 
				echo "<div class='green-text center'>";
				echo "<h5>$message_display</h5>";
				echo "</div>";
			  ?>
			</span>
		</div>
		<div class="col s3"></div>
	</div>
</div>
<?php } ?>

<div class="row">
	<div class="col s12 m3">
		<a href="<?php echo base_url('unit_kerja/home');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/unit_kerja.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> Unit Kerja </h5>
		</div>
		</a>
	</div>
	
	<div class="col s12 m3">
		<a href="<?php echo base_url('wmm/home');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/kepala_unit.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> WMM </h5>
		</div>
		</a>
	</div>
	
	<div class="col s12 m3">
		<a href="<?php echo base_url('kepala_sekolah/home');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/kepala_sekolah.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> Kepala Sekolah </h5>
		</div>
		</a>
	</div>

	<div class="col s12 m3">
		<a href="<?php echo base_url('superadmin/setting_akun');?>">
		<div class="card-image">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="responsive-img" src="<?php echo base_url('assets/images/kepala_unit.png');?>" />
		</div>
		<div class="card col s12">
			<h5 class="center"> Setting Akun </h5>
		</div>
		</a>
	</div>
</div>
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
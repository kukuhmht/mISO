<div class="navbar-upper">
  <nav class="z-depth-0">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <img src="<?php echo base_url('assets/images/logo_v1.png');?>" class="responsive-img" style="margin-top:10px;" />
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
          <a href="#menu" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a class="fadeInLogo brand-logo animated slideInUp">
            <!-- M -->
            <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
            <img class="responsive-img" src="<?php echo base_url('assets/images/logo_v1.png'); ?>" style="margin-top:7px;"/>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?php echo base_url(''); ?>" class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300"> Memperkenalkan mISO </a></li>
			<li><a href="<?php echo base_url('cara_menggunakan_miso'); ?>" class="waves-effect waves-light" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300"> Cara Menggunakan mISO </a></li>
			<li><a href="<?php echo base_url('dashboard/home'); ?>" class="waves-effect waves-light active" style="font-size:20px;font-family:Calibri Light (Headings);font-weight:300"> Masuk mISO </a></li>
          </ul>
        </div>
        <div class="nav-content">
          <div class="col s12 nav-content blue lighten-2">
            <ul class="side-nav grey darken-2" id="mobile-demo">        
        <li class="sidenav-header blue lighten-2">
          <div class="row">
            <div class="col s4">
                <img src="<?php echo base_url('assets/images/pelog5.jpg');?>" width="48px" height="48px" alt="<?php echo $this->session->userdata('nama');?>" class="circle responsive-img valign profile-image">
            </div>
			<div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text"><?php echo $this->session->userdata('nama');?></a>
            </div>
			<br>
			<br>
          </div>
        </li>
              <li class="white"><a href="<?php echo base_url(''); ?>" class="waves-effect waves-blue"><i class="material-icons">explore</i> Memperkenalkan mISO </a></li>
              <li class="white"><a href="<?php echo base_url(''); ?>" class="waves-effect waves-blue"><i class="material-icons">accessibility</i> Cara Menggunakan mISO </a></li>
              <li class="white"><div class="divider"></div></li>
              <li class="white"><a href="<?php echo base_url('dashboard/home'); ?>" class="waves-effect waves-blue"><i class="material-icons">input</i> Masuk mISO </a></li>
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
        <li><a class="blue-text" href="<?php echo base_url('unit_kerja/upload_dokumen');?>"><i class="material-icons">create_new_folder</i>Dokumen Baru</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('unit_kerja/upload_dokumen_revisi');?>"><i class="material-icons">unarchive</i>Dokumen Revisi</a></li>
      </ul>
	  
	  <ul id="profile" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('unit_kerja/profile');?>"><i class="material-icons">person</i> Profile</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('login_unit_kerja/index/logout');?>"><i class="material-icons">exit_to_app</i>Keluar</a></li>
      </ul>

    </div>
  </nav>
</div>
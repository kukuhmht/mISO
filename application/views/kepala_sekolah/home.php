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
          <a href="<?php echo base_url('kepala_sekolah/home');?>" class="fadeInLogo brand-logo animated slideInUp">
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
                    <li><a href="<?php echo base_url('kepala_sekolah/profile');?>"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="<?php echo base_url('help');?>"><i class="material-icons">help</i>Help</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('login_kepala_sekolah/index/logout');?>"><i class="material-icons">exit_to_app</i>Logout</a></li>
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
        <li><a href="<?php echo base_url('kepala_sekolah/upload_dokumen');?>">Dokumen Baru</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('kepala_sekolah/upload_dokumen_revisi');?>">Dokumen Revisi</a></li>
      </ul>
	  
	  <ul id="profile" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('kepala_sekolah/profile');?>"><i class="material-icons">person</i> Profile</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('login_kepala_sekolah/index/logout');?>"><i class="material-icons">exit_to_app</i>Keluar</a></li>
      </ul>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
<div class="row" style="margin-top:-30px;">  
  <div class="col s12">
	<?php foreach($list_dokumen as $row) { ?>
	<div class="col s12 m4">
	  <div class="col s12">
		<div class="card hoverable">
			<div class="card-image">
				<iframe
				src="<?php echo $row->dokumen_path ?>" width="100%" height="210px;" style="border: none;" allowfullscreen>
				</iframe>
			</div>
			<div class="card-content">
			  <span class="activator grey-text text-darken-4"><b><?php echo $row->nama_dokumen ?></b> <i class="material-icons right">more_vert</i> <br></span>
			  <span class="grey-text"> <b><?php echo $row->nama ?></b> - </span>
			  <span class="grey-text"> <b><?php echo $row->hak_akses ?></b> <br></span>
			  
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
			  <a href="<?php echo base_url('kepala_sekolah/home/view_dokumen/'.$row->id_dokumen); ?>" class="waves-effect waves-light btn green"> buat laporan </a>
			  <a href="#download" class="waves-effect waves-light btn red lighten-1 right modal-trigger"><i class="material-icons">file_download</i></a>
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
									echo "<span class='grey-text' style='font-size:12px;'> <b>belum ada konfirmasi</b> </span>";
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
  
  <?php if(count($list_dokumen) == 0) { ?>
  <div class="col s12 center">
    <br>
    <br>
    <br>
    <br>
    <br>
      <i class="material-icons large blue-text">folder</i><br>
      <h5>Belum Ada Dokumen yang di Upload oleh Wakil Management Mutu</h5><br>
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
<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->

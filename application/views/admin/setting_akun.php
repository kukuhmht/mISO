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
  <nav class="z-depth-0 nav-extended">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <a href="#menu" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          <a class="fadeInLogo brand-logo animated slideInUp">
            <!-- M -->
            <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
            <i class="large material-icons">important_devices</i>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a class="waves-effect waves-light btn btn-large animated tada blue dropdown-button" data-activates="tambah_akun"><i class="material-icons left">add_circle</i>Buat Akun</a></li>
          </ul>
        </div>
        <div class="nav-content">
          <div class="col s12 nav-content blue lighten-2">
            <ul class="tabs tabs-transparent tabs-fixed-width">
              <li class="tab"><a href="#unit_kerja" class="active">Unit Kerja</a></li>
              <li class="tab"><a href="#wmm">Wakil Management Mutu</a></li>
              <li class="tab"><a href="#kepala_sekolah">Kepala Sekolah</a></li>
              <li class="tab"><a href="#admin">Admin</a></li>
            </ul>
            <ul class="side-nav grey darken-2" id="mobile-demo">        
        <li class="sidenav-header blue lighten-2">
          <div class="row">
            <div class="col s4">
                <img src="<?php echo base_url('assets/images/pelog5.jpg');?>" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('nama');?>  &nbsp;&nbsp;&nbsp;<i class="material-icons right">arrow_drop_down</i></a>
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
                    <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">person</i>Buat Akun <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('superadmin/setting_akun/add_unitkerja');?>"> Unit Kerja </a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('superadmin/setting_akun/add_wmm');?>"> Wakil Management Mutu </a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('superadmin/setting_akun/add_kepalasekolah');?>"> Kepala Sekolah </a></li>
                        <li><a class="waves-effect waves-blue" href="<?php echo base_url('superadmin/setting_akun/add_admin');?>"> Admin </a></li>
                        <li><div class="divider"></div></li>
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
      <ul id="tambah_akun" class="dropdown-content">
        <li><a class="blue-text" href="<?php echo base_url('superadmin/setting_akun/add_unitkerja');?>">Unit Kerja</a></li>
        <li><a class="blue-text" href="<?php echo base_url('superadmin/setting_akun/add_wmm');?>">WMM</a></li>
        <li><a class="blue-text" href="<?php echo base_url('superadmin/setting_akun/add_kepalasekolah');?>">Kepala Sekolah</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="<?php echo base_url('superadmin/setting_akun/add_admin');?>">Admin</a></li>
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
<br>
 <div id="unit_kerja">
	<div class="row">
	<div class="col s12">
	  <div class="card">
		<table class="striped bordered">
			<thead>
				<tr>
					<th> Nama Unit </th>
					<th> Username </th>
					<th> Password </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
		  <?php foreach($akun_unitkerja as $row) { ?>
				<tr>
					<td> <?php echo $row->nama ?> </td>
					<td> <?php echo $row->username ?> </td>
					<td> <?php echo $row->password ?> </td>
					<td> 
						<a href="<?php echo base_url('superadmin/setting_akun/edit_unitkerja/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="edit <?php echo $row->nama ?> ?"><i class="material-icons">edit</i></a>
						<br>
						<a href="<?php echo base_url('superadmin/setting_akun/hapus/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="hapus <?php echo $row->nama ?> ?" onclick="return confirm('Apakah anda yakin ingin menghapus akun ini?')"><i class="material-icons">delete</i></a>
					</td>
				</tr>
		  <?php } ?>
			</tbody>
		</table>
	  </div>
	</div>
	<?php if(count($akun_unitkerja) == 0) { ?>
	<div class="col s12 center">
		<br>
		  <i class="material-icons large blue-text">person</i><br>
		  <h5>Belum ada Akun Unit Kerja</h5><br>
		  <span> <a href="<?php echo base_url('superadmin/setting_akun/add_unitkerja')?>" class="btn-large blue waves-effect waves-light">buat akun</a> </span>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php } ?>
	</div>
 </div>
 
 <div id="wmm">
	<div class="row">
	<div class="col s12">
	  <div class="card">
		<table class="striped bordered">
			<thead>
				<tr>
					<th> Nama </th>
					<th> Username </th>
					<th> Password </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
		  <?php foreach($akun_wmm as $row) { ?>
				<tr>
					<td> <?php echo $row->nama ?> </td>
					<td> <?php echo $row->username ?> </td>
					<td> <?php echo $row->password ?> </td>
					<td>
						<a href="<?php echo base_url('superadmin/setting_akun/edit_wmm/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="edit <?php echo $row->nama ?> ?"><i class="material-icons">edit</i></a>
						<br>
						<a href="<?php echo base_url('superadmin/setting_akun/hapus/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="hapus <?php echo $row->nama ?> ?" onclick="return confirm('Apakah anda yakin ingin menghapus akun ini?')"><i class="material-icons">delete</i></a>
					</td>
				</tr>
		  <?php } ?>
			</tbody>
		</table>
	  </div>
	</div>
	<?php if(count($akun_wmm) == 0) { ?>
	<div class="col s12 center">
		<br>
		  <i class="material-icons large blue-text">person</i><br>
		  <h5>Belum ada Akun Wakil Management Mutu</h5><br>
		  <span> <a href="<?php echo base_url('superadmin/setting_akun/add_wmm')?>" class="btn-large blue waves-effect waves-light">buat akun</a> </span>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php } ?>
	</div>
 </div>
 
 <div id="kepala_sekolah">
	<div class="row">
	<div class="col s12">
	  <div class="card">
		<table class="striped bordered">
			<thead>
				<tr>
					<th> Nama </th>
					<th> Username </th>
					<th> Password </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
		  <?php foreach($akun_kepalasekolah as $row) { ?>
				<tr>
					<td> <?php echo $row->nama ?> </td>
					<td> <?php echo $row->username ?> </td>
					<td> <?php echo $row->password ?> </td>
					<td>
						<a href="<?php echo base_url('superadmin/setting_akun/edit_kepalasekolah/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="edit <?php echo $row->nama ?> ?"><i class="material-icons">edit</i></a>
						<br>
						<a href="<?php echo base_url('superadmin/setting_akun/hapus/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="hapus <?php echo $row->nama ?> ?" onclick="return confirm('Apakah anda yakin ingin menghapus akun ini?')"><i class="material-icons">delete</i></a>
					</td>
				</tr>
		  <?php } ?>
			</tbody>
		</table>
	  </div>
	</div>
	<?php if(count($akun_kepalasekolah) == 0) { ?>
	<div class="col s12 center">
		<br>
		  <i class="material-icons large blue-text">person</i><br>
		  <h5>Belum ada Akun Kepala Sekolah</h5><br>
		  <span> <a href="<?php echo base_url('superadmin/setting_akun/add_kepalasekolah')?>" class="btn-large blue waves-effect waves-light">buat akun</a> </span>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php } ?>
	</div>
 </div>
 
 <div id="admin">
	<div class="row">
	<div class="col s12">
	  <div class="card">
		<table class="striped bordered">
			<thead>
				<tr>
					<th> Nama </th>
					<th> Username </th>
					<th> Password </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
		  <?php foreach($akun_admin as $row) { ?>
				<tr>
					<td> <?php echo $row->nama ?> </td>
					<td> <?php echo $row->username ?> </td>
					<td> <?php echo $row->password ?> </td>
					<td>
						<a href="<?php echo base_url('superadmin/setting_akun/edit_admin/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="edit <?php echo $row->nama ?> ?"><i class="material-icons">edit</i></a>
						<br>
						<a href="<?php echo base_url('superadmin/setting_akun/hapus/'.$row->id_user);?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="hapus <?php echo $row->nama ?> ?" onclick="return confirm('Apakah anda yakin ingin menghapus akun ini?')"><i class="material-icons">delete</i></a>
					</td>
				</tr>
		  <?php } ?>
			</tbody>
		</table>
	  </div>
	</div>
	<?php if(count($akun_admin) == 0) { ?>
	<div class="col s12 center">
		<br>
		  <i class="material-icons large blue-text">person</i><br>
		  <h5>Belum ada Akun Admin</h5><br>
		  <span> <a href="<?php echo base_url('superadmin/setting_akun/add_admin')?>" class="btn-large blue waves-effect waves-light">buat akun</a> </span>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php } ?>
	</div>
 </div>

<!--=========================MODALS=========================-->
<?php $this->load->view('layout/modals'); ?>
<!--=======================END MODALS=======================-->
<!--=========================FOOTER=========================-->
<?php $this->load->view('layout/footer'); ?>
<!--=======================END FOOTER=======================-->
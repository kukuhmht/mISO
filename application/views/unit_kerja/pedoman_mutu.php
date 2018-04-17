<!--
===============Author===============
-Kukuh M HidayaTullah (11 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->
<!--=========================HEAD=========================-->
<!DOCTYPE html>
<html lang="ind">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title ?></title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
	<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style type="text/css">
.row-noclear:after {
  clear: none!important;
}
#special {
  padding: 1px;
}
article {
  display: inline-block;
  float: left;
  width: 80%;
}
aside {
  display: table-cell;
  width: 20%;
}
</style>
</head>

<body>
<!--=======================END HEAD=======================-->
<!--=========================HEADER=========================-->
<div class="navbar-upper">
  <nav class="z-depth-0">
    <div class="nav-wrapper blue lighten-1">
      <div class="row">
        <div class="col s12">
          <a href="<?php echo base_url('unit_kerja/home');?>" class="brand-logo" style="display:block;float:left;"><i class="material-icons">arrow_back</i> <?php echo $title ?></a>          
        </div>
      </div>
    </div>
  </nav>
</div>
<!--=======================END HEADER=======================-->
  <main>
<?php foreach($ambil_pedomanmutu as $row) { ?>
  <section id="special" class="blue">
    <div class="container">
      <div class=""> <!-- using .row here causes this to not work in chrome! -->
        <article class="card col s10">
          <section class="card-content">
            <h1><?php echo $row->nama_dokumen ?></h1>
			<p>
				<iframe
				src="<?php echo $row->dokumen_path ?>" width="100%" height="1000px" style="border: none;" allowfullscreen>
				</iframe>
			</p>
          </section>
          <div class="card-action">...</div>
        </article>
        <aside class="col s2">
          <ul class="section table-of-contents">
            <li><a class="active white-text" target="_blank">Catatan</a></li>
            <li><a class="white-text"><?php echo $row->catatan ?></a></li>
			<?php
			if($row->catatan == '')
			{
				echo "<li><a class='white-text'>tidak ada catatan</a></li>";
			}
			?>
          </ul>
        </aside>
      </div>
    </div>
  </section>
<?php } ?>

<?php if(count($ambil_pedomanmutu) == 0) { ?>
  <section id="special" class="blue">
    <div class="container">
      <div class=""> <!-- using .row here causes this to not work in chrome! -->
        <article class="card col s10">
          <section class="card-content">
			<br>
			<br>
			<br>
			<br>
			<h4 class="center grey-text"> Tidak Ada Pedoman Mutu untuk Unit <?php echo $this->session->userdata('nama') ?> </h4>
			<br>
			<br>
			<br>
			<br>
          </section>
          <div class="card-action">...</div>
        </article>
        <aside class="col s2">
          <ul class="section table-of-contents">
            <li><a class="active white-text" target="_blank">Catatan</a></li>
            <li><a class="grey-text lighten-1">tidak ada catatan</a></li>
          </ul>
        </aside>
      </div>
    </div>
  </section>
<?php } ?>
  <div class="clearfix"></div>
</main>
<!--=========================HEAD=========================-->
<?php $this->load->view('layout/footer');?>
<!--=======================END HEAD=======================-->
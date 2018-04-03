<!--
===============Author===============
-Kukuh M HidayaTullah (02 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<!--=========================HEAD=========================-->
<?php $this->load->view('layout/head');?>
<!--=======================END HEAD=======================-->

<!--=========================HEADER=========================-->
<?php $this->load->view('layout/header');?>
<!--=======================END HEADER=======================-->
<div class="parallax-container center valign-wrapper" style="margin-top:-47px;">
	<div class="row">
	  <div class="col s12 center white-text">
		<a href="<?php echo base_url('dashboard/home');?>" class="waves-effect waves-light btn-large blue animated fadeInUp">Logo mISO</a>
		<h1 class="white-text lighten-2 animated zoomIn" style="font-family:Calibri Light (Headings);font-weight:299;">Pelajari Fitur mISO</h1>
	  </div>
	</div>
  
  <div class="parallax">
    <img src="<?php echo base_url('assets/images/bg2.jpg'); ?>">
  </div>

</div>

<div class="">
 <div class="section" style="background-color:#f6b84a;">
    <div class="row">
    <div class="col s12">
	<br>
	<br>
	<br>
	<br>
	  <div class="col s12 m4">
		<img class="responsive-img center" src="<?php echo base_url('assets/images/kertas.png'); ?>">
	  </div>
	  <div class="col s12 m8">
		<h4 class="left-align" style="font-size:70px;font-family:Calibri Light (Headings);font-weight:250">Lupakan kertas!</h4>
		<p class="light left-align" style="font-size:30px;font-family:Calibri Light (Headings);font-weight:250">
			mISO memberikan kemudahan untuk Anda dalam mengelola dokumen ISO. Anda bisa mengupload, mengajukan revisi, dan mengirim dokumen dengan mudah.
		</p>
		<br>
		<br>
		<br>
		<br>
	  </div>
    </div>
  </div>
  </div>
</div>

<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="<?php echo base_url('assets/images/bg5.jpg'); ?>">
  </div>
</div>

<div class="">
 <div class="section" style="background-color:#eeeeee;">
    <div class="row">
    <div class="col s12">
	<br>
	<br>
	<br>
	<br>
	  <div class="col s12 m7">
		<h4 class="left-align" style="font-size:48px;font-family:Calibri Light (Headings);font-weight:299">Lihat dokumen & laporan dimana saja Anda berada</h4>
		<p class="light left-align" style="font-size:27px;font-family:Calibri Light (Headings);font-weight:250">
			Dokumen dalam mISO dapat dijangkau dari berbagai ponsel cerdas, tablet, atau komputer. Ke mana pun Anda pergi, dokumen dan laporan Anda siap mengikuti.
		</p>
		<br>
		<br>
		<br>
	  </div>
	  <div class="col s12 m5">
		<img class="responsive-img center" src="<?php echo base_url('assets/images/bg8.png'); ?>">
	  </div>
    </div>
  </div>
  </div>
</div>

<div class="parallax-container center valign-wrapper">
  <div class="parallax"><img src="<?php echo base_url('assets/images/office.jpg'); ?>">
  </div>
  
  <div class="container white-text">
    <div class="row">
      <div class="col s12">
        <p class="white-text lighten-1" style="font-family:Gabriola;font-size:38px;font-weight:200">Management is the opportunity to help people become better people. Practiced that way, it's a magnificent profession.</p>
      </div>
    </div>
  </div>
</div>

<div class="">
 <div class="section">
    <div class="row">
    <div class="col s12 center">
		<br>
		<br>
		<br>
		<br>
		<img class="responsive-img" src="<?php echo base_url('assets/images/admin.png'); ?>">
		<h4 class="center-align" style="font-size:48px;font-family:Calibri Light (Headings);font-weight:300">Mulai Gunakan mISO</h4>
		<br>
		<a href="<?php echo base_url('dashboard/home');?>" class="btn-large waves-effect waves-light blue"> kunjungi mISO </a>
		<br>
		<br>
		<br>
		<br>
	</div>
    </div>
  </div>
  </div>
</div>
<!--=========================FOOTER=========================-->
<footer class="page-footer blue lighten-1">
  <div class="container">
    <div class="row">
      <div class="col m6 l6 s12">
        <h5 class="white-text">Slogan mISO</h5>
        <p class="grey-text text-lighten-4">Alpha Version 0.0.1</p>
      </div>
      <div class="col m6 l4 offset-l2 s12">
        <h5 class="white-text">Contact Us</h5>
        <table>
			<tbody>
				<tr>
					<td class="white-text left"> <i class="material-icons">call</i> Telepon </td>
					<td class="white-text"> +628987757455 </td>
				</tr>
				<tr>
					<td class="white-text left"> <i class="material-icons">email</i> Email </td>
					<td class="white-text"> kukuhpelog15@gmail.com </td>
				</tr>
			</tbody>
		</table>
      </div>
	</div>
  </div>
  
  <div class="footer-copyright">
    <div class="container">
    © 2018 Rekayasa Perangkat Lunak - SMKN11 Bandung
    <span class="right">
      <a class="grey-text text-lighten-4" target="_blank" href="https://instagram.com/kukuhmht"> Design and Developed by Kukuh M HidayaTullah </a>
      &nbsp;|&nbsp;
      <a class="grey-text text-lighten-4" href="http://portalstudents11.ga">XII RPL 2</a>
    </span>
    </div>
  </div>
</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>

    <script  src="<?php echo base_url('assets/js/custom.js');?>"></script>
<!--<script  src="<?php echo base_url('assets/js/materialize.min.js');?>"></script> -->

<script>
	$(document).ready(function(){
	//	$('.sidenav').sidenav();
		
		$(".button-collapse").sideNav();
		
		$('select').material_select();
		
		Materialize.updateTextFields();
		
		$('.modal').modal();
		
		$('.dropdown-trigger').dropdown();
		
		$('.dropdown-button').dropdown();
		
		$('.collapsible').collapsible();
		
		$('.tooltipped').tooltip({delay: 50});
		
		$('ul.tabs').tabs({
		  swipeable : true,
		  responsiveThreshold : 1920
		});
		
		$('.parallax').parallax();
	});
</script>

<script>
$('#nama_dokumen').change(function() {
	var id_dokumen = $(this).val();
	var base_url = '<?php echo base_url(); ?>';
	var url = base_url+'unit_kerja/upload_dokumen_revisi/getDokumenPath';
	
	$.post(url,
	{
			id: id_dokumen
	},
	function(data) {
		var d = JSON.parse(data);
		$('#dokumen_path').val(d[0]['dokumen_path']);
	});
});
</script>

</body>

</html>
<!--=======================END FOOTER=======================-->
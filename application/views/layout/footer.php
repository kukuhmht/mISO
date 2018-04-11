<footer class="page-footer blue lighten-1">
  <div class="container">
    <div class="row">
      <div class="col m6 l6 s12">
        <h5 class="white-text">Slogan mISO</h5>
        <p class="grey-text text-lighten-4">Alpha Version 0.1.1</p>
      </div>
      <div class="col m6 l4 offset-l2 s12">
        <h5 class="white-text">Contact Us</h5>
        <table>
			<tbody>
				<tr>
					<td class="white-text left"> <i class="material-icons">call</i> </td>
					<td class="white-text"> +628987757455 </td>
				</tr>
				<tr>
					<td class="white-text left"> <i class="material-icons">email</i> </td>
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

    <script  src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script  src="<?php echo base_url('assets/js/custom.js');?>"></script>
    <script  src="<?php echo base_url('assets/datatables/datatables.min.js');?>"></script>
<!--<script  src="<?php echo base_url('assets/multiple_select/dual-listbox.js');?>"></script> -->
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
/*button select all kirim ke unit kerja
$('#select-all').click(function () {
	var all = $('input.select-all')[0];
	all.checked = !all.checked
	var checked = all.checked;
	$('input.select-item').each(function (index,item) {
		item.checked = !item.checked;
	});
	checkSelected();
});

//button select invert
$("#select-invert").click(function () {
	$("input.select-item").each(function (index,item) {
		item.checked = !item.checked;
	});
	checkSelected();
});

//button get selected
$("#selected").click(function () {
	var items=[];
	$("input.select-item:checked:checked").each(function (index,item) {
		items[index] = item.value;
	});
	if (items.length < 1) {
		alert("Tidak ada Unit Kerja yang dipilih");
	}else {
		var values = items.join(',');
		console.log(items);

		$.ajax({
			type:       "POST",
			url:        "{{ url('pedoman_mutu/kirim_dokumen/'<?php$id_pedomanmutu?>) }}",
			data:       { id_siswa: items},
			success:    function() {
							location.reload();
						},

		});
	}
});
*/
// $( "input[type=checkbox]" ).on( "click", countChecked );
$("#select-all").click(function() {

$(".second").prop("checked", $("#select-all").prop("checked"))
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

<!--datatables-->
<script>
$(document).ready(function() {
    $('#laporan').DataTable();
} );
</script>

</body>

</html>
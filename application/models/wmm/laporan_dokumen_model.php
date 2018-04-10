<!--
===============Author===============
-Kukuh M HidayaTullah (10 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Laporan_dokumen_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	public function list_laporan(){
		return $this->db->get('laporan_dokumen');
	}
}
?>
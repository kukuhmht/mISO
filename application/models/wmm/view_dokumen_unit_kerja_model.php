<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class View_dokumen_unit_kerja_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// Lihat Dokumen (mengambil ID dokumen unit kerja dan menampilkan data tersebut)
	public function view_dokumen($id_dokumen){
		$d	= $this->db->get_where('dokumen',array('id_dokumen'=>$id_dokumen))->result_array();
		return $d;
	}
}
?>
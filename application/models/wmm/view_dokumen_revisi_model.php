<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class View_dokumen_revisi_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// Lihat Dokumen revisi (mengambil ID dokumen revisi dan menampilkan data tersebut)
	public function view_dokumen($id_dokumen){
		$d	= $this->db->get_where('dokumen_revisi',array('id_dokumenrevisi'=>$id_dokumenrevisi))->result_array();
		return $d;
	}
}
?>
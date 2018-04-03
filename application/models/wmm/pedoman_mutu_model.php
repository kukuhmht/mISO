<!-- 
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!!
jika Anda mengubah script disini harap isi author
dan juga tanggal script terus ditambah seperti contoh di atas
-->

<?php
class Pedoman_mutu_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// input dokumen
	function input($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Input Tanggal Otomatis
	function input_tanggal_otomatis(){
		$tgl = $this->db->query('select now() as "now"');
		return $tgl;
	}
	
	// Edit (mengambil ID dokumen dan menampilkan data tersebut)
	public function edit($id_dokumen){
		$d	= $this->db->get_where('dokumen',array('id_dokumen'=>$id_dokumen))->result_array();
		return $d;
	}
}
?>
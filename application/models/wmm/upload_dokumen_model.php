<!-- 
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)

*ket:
author ini harus di isi!!
jika Anda mengubah script disini harap isi author
dan juga tanggal script terus ditambah seperti contoh di atas
-->

<?php
class Upload_dokumen_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	// mengambil data jenis_pos
	public function ambil_jenis_pos() {
		$d = $this->db->query('SELECT *FROM jenis_pos ORDER BY id_jenispos DESC');
		return $d;
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
		$d	= $this->db->query('
		SELECT d.*, j.jenis_pos FROM dokumen d JOIN jenis_pos j USING(id_jenispos) WHERE id_dokumen= "'.$id_dokumen.'"
		')->result_array();
		return $d;
	}
	
	function update($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>
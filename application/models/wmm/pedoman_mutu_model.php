<!-- 
===============Author===============
-Kukuh M HidayaTullah (04 April 2018)

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
	
	public function list_pedoman_mutu() {
		return $this->db->query('
		SELECT
		  d.*,
		  n.nama,
		  h.hak_akses
		FROM
		  pedoman_mutu d
		  JOIN USER n USING (id_user)
		  JOIN hak_akses h USING (id_hakakses)
		ORDER BY tgl_upload DESC
		');
	}
	
	// Lihat Dokumen Pedoman Mutu (mengambil ID dokumen dan menampilkan data tersebut)
	public function view_dokumen($id_pedomanmutu){
		$d	= $this->db->query('
		SELECT
		  d.*,
		  u.nama,
		  u.id_hakakses
		FROM
		  pedoman_mutu d
		  JOIN USER u USING(id_user)
		WHERE id_pedomanmutu = "'.$id_pedomanmutu.'"
		')->result_array();
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
	public function edit($id_pedomanmutu){
		$d	= $this->db->get_where('pedoman_mutu',array('id_pedomanmutu'=>$id_pedomanmutu))->result_array();
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
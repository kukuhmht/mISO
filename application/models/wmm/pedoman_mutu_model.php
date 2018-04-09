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
		  u.nama_unit,
		  h.hak_akses
		FROM
		  pedoman_mutu d
		  JOIN penerima_pedomanmutu p USING (id_pedomanmutu)
		  JOIN unit_kerja u USING (id_unit)
		  JOIN USER n USING (id_unit)
		  JOIN hak_akses h USING (id_hakakses)
		ORDER BY tgl_upload DESC
		');
	}
	
	public function ambil_unit() {
		return $this->db->get('unit_kerja');
	}
	
	// Lihat Dokumen Pedoman Mutu (mengambil ID dokumen dan menampilkan data tersebut)
	public function view_dokumen($id_pedomanmutu){
		$d	= $this->db->query('
		SELECT
		  d.*,
		  n.nama,
		  u.nama_unit,
		  h.hak_akses
		FROM
		  pedoman_mutu d
		  JOIN penerima_pedomanmutu p USING (id_pedomanmutu)
		  JOIN unit_kerja u USING (id_unit)
		  JOIN USER n USING (id_unit)
		  JOIN hak_akses h USING (id_hakakses)
		WHERE id_pedomanmutu = "'.$id_pedomanmutu.'"
		ORDER BY tgl_upload DESC
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
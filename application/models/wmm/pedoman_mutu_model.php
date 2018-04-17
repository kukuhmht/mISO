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
		return $this->db->query('SELECT *FROM pedoman_mutu ORDER BY tgl_upload DESC');
	}
	
	public function ambil_unit() {
		return $this->db->get('unit_kerja');
	}
	
	public function ambildokumen_sesuiaunit($id_pedomanmutu) {
		return $this->db->query('
		SELECT
		  u.nama_unit
		FROM
		  pedoman_mutu d
		  LEFT JOIN penerima_pedomanmutu p USING (id_pedomanmutu)
		  LEFT JOIN unit_kerja u USING (id_unit)
		  LEFT JOIN USER n USING (id_unit)
		  LEFT JOIN hak_akses h USING (id_hakakses)
		WHERE id_pedomanmutu = "'.$id_pedomanmutu.'"
		');
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
		  LEFT JOIN penerima_pedomanmutu p USING (id_pedomanmutu)
		  LEFT JOIN unit_kerja u USING (id_unit)
		  LEFT JOIN USER n USING (id_unit)
		  LEFT JOIN hak_akses h USING (id_hakakses)
		WHERE id_pedomanmutu = "'.$id_pedomanmutu.'"
		')->result_array();
		return $d;
	}
	
	// input dokumen
	function input($data,$table){
		$this->db->insert($table,$data);
	}
	
	// input untuk kirim ke sesuai Unit Kerja
	function input_unit($data_unit,$table){
		$this->db->insert($table,$data_unit);
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
	
	public function cari($query) {
		return $this->db->query('
		SELECT
		  *
		FROM
		  pedoman_mutu
		WHERE nama_dokumen LIKE "%'.$query.'%"
		ORDER BY nama_dokumen ASC
		');
	}
}
?>
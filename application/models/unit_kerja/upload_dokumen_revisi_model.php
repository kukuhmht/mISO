<?php
class Upload_dokumen_revisi_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	public function ambil_dokumen($id_user) {
		return $this->db->query('
		SELECT
		  d.*,
		  j.jenis_pos
		FROM
		  dokumen d
		  JOIN jenis_pos j USING (id_jenispos)
		WHERE tgl_dikirim
		  AND id_user = "'.$id_user.'"
		');
	}
	
	// input dokumen
	public function input($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Input Tanggal Otomatis
	function input_tanggal_otomatis(){
		$tgl = $this->db->query('select now() as "now"');
		return $tgl;
	}
	
	// Edit (mengambil ID dokumen revisi dan menampilkan data tersebut)
	public function edit($id_dokumen){
		$d	= $this->db->query('
		SELECT
		  d.*,
		  i.nama_dokumen,
		  u.nama
		FROM
		  dokumen_revisi d
		  JOIN dokumen i USING (id_dokumen)
		  JOIN USER u USING (id_user)
		WHERE id_dokumen = "'.$id_dokumen.'"
		')->result_array();
		return $d;
	}
	
	public function update($table,$data,$where){
		$hasil = $this->db->update($table,$data,$where);
		return $hasil;
	}
	
	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	// Ngambil dokumen path lewat ajax, nanti
	public function getDokumenPath($id) {
		$hasil = $this->db->query('select dokumen_path from dokumen where id_dokumen = "'.$id.'"');
		return $hasil;
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (05 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Setting_akun_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	public function ambil_unit() {
		return $this->db->query('SELECT *FROM unit_kerja');
	}
	
	public function ambil_idunit($nama) {
		return $this->db->query('SELECT id_unit FROM unit_kerja WHERE nama_unit = "'.$nama.'"');
	}
	
	public function akun_admin(){
		return $this->db->query('
		SELECT
		  d.*,
		  h.hak_akses
		FROM
		  USER d
		  JOIN hak_akses h USING (id_hakakses)
		WHERE id_hakakses = "1"
		');
	}

	public function akun_unitkerja(){
		return $this->db->query('
		SELECT
		  d.*,
		  h.hak_akses
		FROM
		  USER d
		  JOIN hak_akses h USING (id_hakakses)
		WHERE id_hakakses = "2"
		');
	}
	
	public function akun_wmm(){
		return $this->db->query('
		SELECT
		  d.*,
		  h.hak_akses
		FROM
		  USER d
		  JOIN hak_akses h USING (id_hakakses)
		WHERE id_hakakses = "3"
		');
	}
	
	public function akun_kepalasekolah(){
		return $this->db->query('
		SELECT
		  d.*,
		  h.hak_akses
		FROM
		  USER d
		  JOIN hak_akses h USING (id_hakakses)
		WHERE id_hakakses = "4"
		');
	}
	
	// input user
	function input($data,$table){
		$this->db->insert($table,$data);
	}
	
	// Edit User (mengambil ID dokumen dan menampilkan data tersebut)
	public function edit($id_user){
		$d	= $this->db->get_where('user',array('id_user'=>$id_user))->result_array();
		return $d;
	}
	
	// Edit User Unit Kerja
	public function edit_unit($id_user){
		$d	= $this->db->query('
		SELECT
		  d.*,
		  u.nama_unit
		FROM
		  USER d
		  JOIN unit_kerja u USING (id_unit)
		WHERE id_user = "'.$id_user.'"
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
<!--
===============Author===============
-Kukuh M HidayaTullah (23 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class View_dokumen_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// Lihat Dokumen (mengambil ID dokumen dan menampilkan data tersebut)
	public function view_dokumen($id_dokumen){
		$d	= $this->db->query('SELECT
		  d.*,
		  j.jenis_pos,
		  u.nama,
		  s.status_dokumen
		FROM
		  dokumen d
		  JOIN jenis_pos j USING (id_jenispos)
		  JOIN USER u USING(id_user)
		  JOIN status_dokumen s USING (id_statusdokumen)
		ORDER BY tgl_upload DESC')
		->result_array();
		return $d;
	}
}
?>
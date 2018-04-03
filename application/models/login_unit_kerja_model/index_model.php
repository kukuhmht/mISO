<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (30 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Index_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	public function cek_akun($username, $password){
		$hasil = $this->db->query('SELECT * FROM USER JOIN hak_akses USING(id_hakakses) WHERE username = "'.$username.'" AND PASSWORD = "'.$password.'" AND id_hakakses = "2"');
		return $hasil->result_array();
	}
}
?>
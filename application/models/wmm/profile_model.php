<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Profile_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// Lihat Profile User (mengambil ID user dan menampilkan data tersebut)
	public function view_profile($id_user){
		$d	= $this->db->get_where('user',array('id_user'=>$id_user))->result_array();
		return $d;
	}
}
?>
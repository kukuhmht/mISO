<!--
===============Author===============
-Kukuh M HidayaTullah (11 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Pedomanmutu_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	public function ambil_pedomanmutu($user){
		$d = $this->db->query('
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
		WHERE nama_unit = "'.$user.'"
		');
		return $d;
	}
}
?>
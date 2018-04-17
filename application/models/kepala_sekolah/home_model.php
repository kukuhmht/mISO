<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)
-Kukuh M HidayaTullah (13 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php
class Home_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}

	// menampilkan data dokumen unit kerja
	function list_dokumen() {
		return $this->db->query('
		SELECT
		  d.*,
		  n.nama,
		  h.hak_akses,
		  h.id_hakakses,
		  j.jenis_pos,
		  s.status_dokumen
		FROM
		  dokumen d
		  JOIN USER n USING (id_user)
		  JOIN hak_akses h USING (id_hakakses)
		  JOIN jenis_pos j USING (id_jenispos)
		  JOIN status_dokumen s USING (id_statusdokumen)
		WHERE id_hakakses = "3" AND
		tgl_dikirim
		ORDER BY tgl_upload DESC
		');
	}
	
	public function ambil_bulan() {
		return $this->db->query('
		SELECT
		  MONTH(tgl_dikirim) AS tgl_id,
		  MONTHNAME(tgl_dikirim) AS tgl
		FROM
		  dokumen
		WHERE id_statuspengiriman = "1" AND id_user = "3"
		GROUP BY tgl
		');
	}
	
	public function ambil_tahun() {
		return $this->db->query('
		SELECT
		  YEAR(tgl_dikirim) AS tahun
		FROM
		  dokumen
		WHERE id_statuspengiriman = "1" AND id_user = "3"
		GROUP BY tahun
		');
	}
	
	//Ambil Data Status Dokumen dan tampikan di Select view_dokumen_unit_kerja
	public function ambil_statusdokumen() {
		return $this->db->query('SELECT *FROM status_dokumen LIMIT 2');
	}
	
	// Lihat Dokumen (mengambil ID dokumen dan menampilkan data tersebut)
	public function view_dokumen($id_dokumen){
		$d	= $this->db->query('
		SELECT
		  d.*,
		  j.jenis_pos,
		  u.nama,
		  s.status_dokumen,
		  p.status_pengiriman
		FROM
		  dokumen d
		  JOIN jenis_pos j USING (id_jenispos)
		  JOIN USER u USING(id_user)
		  JOIN status_dokumen s USING (id_statusdokumen)
		  JOIN status_pengiriman p USING (id_statuspengiriman)
		WHERE id_dokumen = "'.$id_dokumen.'"
		')->result_array();
		return $d;
	}
	
	public function cari($query) {
		return $this->db->query('
		SELECT
		  d.*,
		  n.nama,
		  h.hak_akses,
		  j.jenis_pos,
		  s.status_dokumen
		FROM
		  dokumen d
		  JOIN USER n USING (id_user)
		  JOIN hak_akses h USING (id_hakakses)
		  JOIN jenis_pos j USING (id_jenispos)
		  JOIN status_dokumen s USING (id_statusdokumen)
		WHERE nama_dokumen LIKE "%'.$query.'%" AND
		hak_akses = "Wakil Management Mutu" AND
		tgl_dikirim = TRUE
		ORDER BY tgl_upload DESC
		');
	}
	
	public function filterdokumen($tgl, $tahun) {
		return $this->db->query('
		SELECT
		  d.*,
		  sd.status_dokumen,
		  sp.id_statuspengiriman,
		  sp.status_pengiriman,
		  j.id_jenispos,
		  j.jenis_pos,
		  u.nama,
		  u.id_hakakses,
		  h.hak_akses
		FROM
		  dokumen d
		  JOIN jenis_pos j USING (id_jenispos)
		  JOIN status_dokumen sd USING (id_statusdokumen)
		  JOIN status_pengiriman sp USING (id_statuspengiriman)
		  JOIN USER u USING (id_user)
		  JOIN hak_akses h USING (id_hakakses)
		WHERE MONTH(tgl_dikirim) = "'.$tgl.'" AND YEAR(tgl_dikirim) = "'.$tahun.'" AND id_user = "3"
		ORDER BY tgl_dikirim DESC
		');
	}
}
?>
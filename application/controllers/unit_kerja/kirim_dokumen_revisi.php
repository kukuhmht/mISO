<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php

Class Kirim_dokumen_revisi extends CI_Controller {
  public function __construct() {
  parent:: __construct();
	if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "1"){
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "2") {
			redirect('');
		}
  }

	public function index() {
		$data['title']	= 'Kirim Dokumen Revisi ke WMM';

		$this->load->view('unit_kerja/kirim_dokumen_revisi',$data);
	}
}
?>
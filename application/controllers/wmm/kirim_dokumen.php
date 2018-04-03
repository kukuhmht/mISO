<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php

Class kirim_dokumen extends CI_Controller {
  public function __construct() {
  parent:: __construct();
	if($this->session->userdata('id_hakakses') == "1") {
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "3") {
			redirect('');
		}
  }

	public function index() {
		$data['title']	= 'Kirim Dokumen ke Kepala Sekolah';

		$this->load->view('wmm/kirim_dokumen',$data);
	}
}
?>
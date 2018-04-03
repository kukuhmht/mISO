<!--
===============Author===============
-Kukuh M HidayaTullah (03 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dokumen extends CI_Controller {

  public function __construct() {
    parent::__construct();
	if($this->session->userdata('id_hakakses') == "1") {
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "3") {
			redirect('');
		}
	
    $this->load->model('wmm/home_model');
  }
  
	public function unit_kerja() {
		$data['title']						= 'Dokumen Unit Kerja';
		$data['list_dokumen_unit_kerja']	= $this->home_model->list_dokumen_unit_kerja()->result();

		$this->load->view('wmm/dokumen_unit_kerja', $data);
	}
	
	public function dokumen_revisi() {
		$data['title']						= 'Revisi Dokumen Unit Kerja';
		$data['list_dokumen_revisi']		= $this->home_model->list_dokumen_revisi()->result();

		$this->load->view('wmm/dokumen_revisi', $data);
	}
}
?>
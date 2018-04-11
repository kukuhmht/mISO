<!--
===============Author===============
-Kukuh M HidayaTullah (11 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pedoman_mutu extends CI_Controller {

  public function __construct() {
    parent::__construct();
	if($this->session->userdata('id_hakakses') == "1") {
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "2") {
			redirect('');
		}
		$this->load->model('unit_kerja/pedomanmutu_model');
  }
  
	public function index() {
		$user = $this->session->userdata('nama');

		$data['title']					= 'Unit Kerja';
	//	$data['unit']					= $this->session->userdata('nama');
		$data['ambil_pedomanmutu']		= $this->pedomanmutu_model->ambil_pedomanmutu($user)->result();
		
		$this->load->view('unit_kerja/pedoman_mutu', $data);
	}
}
?>
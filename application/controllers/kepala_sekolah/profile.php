<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller {

  public function __construct() {
    parent::__construct();
	if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "1") {
			redirect('superadmin/home');
		}else if(!$this->session->userdata('id_hakakses') == "4") {
			redirect('');
		}
		
  //  $this->load->model('kepala_sekolah/profile_model');
  }
  
	public function index() {
		$data['title']			= 'Profile';
	//	$data['view_profile']	= $this->profile_model->view_profile()->result();

		$this->load->view('kepala_sekolah/profile', $data);
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (07 April 2018)

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
		}else if($this->session->userdata('id_hakakses') == "1"){
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "2") {
			redirect('');
		}
		
	$this->load->model('unit_kerja/profile_model');
  }
  
	public function index() {
		$user = $this->session->userdata('nama');
		
		$data['title']			= 'Profile';
	//	$data['view_profile']	= $this->profile_model->view_profile()->result();

		$this->load->view('unit_kerja/profile', $data);
	}
	
	public function update() {
		$id_user = $this->uri->segment(4);
		
		$password = $this->input->post('password');
		
		$data = array(
			'password' => $password
		);
		
		$where = array(
			'id_user'	=> $id_user
		);
		$this->profile_model->update('user', $data, $where);

		redirect('unit_kerja/profile');
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (25 Maret 2018)
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (30 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php

Class Index extends CI_Controller {
  public function __construct() {
  parent:: __construct();
	$this->load->model('login_unit_kerja_model/index_model');
  }

	public function index() {
		if($this->session->userdata('id_hakakses') == "1") {
			redirect('superadmin/home');
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}
	
		$data['title']	= 'Masuk sebagai Unit Kerja';

		$this->load->view('login_unit_kerja/index',$data);
	}
	
	public function signin() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$data = $this->index_model->cek_akun($username, $password);
		
		if(is_null($data[0]['username'])){
			$this->session->set_flashdata(
			'pesan',
			'Username atau Password Anda Salah'
			);
			
			redirect('login_unit_kerja/index');
		}else if($username == $data[0]['username'] && $password == $data[0]['password'] && ($data[0]['id_hakakses'] == "2")){
			$data_session = array(
				'id_user'		=> $data[0]['id_user'],
				'nama'			=> $data[0]['nama'],
				'username'		=> $data[0]['username'],
				'password'		=> $data[0]['password'],
				'hak_akses'		=> $data[0]['hak_akses'],
				'id_hakakses'	=> $data[0]['id_hakakses']
			);
			
		$this->session->set_userdata($data_session);
		redirect('unit_kerja/home');
		}else{
			$this->session->set_flasdata(
			'pesan',
			'Username atau Password Anda Salah'
			);
		redirect('login_unit_kerja/index');
		}
	}
	
	public function logout() {
		session_destroy();
		
		redirect('');
	}
}
?>
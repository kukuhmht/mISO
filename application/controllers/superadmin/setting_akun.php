<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setting_akun extends CI_Controller {

  public function __construct() {
    parent::__construct();
	if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "1") {
			redirect('');
		}
		
  //  $this->load->model('admin/setting_akun_model');
  }
  
	public function index() {
		$data['title']			= 'Admin mISO';

		$this->load->view('admin/setting_akun', $data);
	}
	
	public function edit(){
		// 	$id_user = $this->uri->segment(4);
			$data['title']	= 'Edit User';

		// 	$dt = $this->setting_akun_model->edit($id_user);

		// 	$data['id_user']		= $dt['0']['id_user'];
		// 	$data['nama']			= $dt['0']['nama'];
		// 	$data['hak_akses']		= $dt['0']['hak_akses'];

		$this->load->view('admin/edit_akun', $data);
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (05 April 2018)

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
		
	$this->load->model('admin/setting_akun_model');
  }
  
	public function index() {
		$data['title']				= 'Setting Akun mISO';
		$data['akun_admin']			= $this->setting_akun_model->akun_admin()->result();
		$data['akun_unitkerja']		= $this->setting_akun_model->akun_unitkerja()->result();
		$data['akun_wmm']			= $this->setting_akun_model->akun_wmm()->result();
		$data['akun_kepalasekolah']	= $this->setting_akun_model->akun_kepalasekolah()->result();

		$this->load->view('admin/setting_akun', $data);
	}
	
	public function add_admin() {
		$data['title']	= 'Tambah Akun Admin';

		$this->load->view('admin/add_akun_admin', $data);
	}
	
	public function add_unitkerja() {
		$data['title']	= 'Tambah Akun Unit Kerja';

		$this->load->view('admin/add_akun_unitkerja', $data);
	}
	
	public function add_wmm() {
		$data['title']	= 'Tambah Akun WMM';

		$this->load->view('admin/add_akun_wmm', $data);
	}
	
	public function add_kepalasekolah() {
		$data['title']	= 'Tambah Akun Kepala Sekolah';

		$this->load->view('admin/add_akun_kepalasekolah', $data);
	}
	
	function tambah_admin(){
	//	$id_hakakses	= $this->input->post('id_hakakses');
		$nama 			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		
		$data = array(
			'id_hakakses'	=> 1,
			'nama' 			=> $nama,
			'username'		=> $username,
			'password'		=> $password,
		);
		$this->setting_akun_model->input($data,'user');
		redirect('superadmin/setting_akun');
	}
	
	function tambah_unitkerja(){
	//	$id_hakakses	= $this->input->post('id_hakakses');
		$nama 			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		
		// select id_unit from unit_kerja where nama_unit = $nama
		$id_unit = $this->setting_akun_model->ambil_idunit($nama)->result();
		
	//	print_r($id_unit[0]->id_unit);
		
		$data = array(
			'id_hakakses'	=> 2,
			'id_unit'		=> $id_unit[0]->id_unit,
			'nama' 			=> $nama,
			'username'		=> $username,
			'password'		=> $password,
		);
		$this->setting_akun_model->input($data,'user');
		redirect('superadmin/setting_akun');
	}
	
	function tambah_wmm(){
	//	$id_hakakses	= $this->input->post('id_hakakses');
	//	$nama 			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		
		$data = array(
			'id_hakakses'	=> 3,
			'nama' 			=> 'Wakil Management Mutu',
			'username'		=> $username,
			'password'		=> $password,
		);
		$this->setting_akun_model->input($data,'user');
		redirect('superadmin/setting_akun');
	}
	
	function tambah_kepalasekolah(){
	//	$id_hakakses	= $this->input->post('id_hakakses');
	//	$nama 			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		
		$data = array(
			'id_hakakses'	=> 4,
			'nama' 			=> 'Kepala Sekolah',
			'username'		=> $username,
			'password'		=> $password,
		);
		$this->setting_akun_model->input($data,'user');
		redirect('superadmin/setting_akun');
	}
	
	public function edit_admin(){
		$id_user = $this->uri->segment(4);
		$data['title']	= 'Edit Akun Admin';

		$dt = $this->setting_akun_model->edit($id_user);

		$data['id_user']	= $dt['0']['id_user'];
		$data['id_hakakses']= $dt['0']['id_hakakses'];
		$data['nama']		= $dt['0']['nama'];
		$data['username']	= $dt['0']['username'];
		$data['password']	= $dt['0']['password'];

		$this->load->view('admin/edit_akun_admin', $data);
	}

	public function edit_unitkerja(){
		$id_user = $this->uri->segment(4);
		$data['title']	= 'Edit Akun Unit Kerja';

		$dt = $this->setting_akun_model->edit($id_user);

		$data['id_user']	= $dt['0']['id_user'];
		$data['id_hakakses']= $dt['0']['id_hakakses'];
		$data['nama']		= $dt['0']['nama'];
		$data['username']	= $dt['0']['username'];
		$data['password']	= $dt['0']['password'];

		$this->load->view('admin/edit_akun_unitkerja', $data);
	}

	public function edit_wmm(){
		$id_user = $this->uri->segment(4);
		$data['title']	= 'Edit Akun WMM';

		$dt = $this->setting_akun_model->edit($id_user);

		$data['id_user']	= $dt['0']['id_user'];
		$data['id_hakakses']= $dt['0']['id_hakakses'];
		$data['nama']		= $dt['0']['nama'];
		$data['username']	= $dt['0']['username'];
		$data['password']	= $dt['0']['password'];

		$this->load->view('admin/edit_akun_wmm', $data);
	}
	
	public function edit_kepalasekolah(){
		$id_user = $this->uri->segment(4);
		$data['title']	= 'Edit Akun Kepala Sekolah';

		$dt = $this->setting_akun_model->edit($id_user);

		$data['id_user']	= $dt['0']['id_user'];
		$data['id_hakakses']= $dt['0']['id_hakakses'];
		$data['nama']		= $dt['0']['nama'];
		$data['username']	= $dt['0']['username'];
		$data['password']	= $dt['0']['password'];

		$this->load->view('admin/edit_akun_kepalasekolah', $data);
	}
	
	public function update(){
		$id_user = $this->uri->segment(4);
		
		$id_hakakses	= $this->input->post('id_hakakses');
		$nama 			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		
		$data = array(
			'id_hakakses'	=> $id_hakakses,
			'nama' 			=> $nama,
			'username'		=> $username,
			'password'		=> $password,
		);
		$where = array(
			'id_user' => $id_user
		);
		$this->setting_akun_model->update('user',$data,$where);
		
		redirect('superadmin/setting_akun');
	}
	
	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->setting_akun_model->hapus($where,'user');
		redirect('superadmin/setting_akun');
	}
}
?>
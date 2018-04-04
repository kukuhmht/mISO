<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (04 April 2018)

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
		}else if($this->session->userdata('id_hakakses') == "2"){
			redirect('unit_kerja/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "3") {
			redirect('');
		}
    $this->load->model('wmm/pedoman_mutu_model');
  }
  
	public function index() {
		$data['title']				= 'Pedoman Mutu';
		$data['list_pedoman_mutu']	= $this->pedoman_mutu_model->list_pedoman_mutu()->result();

		$this->load->view('wmm/pedoman_mutu', $data);
	}
	
	public function upload() {
		$data['title']				= 'Upload Pedoman Mutu';

		$this->load->view('wmm/upload_pedoman_mutu', $data);
	}
	
	public function view_dokumen() {
		$id_pedomanmutu 			= $this->uri->segment(4);
		$data['title']				= 'Dokumen Pedoman Mutu';
	//	$data['ambil_statusdokumen']= $this->home_model->ambil_statusdokumen()->result();
		
		/*tampilan pengubah tanggal
			$data['tgl_upload'] 			= date("F jS, Y", strtotime($));
		*/
		
		$dt = $this->pedoman_mutu_model->view_dokumen($id_pedomanmutu);
		
		$data['id_pedomanmutu']		= $dt['0']['id_pedomanmutu'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['catatan']			= $dt['0']['catatan'];
		
		$this->load->view('wmm/view_dokumen_pedomanmutu', $data);
	}
	
	public function view_kirim_dokumen() {
		$id_pedomanmutu 			= $this->uri->segment(4);
		$data['title']				= 'Dokumen Pedoman Mutu';
		
		$dt = $this->pedoman_mutu_model->view_dokumen($id_pedomanmutu);
		
		$data['id_pedomanmutu']		= $dt['0']['id_pedomanmutu'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['catatan']			= $dt['0']['catatan'];
		
		$this->load->view('wmm/kirim_dokumen_pedomanmutu', $data);
	}
	
	public function kirim_dokumen() {
		$id_pedomanmutu = $this->uri->segment(4);
		
		$data['status_dokumen'] 	= 'terkirim';
		$data['tgl_dikirim'] 		= date('Y-m-d H:i:s' );
		
		$where = array(
			'id_pedomanmutu' => $id_pedomanmutu
		);
		$this->pedoman_mutu_model->update('pedoman_mutu',$data,$where);
		
		redirect('wmm/pedoman_mutu');
	}
	
	function tambah(){
		$id_user 		= $this->session->userdata('id_user');
	//	$hak_akses 		= $this->input->post('hak_akses');
		$nama_dokumen 	= $this->input->post('nama_dokumen');
		$dokumen_path	= $this->input->post('dokumen_path');
		$catatan		= $this->input->post('catatan');
		$tgl_upload	  	= date('Y-m-d H:i:s' );

		$data = array(
			'id_user'	 		=> $id_user,
		//	'hak_akses'     	=> $hak_akses,
			'nama_dokumen' 		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'catatan'			=> $catatan,
			'tgl_upload'	  	=> $tgl_upload
			);
		$this->pedoman_mutu_model->input($data,'pedoman_mutu');
		redirect('wmm/pedoman_mutu');
	}
	
	public function edit(){
		$id_pedomanmutu = $this->uri->segment(4);
		$data['title']	= 'Edit Dokumen Pedoman Mutu';

		$dt = $this->pedoman_mutu_model->edit($id_pedomanmutu);

		$data['id_pedomanmutu']	= $dt['0']['id_pedomanmutu'];
	//	$data['nama']			= $dt['0']['nama'];
	//	$data['hak_akses']		= $dt['0']['hak_akses'];
		$data['nama_dokumen']	= $dt['0']['nama_dokumen'];
		$data['dokumen_path']	= $dt['0']['dokumen_path'];
		$data['catatan']		= $dt['0']['catatan'];

		$this->load->view('wmm/edit_dokumen_pedomanmutu', $data);
	}

	public function update(){
		$id_pedomanmutu = $this->uri->segment(4);
		
		$nama_dokumen 		= $this->input->post('nama_dokumen');
		$dokumen_path 		= $this->input->post('dokumen_path');
		$catatan 			= $this->input->post('catatan');

		$data = array(
			'nama_dokumen'		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'catatan' 			=> $catatan,
		);
		$where = array(
			'id_pedomanmutu' => $id_pedomanmutu
		);
		$this->pedoman_mutu_model->update('pedoman_mutu',$data,$where);
		
		redirect('wmm/pedoman_mutu');
	}
	
	function hapus($id_pedomanmutu){
		$where = array('id_pedomanmutu' => $id_pedomanmutu);
		$this->pedoman_mutu_model->hapus($where,'pedoman_mutu');
		redirect('wmm/pedoman_mutu');
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

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
		$data['title']	= 'Pedoman Mutu';

		$this->load->view('wmm/pedoman_mutu', $data);
	}
	
	function tambah(){
		$nama 			= $this->input->post('nama');
		$hak_akses 		= $this->input->post('hak_akses');
		$nama_dokumen 	= $this->input->post('nama_dokumen');
		$dokumen_path	= $this->input->post('dokumen_path');
		$catatan		= $this->input->post('catatan');
		$tgl_upload	  	= $this->pedoman_mutu_model->input_tanggal_otomatis()->result_array();

		$data = array(
			'nama'	 			=> $nama,
			'hak_akses'     	=> $hak_akses,
			'nama_dokumen' 		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'catatan'			=> $catatan,
			'tgl_upload'	  	=> $tgl_upload[0]['now'],
			);
		$this->pedoman_mutu_model->input($data,'dokumen');
		redirect('wmm/home');
	}
	
	public function edit(){
		// 	$id_dokumen = $this->uri->segment(4);
			$data['title']	= 'Edit Dokumen';

		// 	$dt = $this->pedoman_mutu_model->edit($id_dokumen);

		// 	$data['id_dokumen']		= $dt['0']['id_dokumen'];
		// 	$data['nama']			= $dt['0']['nama'];
		// 	$data['hak_akses']		= $dt['0']['hak_akses'];
		// 	$data['nama_dokumen']	= $dt['0']['nama_dokumen'];
		// 	$data['dokumen_path']	= $dt['0']['dokumen_path'];
		// 	$data['catatan']		= $dt['0']['catatan'];

		$this->load->view('wmm/edit_dokumen', $data);
	}
}
?>
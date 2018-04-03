<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class View_dokumen extends CI_Controller {

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
		
    $this->load->model('kepala_sekolah/view_dokumen_model');
  }
  
	public function index() {
		// $id_dokumen = $this->uri->segment(4);
		 $data['title']	= 'Lihat Dokumen';
		
		// $dt = $this->view_dokumen_model->view_dokumen($id_dokumen);
		
		// $data['id_dokumen']			= $dt['0']['id_dokumen'];
		// $data['nama']				= $dt['0']['nama'];
		// $data['hak_akses']			= $dt['0']['hak_akses'];
		// $data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		// $data['dokumen_path']		= $dt['0']['dokumen_path'];
		// $data['jenis_pos']			= $dt['0']['jenis_pos'];
		// $data['status_dokumen']		= $dt['0']['status_dokumen'];
		// $data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		// $data['tgl_upload']			= $dt['0']['tgl_upload'];
		// $data['tgl_dikirim']		= $dt['0']['tgl_dikirim'];
		// $data['tgl_diterima']		= $dt['0']['tgl_diterima'];
		// $data['catatan']			= $dt['0']['catatan'];

		$this->load->view('kepala_sekolah/view_dokumen', $data);
	}
}
?>
<!--
===============Author===============
-Kukuh M HidayaTullah (23 Maret 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class View_dokumen_revisi extends CI_Controller {

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
		
    $this->load->model('unit_kerja/view_dokumen_revisi_model');
  }
  
	public function index() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Lihat Dokumen Revisi';
		
		$dt = $this->view_dokumen_revisi_model->view_dokumen($id_dokumen);
		
		$data['id_dokumenrevisi']	= $dt['0']['id_dokumenrevisi'];
	//	$data['id_user']			= $dt['0']['id_user'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['jenis_pos']			= $dt['0']['jenis_pos'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		$data['tgl_upload']			= $dt['0']['tgl_upload'];
		$data['tgl_dikirim']		= $dt['0']['tgl_dikirim'];
		$data['tgl_diterima']		= $dt['0']['tgl_diterima'];
		$data['catatan']			= $dt['0']['catatan'];
		$data['tempat_revisi']		= $dt['0']['tempat_revisi'];
		$data['semula_berbunyi']	= $dt['0']['semula_berbunyi'];
		$data['diusulkan_menjadi']	= $dt['0']['diusulkan_menjadi'];
		$data['alasan_usulan']		= $dt['0']['alasan_usulan'];
		$data['status_usulanrevisi']= $dt['0']['status_usulanrevisi'];
		$data['tgl_diusulkan']		= $dt['0']['tgl_diusulkan'];
		$data['tgl_persetujuan']		= $dt['0']['tgl_persetujuan'];

		$this->load->view('unit_kerja/view_dokumen_revisi', $data);
	}
}
?>
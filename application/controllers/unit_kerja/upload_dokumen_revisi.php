<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_dokumen_revisi extends CI_Controller {

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
		
    $this->load->model('unit_kerja/upload_dokumen_revisi_model');
  }
  
	public function index() {
		$id_user = $this->session->userdata('id_user');
		
		$data['title']				= 'Upload Dokumen Revisi';
		$data['ambil_dokumen']		= $this->upload_dokumen_revisi_model->ambil_dokumen($id_user)->result();

		$this->load->view('unit_kerja/upload_dokumen_revisi', $data);
	}
	
	function tambah(){
	//	$id_user			= $this->session->userdata('id_user');
	//	$hak_akses 			= $this->input->post('hak_akses');
		$id_dokumen 		= $this->input->post('nama_dokumen');
		$dokumen_path		= $this->input->post('dokumen_path');
		$tempat_revisi		= $this->input->post('tempat_revisi');
		$semula_berbunyi	= $this->input->post('semula_berbunyi');
		$diusulkan_menjadi	= $this->input->post('diusulkan_menjadi');
		$alasan_usulan		= $this->input->post('alasan_usulan');
		$catatan_revisi		= $this->input->post('catatan_revisi');
		$tgl_upload		  	= date('Y-m-d H:i:s' );

		$data = array(
	//		'id_user'			=> $id_user,
	//		'hak_akses'     	=> $hak_akses,
			'id_dokumen' 		=> $id_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'tempat_revisi'		=> $tempat_revisi,
			'semula_berbunyi'	=> $semula_berbunyi,
			'diusulkan_menjadi'	=> $diusulkan_menjadi,
			'alasan_usulan'		=> $alasan_usulan,
			'catatan_revisi'	=> $catatan_revisi,
			'tgl_upload'	  	=> $tgl_upload
			);
		$this->upload_dokumen_revisi_model->input($data,'dokumen_revisi');
		redirect('unit_kerja/home');
	}
	
	public function edit(){
		$id_dokumen		 	= $this->uri->segment(4);
		$id_user = $this->session->userdata('id_user');
		
		$data['title']		= 'Edit Dokumen Revisi';
		$data['ambil_dokumen']		= $this->upload_dokumen_revisi_model->ambil_dokumen($id_user)->result();

		$dt = $this->upload_dokumen_revisi_model->edit($id_dokumen);

		$data['id_dokumen']			= $dt['0']['id_dokumen'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['id_dokumen']			= $dt['0']['id_dokumen'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['tempat_revisi']		= $dt['0']['tempat_revisi'];
		$data['semula_berbunyi']	= $dt['0']['semula_berbunyi'];
		$data['diusulkan_menjadi']	= $dt['0']['diusulkan_menjadi'];
		$data['alasan_usulan']		= $dt['0']['alasan_usulan'];
		$data['catatan_revisi']		= $dt['0']['catatan_revisi'];

		$this->load->view('unit_kerja/edit_dokumen_revisi', $data);
	}
	
	public function update(){
		$id_dokumen = $this->uri->segment(4);
		
		$id_dokumen 		= $this->input->post('id_dokumen');
	//	$nama_dokumen 		= $this->input->post('nama_dokumen');
		$dokumen_path 		= $this->input->post('dokumen_path');
		$tempat_revisi 		= $this->input->post('tempat_revisi');
		$semula_berbunyi 	= $this->input->post('semula_berbunyi');
		$diusulkan_menjadi 	= $this->input->post('diusulkan_menjadi');
		$alasan_usulan 		= $this->input->post('alasan_usulan');
		$catatan_revisi		= $this->input->post('catatan_revisi');

		$data = array(
			'id_dokumen'		=> $id_dokumen,
		//	'nama_dokumen'		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'tempat_revisi'		=> $tempat_revisi,
			'semula_berbunyi'	=> $semula_berbunyi,
			'diusulkan_menjadi'	=> $diusulkan_menjadi,
			'alasan_usulan'		=> $alasan_usulan,
			'catatan_revisi'	=> $catatan_revisi,
		);
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_revisi_model->update('dokumen_revisi',$data,$where);
		
		redirect('unit_kerja/home');
	}
	
	function hapus($id_dokumenrevisi){
		$where = array('id_dokumenrevisi' => $id_dokumenrevisi);
		$this->upload_dokumen_revisi_model->hapus($where,'dokumen_revisi');
		redirect('unit_kerja/home');
	}
	
	// Function buat ngambil data dokumen_path lewat ajax
	public function getDokumenPath() {
		if(isset($_POST['id'])) {
			$dok = $this->upload_dokumen_revisi_model->getDokumenPath($_POST['id'])->result();
			
			echo json_encode($dok);
		}
		
		// echo 'asek';
	}
}
?>
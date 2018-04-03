<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

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
	
    $this->load->model('kepala_sekolah/home_model');
  }
  
	public function index() {
		$data['title']			= 'Kepala Sekolah';
		$data['list_dokumen']	= $this->home_model->list_dokumen()->result();

		$this->load->view('kepala_sekolah/home', $data);
	}
	
	public function view_dokumen() {
		$id_dokumen 				= $this->uri->segment(4);
		$data['title']				= 'Dokumen';
		$data['ambil_statusdokumen']= $this->home_model->ambil_statusdokumen()->result();
		
		/*tampilan pengubah tanggal
			$data['tgl_upload'] 			= date("F jS, Y", strtotime($));
		*/
		
		$dt = $this->home_model->view_dokumen($id_dokumen);
		
		$data['id_dokumen']			= $dt['0']['id_dokumen'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['jenis_pos']			= $dt['0']['jenis_pos'];
		$data['id_statusdokumen']	= $dt['0']['id_statusdokumen'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['tgl_diterima']		= ($dt['0']['tgl_diterima'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_diterima']));
		$data['catatan']			= $dt['0']['catatan'];
		$data['pesan']				= $dt['0']['pesan'];
		
		$this->load->view('kepala_sekolah/view_dokumen', $data);
	}
	
	public function kirim_statusdokumen() {
		$id_dokumen = $this->uri->segment(4);
		$this->load->model('kepala_sekolah/upload_dokumen_model');
		
		$data['id_statusdokumen']	= $this->input->post('id_statusdokumen');
		$data['pesan']				= $this->input->post('pesan');
		$data['tgl_diterima']		= date('Y-m-d H:i:s' );
		
		$where = array (
			'id_dokumen' => $id_dokumen
		);
		
		$this->upload_dokumen_model->update('dokumen',$data,$where);
		
		redirect('kepala_sekolah/home');
	}
}
?>
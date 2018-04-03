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
class Upload_dokumen extends CI_Controller {

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
		
    $this->load->model('wmm/upload_dokumen_model');
  }
  
	public function index() {
		$data['title']	= 'Upload Dokumen';
		//ambil data jenis_pos
		$data['jenis_pos']	= $this->upload_dokumen_model->ambil_jenis_pos()->result();

		$this->load->view('wmm/upload_dokumen', $data);
	}
	
	function tambah(){
		$id_user 		= $this->session->userdata('id_user');
	//	$hak_akses 		= $this->input->post('hak_akses');
		$nama_dokumen 	= $this->input->post('nama_dokumen');
		$dokumen_path	= $this->input->post('dokumen_path');
		$id_jenispos	= $this->input->post('id_jenispos');
		$catatan		= $this->input->post('catatan');
		$tgl_upload	  	= date('Y-m-d H:i:s' );

		$data = array(
			'id_user'	 		=> $id_user,
		//	'hak_akses'     	=> $hak_akses,
			'nama_dokumen' 		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'id_jenispos'		=> $id_jenispos,
			'catatan'			=> $catatan,
			'tgl_upload'	  	=> $tgl_upload
			);
		$this->upload_dokumen_model->input($data,'dokumen');
		redirect('wmm/home');
	}
	
	public function edit(){
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Edit Dokumen';
		//ambil data jenis_pos
		$data['ambil_jenis_pos']	= $this->upload_dokumen_model->ambil_jenis_pos()->result();

		$dt = $this->upload_dokumen_model->edit($id_dokumen);

		$data['id_dokumen']		= $dt['0']['id_dokumen'];
	// 	$data['nama']			= $dt['0']['nama'];
	//	$data['hak_akses']		= $dt['0']['hak_akses'];
		$data['nama_dokumen']	= $dt['0']['nama_dokumen'];
		$data['dokumen_path']	= $dt['0']['dokumen_path'];
		$data['jenis_pos']		= $dt['0']['jenis_pos'];
		$data['id_jenispos']	= $dt['0']['id_jenispos'];
		$data['catatan']		= $dt['0']['catatan'];

		$this->load->view('wmm/edit_dokumen', $data);
	}
	
	public function update(){
		$id_dokumen = $this->uri->segment(4);
		
		$nama_dokumen 		= $this->input->post('nama_dokumen');
		$dokumen_path 		= $this->input->post('dokumen_path');
		$id_jenispos 		= $this->input->post('id_jenispos');
	//	$jenis_pos 			= $this->input->post('jenis_pos');
		$catatan 			= $this->input->post('catatan');

		$data = array(
			'nama_dokumen'		=> $nama_dokumen,
			'dokumen_path'		=> $dokumen_path,
			'id_jenispos'		=> $id_jenispos,
		//	'jenis_pos'		=> $jenis_pos,
			'catatan' 			=> $catatan,
		);
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_model->update('dokumen',$data,$where);
		
		redirect('wmm/home');
	}
	
	function hapus($id_dokumen){
		$where = array('id_dokumen' => $id_dokumen);
		$this->upload_dokumen_model->hapus($where,'dokumen');
		redirect('wmm/home');
	}
}
?>
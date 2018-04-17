<!--
===============Author===============
-Kukuh M HidayaTullah (29 Maret 2018)
-Kukuh M HidayaTullah (01 April 2018)
-Kukuh M HidayaTullah (01 April 2018)
-Kukuh M HidayaTullah (13 April 2018)
-Kukuh M HidayaTullah (16 April 2018)
-Kukuh M HidayaTullah (17 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

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
	
    $this->load->model('wmm/home_model');
  }
  
	public function index() {
		$user = $this->session->userdata('nama');
		$id_user = $this->session->userdata('id_user');
		$data['title']			= 'Wakil Management Mutu';
		$data['ambil_bulanwmm']	= $this->home_model->ambil_bulanwmm($id_user)->result();
		$data['ambil_tahunwmm']	= $this->home_model->ambil_tahunwmm($id_user)->result();

		if(isset($_POST['search'])) {
			$query 								= $this->input->post('search');
			$tgl 								= $this->input->post('tgl');
			$tahun 								= $this->input->post('tahun');
			$data['list_dokumen_wmm']			= $this->home_model->caridokumen_wmm($query, $user)->result();
			$data['list_dokumen_unit_kerja']	= $this->home_model->caridokumen_unitkerja($query, $user)->result();
			$data['list_dokumen_revisi']		= $this->home_model->caridokumen_revisi($query, $user)->result();
		}else{
			$data['list_dokumen_wmm']			= $this->home_model->list_dokumen_wmm()->result();
			$data['list_dokumen_unit_kerja']	= $this->home_model->list_dokumen_unit_kerja()->result();
			$data['list_dokumen_revisi']		= $this->home_model->list_dokumen_revisi()->result();
		}

		$this->load->view('wmm/home', $data);
	}
	
	public function filter_wmm() {
		$user					= $this->session->userdata('nama');
		$id_user				= $this->session->userdata('id_user');
		$data['title']			= 'Hasil Filter Dokumen WMM';
		$data['ambil_bulanwmm']	= $this->home_model->ambil_bulanwmm($id_user)->result();
		$data['ambil_tahunwmm']	= $this->home_model->ambil_tahunwmm($id_user)->result();
		$tgl 					= $this->input->post('tgl');
		$tahun 					= $this->input->post('tahun');
		
		$data['list_dokumen_wmm']			= $this->home_model->filterdokumen_wmm($tgl, $tahun, $user)->result();
		
		$this->load->view('wmm/filter_dokumenwmm', $data);
	}
	
	public function filter_unitkerja() {
		$user					= $this->session->userdata('nama');
		$id_user				= $this->session->userdata('id_user');
		$data['title']			= 'Hasil Filter Dokumen Unit Kerja';
		$data['ambil_bulan']	= $this->home_model->ambil_bulan()->result();
		$data['ambil_tahun']	= $this->home_model->ambil_tahun()->result();
		$tgl 					= $this->input->post('tgl');
		$tahun 					= $this->input->post('tahun');
		
		$data['list_dokumen_unit_kerja']		= $this->home_model->filterdokumen_unitkerja($tgl, $tahun, $user)->result();
		
		$this->load->view('wmm/filter_dokumen_unitkerja', $data);
	}
	
	public function filter_revisi() {
		$user					= $this->session->userdata('nama');
		$id_user				= $this->session->userdata('id_user');
		$data['title']			= 'Hasil Filter Revisi Dokumen Unit Kerja';
		$data['ambil_bulanrevisi']	= $this->home_model->ambil_bulanrevisi()->result();
		$data['ambil_tahunrevisi']	= $this->home_model->ambil_tahunrevisi()->result();
		$tgl 					= $this->input->post('tgl');
		$tahun 					= $this->input->post('tahun');
		
		$data['list_dokumen_revisi']	= $this->home_model->filterdokumen_revisi($tgl, $tahun)->result();

		$this->load->view('wmm/filter_dokumen_revisi', $data);
	}
	
	public function view_dokumen() {
		$id_dokumen 				= $this->uri->segment(4);
		$data['title']				= 'Dokumen WMM';
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
		
		$this->load->view('wmm/view_dokumen', $data);
	}
	
	public function view_dokumen_unit_kerja() {
		$id_dokumen 				= $this->uri->segment(4);
		$data['title']				= 'Dokumen Unit Kerja';
		$data['ambil_statusdokumen']= $this->home_model->ambil_statusdokumen()->result();
		
		/*tampilan pengubah tanggal
			$data['tgl_upload'] 			= date("F jS, Y", strtotime($));
		*/
		
		$dt = $this->home_model->view_dokumen_unit_kerja($id_dokumen);
		
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
		
		$this->load->view('wmm/view_dokumen_unit_kerja', $data);
	}
	
	public function view_dokumen_revisi() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Dokumen Revisi';
		
		/*tampilan pengubah tanggal
			$data['tgl_upload'] 			= date("F jS, Y", strtotime($));
		*/
		
		$dt = $this->home_model->view_dokumen_revisi($id_dokumen);
		
		$data['id_dokumen']			= $dt['0']['id_dokumen'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['jenis_pos']			= $dt['0']['jenis_pos'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['status_usulanrevisi']= $dt['0']['status_usulanrevisi'];
		$data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['tgl_diterima']		= ($dt['0']['tgl_diterima'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_diterima']));
		$data['tgl_diusulkan']		= ($dt['0']['tgl_diusulkan'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_diusulkan']));
		$data['tgl_persetujuan']	= ($dt['0']['tgl_persetujuan'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_persetujuan']));
		$data['tempat_revisi']		= $dt['0']['tempat_revisi'];
		$data['semula_berbunyi']	= $dt['0']['semula_berbunyi'];
		$data['diusulkan_menjadi']	= $dt['0']['diusulkan_menjadi'];
		$data['alasan_usulan']		= $dt['0']['alasan_usulan'];
		$data['catatan']			= $dt['0']['catatan'];
		$data['catatan_revisi']		= $dt['0']['catatan_revisi'];
		$data['pesan_revisi']		= $dt['0']['pesan_revisi'];
		
		$this->load->view('wmm/view_dokumen_revisi', $data);
	}
	
	public function kirim_statusdokumen_unitkerja() {
		$id_dokumen = $this->uri->segment(4);
		$this->load->model('wmm/upload_dokumen_model');
		
		$data['id_statusdokumen']	= $this->input->post('id_statusdokumen');
		$data['pesan']				= $this->input->post('pesan');
		$data['tgl_diterima']		= date('Y-m-d H:i:s' );
		
		$where = array (
			'id_dokumen' => $id_dokumen
		);
		
		$this->upload_dokumen_model->update('dokumen',$data,$where);
		
		redirect('wmm/home');
	}
	
	public function kirim_dokumen_revisi() {	
		$id_dokumen = $this->uri->segment(4);
		$this->load->model('wmm/upload_dokumen_model');
		
		$data['status_usulanrevisi'] 	= $this->input->post('status_usulanrevisi');
		$data['pesan_revisi']			= $this->input->post('pesan_revisi');	
		$data['tgl_persetujuan'] 		= date('Y-m-d H:i:s' );
		
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_model->update('dokumen_revisi',$data,$where);
		
		redirect('wmm/home');
	}
	
	public function view_kirim_dokumen() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Kirim Dokumen ke Kepala Sekolah';
		
		$dt = $this->home_model->view_kirim_dokumen($id_dokumen);

		$data['id_dokumen']			= $dt['0']['id_dokumen'];
		$data['nama']				= $dt['0']['nama'];
	//	$data['hak_akses']			= $dt['0']['hak_akses'];
		$data['nama_dokumen']		= $dt['0']['nama_dokumen'];
		$data['dokumen_path']		= $dt['0']['dokumen_path'];
		$data['jenis_pos']			= $dt['0']['jenis_pos'];
		$data['jenis_pos']			= $dt['0']['jenis_pos'];
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_diterima']		= ($dt['0']['tgl_diterima'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_diterima']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['catatan']			= $dt['0']['catatan'];
	//	$data['catatan_revisi']		= $dt['0']['catatan_revisi'];
		
		$this->load->view('wmm/kirim_dokumen', $data);
	}
	
	public function kirim_dokumen() {
		$id_dokumen = $this->uri->segment(4);

		$this->load->model('wmm/upload_dokumen_model');
		
		date_default_timezone_set('Asia/Jakarta');
		
		$data['id_statuspengiriman'] 	= '1';
		$data['tgl_dikirim'] 			= date('Y-m-d H:i:s' );
		
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_model->update('dokumen',$data,$where);
		
		redirect('wmm/home');
	}
}
?>
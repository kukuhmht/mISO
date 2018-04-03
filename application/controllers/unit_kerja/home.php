<!--
===============Author===============
-Kukuh M HidayaTullah (22 Maret 2018)
-Kukuh M HidayaTullah (30 Maret 2018)
-Kukuh M HidayaTullah (31 Maret 2018)

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
		}else if($this->session->userdata('id_hakakses') == "3") {
			redirect('wmm/home');
		}else if($this->session->userdata('id_hakakses') == "4") {
			redirect('kepala_sekolah/home');
		}else if(!$this->session->userdata('id_hakakses') == "2") {
			redirect('');
		}
    $this->load->model('unit_kerja/home_model');
  }
  
	public function index() {
		$user = $this->session->userdata('nama');
		
		$data['title']					= 'Unit Kerja';
		$data['list_dokumen']			= $this->home_model->list_dokumen($user)->result();
		$data['list_dokumen_revisi']	= $this->home_model->list_dokumen_revisi($user)->result();
		
		$this->load->view('unit_kerja/home', $data);
	}
	
	public function view_dokumen() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Lihat Dokumen';
		
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
		$data['status_dokumen']		= $dt['0']['status_dokumen'];
		$data['status_pengiriman']	= $dt['0']['status_pengiriman'];
		$data['tgl_upload']			= ($dt['0']['tgl_upload'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_upload']));
		$data['tgl_dikirim']		= ($dt['0']['tgl_dikirim'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_dikirim']));
		$data['tgl_diterima']		= ($dt['0']['tgl_diterima'] == '') ? '' : date("j, F Y", strtotime($dt['0']['tgl_diterima']));
		$data['catatan']			= $dt['0']['catatan'];
		$data['pesan']				= $dt['0']['pesan'];
		
		$this->load->view('unit_kerja/view_dokumen', $data);
	}
	
	public function view_dokumen_revisi() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Lihat Dokumen Revisi';
		
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
		
		$this->load->view('unit_kerja/view_dokumen_revisi', $data);
	}
	
	public function view_kirim_dokumen() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Kirim Dokumen ke WMM';
		
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
		
		$this->load->view('unit_kerja/kirim_dokumen', $data);
	}
	
	public function view_kirim_dokumen_revisi() {
		$id_dokumen = $this->uri->segment(4);
		$data['title']	= 'Kirim Dokumen Revisi ke WMM';
		
		$dt = $this->home_model->view_kirim_dokumen_revisi($id_dokumen);

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
		
		$this->load->view('unit_kerja/kirim_dokumen_revisi', $data);
	}
	
	public function kirim_dokumen() {
		$id_dokumen = $this->uri->segment(4);

		$this->load->model('unit_kerja/upload_dokumen_model');
		
		date_default_timezone_set('Asia/Jakarta');
		
		$data['id_statuspengiriman'] 	= '1';
		$data['tgl_dikirim'] 			= date('Y-m-d H:i:s' );
		
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_model->update('dokumen',$data,$where);
		
		redirect('unit_kerja/home');
	}
	
	public function kirim_dokumen_revisi() {	
		$id_dokumen = $this->uri->segment(4);

		$this->load->model('unit_kerja/upload_dokumen_revisi_model');
		
		date_default_timezone_set('Asia/Jakarta');
		
	//	$data['id_statuspengiriman'] 	= '1';
		$data['tgl_diusulkan'] 			= date('Y-m-d H:i:s' );
		
		$where = array(
			'id_dokumen' => $id_dokumen
		);
		$this->upload_dokumen_revisi_model->update('dokumen_revisi',$data,$where);
		
		redirect('unit_kerja/home');
	}
}
?>
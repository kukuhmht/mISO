<!--
===============Author===============
-Kukuh M HidayaTullah (03 April 2018)
-Kukuh M HidayaTullah (12 April 2018)
-Kukuh M HidayaTullah (16 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dokumen extends CI_Controller {

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
  
	public function unit_kerja() {
		$data['title']			= 'Dokumen Unit Kerja';
		$data['ambil_bulan']	= $this->home_model->ambil_bulan()->result();
		$data['ambil_tahun']	= $this->home_model->ambil_tahun()->result();
		if(isset($_POST['search'])) {
			$query 							= $this->input->post('search');
			$tgl 							= $this->input->post('tgl');
			$tahun 							= $this->input->post('tahun');
			$data['list_dokumen_unit_kerja']= $this->home_model->caridokumen_unitkerja($query)->result();
			$data['list_dokumen_unit_kerja']= $this->home_model->filterdokumen_unitkerja($query, $tgl, $tahun)->result();
		}else{
			$data['list_dokumen_unit_kerja']	= $this->home_model->list_dokumen_unit_kerja()->result();
		}

		$this->load->view('wmm/dokumen_unit_kerja', $data);
	}
	
	public function dokumen_revisi() {
		$data['title']						= 'Revisi Dokumen Unit Kerja';
		$data['ambil_bulanrevisi']	= $this->home_model->ambil_bulanrevisi()->result();
		$data['ambil_tahunrevisi']	= $this->home_model->ambil_tahunrevisi()->result();
		
		if(isset($_POST['search'])) {
			$query 							= $this->input->post('search');
			$tgl 							= $this->input->post('tgl');
			$tahun 							= $this->input->post('tahun');
			$data['list_dokumen_revisi']	= $this->home_model->caridokumen_revisi($query)->result();
			$data['list_dokumen_revisi']	= $this->home_model->filterdokumen_revisi($query, $tgl, $tahun)->result();
		}else{
			$data['list_dokumen_revisi']	= $this->home_model->list_dokumen_revisi()->result();
		}

		$this->load->view('wmm/dokumen_revisi', $data);
	}
	
	public function humas_hubin() {
		$nama_unit	= 'Humas dan Hubin';
		$data['title']						= 'Dokumen Bidang Humas dan Hubin';
		$data['list_dokumen_humas_hubin']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_humas_hubin', $data);
	}
	
	public function kesiswaan() {
		$nama_unit	= 'Kesiswaan';
		$data['title']						= 'Dokumen Bidang Kesiswaan';
		$data['list_dokumen_kesiswaan']		= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_kesiswaan', $data);
	}
	
	public function kurikulum() {
		$nama_unit	= 'Kurikulum';
		$data['title']						= 'Dokumen Bidang Kurikulum';
		$data['list_dokumen_kurikulum']		= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_kurikulum', $data);
	}
	
	public function pelitbang() {
		$nama_unit	= 'Penelitian dan Pengembangan';
		$data['title']						= 'Dokumen Bidang Pelitbang';
		$data['list_dokumen_pelitbang']		= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_pelitbang', $data);
	}
	
	public function sarana_prasarana() {
		$nama_unit	= 'Sarana dan Prasarana';
		$data['title']							= 'Dokumen Bidang Sarana dan Prasarana';
		$data['list_dokumen_sarana_prasarana']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_sarana_prasarana', $data);
	}
	
	public function sdm() {
		$nama_unit	= 'Sumber Daya Manusia';
		$data['title']				= 'Dokumen Bidang SDM';
		$data['list_dokumen_sdm']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_sdm', $data);
	}
	
	public function administrasi_perkantoran() {
		$nama_unit	= 'Administrasi Perkantoran';
		$data['title']				= 'Dokumen Kompetensi Keahlian Administrasi Perkantoran';
		$data['list_dokumen_ap']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_ap', $data);
	}
	
	public function administrasi_akuntansi() {
		$nama_unit	= 'Administrasi Akuntansi';
		$data['title']				= 'Dokumen Kompetensi Keahlian Administrasi Akuntansi';
		$data['list_dokumen_ak']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_ak', $data);
	}
	
	public function administrasi_pemasaran() {
		$nama_unit	= 'Administrasi Pemasaran';
		$data['title']				= 'Dokumen Kompetensi Keahlian Administrasi Pemasaran';
		$data['list_dokumen_pm']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_pm', $data);
	}
	
	public function rpl() {
		$nama_unit	= 'Rekayasa Perangkat Lunak';
		$data['title']				= 'Dokumen Kompetensi Keahlian RPL';
		$data['list_dokumen_rpl']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_rpl', $data);
	}
	
	public function multimedia() {
		$nama_unit	= 'Multimedia';
		$data['title']				= 'Dokumen Kompetensi Keahlian Multimedia';
		$data['list_dokumen_mm']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_mm', $data);
	}
	
	public function tkj() {
		$nama_unit	= 'Teknik Komputer dan Jaringan';
		$data['title']				= 'Dokumen Kompetensi Keahlian TKJ';
		$data['list_dokumen_tkj']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_tkj', $data);
	}
	
	public function bimbingan_konseling() {
		$nama_unit	= 'Bimbingan Konseling';
		$data['title']				= 'Dokumen Bimbingan Konseling';
		$data['list_dokumen_bk']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_bk', $data);
	}
	
	public function ict() {
		$nama_unit	= 'ICT';
		$data['title']				= 'Dokumen ICT';
		$data['list_dokumen_ict']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_ict', $data);
	}
	
	public function lingkungan_hidup() {
		$nama_unit	= 'Lingkungan Hidup';
		$data['title']							= 'Dokumen Lingkungan Hidup';
		$data['list_dokumen_lingkungan_hidup']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_lingkungan_hidup', $data);
	}
	
	public function perpustakaan() {
		$nama_unit	= 'Perpustakaan';
		$data['title']						= 'Dokumen Perpustakaan';
		$data['list_dokumen_perpustakaan']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_perpustakaan', $data);
	}
	
	public function tata_usaha() {
		$nama_unit	= 'Tata Usaha';
		$data['title']				= 'Dokumen Tata Usaha';
		$data['list_dokumen_tu']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_tu', $data);
	}
	
	public function unit_produksi() {
		$nama_unit	= 'Unit Produksi';
		$data['title']						= 'Dokumen Unit Produksi';
		$data['list_dokumen_unit_produksi']	= $this->home_model->list_dokumen_unit($nama_unit)->result();

		$this->load->view('wmm/dokumen_unit_produksi', $data);
	}
}
?>
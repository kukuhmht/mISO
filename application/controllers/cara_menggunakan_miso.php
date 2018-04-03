<!--
===============Author===============
-Kukuh M HidayaTullah (02 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cara_menggunakan_miso extends CI_Controller {

  public function __construct() {
    parent::__construct();
    //$this->load->model('unit_kerja/dashboard_model');
  }
  
	public function index() {
		$data['title']		= 'mISO';
		
		$this->load->view('dashboard/cara_menggunakan_miso', $data);
	}
}
?>
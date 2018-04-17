<!--
===============Author===============
-Kukuh M HidayaTullah (07 April 2018)
-Kukuh M HidayaTullah (10 April 2018)

*ket:
author ini harus di isi!
jika Anda mengubah script disini harap isi author
dan juga tanggal script di ubah terlebih dahulu
-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_dokumen extends CI_Controller {

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
	
    $this->load->model('wmm/laporan_dokumen_model');
  }
  
	public function index() {
		$data['title']	= 'Laporan Semua Dokumen';
		
		//search laporan + menampilkan data
		if(isset($_POST['search'])) {
			$query 					= $this->input->post('search');
			$data['list_laporan']	= $this->laporan_dokumen_model->cari($query)->result();
		}else{
			$data['list_laporan']	= $this->laporan_dokumen_model->list_laporan()->result();
		}

		$this->load->view('wmm/laporan_dokumen', $data);
	}
	
	public function cetaklaporan_pdf() {
		ob_start();
		
		$pdf = new FPDF('l','mm','A3');
        // membuat halaman baru
        $pdf->AddPage();
		// setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(420,7,'LAPORAN DOKUMEN ISO',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(420,7,'DAFTAR LAPORAN DOKUMEN YANG TERKIRIM',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',13);
        $pdf->Cell(100,6,'Dokumen',1,0);
        $pdf->Cell(100,6,'Tanggal Dikirim',1,0);
        $pdf->Cell(100,6,'Status',1,0);
        $pdf->Cell(100,6,'Keterangan',1,0);
        $pdf->SetFont('Arial','',10);
        $dokumen = $this->db->query('SELECT nama_dokumen, tanggal, status_dokumen, keterangan FROM laporan_dokumen ORDER BY tanggal DESC')->result();
        foreach($dokumen as $row) {
			$pdf->SetFont('Arial','',12);	
			$pdf->Ln();
			foreach($row as $column)
				$pdf->Cell(100,12,$column,1,0);
		}
        $pdf->Output();
		
		ob_end_flush();
	}

	// public function cetaklaporan_pdf() {
		// $result = $this->db->query("SELECT * FROM laporan_dokumen");
		// $header = $this->db->query('
		// SELECT
		  // "nama_dokumen",
		  // "tanggal",
		  // "keterangan"
		// FROM
		  // INFORMATION_SCHEMA.COLUMNS
		// WHERE TABLE_NAME = "laporan_dokumen"
		// LIMIT 1
		// ');

	// //	require('/third_party/fpdf_v181/fpdf.php');
		// $pdf = new FPDF();
		// $pdf->AddPage();
		// $pdf->SetFont('Arial','B',12);		
		// foreach($header as $heading) {
			// foreach($heading as $column_heading)
				// $pdf->Cell(90,12,$column_heading,1);
		// }
		// foreach($result as $row) {
			// $pdf->SetFont('Arial','',12);	
			// $pdf->Ln();
			// foreach($row as $column)
				// $pdf->Cell(90,12,$column,1);
		// }
		// $pdf->Output();
	// }
}
?>
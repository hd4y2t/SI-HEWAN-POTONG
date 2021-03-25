<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antemortem extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('Antemortem_model');
		$this->load->model('sapi_model');
		$this->load->library('form_validation');
	}

	
	public function index()
	{
		check_not_login();
	 		$data['judul'] = 'Halaman Data Sapi';
	 		
	 		$data['sapi']= $this->Antemortem_model->getAlldataSapi();
	 		if ($this->input->post('keyword')) {
	 			$data['sapi'] = $this->Antemortem_model->cariDataSapi();
	 			# code...
	 		}
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('antemortem/daftar_datasapi_antemortem');
	 		$this->load->view('temp/footer');


	}


	public function proses_antemortem($id)
	{
		check_not_login();
	 	$data['judul'] = 'Form Proses Antemortem';
	 	$data['sapi'] = $this->Antemortem_model->getSapibyNotelinga($id);
	 	$data['gender'] = ['Jantan', 'Betina'] ;

	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[antemortem.no_telinga]');
	 	$this->form_validation->set_rules('txt_ras','Ras','required');
	 	$this->form_validation->set_rules('txt_berat','Berat','required|numeric');
	 	$this->form_validation->set_rules('txt_username','Username','required');
	 	$this->form_validation->set_rules('txt_mata','Mata','required');
	 	$this->form_validation->set_rules('txt_hidung','Hidung','required');
	 	$this->form_validation->set_rules('txt_mulut','Mulut','required');
	 	$this->form_validation->set_rules('txt_selaput','Selaput','required');
	 	$this->form_validation->set_rules('txt_bersih','Kebersihan','required');
	 	$this->form_validation->set_rules('txt_gizi','Gizi','required');
	 	$this->form_validation->set_rules('txt_kulit','Kulit','required');
	 	$this->form_validation->set_rules('txt_bulu','Bulu','required');
	 	$this->form_validation->set_rules('txt_anus','Anus','required');
	 	$this->form_validation->set_rules('txt_keadaan','Keadaan','required');
	 	$this->form_validation->set_rules('txt_status','Status','required');

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('antemortem/Halaman_prosesantemortem', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Antemortem_model->antemortem_proses();
	 	$this->session->set_flashdata('flash', 'Berhasil');
	 	redirect('Antemortem/index');
	 }

	}


	public function tampil_antemortem(){
		check_not_login();
	 		$data['judul'] = 'Halaman Data Antemortem';
	 		$data['sapi']= $this->Antemortem_model->getAlldataAntemortem();
	 		if ($this->input->post('keyword')) {
	 			$data['sapi'] = $this->Antemortem_model->cariDataSapiAntemortem();
	 			# code...
	 		}
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('antemortem/daftar_prosesantemortem');
	 		$this->load->view('temp/footer');
	}


	 public function detail_data_antemortem($id)
        {
        	check_not_login();
        	$data['judul'] = 'Halaman Detail Antemortem';
        	$data['sapi'] = $this->Antemortem_model->getAntemortembyId($id);
        	$data['gender'] = ['Jantan', 'Betina'] ;
        	$data['mata'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['hidung'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['mulut'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['selaput_lendir'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['kebersihan_sapi'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['gizi'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['kulit'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['bulu'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['anus'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 		$data['keadaan_sapi'] = ['Baik', 'Cukup', 'Cacat'] ;
        	$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('antemortem/detail', $data);
	 		$this->load->view('temp/footer');


         
        }

      public function HapusData($id){
	 	$this->Antemortem_model->HapusDataAntemortem($id);
	 	$this->session->set_flashdata('flash', 'Dihapus');
	 	redirect('Antemortem/index');

	 }


	  public function ubah_dataAntemortem($id)
	 {
	 	check_not_login();
	 	$data['judul'] = 'Form Edit Data Antemortem';
	 	$data['sapi'] = $this->Antemortem_model->getAntemortembyId($id);
	 	$data['gender'] = ['Jantan', 'Betina'] ;
	 	$data['mata'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['hidung'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['mulut'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['selaput_lendir'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['kebersihan_sapi'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['gizi'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['kulit'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['bulu'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['anus'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['keadaan_sapi'] = ['Baik', 'Cukup', 'Cacat'] ;
	 	


	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[antemortem.no_telinga]');
	 	$this->form_validation->set_rules('txt_ras','Ras','required');
	 	$this->form_validation->set_rules('txt_berat','Berat','required|numeric');
	 	$this->form_validation->set_rules('txt_mata','Mata','required');
	 	$this->form_validation->set_rules('txt_hidung','Hidung','required');
	 	$this->form_validation->set_rules('txt_mulut','Mulut','required');
	 	$this->form_validation->set_rules('txt_selaput','Selaput','required');
	 	$this->form_validation->set_rules('txt_bersih','Kebersihan','required');
	 	$this->form_validation->set_rules('txt_gizi','Gizi','required');
	 	$this->form_validation->set_rules('txt_kulit','Kulit','required');
	 	$this->form_validation->set_rules('txt_bulu','Bulu','required');
	 	$this->form_validation->set_rules('txt_anus','Anus','required');
	 	$this->form_validation->set_rules('txt_keadaan','Keadaan','required');
	 	$this->form_validation->set_rules('txt_status','Status','required');
	 	

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('antemortem/Halaman_UbahDataAntemortem', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Antemortem_model->UbahDataAntemortem();
	 	$this->session->set_flashdata('flash', 'Diubah');
	 	redirect('Antemortem/tampil_antemortem');
	 }
	 }



}
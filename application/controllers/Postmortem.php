<?php

/**
 * 
 */
class Postmortem extends CI_Controller
{
	public function __construct(){

		parent:: __construct();
		$this->load->model('Postmortem_model');
		$this->load->library('form_validation');
	}

	public function index(){
		check_not_login();
	 		$data['judul'] = 'Halaman Data Sapi';
	 		$data['sapi']= $this->Postmortem_model->getAlldataAntemortem();
	 		if ($this->input->post('keyword')) {
	 			$data['sapi'] = $this->Postmortem_model->cariDataSapiAntemortem();
	 			
	 		}
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('postmortem/daftar_data_sapi_postmortem');
	 		$this->load->view('temp/footer');
	}

		public function proses_postmortem($id)
	{
		check_not_login();
	 	$data['judul'] = 'Form Proses Postmortem';
	 	$data['sapi'] = $this->Postmortem_model->getAntemortembyId($id);
	 	$data['gender'] = ['Jantan', 'Betina'] ;

	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[postmortem.no_telinga]');
	 	

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('postmortem/Halaman_proses_postmortem', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Postmortem_model->postmortem_proses();
	 	$this->session->set_flashdata('flash', 'Berhasil');
	 	redirect('Postmortem/index');
	 }

	}

	public function tampil_postmortem(){
		check_not_login();
	 		$data['judul'] = 'Halaman Data Postmortem';
	 		$data['sapi']= $this->Postmortem_model->getAlldataPostmortem();
	 		if ($this->input->post('keyword')) {
	 			$data['sapi'] = $this->Postmortem_model->cariDataSapiPostmortem();
	 			# code...
	 		}
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('postmortem/daftar_proses_postmortem');
	 		$this->load->view('temp/footer');
	}


		public function HapusData($id){
	 	$this->Postmortem_model->HapusDataPostmortem($id);
	 	$this->session->set_flashdata('flash', 'Dihapus');
	 	redirect('Postmortem/index');

	 }


	 public function ubah_dataPostmortem($id)
	 {
	 	check_not_login();
	 	$data['judul'] = 'Form Edit Data Postmortem';
	 	$data['sapi'] = $this->Postmortem_model->getPostmortembyId($id);
	 	$data['gender'] = ['Jantan', 'Betina'] ;
	 	$data['wajah'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['limpoglandula'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['jantung'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['paru'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['hati'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['limpa'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['usus_lambung'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	$data['daging'] = ['Baik', 'Cukup', 'Kelainan'] ;
	 	
	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[postmortem.no_telinga]');

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('postmortem/Halaman_UbahDataPostmortem', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Postmortem_model->UbahDataPostmortem();
	 	$this->session->set_flashdata('flash', 'Diubah');
	 	redirect('Postmortem/tampil_postmortem');
	 }
	 }

	 public function detail_data_postmortem($id)
        {
        	check_not_login();
        	$data['judul'] = 'Halaman Detail Postmortem';
        	$data['sapi'] = $this->Postmortem_model->getPostmortembyId($id);
        	$data['gender'] = ['Jantan', 'Betina'] ;
        	$data['wajah'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['limpoglandula'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['jantung'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['paru'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['hati'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['limpa'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['usus_lambung'] = ['Baik', 'Cukup', 'Kelainan'] ;
		 	$data['daging'] = ['Baik', 'Cukup', 'Kelainan'] ;
	        $this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('postmortem/detail', $data);
	 		$this->load->view('temp/footer');


         
        }



	}


?>


<?php

class Sapi extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('Sapi_model');
		$this->load->library('form_validation');
	}





	 public function index() {

	 		check_not_login();
	 		$data['judul'] = 'Halaman Data Sapi';
	 		$data['sapi']= $this->Sapi_model->getAlldataSapi();
	 		if ($this->input->post('keyword')) {
	 			$data['sapi'] = $this->Sapi_model->cariDataSapi();
	 			# code...
	 		}
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/Daftar_datasapi');
	 		$this->load->view('temp/footer');
	 }



	 public function tambah_dataSapi()
	 {
	 	check_not_login();
	 	$data['judul'] = 'Tambah Data Sapi';

	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[sapi.no_telinga]');
	 	$this->form_validation->set_rules('txt_ras','Ras','required');
	 	$this->form_validation->set_rules('txt_berat','Berat','required|numeric');
	 	$this->form_validation->set_rules('txt_username','Username','required');

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('admin/Halaman_tambahSapi');
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Sapi_model->tambahDataSapi();
	 	$this->session->set_flashdata('flash', 'Ditambahkan');
	 	redirect('Sapi/index');
	 }
	 }


	 public function HapusSapi($id){
	 	$this->Sapi_model->HapusDataSapi($id);
	 	$this->session->set_flashdata('flash', 'Dihapus');
	 	redirect('Sapi/index');

	 }

	 public function DetailSapi($id){
	 		$data['judul'] = 'Halaman Detail Data Sapi';
	 		$data['sapi']= $this->Sapi_model->getSapibyNotelinga($id);
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('admin/Detail_datasapi');
	 		$this->load->view('temp/footer');

	 }



	 public function ubah_dataSapi($id)
	 {
	 	check_not_login();
	 	$data['judul'] = 'Form Edit Data Sapi';
	 	$data['sapi'] = $this->Sapi_model->getSapibyNotelinga($id);
	 	$data['gender'] = ['Jantan', 'Betina'] ;

	 	$this->form_validation->set_rules('txt_notelinga','NoTelinga','required|numeric|is_unique[sapi.no_telinga]');
	 	$this->form_validation->set_rules('txt_ras','Ras','required');
	 	$this->form_validation->set_rules('txt_berat','Berat','required|numeric');
	 	$this->form_validation->set_rules('txt_username','Username','required');

	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('admin/Halaman_ubahDataSapi', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Sapi_model->UbahDataSapi();
	 	$this->session->set_flashdata('flash', 'Diubah');
	 	redirect('Sapi/index');
	 }
	 }

/*/

	 public function tambah_sapi(){
	 	$this->form_validation->set_rules('no_telinga', 'NoTelinga', 'required');

	 	if($this->form_validation->run() == FALSE){
	 		$data['judul'] = 'Tambah Data Sapi';
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/tambah_sapi');
	 		$this->load->view('temp/footer');


	 	}else {
	 		$this->Sapi_model->tambahDataSapi();
	 		redirect('Sapi');	 		
	 	}



	 	

	}

/*/

    }

?>
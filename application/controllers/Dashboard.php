<?php

class Dashboard extends CI_Controller {
	public function __construct(){

		parent:: __construct();
		$this->load->model('Kauptd_model');
		$this->load->library('form_validation');
		$this->load->helper('download');
		
	}

	 public function index() {


	 		check_not_login();
	 		$data['judul'] = 'Dashboard';
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('temp/content');
	 		$this->load->view('temp/footer');
	 }


	






    }

?>
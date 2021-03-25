<?php

	/**
	 * 
	 */
	class Staff extends CI_Controller
	{
		public function __construct(){
        parent::__construct();
        	$this->load->model('Kauptd_model');
        $this->load->library('form_validation');
        
    }
		
		
	 public function Profil()
	 {
	 	$data['judul'] = 'Halaman Profil';
	 	
	 	$data['user'] = $this->db->get_where('login', ['username' =>
	 		$this->session->userdata('username')])->row_array();
	 	$data['gender'] = ['Pria', 'Wanita'] ;

	 	
	 	$this->form_validation->set_rules('txt_password','Password','required');
	 	$this->form_validation->set_rules('txt_nama','Nama','required');
	 	$this->form_validation->set_rules('txt_level','Level','required');
	 	$this->form_validation->set_rules('txt_nip','Nip','required');
	 	$this->form_validation->set_rules('txt_nohp','NoHp','required');
	 	$this->form_validation->set_rules('txt_tanggal','Tanggal','required');


	 		if($this->form_validation->run() == FALSE)
	 		{
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/Halaman_profil', $data);
	 		$this->load->view('temp/footer');
	 		}else {
	 			$this->Kauptd_model->Getdatakauptd();
	 			$this->session->set_flashdata('flash', 'Diubah');
	 			redirect('Staff/Profil');
	 			/*/
	 			$data['user'] = $this->Kauptd_model->Getdatakauptd();
	 			/*/
	 		}
	 		
	 		
	 }
	}

?>
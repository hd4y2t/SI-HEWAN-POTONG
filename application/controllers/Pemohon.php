<?php

	/**
	 * 
	 */
	class Pemohon extends CI_Controller
	{
		public function __construct(){
        parent::__construct();
        	$this->load->model('Kauptd_model');
        $this->load->library('form_validation');
        
    }
		
		
	 public function Profil()
	 {
	 	$data['judul'] = 'Halaman Profil';
	 	
	 	$data['user'] = $this->db->get_where('user', ['nip' =>
	 		$this->session->userdata('userid')])->row_array();
	 	$data['gender'] = ['Pria', 'Wanita'] ;

	 	
	 	$this->form_validation->set_rules('txt_password','Password','required');
	 	$this->form_validation->set_rules('txt_nama','Nama','required');
	 	
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
	 			redirect('Pemohon/Profil');
	 			/*/
	 			$data['user'] = $this->Kauptd_model->Getdatakauptd();
	 			/*/
	 		}
	 		
	 		
	 }


	 public function getDataSapiPemohon(){

	 	$this->load->model('Pemohon_model') ;
	 	
	 	$data['judul'] = 'Halaman Data Sapi';
	 	$data['sapi']= $this->Pemohon_model->getAllDatabyUsername(); 
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('pemohon/Daftar_datasapi');
	 		$this->load->view('temp/footer');
	 }

	 public function pengajuan()
	{
			
			$data['judul'] = 'Halaman Pengajuan';
			$data['user'] = $this->db->get_where('user', ['username' =>
	 		$this->session->userdata('username')])->row_array();
			$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('pemohon/Halaman_Pengajuan', $data);
	 		$this->load->view('temp/footer');
	}


	public function tambah_pengajuan()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$ket_asal_hewan = $_FILES['txt_asalhewan'];
		if ($ket_asal_hewan=''){}else{
			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'pdf|jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('txt_asalhewan')){
				echo "Upload Gagal!"; die();
			}else{
				$ket_asal_hewan=$this->upload->data('file_name');
			}
		}
		
		$ket_milik_hewan = $_FILES['txt_kepemilikanhewan'];
		if ($ket_milik_hewan=''){}else{
			$config['upload_path'] = './vendor/upload';
			$config['allowed_types'] = 'pdf|jpg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('txt_kepemilikanhewan')){
				echo "Upload Gagal!"; die();
			}else{
				$ket_milik_hewan=$this->upload->data('file_name');
			}
		}

		$ket_keswan = $_FILES['txt_keswan'];
		if ($ket_keswan=''){}else{
			$config['upload_path'] = './vendor/upload';
			$config['allowed_types'] = 'pdf|jpg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('txt_keswan')){
				echo "Upload Gagal!"; die();
			}else{
				$ket_keswan=$this->upload->data('file_name');
			}
		}

		$ket_angkut_hewan = $_FILES['txt_pengangkutan'];
		if ($ket_angkut_hewan=''){}else{
			$config['upload_path'] = './vendor/upload';
			$config['allowed_types'] = 'pdf|jpg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('txt_pengangkutan')){
				echo "Upload Gagal!"; die();
			}else{
				$ket_angkut_hewan=$this->upload->data('file_name');
			}
		}


		$ket_betina_tidakproduktif = $_FILES['txt_tidakproduktif'];
		if ($ket_betina_tidakproduktif=''){}else{
			$config['upload_path'] = './vendor/upload';
			$config['allowed_types'] = 'pdf|jpg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('txt_tidakproduktif')){
				echo "Upload Gagal!"; die();
			}else{
				$ket_betina_tidakproduktif=$this->upload->data('file_name');
			}
		}
		

		$status = $this->input->post('txt_status');



		

		$data = array(
			'username' =>$username,
			'email' => $email,
			'asal_hewan' => $ket_asal_hewan,
			
			'kepemilikan_hewan' => $ket_milik_hewan,
			'ket_keswan' => $ket_keswan,
			'ket_pengangkutan' => $ket_angkut_hewan,
			'ket_tidakproduktif' => $ket_betina_tidakproduktif,
			
			'status' => $status
		);

		$this->db->insert('pengajuan', $data);
		redirect('Dashboard/index');
	}



	public function Status_pengajuan(){
		$this->load->model('Pemohon_model') ;

			$data['judul'] = 'Halaman Pengajuan';
			$data['pengajuan'] = $this->Pemohon_model->getAllDataPengajuan();
			
			$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('pemohon/Halaman_Status_Pengajuan', $data);
	 		$this->load->view('temp/footer');

	}

		public function getDataAntemortem(){
			$this->load->model('Pemohon_model') ;
			$data['judul'] = 'Halaman Pemeriksaan Antemortem';
			$data['sapi'] = $this->Pemohon_model->getAlldataAntemortem();

			$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('pemohon/Halaman_Antemortem', $data);
	 		$this->load->view('temp/footer');
		}


		public function getDataPostmortem(){
			$this->load->model('Pemohon_model') ;
			$data['judul'] = 'Halaman Pemeriksaan Postmortem';
			$data['sapi'] = $this->Pemohon_model->getAlldataPostmortem();

			$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/searchbar');
	 		$this->load->view('pemohon/Halaman_Postmortem', $data);
	 		$this->load->view('temp/footer');
		}
	}


	

?>
<?php


class Home extends CI_Controller {

	 public function __construct(){
        parent::__construct();
        $this->load->library('form_validation','encryption');
        
    }


	public function index()
	{
		
		check_already_login();
		 $this->form_validation->set_rules('username', 'Username', 'trim|required');
		 		 $this->form_validation->set_rules('password', 'Password', 'trim|required');

		 if($this->form_validation->run()==false){

		 	$this->load->view('Login');
		 }

			else{

				$this->Login_act();
			}
	}


	public function Login_act()
	{
		$post= $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('Login_model');
			$query = $this->Login_model->login_proses($post);
			if($query->num_rows() == 1){
				$row = $query->row();
				$params = array(
				'userid' => $row->nip,
				'username' => $row->username,
				'name' => $row->nama,
				'level' => $row->level			
			);
				$this->session->set_userdata($params);
				echo "<script>
						alert('Selamat, Login Berhasil!');
						window.location='".base_url('dashboard')."';
					  </script>";




			}else{
				echo "<script>
						alert('Login gagal, cek username dan password anda');
						window.location='".base_url('Home/index')."';
					  </script>";

			}

		}

		}


		public function logout()
		{
			$params = array('userid', 'level');
			$this->session->unset_userdata($params);
			redirect('Home/index');
		}


		public function registrasi()
		{

			$this->load->model('Kauptd_model');
			
		$this->form_validation->set_rules('txt_username','Username','required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
	 	$this->form_validation->set_rules('txt_password','Password','required');
	 	$this->form_validation->set_rules('txt_nama','Nama','required');
	 	$this->form_validation->set_rules('txt_nip','Nip','required|numeric|is_unique[user.nip]');
	 	$this->form_validation->set_rules('txt_nohp','NoHp','required');
	 	$this->form_validation->set_rules('txt_tanggal','Tanggal','required');

	 		if($this->form_validation->run() == FALSE){
			$this->load->view('Registration');
			}else {
		$this->Kauptd_model->tambahDataPemohon();
	 	$this->session->set_flashdata('flash', 'Ditambahkan');
	 	redirect('Home/index');
			}
		}

}

?>
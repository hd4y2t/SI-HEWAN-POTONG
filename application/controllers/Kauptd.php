<?php

class Kauptd extends CI_Controller {
	public function __construct(){

		parent:: __construct();
		$this->load->model('Kauptd_model');
		$this->load->library('form_validation','encryption');
		$this->load->helper('download');
		
	}

	 public function index() {


	 		check_not_login();
	 		$data['judul'] = 'Halaman Data Karyawan';
	 		$data['karyawan']= $this->Kauptd_model->getAlldataKaryawan();
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/Halaman_dataKaryawan');
	 		$this->load->view('temp/footer');
	 }


	  public function tambah_dataKaryawan()
	 {
	 	check_not_login();
	 	$data['judul'] = 'Tambah Data Karyawan';
	 	$this->form_validation->set_rules('txt_nip','Nip','required|numeric|is_unique[user.nip]');
	 	$this->form_validation->set_rules('txt_username','Username','required');
	 	$this->form_validation->set_rules('txt_password','Password','required');
	 	$this->form_validation->set_rules('txt_nama','Nama','required');
	 	$this->form_validation->set_rules('txt_level','Level','required');
	 	$this->form_validation->set_rules('txt_nohp','NoHp','required');
	 	$this->form_validation->set_rules('txt_tanggal','Tanggal','required');


	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('admin/Halaman_tambahKaryawan');
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Kauptd_model->tambahDataKaryawan();
	 	$this->session->set_flashdata('flash', 'Ditambahkan');
	 	redirect('Kauptd/index');
	 }


	 }

	 public function HapusKaryawan($id){
	 	$this->Kauptd_model->HapusDataKaryawan($id);
	 	$this->session->set_flashdata('flash', 'Dihapus');
	 	redirect('Kauptd/index');

	 }


	  public function ubah_dataKaryawan($id)
	 {
	 	check_not_login();
	 	$data['judul'] = 'Form Edit Data Karyawan';
	 	$data['karyawan'] = $this->Kauptd_model->getKaryawanbyUsername($id);
	 	$data['level'] = ['1', '2', '3','4'];
	 	$data['gender'] = ['Pria', 'Wanita'] ;

	 	$this->form_validation->set_rules('txt_username','Username','required');
	 	$this->form_validation->set_rules('txt_password','Password','required');
	 	$this->form_validation->set_rules('txt_nama','Nama','required');
	 	$this->form_validation->set_rules('txt_level','Level','required');
	 	$this->form_validation->set_rules('txt_nip','Nip','required');
	 	$this->form_validation->set_rules('txt_nohp','NoHp','required');
	 	$this->form_validation->set_rules('txt_tanggal','Tanggal','required');


	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('admin/Halaman_ubahDataKaryawan', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Kauptd_model->UbahDataKaryawan();
	 	$this->session->set_flashdata('flash', 'Diubah');
	 	redirect('Kauptd/index');
	 }
	 }


	 public function Profil()
	 {
	 	$data['judul'] = 'Halaman Profil';
	 	$data['user'] = $this->db->get_where('user', ['nip' =>
	 		$this->session->userdata('userid')])->row_array();
	 	$data['gender'] = ['Pria', 'Wanita'] ;

	 		$this->form_validation->set_rules('txt_nip', 'NIP', 'required');
	 		$this->form_validation->set_rules('username', 'Username', 'required');
	 		$this->form_validation->set_rules('txt_password', 'Password', 'required');
	 		$this->form_validation->set_rules('txt_nama', 'Nama', 'required');
	 		$this->form_validation->set_rules('txt_gender', 'Gender', 'required');
	 		$this->form_validation->set_rules('txt_nohp', 'NoHp', 'required');
	 		$this->form_validation->set_rules('txt_tanggal', 'TTL', 'required');

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
	 			redirect('Kauptd/Profil');
	 			/*/
	 			$data['user'] = $this->Kauptd_model->Getdatakauptd();
	 			/*/
	 		}
	 		
	 		
	 }

	 public function DataPemohon(){
	 	check_not_login();
	 		$data['judul'] = 'Halaman Data Pemohon';
	 		$data['karyawan']= $this->Kauptd_model->getAlldataPemohon();
	 		$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/Halaman_dataPemohon');
	 		$this->load->view('temp/footer');

	 }

	 public function Pengajuan(){
	 	$this->load->library('upload');

	 	$data['judul'] = 'Halaman Pengajuan';
	 	$data['pengajuan'] = $this->Kauptd_model->getAlldataPengajuan();
	 	$this->load->view('temp/head', $data);
	 		$this->load->view('temp/sidebar');
	 		$this->load->view('temp/navbar');
	 		$this->load->view('admin/Halaman_Pengajuan', $data);
	 		$this->load->view('temp/footer');
	 }


	 public function Proses_Pengajuan($id)
	 {
	 	$data['judul'] = 'Halaman Proses Pengajuan';
	 	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	 	$this->Kauptd_model->prosesterima($id);
	 	redirect('Kauptd/Pengajuan');
	 	

	 }


	 public function Proses_Pengajuan_Tolak($id)
	 {
	 	
	 	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	 	$this->Kauptd_model->prosestolak($id);
	 	redirect('Kauptd/Pengajuan');
	 	

	 }






	  public function download($id){
	  	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	  	$data = $this->db->get_where('pengajuan',['id_pengajuan'=>$id])->row_array();
		force_download('assets/upload/'.$data['asal_hewan'], NULL);
	  }

	   public function download_kepemilikan($id){
	  	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	  	$data = $this->db->get_where('pengajuan',['id_pengajuan'=>$id])->row_array();
		force_download('assets/upload/'.$data['kepemilikan_hewan'], NULL);
	  }

	   public function download_keswan($id){
	  	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	  	$data = $this->db->get_where('pengajuan',['id_pengajuan'=>$id])->row_array();
		force_download('assets/upload/'.$data['ket_keswan'], NULL);
	  }

	   public function download_pengangkutan($id){
	  	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	  	$data = $this->db->get_where('pengajuan',['id_pengajuan'=>$id])->row_array();
		force_download('assets/upload/'.$data['ket_pengangkutan'], NULL);
	  }

	   public function download_tidakproduktif($id){
	  	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);

	  	$data = $this->db->get_where('pengajuan',['id_pengajuan'=>$id])->row_array();
		force_download('assets/upload/'.$data['ket_tidakproduktif'], NULL);
	  }



	  public function export()
	  {
	  	
	  }

	  		
	  		
	 
            
        public function ubah_terima($id){

        $data['judul'] = 'Form Proses Pengajuan';
	 	$data['pengajuan'] = $this->Kauptd_model->getPengajuanbyID($id);
	 	
	 	$this->form_validation->set_rules('txt_email','Email','required');
	 	if($this->form_validation->run() == FALSE){
	 	$this->load->view('temp/head', $data);
	 	$this->load->view('temp/sidebar');
	 	$this->load->view('temp/navbar');
	 	$this->load->view('admin/Halaman_proses_terima', $data);
	 	$this->load->view('temp/footer');
	 }else {
	 	$this->Kauptd_model->Proses_data_terima();
	 	$this->session->set_flashdata('flash', 'Berhasil');
	 	redirect('Kauptd/Pengajuan');
	 }

        }



	



    }
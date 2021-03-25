<?php

  /**
   * 
   */
  class Laporan extends CI_Controller
  {
    
    public function __construct()
    {

    parent:: __construct();
    $this->load->model('Postmortem_model');
    $this->load->model('Antemortem_model');
    $this->load->model('Sapi_model');
    
    $this->load->library('form_validation');

    }

    public function cetak_sapi()
    {
      check_not_login();
      $data['judul'] = 'Halaman Data Sapi';
      $data['sapi']= $this->Sapi_model->getAlldataSapi();
      
      $this->load->view('temp/head', $data);
      $this->load->view('temp/sidebar');
      $this->load->view('temp/navbar');
      $this->load->view('admin/cetak/cetak_sapi');
      $this->load->view('temp/footer');
    }


    public function cetak_sapi_pdf()
    {
      $this->load->library('dompdf_gen');

      $data['sapi']=$this->Sapi_model->getsapibyfilter();
      $this->load->view('admin/cetak/laporan_sapi_pdf', $data);


      $paper_size = 'A4';
      $orientation = 'portrait';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("laporan_data_sapi.pdf", array('Attachment' =>0));
    }

    public function cetak_Antemortem()
    {
      check_not_login();
      $data['judul'] = 'Halaman Data Antemortem';
      $data['sapi']= $this->Antemortem_model->getAlldataAntemortem();
      
      $this->load->view('temp/head', $data);
      $this->load->view('temp/sidebar');
      $this->load->view('temp/navbar');
      $this->load->view('admin/cetak/Cetak_antemortem');
      $this->load->view('temp/footer');
    }

     public function cetak_Antemortem_pdf()
    {
      $this->load->library('dompdf_gen');

      $data['sapi']=$this->Antemortem_model->getantemortembyfilter();
      $this->load->view('admin/cetak/laporan_Antemortem_pdf', $data);


      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("laporan_data_sapi.pdf", array('Attachment' =>0));
    }


 public function cetak_Postmortem()
    {
      check_not_login();
      $data['judul'] = 'Halaman Data Antemortem';
      $data['sapi']= $this->Postmortem_model->getAlldataPostmortem();
      
      $this->load->view('temp/head', $data);
      $this->load->view('temp/sidebar');
      $this->load->view('temp/navbar');
      $this->load->view('admin/cetak/Cetak_postmortem');
      $this->load->view('temp/footer');
    }


    public function cetak_Postmortem_pdf()
    {
      $this->load->library('dompdf_gen');

      $data['sapi']=$this->Postmortem_model->getpostmortembyfilter();
      $this->load->view('admin/cetak/laporan_Postmortem_pdf', $data);


      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("laporan_data_sapi.pdf", array('Attachment' =>0));
    }


  }


?>
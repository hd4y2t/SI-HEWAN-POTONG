<?php

	class Antemortem_model extends CI_Model
	{

 			

 			public function getAlldataSapi()
 			{

            $query = $this->db->get('sapi');
            return $query->result_array();

       		 }

       		public function getSapibyNotelinga($id)
       		 {

           return $this->db->get_where('sapi', ['no_telinga' =>$id])->row_array();
        	}


        	public function antemortem_proses(){
        		$data = [

                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true),
                    "mata" => $this->input->post('txt_mata', true),
                    "hidung" => $this->input->post('txt_hidung', true),
                    "mulut" => $this->input->post('txt_mulut', true),
                    "selaput_lendir" => $this->input->post('txt_selaput', true),
                    "kebersihan_sapi" => $this->input->post('txt_bersih', true),
                    "gizi" => $this->input->post('txt_gizi', true),
                    "kulit" => $this->input->post('txt_kulit', true),
                    "bulu" => $this->input->post('txt_bulu', true),
                    "Anus" => $this->input->post('txt_anus', true),
                    "keadaan_sapi" => $this->input->post('txt_keadaan', true),
                    "tanggal_pemeriksaan" => $this->input->post('txt_tanggal_pemeriksaan', true),
                    "status" => $this->input->post('txt_status', true)
                ];

                $this->db->insert('antemortem', $data);
        	}


        	public function getAlldataAntemortem()
 			{

            $query = $this->db->get('antemortem');
            return $query->result_array();

       		 }

       		 public function getAntemortembyId($id)
        	{

           		return $this->db->get_where('antemortem', ['id_antemortem' =>$id])->row_array();
        	}


        	public function HapusDataAntemortem($id)
        {       
                $this->db->where('id_antemortem', $id);
                $this->db->delete('antemortem');
        }


            public function UbahDataAntemortem(){

            $data = [
                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true),
                    "mata" => $this->input->post('txt_mata', true),
                    "hidung" => $this->input->post('txt_hidung', true),
                    "mulut" => $this->input->post('txt_mulut', true),
                    "selaput_lendir" => $this->input->post('txt_selaput', true),
                    "kebersihan_sapi" => $this->input->post('txt_bersih', true),
                    "gizi" => $this->input->post('txt_gizi', true),
                    "kulit" => $this->input->post('txt_kulit', true),
                    "bulu" => $this->input->post('txt_bulu', true),
                    "Anus" => $this->input->post('txt_anus', true),
                    "keadaan_sapi" => $this->input->post('txt_keadaan', true),
                    "tanggal_pemeriksaan" => $this->input->post('txt_tanggal_antemortem', true),
                    "status" => $this->input->post('txt_status', true)
                ];

                $this->db->where('id_antemortem', $this->input->post('txt_idantemortem'));
                $this->db->update('antemortem', $data);
            
         }


        public function cariDataSapi(){

            $keyword = $this->input->post('keyword', true);
            $this->db->like('no_telinga', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('ras', $keyword);
            $this->db->or_like('tanggal_masuk', $keyword);
            return $this->db->get('sapi')->result_array();
         }


          public function cariDataSapiAntemortem(){

            $keyword = $this->input->post('keyword', true);
            $this->db->like('no_telinga', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('ras', $keyword);
            $this->db->or_like('tanggal_masuk', $keyword);
            return $this->db->get('antemortem')->result_array();
         }

          public function getantemortembyfilter(){

        $data = $this->input->post('txt_tgl');
        $data2 = $this->input->post('txt_tgl2');

        $query = $this->db->query("SELECT * FROM antemortem WHERE tanggal_pemeriksaan BETWEEN '$data' AND '$data2' ");
        return $query->result_array();
        }


	}

?>
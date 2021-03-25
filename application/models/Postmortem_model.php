<?php
	
	/**
	 * 
	 */
	class Postmortem_model extends CI_Model
	{
		
		public function getAlldataAntemortem()
 			{

            $query = $this->db->get('antemortem');
            return $query->result_array();

       		 }

       	public function getAntemortembyId($id)
       		 {

           return $this->db->get_where('antemortem', ['id_antemortem' =>$id])->row_array();
        	}


        public function postmortem_proses(){
        		$data = [
        			"id_antemortem" =>$this->input->post('id_antemortem'),
                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true),
                    "tanggal_pemeriksaan" => $this->input->post('txt_tanggal_pemeriksaan', true),
                    "wajah" => $this->input->post('txt_wajah', true),
                     "limpoglandula" => $this->input->post('txt_limpo', true),
                     "jantung" => $this->input->post('txt_jantung', true),
                      "paru" => $this->input->post('txt_paru', true),
                       "hati" => $this->input->post('txt_hati', true),
                        "limpa" => $this->input->post('txt_limpa', true),
                         "usus_lambung" => $this->input->post('txt_usus', true),
                          "daging" => $this->input->post('txt_daging', true),
                           "tanggal_postmortem" => $this->input->post('txt_tanggal_postmortem', true)
                    
                   
                ];

                $this->db->insert('postmortem', $data);
        	}


        	public function getAlldataPostmortem()
 			{

            $query = $this->db->get('postmortem');
            return $query->result_array();

       		 }
           
   public function cariDataSapi(){

            $keyword = $this->input->post('keyword', true);
            $this->db->like('no_telinga', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('ras', $keyword);
            $this->db->or_like('tanggal_masuk', $keyword);
            return $this->db->get('sapi')->result_array();
         }



	public function HapusDataPostmortem($id)
        {       
                $this->db->where('id_postmortem', $id);
                $this->db->delete('postmortem');
        }

      public function getPostmortembyId($id)
       		 {

           return $this->db->get_where('postmortem', ['id_postmortem' =>$id])->row_array();
        	}

       public function UbahDataPostmortem(){

            $data = [

            		"id_antemortem" => $this->input->post('id_antemortem', true),
                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true),
                    "tanggal_pemeriksaan" => $this->input->post('txt_tanggal_antemortem', true),
                    "wajah" => $this->input->post('txt_wajah', true),
                    "limpoglandula" => $this->input->post('txt_limpoglandula', true),
                    "jantung" => $this->input->post('txt_jantung', true),
                    "paru" => $this->input->post('txt_paru', true),
                    "hati" => $this->input->post('txt_hati', true),
                    "limpa" => $this->input->post('txt_limpa', true),
                    "usus_lambung" => $this->input->post('txt_usus', true),
                    "daging" => $this->input->post('txt_daging', true),
                    "tanggal_postmortem" => $this->input->post('txt_tanggal_postmortem', true)
                ];

                $this->db->where('id_postmortem', $this->input->post('txt_idpostmortem'));
                $this->db->update('postmortem', $data);
            
         }

         public function cariDataSapiAntemortem(){

            $keyword = $this->input->post('keyword', true);
            $this->db->like('no_telinga', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('ras', $keyword);
            $this->db->or_like('tanggal_masuk', $keyword);
            return $this->db->get('antemortem')->result_array();
         }


         public function cariDataSapiPostmortem(){

            $keyword = $this->input->post('keyword', true);
            $this->db->like('no_telinga', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('ras', $keyword);
            $this->db->or_like('tanggal_masuk', $keyword);
            return $this->db->get('postmortem')->result_array();
         }

         public function getpostmortembyfilter(){

        $data = $this->input->post('txt_tgl');
        $data2 = $this->input->post('txt_tgl2');

        $query = $this->db->query("SELECT * FROM postmortem WHERE tanggal_postmortem BETWEEN '$data' AND '$data2' ");
        return $query->result_array();
        }


		
	}


?>
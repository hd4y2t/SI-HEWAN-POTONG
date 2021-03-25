<?php 

    class Sapi_model extends CI_Model {
    

        public function index(){
         

        }



         public function tambahDataSapi(){

            $data = [
                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->insert('sapi', $data);
         	
         }

        public function getAlldataSapi(){

            $this->db->order_by('tanggal_masuk', 'DESC');
            $query = $this->db->get('sapi');
            
            return $query->result_array();

        }


        public function HapusDataSapi($id)
        {       
                $this->db->where('no_telinga', $id);
                $this->db->delete('sapi');
        }

        public function getSapibyNotelinga($id)
        {

           return $this->db->get_where('sapi', ['no_telinga' =>$id])->row_array();
        }

            public function UbahDataSapi(){

            $data = [
                    "no_telinga" => $this->input->post('txt_notelinga', true),
                    "ras" => $this->input->post('txt_ras', true),
                    "berat" => $this->input->post('txt_berat', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "username" => $this->input->post('txt_username', true),
                    "tanggal_masuk" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->where('no_telinga', $this->input->post('txt_notelinga'));
                $this->db->update('sapi', $data);
            
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

       public function getsapibyfilter(){

        $data = $this->input->post('txt_tgl');
        $data2 = $this->input->post('txt_tgl2');

        $query = $this->db->query("SELECT * FROM sapi WHERE tanggal_masuk BETWEEN '$data' AND '$data2' ");
        return $query->result_array();
        }

       }

?>
<?php 


if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Kauptd_model extends CI_Model {


        public function tambahDataKaryawan(){
             $data = [
                    "username" => $this->input->post('txt_username', true),
                    "password" => $this->input->post('txt_password', true),
                    "nama" => $this->input->post('txt_nama', true),
                    "level" => $this->input->post('txt_level', true),
                    "nip" => $this->input->post('txt_nip', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "no_hp" => $this->input->post('txt_nohp', true),
                    "ttl" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->insert('login', $data);
         }

        public function getAlldataKaryawan(){


      
        $query = $this->db->query('SELECT * FROM user WHERE level !=4');

        return $query->result_array();

        }

        public function HapusDataKaryawan($id)
        {       
                $this->db->where('nip', $id);
                $this->db->delete('user');
        }

         public function getKaryawanbyUsername($id)
        {

           return $this->db->get_where('user', ['nip' =>$id])->row_array();
        }



            public function UbahDataKaryawan(){

            $data = [
                     "username" => $this->input->post('txt_username', true),
                    "password" => $this->input->post('txt_password', true),
                    "nama" => $this->input->post('txt_nama', true),
                    "level" => $this->input->post('txt_level', true),
                    "nip" => $this->input->post('txt_nip', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "no_hp" => $this->input->post('txt_nohp', true),
                    "ttl" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->where('nip', $this->input->post('txt_nip'));
                $this->db->update('user', $data);
            
         }

         public function Getdatakauptd(){
             $data = [
                    "nip" =>  $this->input->post('txt_nip', true),
                    "password" => md5($this->input->post('txt_password', true)),
                    "password" => $this->input->post('txt_password', true),
                    "nama" => $this->input->post('txt_nama', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "no_hp" => $this->input->post('txt_nohp', true),
                    "ttl" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->where('nip', $this->input->post('txt_nip'));
                $this->db->update('user', $data);

            
         }



         public function tambahDataPemohon(){

            
             $data = [
                    "nip" => $this->input->post('txt_nip', true),
                    "email" => $this->input->post('email', true),
                    "username" => $this->input->post('txt_username', true),
                    "password" => md5($this->input->post('txt_password', true)),
                    "nama" => $this->input->post('txt_nama', true),
                    "level" => $this->input->post('txt_level', true),
                    "gender" => $this->input->post('txt_gender', true),
                    "no_hp" => $this->input->post('txt_nohp', true),
                    "ttl" => $this->input->post('txt_tanggal', true)
                ];

                $this->db->insert('user', $data);
         }
    
    
       
       public function getAlldataPemohon(){
          

        $level = '4';
        $lvl = $this->db->where('level', $level);
        $query = $this->db->get('user');

        return $query->result_array();

        }

        public function getAlldataPengajuan(){

            $query = $this->db->get('pengajuan');
            return $query->result_array();
        }


        public function getPengajuanbyID($id){
             return $this->db->get_where('pengajuan', ['id_pengajuan' =>$id])->row_array();
            
        }

        public function prosesterima($id)
        {

            $data = '2';
            $this->db->set('status', $data);
            $this->db->where('id_pengajuan', $id);
            $this->db->update('pengajuan');
            
        }

        public function prosestolak($id)
        {

            $data = '0';
            $this->db->set('status', $data);
            $this->db->where('id_pengajuan', $id);
            $this->db->update('pengajuan');
            
        }

        public function Proses_data_terima(){
            $data = [
                "id_pengajuan" => $this->input->post('txt_id_pengajuan'),
                "email" => $this->input->post('txt_email'),
                "username" => $this->input->post('txt_username'),
                "status" => $this->input->post('txt_status')
            ];

            if($this->input->post('txt_status', 2)){
                $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'rphgandus30149@gmail.com',
                'smtp_pass' => 'rphgandus123',
                'smtp_port' =>  465,
                'mailtype' =>  'html',
                'charset' =>    'utf-8',
                'newline' =>    "\r\n"
            ] ;

             $this->db->where('id_pengajuan', $this->input->post('txt_id_pengajuan'));
            $this->db->update('pengajuan', $data);
           
            $this->load->library('email',$config);
            $this->email->initialize($config);
            $this->email->from('rphgandus30149', 'Rumah Potong Hewan Gandus');
            $this->email->to($this->input->post('txt_email'));
            $this->email->subject('Penerimaan permohonan pemotongan ');
            $this->email->message('Permohonan pemotongan telah diterima');

            if ($this->email->send()){
                return true ;
            } else {
                echo $this->email->print_debugger();
                die;
            }

            $this->db->where('id_pengajuan', $this->input->post('txt_id_pengajuan'));
            $this->db->update('pengajuan', $data);
            } else {

                $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'rphgandus30149@gmail.com',
                'smtp_pass' => 'rphgandus123',
                'smtp_port' =>  465,
                'mailtype' =>  'html',
                'charset' =>    'utf-8',
                'newline' =>    "\r\n"
            ] ;

             $this->db->where('id_pengajuan', $this->input->post('txt_id_pengajuan'));
            $this->db->update('pengajuan', $data);
           
            $this->load->library('email',$config);
            $this->email->initialize($config);
            $this->email->from('rphgandus30149', 'Rumah Potong Hewan Gandus');
            $this->email->to($this->input->post('txt_email'));
            $this->email->subject('Penolakan permohonan pemotongan ');
            $this->email->message('Permohonan pemotongan ditolak, lengkapi dan kirim ulang berkas anda');

            if ($this->email->send()){
                return true ;
            } else {
                echo $this->email->print_debugger();
                die;
            }

            $this->db->where('id_pengajuan', $this->input->post('txt_id_pengajuan'));
            $this->db->update('pengajuan', $data);

            }
            
            
        }       

            
        }

?>
<?php

/**
 * 
 */
class Pemohon_model extends CI_Model
{
	
	public function getAllDatabyUsername(){

		$pemohon = $this->session->userdata('username');


		$pmhn = $this->db->where('username', $pemohon);
		$query = $this->db->get('sapi');
            return $query->result_array();

	}

	public function getAllDataPengajuan(){
		$pemohon = $this->session->userdata('username');

		
		$pmhn = $this->db->where('username', $pemohon);
		$query = $this->db->get('pengajuan');
		return $query->result_array();
	}


	public function getAlldataAntemortem()
 			{
 				$pemohon = $this->session->userdata('username');

 			$pmhn = $this->db->where('username', $pemohon);
            $query = $this->db->get('antemortem');
            return $query->result_array();

       		 }

    public function getAlldataPostmortem()
 			{
 				$pemohon = $this->session->userdata('username');

 			$pmhn = $this->db->where('username', $pemohon);
            $query = $this->db->get('postmortem');
            return $query->result_array();

       		 }

}
?>
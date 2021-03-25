<?php 


if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Login_model extends CI_Model {
    
         public function login_proses($post){

         	$this->db->select('*');
         	$this->db->from('user');
         	$this->db->where('nip', $post['username']);
         	$this->db->where('password', md5($post['password']));

         	$query = $this->db->get();
         	return $query;
         }
            
        }

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

  function cek_login($data){
 	$user = $this->db->get_where('user',$data);
 	return $user->num_rows();
 	}

}

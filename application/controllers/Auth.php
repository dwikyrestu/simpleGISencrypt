<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct(){
 		parent::__construct();
 		$this->load->model('user_m');
 	}


  public function index(){
  $data = array('content' => 'admin/login_form',
    'header' => 'templates/header');
  $this->load->view('templates/template', $data, FALSE);
  }

  public function verify(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $data = array(
  	     'username' => $username,
  	     'password' => md5($password)
  	  );
  		//print_r($data);
  	  $cek=$this->user_m->cek_login($data);
  	  if($cek == 1) {
  	     $sesi=$this->session->set_userdata($data);
  	     redirect(base_url().'admin/');
  	  }else{
         $this->session->set_flashdata('alert','alert-danger');
         $this->session->set_flashdata('msg','Username atau password salah !!!');
         redirect(base_url().'auth/');
  		}
  }

  function logout() {
    session_destroy();
    redirect(base_url().'auth');
  }

}

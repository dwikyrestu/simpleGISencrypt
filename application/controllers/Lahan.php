<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

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
 		$this->load->model('lahan_m');
}

public function data_lahan(){
  $data = $this->lahan_m->getAll();
  echo json_encode($data);
}

function encrypt($string) {
    $key = $this->key;
    $result = '';
    for($i=0; $i<strlen($string); $i++) {
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)+ord($keychar));
    $result.=$char;
    }
    return base64_encode($result);
}

public function simpan_lahan(){
    $latlong = $this->input->post('latlong');
    $latlongE = $this->encrypt($latlong);
    $nama = $this->input->post('nama');
    $kecamatan = $this->input->post('kecamatan');
    $alamat = $this->input->post('alamat');
    $ket = $this->input->post('ket');

    $data = $this->lahan_m->simpan_lahan($nama,$kecamatan,$alamat,$ket,$latlongE);
    echo json_encode($data);
}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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


  private $key = "activate";

	public function index()
	{
		$this->tes();
	}

  public function data_lahan(){
    $data = $this->lahan_m->lahan_list();
    echo json_encode($data);
  }

  function decrypt($string) {
  $key = $this->key;
  $result = '';
  $string = base64_decode($string);
  for($i=0; $i<strlen($string); $i++) {
  $char = substr($string, $i, 1);
  $keychar = substr($key, ($i % strlen($key))-1, 1);
  $char = chr(ord($char)-ord($keychar));
  $result.=$char;
  }
  return $result;
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

  public function tes(){
  $data = array('content' => 'home/lahan',
    'header' => 'templates/header');
  $this->load->view('templates/template', $data, FALSE);
  }

  public function ambildata(){
    $data = $this->lahan_m->getAll();
    //print_r($data);

    $json = '{"gislahan": {';
    $json .= '"lahan":[ ';
    foreach($data as $x){
      $decrypted = $this->decrypt($x['polygon']);
    	$json .= '{';
    	$json .= '"id":"'.$x['id'].'",
    		"nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
    		"kecamatan":"'.htmlspecialchars($x['kecamatan']).'",
    		"keterangan":"'.htmlspecialchars($x['keterangan']).'",
    		"alamat":"'.htmlspecialchars($x['alamat']).'",
    		"polygon":"'.$decrypted.'",
    		"warna":"'.$x['warna'].'"
    	},';
    }

    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
    $json .= '}}';

    echo $json;
  }

  public function getOne(){
    $id = $_GET['kecamatan'];
    $data = $this->lahan_m->getOne($id);
    //print_r($data);

    $json = '{"gislahan": {';
    $json .= '"lahan":[ ';
    foreach($data as $x){
      $decrypted = $this->decrypt($x['polygon']);
      $json .= '{';
      $json .= '"id":"'.$x['id'].'",
        "nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
        "kecamatan":"'.htmlspecialchars($x['kecamatan']).'",
        "keterangan":"'.htmlspecialchars($x['keterangan']).'",
        "alamat":"'.htmlspecialchars($x['alamat']).'",
        "polygon":"'.$decrypted.'",
        "warna":"'.$x['warna'].'"
      },';
    }

    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
    $json .= '}}';

    echo $json;
  }

  public function cariKec(){
    $id = $_GET['kecamatan'];
    $data = $this->lahan_m->getKec($id);
    //print_r($data);

    $json = '{"gislahan": {';
    $json .= '"lahan":[ ';
    foreach($data as $x){
      $decrypted = $this->decrypt($x['polygon']);
      $json .= '{';
      $json .= '"id":"'.$x['id'].'",
        "nama_lokasi":"'.htmlspecialchars($x['nama_lokasi']).'",
        "kecamatan":"'.htmlspecialchars($x['kecamatan']).'",
        "keterangan":"'.htmlspecialchars($x['keterangan']).'",
        "alamat":"'.htmlspecialchars($x['alamat']).'",
        "polygon":"'.$decrypted.'",
        "warna":"'.$x['warna'].'"
      },';
    }

    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
    $json .= '}}';

    echo $json;
  }

  // public function cobaCiph(){
  //   $text = "-6.257839185538634,107.31552600860596 -6.262318427517906,107.31295108795166 -6.2672668787420385,107.31415271759033 -6.265944452405504,107.3196029663086 -6.265987111371907,107.32222080230713 -6.261849175397744,107.32363700866699 -6.257412589061297,107.32325077056885";
  //   $encrypted = $this->encrypt($text);
  //   $decrypted = $this->decrypt($encrypted);
  //   echo $encrypted;
  //   echo "<br/>";
  //   echo $decrypted;
  // }



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan_m extends CI_Model {

	public function getAll(){
    $this->db->select('a.id,a.nama_lokasi,a.warna as warna,b.nama_kecamatan as kecamatan,a.keterangan,a.alamat,a.polygon');
    $this->db->from('lokasi_lahan a');
    $this->db->join('kecamatan b', 'b.id = a.kecamatan', 'left');
    $query = $this->db->get();
    return $query->result_array();
	}

	public function getOne($id){
		$this->db->select('a.id,a.nama_lokasi,a.warna,b.nama_kecamatan as kecamatan, a.keterangan,a.alamat,a.polygon');
		$this->db->from('lokasi_lahan a');
		$this->db->join('kecamatan b', 'b.id = a.kecamatan', 'left');
		$this->db->where('a.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}


	public function getKec($id){
		$this->db->select('a.id,a.nama_lokasi,a.warna,b.nama_kecamatan as kecamatan, a.keterangan,a.alamat,a.polygon');
		$this->db->from('lokasi_lahan a');
		$this->db->join('kecamatan b', 'b.id = a.kecamatan', 'left');
		$this->db->where('b.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lahan_list(){
		$hasil=$this->db->query("SELECT * FROM lokasi_lahan");
		return $hasil->result();
	}
	public function simpan_lahan($nama,$kecamatan,$alamat,$ket,$latlong){
		$hasil=$this->db->query("INSERT INTO lokasi_lahan (id,nama_lokasi,kecamatan,alamat,status,keterangan,polygon)VALUES('','$nama','$kecamatan','$alamat','1','$ket','$latlong')");
	return $hasil;
 }

}

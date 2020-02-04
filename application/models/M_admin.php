<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	private $table  = 'korban';
	private $table2 = 'logistik';
	private $table3 = 'pakaian';
	private $table4 = 'penyakit';

	public function __construct(){
		parent::__construct();
	}

	public function show()
	{
		return $this->db->join($this->table4,'penyakit.id_korban=korban.id_korban')
						->get($this->table)
						->result_array();
	}

	public function input($data,$table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function inputPakaian($data,$table3){
		return $this->db->insert($table3, $data);
	}

	public function masuk($data,$table) {
		return $this->db->insert($table, $data);
	}

	public function chartmakanan()
	{
		$sql = "SELECT (nama_makanan) FROM `makanan`";
		return $this->db->query($sql)
						->result_array();
	}


	public function chartpakaian()
	{
		$sql = "SELECT LEFT(jumlah, 3) as jumlah_barang, SUM(tgl_masuk) as tanggal_masuk FROM `logistik` ";
		return $this->db->query($sql)
						->result_array();
	}

	public function chartobat()
	{
		$sql = "SELECT LEFT(tgl_masuk, 2) as hari, SUM(jumlah) as jumlah_barang FROM `logistik` ";
		return $this->db->query($sql)
						->result_array();
	}

	public function show2() {
		return $this->db->get($this->table2)
						->result_array();
	}
}
?>
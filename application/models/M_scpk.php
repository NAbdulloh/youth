<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_scpk extends CI_Model {

	private $table = 'penyakit';
	public function __construct(){
		parent::__construct();
	} 

	public function scpk($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
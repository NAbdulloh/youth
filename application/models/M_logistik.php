<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logistik extends CI_Model {

	private $table = 'pakaian';
	private $table1 = 'makanan';
	private $table2 = 'obat';

	public function __construct(){
		parent::__construct();
	} 

	public function showLog()
	{
		return $this->db->get($this->table)
						->result_array();
	}

	public function showLogMak()
	{
		return $this->db->get($this->table1)
						->result_array();
	}

	public function showLogObat()
	{
		return $this->db->get($this->table2)
						->result_array();
	}

	public function viewmakan() {
		return $this->db->get('makanan')->result();
	}

	public function viewpakaian() {
		return $this->db->get('pakaian')->result();
	}

	public function viewobat() {
		return $this->db->get('obat')->result();
	}

	public function editP($where, $table) {
		return $this->db->get_where($table, $where);
	}

	public function updateP($data, $id) {
		$data = array(
        'jum_pakaian' => $jumlahPakaian
		);

		$this->db->where('id_pakaian', $id);
		$this->db->update('pakaian', $data);
	}

	public function inputP($data,$table){
  		return $this->db->insert($table,$data);
 	}

 	public function updatePak($updated_data){
 		$this->db->where('id_pakaian', $this->uri->segment(3));
 		$this->db->update('jum_pakaian', $updated_data);
 	}

 	function fetch_data()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           $this->db->from("pakaian");  
           $query = $this->db->get();  
           return $query;  
      }
    function fetch_single_data($id)  
      {  
           $this->db->where("id_pakaian", $id);  
           $query = $this->db->get("pakaian");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  

      function fetch_dataM()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           $this->db->from("makanan");  
           $query = $this->db->get();  
           return $query;  
      }
    function fetch_single_dataM($id)  
      {  
           $this->db->where("id_makanan", $id);  
           $query = $this->db->get("makanan");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      } 

      function fetch_dataO()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           $this->db->from("obat");  
           $query = $this->db->get();  
           return $query;  
      }
    function fetch_single_dataO($id)  
      {  
           $this->db->where("id_obat", $id);  
           $query = $this->db->get("obat");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      } 
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	} 
}
?>
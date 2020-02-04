<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function ceklogin($user, $pass)
	{
		
		$hasil=$this->db->where('username', $user)
						->where('password',$pass)
						->limit(1)
						->get('petugas')
						->row();

		if(count($hasil)) {
			$session=['login'=>true, 'id_petugas'=>$hasil->id_petugas, 'nama_petugas'=>$hasil->nama_petugas, 'username'=>$hasil->username];

			$this->session->set_userdata($session);
			return true;
		} else {
			return false;
		}

		// $this->db->where('username', $user);	
		// $this->db->where('password', $pass);
		// return $this->db->get('petugas')->row();
	}


}
?>
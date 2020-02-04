<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		

		if (isset($_POST['submit'])) {
			$user = $this->input->post('username', true);
			$pass = $this->input->post('password', true);
			$cek = $this->M_login->ceklogin($user, $pass);
			
			if ($cek) {
				// $cek_login = $this->db->get_where('petugas', array('username' => $user, 'password' => $pass))->row();
				redirect(base_url('C_admin/tampil_data'));
			} else {
				//redirect(base_url('C_login'));
				echo "gagal";
			}
		}
	}

	public function admin() {
		$this->load->view('admin');
	}
}

?>
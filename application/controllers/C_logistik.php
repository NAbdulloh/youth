<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logistik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_logistik');
	}

	public function tampilLog(){
		$this->load->model('M_logistik');
		$data['pak'] = $this->M_logistik->viewpakaian();
		$data['data'] = $this->M_logistik->showLog();
		$this->load->view('chart_pakaian', $data);
	}

	public function tampilLogMak(){
		$this->load->model('M_logistik');
		$data['abc'] = $this->M_logistik->viewmakan();
		$data['data'] = $this->M_logistik->showLogMak();
		$this->load->view('chart_makanan', $data);
	}

	public function tampilLogObat(){
		$this->load->model('M_logistik');
		$data['oba'] = $this->M_logistik->viewobat();
		$data['data'] = $this->M_logistik->showLogObat();
		$this->load->view('chart_obat', $data);
	}

	public function editP($id) {
		$user_id = $this->uri->segment(3);  
        $this->load->model("M_logistik");  
        $data["user_data"] = $this->M_logistik->fetch_single_data($user_id);  
        $data["fetch_data"] = $this->M_logistik->fetch_data();
        //$this->load->library('form_validation');   
        $this->load->view("editPakaian", $data); 
	}

	public function editM($id) {
		$user_id = $this->uri->segment(3);  
        $this->load->model("M_logistik");  
        $data["user_data"] = $this->M_logistik->fetch_single_dataM($user_id);  
        $data["fetch_data"] = $this->M_logistik->fetch_dataM();
        //$this->load->library('form_validation');   
        $this->load->view("editMakanan", $data); 
	}

	public function editO($id) {
		$user_id = $this->uri->segment(3);  
        $this->load->model("M_logistik");  
        $data["user_data"] = $this->M_logistik->fetch_single_dataO($user_id);  
        $data["fetch_data"] = $this->M_logistik->fetch_dataO();
        //$this->load->library('form_validation');   
        $this->load->view("editObat", $data); 
	}

	public function update(){
		$id  = $this->input->post('id');
		$jum = $this->input->post('jmlh');
		
	 
		$data = array(
			'jum_pakaian' => $jum
		);

		
		$where = array(
			'id_pakaian' => $id
		);
	 
		$this->M_logistik->update_data($where,$data,'pakaian');
		redirect('C_logistik/tampilLog');
	}

	public function updateMak(){
		$id  = $this->input->post('id');
		$jum = $this->input->post('jmlh');
		
	 
		$data = array(
			'jum_makanan' => $jum
		);

		
		$where = array(
			'id_makanan' => $id
		);
	 
		$this->M_logistik->update_data($where,$data,'makanan');
		redirect('C_logistik/tampilLogMak');
	}

	public function updateObat(){
		$id  = $this->input->post('id');
		$jum = $this->input->post('jmlh');
		
	 
		$data = array(
			'jum_obat' => $jum
		);

		
		$where = array(
			'id_obat' => $id
		);
	 
		$this->M_logistik->update_data($where,$data,'obat');
		redirect('C_logistik/tampilLogObat');
	} 


}

?>
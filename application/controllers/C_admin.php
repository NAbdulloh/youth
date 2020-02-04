<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_scpk');
	}

	public function index()
	{
		$this->load->view('admin');

	}

	//Menampilkan data korban
	public function tampil_data(){
		// Load model
		$this->diare();
		$this->dbd();
		$this->malaria();
		$this->tdkSakit();

		$this->load->model('M_admin');
		$data['data'] = $this->M_admin->show();
		$this->load->view('admin', $data);
	}


	//Masukkan data korban
	public function masukkan(){
		if (!$_POST) {
			$this->load->view('data_korban');
		} else {
			// Ambil data dari form
			$nama     		= $this->input->post('nama');
			$jenis_kelamin  = $this->input->post('jenisK');
			$usia 	  		= $this->input->post('usia');
			$gej_awal		= $this->input->post('gej1');
			$gej_kedua		= $this->input->post('gej2');
				
			// Membuat associative array
			$data = array(
				'nama' 				=> $nama,
				'jenis_kelamin' 	=> $jenis_kelamin,
				'usia' 				=> $usia,
				// 'gejala'			=> $gejala_penyakit
				'id_petugas'		=> $this->session->userdata('id_petugas')
			);

			

			//$this->M_SCPK->diare($penyakit['gejala_kedua']);
	
			// Masukkan ke DB
			$insert = $this->M_admin->input($data, 'korban');
			
			$penyakit = array(
				'gejala_awal'		=> $gej_awal,
				'gejala_kedua'		=> $gej_kedua,
				'id_korban'			=> $insert
			);

			//print_r($insert);
			$input_penyakit = $this->M_admin->input($penyakit, 'penyakit');

			if ($insert) {
				redirect(base_url().'C_admin/tampil_data');
			} else {
			echo "Gagal!";
			}
		}
	}

	

	public function dashboard_pakaian(){
		// Load model
		$this->load->model('M_admin');
		$logistik=$this->M_admin->chartpakaian();

		$data = $this->array_values_recursive($logistik);

		foreach ($data as $key1 => $arr) {
			$data[$key1][1] = (int) $data[$key1][1];
		}

		$arr['data_konsumsi'] = $data;

		$this->load->view('chart_pakaian', $arr);
	}

	public function dashboard_obat(){
		// Load model
		$this->load->model('M_admin');
		$logistik=$this->M_admin->chartobat();

		$data = $this->array_values_recursive($logistik);

		foreach ($data as $key1 => $arr) {
			$data[$key1][1] = (int) $data[$key1][1];
		}

		$arr['data_konsumsi'] = $data;

		$data2['data2'] = $this->M_admin->show2();
		$this->load->view('chart_obat', $arr);
	}

	
	public function editPakaian (){
		if (!$_POST) {
			$this->load->view('editPakaian');
		} else {
			// Ambil data dari form
			$jenis_pakaian  = $this->input->post('jenisP');
			$nama_pakaian  	= $this->input->post('namaP');
			$jumlah 		= $this->input->post('jmlh');
				
			// Membuat associative array
			$data = array(
				'jenis_pakaian' 	=> $jenis_pakaian,
				'nama_pakaian' 		=> $nama_pakaian,
				'jum_pakaian'		=> $jumlah
			);
	
			// Masukkan ke DB
			$insert = $this->M_admin->inputPakaian($data, 'pakaian');

			if ($insert) {
				redirect(base_url().'C_admin/tambahPakaian');
			} else {
			echo "Gagal!";
			}
		}
	}


	public function diare(){
		$demamMB = 0.8;
		$demamMD = 0.03;
		$diare1 = $demamMB - $demamMD;
	
		$MBdiare = $demamMB + (1*(1-0.8));
		$MDdiare = $demamMD + (0.1*(1-0.3));
		$CFdiare = $MBdiare - $MDdiare;

		if ($diare1 < $CFdiare) {

		$gejala = 'nyeri';
		$sakit = 'Positif Diare';

		$data = array(
			'penyakit' => $sakit
		);

			
		$where = array(
			'gejala_kedua' => $gejala
		);
	 
		$this->M_scpk->scpk($where,$data,'penyakit');

		
		}

		else {
			echo "gagal !";
		}

    }

    public function dbd(){
    	$demamMB = 0.8;
		$demamMD = 0.03;
		$dbd1 = $demamMB - $demamMD;
	
		$MBdbd = $demamMB + (0.75*(1-0.8));
		$MDdbd = $demamMD + (0.03*(1-0.03));
		$CFdbd = $MBdbd - $MDdbd;

		if ($dbd1 < $CFdbd) {

		$gejala = 'bintik';
		$sakit = 'Positif DBD';

		$data = array(
			'penyakit' => $sakit
		);

		
		$where = array(
			'gejala_kedua' => $gejala
		);
	 
		$this->M_scpk->scpk($where,$data,'penyakit');
		//$this->load->view('data_korban', $data);
		}

		else {
			echo "gagal !";
		}
    }

    public function malaria(){
    	$demamMB = 0.8;
		$demamMD = 0.03;
		$malaria1 = $demamMB - $demamMD;
	
		$MBmalaria = $demamMB + (0.8*(1-0.8));
		$MDmalaria = $demamMD + (0.04*(1-0.03));
		$CFmalaria = $MBmalaria - $MDmalaria;

		if ($malaria1 < $CFmalaria) {

		$gejala = 'MKkuning';
		$sakit = 'Positif Malaria';

		$data = array(
			'penyakit' => $sakit
		);

		
		$where = array(
			'gejala_kedua' => $gejala
		);
	 
		$this->M_scpk->scpk($where,$data,'penyakit');
		//$this->load->view('data_korban', $data);
		}

		else {
			echo "gagal !";
		}
    }

    public function tdkSakit(){
		$gejala = 'lain';
		$sakit = 'Tidak Sakit';

		$data = array(
			'penyakit' => $sakit
		);

		
		$where = array(
			'gejala_kedua' => $gejala
		);
	 
		$this->M_scpk->scpk($where,$data,'penyakit');
		//$this->load->view('data_korban', $data);
		}

}

?>
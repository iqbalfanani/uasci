<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('DetailModel');
		$id = $this->session->userdata('logged_in')['id'];
		$data['jumlah_kelas'] = $this->DetailModel->jumlah_kelas_per_siswa($id);

		$this->load->view('home_view',$data);
	}

	public function admin()
	{
		$this->load->model('JadwalModel');
		$data['jumlah_murid'] = $this->db->get('murid')->num_rows();
		$data['jumlah_guru'] = $this->db->get('guru')->num_rows();
		$data['jumlah_kelas'] = $this->db->get('kelas')->num_rows();
		$data['jumlah_mapel'] = $this->db->get('mapel')->num_rows();
		$data['jadwal_list'] = $this->JadwalModel->getDataJadwal();
		$this->load->view('home_admin', $data);
	}

	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
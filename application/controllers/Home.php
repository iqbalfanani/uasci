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

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('JadwalModel');
		$this->form_validation->set_rules('hari', 'Hari', 'trim|required');
		$this->form_validation->set_rules('jam', 'Jam', 'trim|required');
		$this->form_validation->set_rules('fk_id_ruang', 'Ruang', 'trim|required');
		$this->form_validation->set_rules('fk_id_mapel', 'fk_id_mapel', 'trim|required');
		$this->form_validation->set_rules('fk_id_guru', 'fk_id_guru', 'trim|required');
		$this->form_validation->set_rules('fk_id_kelas', 'fk_id_kelas', 'trim|required');

		$data['getRelasiRuang'] = $this->JadwalModel->getRelasiRuang();
		$data['getRelasiMapel'] = $this->JadwalModel->getRelasiMapel();
		$data['getRelasiGuru'] = $this->JadwalModel->getRelasiGuru();
		$data['getRelasiKelas'] = $this->JadwalModel->getRelasiKelas();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambahJadwal_view', $data);
		}else{
			$this->JadwalModel->insertData();
			redirect('home/admin');
		}

	}

	public function update($id)
	{
		$this->load->library('form_validation');
		$this->load->model('JadwalModel');
		$this->form_validation->set_rules('fk_id_ruang', 'Ruang', 'trim|required');
		$this->form_validation->set_rules('fk_id_guru', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('fk_id_mapel', 'Mapel', 'trim|required');
		$this->form_validation->set_rules('fk_id_kelas', 'Kelas', 'trim|required');

		$data['getRelasiRuang'] = $this->JadwalModel->getRelasiRuang();
		$data['getRelasiGuru'] = $this->JadwalModel->getRelasiGuru();
		$data['getRelasiMapel'] = $this->JadwalModel->getRelasiMapel();
		$data['getRelasiKelas'] = $this->JadwalModel->getRelasiKelas();
		$data['getData'] = $this->JadwalModel->getDataWhereId($id)[0];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('updateJadwal_view', $data);
		} else {
			$this->JadwalModel->updateData($id);
			redirect('Home');
		}
	}

	public function delete($id)
	{
		$this->load->model('JadwalModel');
		$this->JadwalModel->hapusData($id);
		redirect('Home/admin');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
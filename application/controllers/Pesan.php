<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		$this->load->model('DetailModel');
		$data['getRelasiKelas'] = $this->DetailModel->getRelasiKelas();
		$this->load->view('pesan_view',$data);

	}
	public function jadwal()
	{
		$this->load->model('JadwalModel');
		$kelas = $this->input->post('fk_id_kelas');
		$data['id_kelas'] = $kelas;
		$data['kelas'] = $this->db->where('id',$kelas)->get('kelas')->row(0)->nama_kelas;
		$data['jadwal'] = $this->JadwalModel->getDataJadwalWhereKelas($kelas);
		$this->load->view('jadwal_view',$data);
	}

	public function kelas($kelas,$idmapel)
	{
		$set = array(
			'fk_id_kelas' => $kelas,
			'fk_id_murid' => $this->session->userdata('logged_in')['id'],
		);
		$this->db->insert('detail_kelas',$set);
		redirect('Pesan/cetak/'.$idmapel,'refresh');
	}

	public function cetak($idmapel)
	{
		$id=$this->session->userdata('logged_in')['id'];
		$this->load->model('MuridModel');	
		$data['murid']=$this->MuridModel->getData($id,$idmapel);
		$this->load->view('cetak_view',$data);
	}
}

/* End of file Pesan.php */
/* Location: ./application/controllers/Pesan.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function index()
	{
		$this->load->model('GuruModel');
		$data['guru_list'] = $this->GuruModel->getData();
		$this->load->view('guru_view', $data);
	}

	public function insert()
	{
		$this->load->library("form_validation");
		$this->load->model('GuruModel');
		$this->form_validation->set_rules('nama_guru', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('telp', 'No HP', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis kelamin', 'trim|required');
		$this->form_validation->set_rules('fk_id_mapel', 'Mapel', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		$data['getRelasi'] = $this->GuruModel->getRelasi();

		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahGuru_view',$data); 
		}
		else{
			$this->GuruModel->insertData();
			redirect('guru');
		}
	}

	public function update($id)
	{
		$this->load->library("form_validation");
		$this->load->model('GuruModel');
		$this->form_validation->set_rules('nama_guru', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('telp', 'No HP', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis kelamin', 'trim|required');
		$this->form_validation->set_rules('fk_id_mapel', 'Mapel', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		$data['getRelasi'] = $this->GuruModel->getRelasi();
		
		$data['getData'] = $this->GuruModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateGuru_view',$data);
		}
		else{
			$this->GuruModel->updateData($id);
			redirect('guru');
		}
	}

	public function delete($id)
	{
		$this->load->model('GuruModel');
		$this->GuruModel->hapusData($id);
		redirect('guru');
	}

}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$this->load->model('KelasModel');
		$data['kelas_list'] = $this->KelasModel->getData();
		$this->load->view('kelas_view', $data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('KelasModel');
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahKelas_view.php'); 
		}
		else{
			$this->KelasModel->insertData();
			redirect('Kelas');
		}
	}

	public function update($id)
	{
		$this->load->library("form_validation");
		$this->load->model('KelasModel');
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->KelasModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateKelas_view',$data);
		}
		else{
			$this->KelasModel->updateData($id);
			redirect('Kelas');
		}
	}

	public function delete($id)
	{
		$this->load->model('KelasModel');
		$this->KelasModel->hapusData($id);
		redirect('Kelas');
	}

}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */
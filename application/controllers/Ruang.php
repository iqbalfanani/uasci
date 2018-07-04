<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	public function index()
	{
		$this->load->model('RuangModel');
		$data['ruang_list'] = $this->RuangModel->getData();
		$this->load->view('ruang_view', $data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('RuangModel');
		$this->form_validation->set_rules('no_ruang', 'Nama Ruang', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahRuang_view.php'); 
		}
		else{
			$this->RuangModel->insertData();
			redirect('Ruang');
		}
	}

	public function update($id)
	{
		$this->load->library("form_validation");
		$this->load->model('RuangModel');
		$this->form_validation->set_rules('no_ruang', 'Nama Ruang', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->RuangModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateRuang_view',$data);
		}
		else{
			$this->RuangModel->updateData($id);
			redirect('Ruang');
		}
	}

	public function delete($id)
	{
		$this->load->model('RuangModel');
		$this->RuangModel->hapusData($id);
		redirect('Ruang');
	}

}


/* End of file ruang.php */
/* Location: ./application/controllers/ruang.php */
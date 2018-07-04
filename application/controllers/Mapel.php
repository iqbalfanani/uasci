<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function index()
	{
		$this->load->model('MapelModel');
		$data['mapel_list'] = $this->MapelModel->getData();
		$this->load->view('mapel_view', $data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('MapelModel');
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahMapel_view.php'); 
		}
		else{
			$this->MapelModel->insertData();
			redirect('Mapel');
		}
	}

	public function update($id)
	{
		$this->load->library("form_validation");
		$this->load->model('MapelModel');
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->MapelModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateMapel_view',$data);
		}
		else{
			$this->MapelModel->updateData($id);
			redirect('Mapel');
		}
	}

	public function delete($id)
	{
		$this->load->model('MapelModel');
		$this->MapelModel->hapusData($id);
		redirect('Mapel');
	}

}

/* End of file mapel.php */
/* Location: ./application/controllers/mapel.php */
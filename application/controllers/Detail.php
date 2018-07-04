<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$this->load->model('DetailModel');
		$data['detail_list'] = $this->DetailModel->getDataDetail();
		$this->load->view('detail_view', $data);
	}
	public function insert()
	{
		$this->load->model('DetailModel');
		$this->form_validation->set_rules('fk_id_kelas', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_rules('fk_id_murid', 'Nama Murid', 'trim|required');
		$this->form_validation->set_rules('fk_id_mapel', 'fieldlabel', 'trim|required');

		$data['getRelasiMapel'] = $this->DetailModel->getRelasiMapel();

		$data['getRelasiKelas'] = $this->DetailModel->getRelasiKelas();
		
		$data['getRelasiMurid'] = $this->DetailModel->getRelasiMurid();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('tambahDetail_view', $data);
		} else {
			$this->DetailModel->insertData();
			redirect('detail');
		}	
	}

	public function update($id)
	{
		$this->load->library('form_validation');
	}

}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */
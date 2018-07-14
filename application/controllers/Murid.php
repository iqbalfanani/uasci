<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {

	public function index()
	{
		$this->load->model('MuridModel');
		$data['murid_list'] = $this->MuridModel->getDataWhereId();
		$this->load->view('murid_view', $data);
	}
	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('MuridModel');
		$this->form_validation->set_rules('nama_murid', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tangal Lahir', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Handphone', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahMurid_view.php'); 
		}
		else{
			$upload = $this->MuridModel->upload();
			if($upload['result'] == "success"){ 
				$this->MuridModel->insertData($upload['file']['file_name']);
				redirect('Murid');
			}else{
				$data['message'] = $upload['error'];
				$this->load->view('tambahMurid_view.php',$data); 
			}
		}
	}
	public function update($id)
	{
		$this->load->library('form_validation');
		$this->load->model('MuridModel');
		$this->form_validation->set_rules('nama_murid', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tangal Lahir', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Handphone', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
		
	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$data['getData'] = $this->MuridModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateMurid_view',$data);
		}
		else{
			if ($_FILES['foto']['name'] == "")
			{
				$this->MuridModel->updateData($id);
				redirect('Murid');
			}
			else
			{
				$upload = $this->MuridModel->upload();
				if($upload['result'] == "success"){ 
					$this->MuridModel->updateData($id,$upload['file']['file_name']);
					redirect('Murid');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('updateMurid_view',$data);
				}
			}
		}
	}

	public function delete($id)
	{
		$this->load->model('MuridModel');
		$this->MuridModel->hapusdata($id);
		redirect('Murid');
	}
}
/* End of file murid.php */
/* Location: ./application/controllers/murid.php */
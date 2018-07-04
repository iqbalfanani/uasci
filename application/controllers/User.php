<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('UserModel');
		$data['user_list'] = $this->UserModel->getData();
		$this->load->view('user_view', $data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->model('UserModel');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('level', 'level', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambahUser_view.php'); 
		}
		else{
			$this->UserModel->insertData();
			redirect('User');
		}
	}

	public function update($id)
	{
		$this->load->library("form_validation");
		$this->load->model('UserModel');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->UserModel->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('updateUser_view',$data);
		}
		else{
			$this->UserModel->updateData($id);
			redirect('User');
		}
	}

	public function delete($id)
	{
		$this->load->model('UserModel');
		$this->UserModel->hapusData($id);
		redirect('User');
	}

}

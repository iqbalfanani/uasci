<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|trim|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			if ($this->session->userdata('logged_in')['level'] == '1') {
				redirect('Home/admin','refresh');
			}else{
				redirect('Home','refresh');
			}
		}
	}
	public function cekDB($username)
	{
		$password = md5($this->input->post('password'));
		$cekDB = $this->db->where(array('username'=>$username,'password'=>$password))->get('user');
		if ($cekDB->num_rows() >= 1) {
			$data = $cekDB->result()[0];
			$userdata = array(
				'id' => $data->id,
				'username' => $username,
				'level' => $data->level
			);
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('cekDB','Username dan password tidak valid');
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Home','refresh');
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->load->model('MuridModel');
		$this->form_validation->set_rules('nama_murid', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tangal Lahir', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Handphone', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()==FALSE){
			$this->load->view('register_view.php'); 
		}
		else{
			$upload = $this->MuridModel->upload();
			if($upload['result'] == "success"){ 
				$this->MuridModel->insertData($upload['file']['file_name']);
				redirect('Login');
			}else{
				$data['message'] = $upload['error'];
				$this->load->view('register_view.php',$data); 
			}
		}	
	}
}
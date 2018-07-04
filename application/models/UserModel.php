<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from("user");
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("user");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		$data = $this->input->post();
		$data ['password'] = md5($data ['password']);
		$this->db->insert("user",$data);
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$data ['password'] = md5($data ['password']);
		$this->db->where('id',$id);
		if($this->db->update("user",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("user")){
			return "Berhasil";
		}
	}
}

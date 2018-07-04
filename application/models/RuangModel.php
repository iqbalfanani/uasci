<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RuangModel extends CI_Model {
	
	public function getData()
	{
		$this->db->select('*');
		$this->db->from("ruang");
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("ruang");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		$data = $this->input->post();
		$this->db->insert("ruang",$data);
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		if($this->db->update("ruang",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("ruang")){
			return "Berhasil";
		}
	}
}

/* End of file ruangModel.php */
/* Location: ./application/models/ruangModel.php */
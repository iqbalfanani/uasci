<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruModel extends CI_Model {

	public function getData()
	{
		$this->db->select('guru.*,mapel.nama_mapel');
		$this->db->from('guru');
		$this->db->join('mapel','guru.fk_id_mapel=mapel.id');
		$query = $this->db->get();
		return $query->result_array();

	}
	
	public function getRelasi()
	{
		return $this->db->get('mapel')->result_array();
	}
	
	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("guru");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		$data = $this->input->post();
		$this->db->insert("guru",$data);
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		if($this->db->update("guru",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("guru")){
			return "Berhasil";
		}
	}
}


/* End of file guruModel.php */
/* Location: ./application/models/guruModel.php */
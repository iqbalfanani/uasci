<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailModel extends CI_Model {

	public function getDataDetail()
	{
		$this->db->select('detail_kelas.*,kelas.nama_kelas,murid.nama_murid');
		$this->db->from('detail_kelas');
		$this->db->join('kelas','detail_kelas.fk_id_kelas=kelas.id');
		$this->db->join('murid','detail_kelas.fk_id_murid=murid.id');
		$query = $this->db->get();
		return $query->result_array();

	}	

	public function jumlah_kelas_per_siswa($id_murid)
	{
		$this->db->where('fk_id_murid',$id_murid);
		$query = $this->db->get('detail_kelas');
		return $query->num_rows();
	}
	public function insertData()
	{
		$data = $this->input->post();
		$this->db->insert("detail_kelas",$data);
	}

	public function getRelasiMapel()
	{
		return $this->db->get('mapel')->result_array();
	}

	public function getRelasiKelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function getRelasiMurid()
	{
		return $this->db->get('murid')->result_array();
	}

	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("detail_kelas");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		if($this->db->update("detail_kelas",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("detail_kelas")){
			return "Berhasil";
		}
	}
}

/* End of file detailModel.php */
/* Location: ./application/models/detailModel.php */
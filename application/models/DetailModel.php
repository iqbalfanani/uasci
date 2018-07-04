<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailModel extends CI_Model {

	public function getDataDetail()
		{
			$this->db->select('detail_kelas.*,kelas.nama_kelas,murid.nama_murid,mapel.nama_mapel');
			$this->db->from('detail_kelas');
			$this->db->join('kelas','detail_kelas.fk_id_kelas=kelas.id');
			$this->db->join('murid','detail_kelas.fk_id_murid=murid.id');
			$this->db->join('mapel','detail_kelas.fk_id_mapel=mapel.id');
			$query = $this->db->get();
			return $query->result_array();

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



}

/* End of file detailModel.php */
/* Location: ./application/models/detailModel.php */
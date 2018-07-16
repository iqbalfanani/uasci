<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalModel extends CI_Model {

	public function getDataJadwal() 
	{
		$this->db->select('jadwal.*,ruang.no_ruang, mapel.nama_mapel,guru.nama_guru, kelas.nama_kelas');
		$this->db->from('jadwal');
		$this->db->join('ruang','jadwal.fk_id_ruang=ruang.id');
		$this->db->join('mapel','jadwal.fk_id_mapel=mapel.id_mapel');
		$this->db->join('guru','jadwal.fk_id_guru=guru.id');
		$this->db->join('kelas','jadwal.fk_id_kelas=kelas.id');
		$query = $this->db->get();
		return $query->result_array();

	}
	public function getDataJadwalWhereKelas($id) 
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('ruang','jadwal.fk_id_ruang=ruang.id');
		$this->db->join('mapel','jadwal.fk_id_mapel=mapel.id_mapel');
		$this->db->join('guru','jadwal.fk_id_guru=guru.id');
		$this->db->join('kelas','jadwal.fk_id_kelas=kelas.id');
		$this->db->where('fk_id_kelas',$id);
		$query = $this->db->get();
		return $query->result_array();

	}

	public function getDataJadwalWhereKelas1($id) 
	{
		$this->db->select('jadwal.*,ruang.no_ruang, mapel.nama_mapel,guru.nama_guru, kelas.nama_kelas');
		$this->db->from('jadwal');
		$this->db->join('ruang','jadwal.fk_id_ruang=ruang.id');
		$this->db->join('mapel','jadwal.fk_id_mapel=mapel.id_mapel');
		$this->db->join('guru','jadwal.fk_id_guru=guru.id');
		$this->db->join('kelas','jadwal.fk_id_kelas=kelas.id');
		$this->db->where('fk_id_kelas',$id);
		$query = $this->db->get();
		return $query->result_array();

	}

	public function InsertData()
	{
		$data = $this->input->post();
		$this->db->insert('jadwal', $data);
	}

	public function updateData($id)
	{
		$data = $this->input->post();
		$this->db->where('id', $id);
		if ($this->db->update("jadwal", $data)) {
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete("jadwal")) {
			return "Data berhasil di hapus";
		}
	}

	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("jadwal");
		$this->db->where('id', $id);
		return $this->db->get()->result_array();
	}

	public function getRelasiRuang()
	{
		return $this->db->get('ruang')->result_array();
	}

	public function getRelasiMapel()
	{
		return $this->db->get('mapel')->result_array();
	}

	public function getRelasiGuru()
	{
		return $this->db->get('guru')->result_array();
	}

	public function getRelasiKelas()
	{
		return $this->db->get('kelas')->result_array();
	}
}

/* End of file kelasModel.php */
/* Location: ./application/models/kelasModel.php */
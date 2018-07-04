<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalModel extends CI_Model {

	public function getDataJadwal() 
	{
		$this->db->select('jadwal.*,ruang.no_ruang,mapel.nama_mapel,guru.nama_guru');
		$this->db->from('jadwal');
		$this->db->join('ruang','jadwal.fk_id_ruang=ruang.id');
		$this->db->join('mapel','jadwal.fk_id_mapel=mapel.id');
		$this->db->join('guru','jadwal.fk_id_guru=guru.id');
		$query = $this->db->get();
		return $query->result_array();

	}
}

/* End of file kelasModel.php */
/* Location: ./application/models/kelasModel.php */
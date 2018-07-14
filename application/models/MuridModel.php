<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MuridModel extends CI_Model {

	public function getData($id,$idmapel)
	{
		$this->db->select('*');
		$this->db->from("murid");
		$this->db->join("detail_kelas","murid.id=detail_kelas.fk_id_murid");
		$this->db->join("kelas","kelas.id=detail_kelas.fk_id_kelas");
		$this->db->join("jadwal","jadwal.fk_id_kelas=kelas.id");
		$this->db->join("mapel","mapel.id=jadwal.fk_id_mapel");
		$this->db->join("ruang","ruang.id=jadwal.fk_id_ruang");
		$this->db->where("murid.id",$id);
		$this->db->where("mapel.id",$idmapel);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getDataWhereId($id='')
	{
		$this->db->select('*');
		$this->db->from("murid");
		if($id!='')
		{ $this->db->where('id',$id); }
		return $this->db->get()->result_array();
	}

	public function insertData($upload_name)
	{
		$data = $this->input->post();
		unset($data['username']);
		unset($data['password']);

		$data['foto'] = $upload_name;
		$this->db->insert("murid",$data);
		$id_murid = $this->db->insert_id();
		$set_user = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fk_id_murid' => $id_murid
		);
		$this->db->insert('user',$set_user);

	}

	public function updateData($id,$upload_name=null)	
	{
		$data = $this->input->post();
		
		if($upload_name!=null){
			$data['foto'] = $upload_name;
			$this->delete_image($id);
		}
		$this->db->where('id',$id);
		if($this->db->update("murid",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->delete_image($id);
		$this->db->where('id',$id);
		if($this->db->delete("murid")){
			return "Berhasil";
		}
	}

	public function upload(){
        $config['upload_path'] = './assets/img/murid/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }

    public function delete_image($id)
    {
    	$data = $this->db->get_where('murid',array('id'=>$id))->result_array();
		unlink('./assets/img/murid/'.$data[0]['foto']);
    }
}

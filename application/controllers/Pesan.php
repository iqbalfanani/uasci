<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		$this->load->model('DetailModel');
		$data['getRelasiKelas'] = $this->DetailModel->getRelasiKelas();
		$this->load->view('pesan_view',$data);

	}
	public function jadwal()
	{
		$this->load->model('JadwalModel');
		$kelas = $this->input->post('fk_id_kelas');
		$data['id_kelas'] = $kelas;
		$data['kelas'] = $this->db->where('id',$kelas)->get('kelas')->row(0)->nama_kelas;
		$data['jadwal'] = $this->JadwalModel->getDataJadwalWhereKelas($kelas);
		$this->load->view('jadwal_view',$data);
	}

	public function kelas($kelas,$idmapel)
	{
		$set = array(
			'fk_id_kelas' => $kelas,
			'fk_id_murid' => $this->session->userdata('logged_in')['id'],
		);
		$this->db->insert('detail_kelas',$set);
		redirect('Pesan/cetak/'.$idmapel,'refresh');
	}

	public function cetak($idmapel)
	{
		$id=$this->session->userdata('logged_in')['id'];
		$this->session->set_userdata('idmapel',$idmapel);
		$this->load->model('MuridModel');	
		$data['murid']=$this->MuridModel->getData($id,$idmapel);
		$this->load->view('cetak_view',$data);
	}

	public function dompdf()
	{
		$id=$this->session->userdata('logged_in')['id'];
		$idmapel=$this->session->idmapel;
		$this->load->model('MuridModel');	
		$data['murid']=$this->MuridModel->getData($id,$idmapel);
		$this->load->view('print_view',$data);
		$html = $this->output->get_output();
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A6', 'potrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("welcome883737.pdf", array("Attachment"=>false));	
	}
}

/* End of file Pesan.php */
/* Location: ./application/controllers/Pesan.php */
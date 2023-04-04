<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('view-form-matakuliah');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
			'required' => 'Kode Matakuliah Harus Diisi',
			'min_length' => 'Kode Terlalu Sedikit'
		]);

		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[5]', [
			'required' => 'Nama Matakuliah Harus Diisi',
			'min_length' => 'Nama Matakuliah Terlalu Sedikit'
		]);

		$this->form_validation->set_rules('sks', 'Jumlah Sks', 'required', [
			'required' => 'Jumlah SKS Harus Diisi'
		]);

		if ($this->form_validation->run() != true) {
		$this->load->view('view-form-matakuliah');
		} else {
			$data = [
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'sks' => $this->input->post('sks') ];
			$this->load->view('view-data-matakuliah', $data);
		}
	}

}

/* End of file Matakuliah.php */
/* Location: ./application/controllers/Matakuliah.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		Parent::__construct();
		$this->load->model('M_menu');
		// $autoload['helper'] = array('url');
		// $this->load->helper('url');
	}

	public function index()
	{
		$queryAllMenu = $this->M_menu->getData();
		$data = array('queryAll' => $queryAllMenu);
		$this->load->view('v_menu', $data);
	}
	
	public function tambah()
	{
		$this->load->view('v_tambah');
	}

	public function tambahMenu()
	{
		$namaMenu = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$gambar = $_FILES['gambar'];
		if ($gambar = '') {} else {
			$config['upload_path'] = './assets/img/upload/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $namaMenu;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gagal mengupload";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$arrInsert = array(
			'namaMenu' => $namaMenu,
			'harga' => $harga,
			'gambar' => $gambar
		);

		$this->M_menu->insertDataMenu($arrInsert);
		redirect(base_url(''));
	}

	public function ubah($kdMenu)
	{
		$queryMenuDetail = $this->M_menu->getDataMenuDetail($kdMenu);
		$data = array('menuDetail' => $queryMenuDetail);
		$this->load->view('v_ubah', $data);
	}

	public function ubahMenu()
	{
		$kdMenu = $this->input->post('kdMenu');
		$namaMenu = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$gambar = $_FILES['gambar'];
		if ($gambar = '') {} else {
			$config['upload_path'] = './assets/img/upload/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $namaMenu;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$gambar = $this->input->post('old_pict', TRUE);
			} else {
				$gambar = $this->upload->data('file_name');
				unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
			}
		}

		$arrUpdate = array(
			'namaMenu' => $namaMenu,
			'harga' => $harga,
			'gambar' => $gambar
		);

		$this->M_menu->ubahDataMenu($kdMenu, $arrUpdate);
		redirect(base_url(''));
	}

	public function hapus($kdMenu)
	{
		$this->M_menu->hapusDataMenu($kdMenu);
		redirect(base_url(''));
	}
}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */
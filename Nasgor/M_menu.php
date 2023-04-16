<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

	public function getData()
	{
		$query = $this->db->get('menu');
		return $query->result();
	}

	public function insertDataMenu($data)
	{
		$this->db->insert('menu', $data);
	}

	public function getDataMenuDetail($kdMenu)
	{
		$this->db->where('kdMenu', $kdMenu);
		$query = $this->db->get('menu');
		return $query->row();
	}

	public function ubahDataMenu($kdMenu, $data)
	{
		$this->db->where('kdMenu', $kdMenu);
		$this->db->update('menu', $data);
	}
	
	public function hapusDataMenu($kdMenu)
	{
		$this->db->where('kdMenu', $kdMenu);
		$this->db->delete('menu');
	}

}

/* End of file m_menu.php */
/* Location: ./application/models/m_menu.php */
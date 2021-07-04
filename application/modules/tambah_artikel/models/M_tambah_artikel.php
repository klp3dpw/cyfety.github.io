<?php
class M_tambah_artikel extends CI_Model {
	public function tambah_data($data){
		return $this->db->insert('artikel', $data);
	}
}
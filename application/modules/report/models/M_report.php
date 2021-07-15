<?php
class M_report extends CI_Model {
	public function tambah_data($data){
		return $this->db->insert('report', $data);
	}
}
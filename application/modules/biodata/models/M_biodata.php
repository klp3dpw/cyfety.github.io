<?php
class M_biodata extends CI_Model {	
	public function saverecords($data) {
        $this->db->insert('kontak',$data);
        return true;
	}
}
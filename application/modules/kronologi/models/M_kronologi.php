<?php
class M_kronologi extends CI_Model {
	public function saverecords($data) {
        $this->db->insert('kronologi',$data);
        return true;
	}
}
<?php
class M_platform extends CI_Model {
	//public function saverecords($data) {
    //    $this->db->insert('platform_kejadian',$data);
    //    return true;
	//}

	public function tambah_data($data){
		return $this->db->insert('platform_kejadian', $data);
	}
}
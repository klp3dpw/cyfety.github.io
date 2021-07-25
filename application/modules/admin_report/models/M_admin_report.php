<?php
class M_admin_report extends CI_Model {
	public function get() {
        return $this->db->get('report');
	}
	public function get_where($id) {
        return $this->db->get_where('report', array('id' => $id));
	}
		
	public function hapus_report($id){
		$this->db->where('id', $id);
		return $this->db->delete('report');
	}
	
	public function edit($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('report', $data);
	}
	//edit baru
	// function edit_data($where, $table){
	//	return $this->db->get_where($table,$where);
	//}

	//edit baru
	//public function update_data($where, $data, $table){
	//	$this->db->where($where);
	//	$this->db->update($table,$data);
	//}
}
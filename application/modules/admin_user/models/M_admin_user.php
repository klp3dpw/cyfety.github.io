<?php
class M_admin_user extends CI_Model {
	public function get() {
        return $this->db->get('user');
	}

	public function tambah_data($data){
		return $this->db->insert('user', $data);
	}
	
	public function get_where($id) {
        return $this->db->get_where('user', array('id' => $id));
	}
	
	public function hapus_user($id){
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
	
	public function edit($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('artikel', $data);
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
	
	public function dilihat(){
		$this->db->limit(5);
		$this->db->order_by('dilihat', 'DESC');
		return $this->db->get('artikel');
	}
	
	public function terbaru(){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('artikel');
	}
	
	public function random(){
		$this->db->limit(3);
		$this->db->order_by('id', 'RANDOM');
		return $this->db->get('artikel');
	}
	
	public function pop_home(){
		$this->db->limit(3);
		$this->db->order_by('dilihat', 'DESC');
		return $this->db->get('artikel');
	}
	
	public function tambah_views($slug){
		//ambil data artikel berdasarkan slug
		$this->db->where('slug', $slug);
		$this->db->select('dilihat');
		$count = $this->db->get('artikel')->row();
		
		//tambah satu dilihat
		$this->db->where('slug', $slug);
		$this->db->set('dilihat', ($count->dilihat+1));
		$this->db->update('artikel');
	}
}
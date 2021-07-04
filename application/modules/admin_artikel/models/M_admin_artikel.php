<?php
class M_admin_artikel extends CI_Model {
	public function get() {
        return $this->db->get('artikel');
	}
	
	public function get_where($id) {
        return $this->db->get_where('artikel', array('id' => $id));
	}
	
	public function get_slug($slug) {
        return $this->db->get_where('artikel', array('slug' => $slug));
	}
	
	public function hapus_artikel($id){
		$this->db->where('id', $id);
		return $this->db->delete('artikel');
	}
	
	public function edit($id){
		$this->db->where('id', $id);
		return $this->db->update('artikel', $data);
	}
	
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
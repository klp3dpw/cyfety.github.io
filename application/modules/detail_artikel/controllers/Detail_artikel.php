<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_artikel extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('detail_artikel');
		$this->load->view('footer');
	}
	
	//public function baca($slug){
	//	$this->load->model('admin_artikel/M_admin_artikel');
		
		//ambil artikel berdasarkan slug
	//	$data['isi'] = $this->M_admin_artikel->get_slug($slug)->row();
		
	//	$this->load->view('header');
	//	$this->load->view('detail_artikel/detail_artikel',$data);
	//	$this->load->view('footer');
		
	}
}

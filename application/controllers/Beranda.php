<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {	
	public function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }
	
	public function index(){
		$this->load->model('admin_artikel/M_admin_artikel');
		//data artikel
		$data['artikel'] = $this->M_admin_artikel->get()->result();
		
		//artikel populer
		$data['populer_home'] = $this->M_admin_artikel->pop_home()->result();
		
		//artikel random
		$data['random'] = $this->M_admin_artikel->random()->result();
		
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	
	public function baca($slug){
		$this->load->model('admin_artikel/M_admin_artikel');
		
		//ambil artikel berdasarkan slug
		$data['isi'] = $this->M_admin_artikel->get_slug($slug)->row();
		
		//load cookie helper (penyimpanan sementara)
		$this->load->helper('cookie');
		
		//cookies dari slug
		$check_visitor = $this->input->cookie($slug, FALSE);
		
		//ambil ip address
		$ip = $this->input->ip_address();
		
		//jika pengunjung mengunjungi pertama kali maka
		if($check_visitor == false){
			$cookie = array (
				"name"		=> $slug,
				"value"		=> "$ip",
				"expire"	=> time() + 7200, //1 jam
				"secure"	=> false
			);
		//set cookie dan update jumlah views
			$this->input->set_cookie($cookie);
			$this->M_admin_artikel->tambah_views($slug);
		}
		
		$this->load->view('header');
		$this->load->view('detail_artikel/detail_artikel',$data);
		$this->load->view('footer');
	}	
}

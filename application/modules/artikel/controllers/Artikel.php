<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }
	
	public function index(){
		$this->load->model('admin_artikel/M_admin_artikel');
		
		//data artikel
		$data['artikel'] = $this->M_admin_artikel->get()->result();
		
		//artikel populer
		$data['populer'] = $this->M_admin_artikel->dilihat()->result();
		
		//artikel terbaru
		$data['terbaru'] = $this->M_admin_artikel->terbaru()->result();
		
		$this->load->view('header');
		$this->load->view('artikel', $data);
		$this->load->view('footer');
	}
}

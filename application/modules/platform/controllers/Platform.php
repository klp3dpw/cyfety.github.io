<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('platform');
		$this->load->view('footer');
	}
	 public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_platform');
    }

    public function tambah_data() {
        //$this->load->view('insert');
        if($this->input->post('insert')) {
            $data['platform']=$this->input->post('platform');
            $data['postingan_ada']=$this->input->post('postingan_ada');
			$data['username_user']=$this->input->post('username_user');
			$data['username_pelaku']=$this->input->post('username_pelaku');
			$data['link']=$this->input->post('link');
            $response=$this->M_platform->saverecords($data);
            if($response==true){
                redirect('beranda');
            }
		}
	}
}
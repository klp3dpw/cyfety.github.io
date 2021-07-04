<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('biodata');
		$this->load->view('footer');
	}
	
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_biodata');
    }

    public function tambah_data() {
        //$this->load->view('insert');
        if($this->input->post('insert')) {
            $data['nama']=$this->input->post('nama');
            $data['alamat']=$this->input->post('alamat');
            $data['jenis_kelamin']=$this->input->post('jenis_kelamin');
            $data['umur']=$this->input->post('umur');
            $data['no_hp']=$this->input->post('no_hp');
			$data['email']=$this->input->post('email');
            $response=$this->M_biodata->saverecords($data);
            if($response==true){
                redirect('kronologi');
            }
		}
	}
}

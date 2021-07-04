<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kronologi extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('kronologi');
		$this->load->view('footer');
	}

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_kronologi');
    }

    public function tambah_data() {
        //$this->load->view('insert');
        if($this->input->post('insert')) {
            $data['kronologi']=$this->input->post('kronologi');
			$data['tindakan']=implode(',', $this->input->post('tindakan', TRUE ));
			//implode(',',$this->input->post('nama',TRUE))
            //$data['tindakan']=$this->input->post('tindakan');
            $response=$this->M_kronologi->saverecords($data);
            if($response==true){
                redirect('beranda');
            }
		}
	}
}

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

    //public function tambah_data() {
        //$this->load->view('insert');
    //    if($this->input->post('insert')) {
    //        $data['platform']=$this->input->post('platform');
    //        $data['postingan_ada']=$this->input->post('postingan_ada');
	//		$data['username_user']=$this->input->post('username_user');
	//		$data['username_pelaku']=$this->input->post('username_pelaku');
	//		$data['link']=$this->input->post('link');
    //        $response=$this->M_platform->saverecords($data);
     //       if($response==true){
     //           redirect('beranda');
     //       }
	//	}
	//}

	public function tambah_data(){
		//upload
		$config['upload_path']		= './assets/bukti/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']         = 100000000;
        $config['max_width']        = 100000000;
        $config['max_height']       = 100000000;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('bukti')){ //jika upload gagal
			echo "gagal";
		} else { //jika berhasil
			$bukti = $this->upload->data();
            $bukti = $bukti['file_name']; // ngambil filename dari foto tsb
			//$data = $this->upload->data();
			//$filename = $data['file_name'];
			
			$data = [
				//'platform' 			=> implode(',', $this->input->post('platform', TRUE)),
				'platform'			=> $this->input->post('platform'),
				'postingan_ada'		=> $this->input->post('postingan_ada'),
				'username_user' 	=> $this->input->post('username_user'),
				'username_pelaku' 	=> $this->input->post('username_pelaku'),
				'link' 				=> $this->input->post('link'),
				'bukti' 			=> $bukti
			];
			//$this->db->insert('artikel', $data);
			//redirect('tambah_artikel');
			$insert = $this->M_platform->tambah_data($data);
			redirect('beranda');
		}
		//$insert = $this->M_tambah_artikel->tambah_data($data);
		//redirect('tambah_artikel');
	}
}
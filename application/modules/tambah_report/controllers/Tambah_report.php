<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_report extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_tambah_report');
    }

	public function index(){
		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('tambah_report');
		$this->load->view('admin_footer');
	}

	public function tambah_data(){
		    $nama 			= $this->input->post('nama');
	    $alamat 			= $this->input->post('alamat');
	    $jenis_kelamin 		= $this->input->post('jenis_kelamin');
	    $tgl_lahir			= $this->input->post('tgl_lahir');
	    $no_hp 				= $this->input->post('no_hp');
	    $email 				= $this->input->post('email');
	    $kronologi 			= $this->input->post('kronologi');
	    $tindakan 			= $this->input->post('tindakan');
	    $platform 			= $this->input->post('platform');
	    $postingan_ada		= $this->input->post('postingan_ada');
	    $username_user		= $this->input->post('username_user');
	    $username_pelaku	= $this->input->post('username_pelaku');
	    $link 				= $this->input->post('link');

	    $data = array(
	    	'nama' => $nama,
	    	'alamat' => $alamat,
	    	'jenis_kelamin' => $jenis_kelamin,
	    	'tgl_lahir' => $tgl_lahir,
	    	'no_hp' => $no_hp,
	    	'email' => $email,
	    	'kronologi' => $kronologi,
	    	'tindakan' => implode(",", $tindakan),
	    	'platform' => $platform,
	    	'postingan_ada' => $postingan_ada,
	    	'username_user' => $username_user,
	    	'username_pelaku' => $username_pelaku,
	    	'link' => $link
	    );


		$insert = $this->M_tambah_report->tambah_data($data);
		redirect('admin_report');
	}	
}

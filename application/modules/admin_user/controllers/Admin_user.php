<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_admin_user');
    }

	public function index(){
		$data['user']=$this->M_admin_user->get()->result();
		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('admin_user', $data);
	}

	public function tambah_data(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'role_id' => $this->input->post('role_id'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		);

		$insert = $this->M_admin_user->tambah_data($data);
		redirect('admin_user');
	}	

	public function hapus_user($id){
		//ambil data
		$data = $this->M_admin_user->get_where($id)->row();
		
		//hapus data di database
		$hapus = $this->M_admin_user->hapus_user($id);
		redirect('admin_user');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends MY_Controller {
	public function index(){
		$this->load->view('admin_login');
	}
	
	public function adm_login(){
		$this->load->library('session');
		$this->load->model('M_admin_login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->M_admin_login->cek_db($username, $password)->num_rows();
		$data = $this->M_admin_login->cek_db($username, $password)->row();
		if($cek > 0){
			$this->session->set_userdata($sess);
			if($data->role_id === "1"){
				$role_id = 'admin';

				$sess = array(
					'name' => $data->username,
					'role_id' => $role_id,
					'user_id' => $data->id 
				);

				$this->session->set_userdata($sess);
				redirect('admin_home');
			}
			elseif($data->role_id === "2"){
				$role_id = 'member';
				
				$sess = array(
					'name' => $data->username,
					'role_id' => $role_id,
					'user_id' => $data->id 
				);
				$this->session->set_userdata($sess);
				redirect('admin_login');
			}
		}else{
			$this->session->set_flashdata('pesan','Username dan Password salah');
			redirect('admin_login');
		}
	}
}
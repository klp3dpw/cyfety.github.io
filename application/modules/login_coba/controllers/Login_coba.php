<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_coba extends MY_Controller {
	public function index(){
		$this->load->view('Login_coba');
	}
	
	public function cek_login(){
		$this->load->library('session');
		$this->load->model('M_login_coba');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$cek = $this->M_login_coba->cek_db($email, $password)->num_rows();
		$data = $this->M_login_coba->cek_db($email, $password)->row();
		if($cek > 0){
			$this->session->set_userdata($sess);
			if($data->role_id === "1"){
				$role_id = 'admin';

				$sess = array(
					'email' => $data->email,
					'role_id' => $role_id
				);

				$this->session->set_userdata($sess);
				redirect('admin_home');
			}
			elseif($data->role_id === "2"){
				$role_id = 'member';
				
				$sess = array(
					'email' => $data->email,
					'role_id' => $role_id
				);
				$this->session->set_userdata($sess);
				redirect('beranda');
			}
		}else{
			$this->session->set_flashdata('pesan','Username dan Password salah');
			redirect('login_coba');
		}
	}
}
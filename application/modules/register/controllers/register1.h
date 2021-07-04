<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index(){

		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|
		min_length[3]|matches[repeat-pass]');
		$this->form_validation->set_rules('repeat-pass', 'Password', 'required|trim|
		matches[password]');

	if ($this->form_validation->run() == false){
		$data['title']= 'WPU User Register';

		$this->load->view('header', $data);
		$this->load->view('body');
		$this->load->view('footer');
	} else{
		$data = [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password'), 
			PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
		];
		
		$this->db->insert('user', $data);
		redirect('login');
	}
}
}
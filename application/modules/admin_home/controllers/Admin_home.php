<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends MY_Controller {
	public function index(){
		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('admin_home');
		$this->load->view('admin_footer');
	}
	
	public function admin_artikel(){
		$this->load->view('admin_artikel');
	}

	public function logout(){
		session_destroy();
		redirect('admin_login');
	}
}

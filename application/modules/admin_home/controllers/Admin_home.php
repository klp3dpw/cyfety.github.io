<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends MY_Controller {
	public function index(){
		$this->load->view('admin_home');
	}
	
	public function admin_artikel(){
		$this->load->view('admin_artikel');
	}
}

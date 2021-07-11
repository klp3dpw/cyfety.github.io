<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('report');
		$this->load->view('footer');
	}
}
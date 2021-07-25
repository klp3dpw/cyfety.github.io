<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_report extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_admin_report');	
    }

	public function index(){
		$data['report']=$this->M_admin_report->get()->result();
		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('admin_report', $data);
		}
		public function tambah_report(){
		$this->load->view('tambah_report');
	}	
	
	public function hapus_report($id){
		//ambil data
		$data = $this->M_admin_report->get_where($id)->row();
		
		
		//hapus data di database
		$hapus = $this->M_admin_report->hapus_report($id);
		redirect('admin_report');
	}
	
	//public function edit_(){
	//	$data['report'] = $this->M_admin_report->get_where($id)->row();
	//	$this->load->view('edit_', $data);
	//}
	
	public function edit_rep($id){
		$data['report'] = $this->M_admin_report->get_where($id)->row();
		//$where = array('id' => $id);

		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('edit_report', $data);
		$this->load->view('admin_footer');
	}
	public function edit_report(){
	    $nama 				= $this->input->post('nama');
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
		$edit = $this->M_admin_report->edit($id, $data);

		if($edit){
			$this->session->set_flashdata('pesan','Berhasil Mengubah Report');
			redirect('admin_report');
		}else{
			$this->session->set_flashdata('pesan','Berhasil Mengubah Report');
			redirect('admin_report');
		}
		
	}
}
	
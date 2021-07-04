<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_artikel extends MY_Controller {    
	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_tambah_artikel');
    }
	
	public function index(){
		$this->load->view('tambah_artikel');
	}
	
	public function tambah_data(){
		//upload
		$config['upload_path']		= './assets/thumbnail/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']         = 100000000;
        $config['max_width']        = 100000000;
        $config['max_height']       = 100000000;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('gambar')){ //jika upload gagal
			echo "gagal";
		} else { //jika berhasil
			$gambar = $this->upload->data();
            $gambar = $gambar['file_name']; // ngambil filename dari foto tsb
			//$data = $this->upload->data();
			//$filename = $data['file_name'];
			
			$slug = str_replace(' ','-', $this->input->post('slug'));
			
			$data = [
				'judul' 	=> $this->input->post('judul'),
				'slug' 		=> $slug,
				'gambar' 	=> $gambar,
				'isi' 		=> $this->input->post('isi'),
				'tanggal' 	=> date('Y-m-d')
			];
			//$this->db->insert('artikel', $data);
			//redirect('tambah_artikel');
			$insert = $this->M_tambah_artikel->tambah_data($data);
			redirect('admin_artikel');
		}
		//$insert = $this->M_tambah_artikel->tambah_data($data);
		//redirect('tambah_artikel');
	}
}

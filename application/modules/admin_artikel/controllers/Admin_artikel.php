<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_artikel extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_admin_artikel');
    }

	public function index(){
		$data['artikel']=$this->M_admin_artikel->get()->result();
		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('admin_artikel', $data);
	}
	
	public function tambah_artikel(){
		$this->load->view('tambah_artikel');
	}	
	
	public function hapus_artikel($id){
		//ambil data
		$data = $this->M_admin_artikel->get_where($id)->row();
		
		//hapus thumbnail di folder assets
		//$thumbnail = $data->gambar;
		//$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
		//unlink($path);
		
		//hapus data di database
		$hapus = $this->M_admin_artikel->hapus_artikel($id);
		redirect('admin_artikel');
	}
	
	//public function edit_artikel(){
	//	$data['artikel'] = $this->M_admin_artikel->get_where($id)->row();
	//	$this->load->view('edit_artikel', $data);
	//}
	
	public function edit_art($id){
		$data['artikel'] = $this->M_admin_artikel->get_where($id)->row();
		//$where = array('id' => $id);

		$this->load->view('admin_header');
		$this->load->view('admin_navbar');
		$this->load->view('edit_artikel', $data);
		$this->load->view('admin_footer');
	}
	
	public function update($id){
		if($this->input->post('gambar') !== null): //jika ingin mengubah thumbnail
			
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

				$data = $this->upload->data();
				$gambar = $data['file_name']; // ngambil filename dari foto tsb
				
			}

		endif;
		
		//$where = array(
		//		'id' => $this->input->post('id')
		//);

		$slug = str_replace(' ','-', $this->input->post('slug'));
		
		if($this->input->post('gambar') !== null): //jika mau ubah thumbnail
			$data = array(
					'judul' 	=> $this->input->post('judul'),
					'slug' 		=> $slug,
					'gambar' 	=> $gambar,
					'isi' 		=> $this->input->post('isi')
				);
		else: //jika tidak
			$data = array(
					'judul' 	=> $this->input->post('judul'),
					'slug' 		=> $slug,
					'isi' 		=> $this->input->post('isi')
				);
		endif;

		//$this->M_admin_artikel->edit($where, $data, 'artikel');
		
		$edit = $this->M_admin_artikel->edit($id, $data);

		if($edit){
			$this->session->set_flashdata('pesan','Berhasil Mengubah Artikel');
			redirect('admin_artikel');
		}else{
			$this->session->set_flashdata('pesan','Berhasil Mengubah Artikel');
			redirect('admin_artikel');
		}
	}
}

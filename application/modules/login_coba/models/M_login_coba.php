<?php
class M_login_coba extends CI_Model {
	public function cek_db($email, $password){
		$data = array(
			'email' => $email,
			'password' => sha1($password)
		);

		return $this->db->get_where('user', $data);
	}
}
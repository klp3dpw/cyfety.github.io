<?php
class M_admin_login extends CI_Model {
	public function cek_db($username, $password){
		$data = array(
			'name' => $username,
			'password' => sha1($password)
		);

		return $this->db->get_where('user', $data);
	}
}
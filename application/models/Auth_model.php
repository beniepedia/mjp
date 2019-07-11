<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function registrasi()
	{
		$data = [
			'ipaddr' 	=> $_SERVER['REMOTE_ADDR'],
			'name' 		=> htmlspecialchars($this->input->post('nama'), true),
			'email' 	=> htmlspecialchars($this->input->post('email'), true),
			'password' 	=> htmlspecialchars(password_hash($this->input->post('password'), true), PASSWORD_DEFAULT),
			'image'		=> 'default.jpg',
			'role_id'	=> 2,
			'is_active'	=> 1,
			'date_created'	=> time()


		];

		return $this->db->insert('users', $data);

	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */
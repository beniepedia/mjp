<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function getData($email)
	{
		return  $this->db->get_where('users', ['email'=>$email]);
	}
	public function update($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('users', $data);
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('web_config')->row_array();
	}

	public function update($data)
	{
		$update = $this->db->update('web_config', $data);
		return $update;
	}
	
	public function emailset()
	{
		return $this->db->get('email_config');
	}

	function emailedit($post)
	{
			$param['protocol']			= $post['protocol'];
			$param['host']					= $post['host'];
			$param['username']			= $post['uname'];
			if ( !empty($post['password']) )
			{
			$param['password']			= md5($post['password']);
			}	
			$param['port']					= $post['port'];
			$param['type']					= $post['tipe'];
			$param['charset']			= $post['chart'];
			$param['admin_email']		= $post['admin'];
			$param['sistem_email']	= $post['sistem'];

			return $this->db->update('email_config', $param);
	}

}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('web_config');
	}

	public function update($params)
	{
		$data['site_name'] = htmlspecialchars($this->input->post('sitename', TRUE),ENT_QUOTES);
		$data['site_alias'] = htmlspecialchars($this->input->post('sitealias', TRUE),ENT_QUOTES);
		$data['site_description'] = htmlspecialchars($this->input->post('sitedesc', TRUE),ENT_QUOTES);
		$data['site_author'] = htmlspecialchars($this->input->post('siteauthor', TRUE),ENT_QUOTES);
		$data['site_logo_header'] = $params['logo'];
		$data['site_handphone'] = htmlspecialchars($this->input->post('hp', TRUE),ENT_QUOTES);
		$data['site_whatsapp_1'] = htmlspecialchars($this->input->post('wa1', TRUE),ENT_QUOTES);
		$data['site_whatsapp_2'] = htmlspecialchars($this->input->post('wa2', TRUE),ENT_QUOTES);
		$data['site_address'] = htmlspecialchars($this->input->post('siteaddr', TRUE),ENT_QUOTES);
		$data['site_fb'] = htmlspecialchars($this->input->post('fbUrl', TRUE),ENT_QUOTES);
		$data['site_twitter'] = htmlspecialchars($this->input->post('twUrl', TRUE),ENT_QUOTES);
		$data['site_instagram'] = htmlspecialchars($this->input->post('igUrl', TRUE),ENT_QUOTES);

		$update = $this->db->update('web_config', $data);
		return $update;
	}
	
	public function emailset()
	{
		return $this->db->get('email_config');
	}

	function emailedit($post)
	{
			$param['protocol'] = $post['protocol'];
			$param['host'] = $post['host'];
			$param['username'] = $post['uname'];
			if ( !empty($post['password']) )
			{
			$param['password'] = $this->encryption->encrypt($post['password']);
			}	
			$param['port'] = $post['port'];
			$param['type'] = $post['tipe'];
			$param['charset']	= $post['chart'];
			$param['admin_email']	= $post['admin'];
			$param['sistem_email'] = $post['sistem'];

			return $this->db->update('email_config', $param);
	}

}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */
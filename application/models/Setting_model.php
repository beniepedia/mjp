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

	function getApi()
	{
		return $this->db->get('tb_sosial_api');
	}

	function update_sosial_api()
	{
		$data = array(
			'api_fb_id' => htmlspecialchars($this->input->post('fbid')),
			'api_fb_key'=> htmlspecialchars($this->input->post('fbkey')),
			'api_captcha_sitekey' => htmlspecialchars($this->input->post('sitekey')),
			'api_captcha_serverkey' => htmlspecialchars($this->input->post('secretkey')),
			'api_ig_token'=> htmlspecialchars($this->input->post('igtoken')),
			'api_ig_count'=> htmlspecialchars($this->input->post('count'))
		);

		return $this->db->update('tb_sosial_api', $data);
	}

	function get_setting()
	{
		return $this->db->get('tb_general_set');
	}

	function update_setting()
	{
		$data = array(
			'general_set_fb' => htmlspecialchars($this->input->post('fblogin')),
			'general_set_google' => htmlspecialchars($this->input->post('googlelogin')),
			'general_set_blog' => htmlspecialchars($this->input->post('bloger')),
			'general_set_ig' => htmlspecialchars($this->input->post('iggaleri')),
			'general_set_captcha' => htmlspecialchars($this->input->post('captcha'))

			
		);
		
		return	$this->db->update('tb_general_set', $data);
	}

}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */
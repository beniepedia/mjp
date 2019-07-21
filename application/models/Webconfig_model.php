<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webconfig_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('web_config')->row();
	}

	public function emailConfig()
	{
		return $this->db->get('email_config');
	}

}

/* End of file Webconfig_model.php */
/* Location: ./application/models/Webconfig_model.php */
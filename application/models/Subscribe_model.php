<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model {

	public function insertData($params)
	{
		return $this->db->insert('tb_subscribe', $params);
	}

	public function getAll()
	{
		return $this->db->get('tb_subscribe');
	}

	public function count()
	{
		return $this->db->get('tb_subscribe');
	}
}

/* End of file Subscribe_model.php */
/* Location: ./application/models/Subscribe_model.php */
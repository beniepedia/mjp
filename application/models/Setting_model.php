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
	

}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */
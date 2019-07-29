<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

	public function getInbox()
	{
		$this->db->order_by('inbox_created', 'DESC');
		return $this->db->get('tb_inbox');
	}


	public function insert($post)
	{
		$params['inbox_name'] 		= htmlspecialchars($post['nama']);
		$params['inbox_email'] 		= htmlspecialchars($post['email']);
		$params['inbox_phone'] 		= htmlspecialchars($post['telp']);
		$params['inbox_subject'] 	= htmlspecialchars($post['subject']);
		$params['inbox_message'] 	= htmlspecialchars($post['pesan']);
		$params['inbox_message'] 	= htmlspecialchars($post['pesan']);
		$params['inbox_created'] 	= time();

		return $this->db->insert('tb_inbox', $params);
	}

}

/* End of file Inbox_model.php */
/* Location: ./application/models/Inbox_model.php */
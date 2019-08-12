<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

	public function getInbox()
	{
		$this->db->order_by('inbox_status', 'DESC');
		$this->db->order_by('inbox_created', 'DESC');
		return $this->db->get('tb_inbox');
	}

	public function getInboxByDate()
	{
		$this->db->order_by('inbox_created', 'DESC');
		return $this->db->get_where('tb_inbox', ['inbox_status'=>'0']);
	}

	public function insert($post)
	{
		$params['inbox_name'] 		= htmlspecialchars($post['nama']);
		$params['inbox_email'] 		= htmlspecialchars($post['email']);
		$params['inbox_phone'] 		= htmlspecialchars($post['telp']);
		$params['inbox_subject'] 	= htmlspecialchars($post['subject']);
		$params['inbox_message'] 	= htmlspecialchars($post['pesan']);
		$params['inbox_message'] 	= htmlspecialchars($post['pesan']);

		return $this->db->insert('tb_inbox', $params);
	}

	public function inboxUpdate($id)
	{
		$this->db->where('inbox_id', $id);
		$this->db->update('tb_inbox', ['inbox_status'=>1]);
	}

	public function getInboxDetail($id)
	{
		return $this->db->get_where('tb_inbox', ['inbox_id'=>$id]);
	}

}

/* End of file Inbox_model.php */
/* Location: ./application/models/Inbox_model.php */
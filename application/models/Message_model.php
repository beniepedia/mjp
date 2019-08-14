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

	public function get_email_address($email)
	{
		$this->db->like('email', $email, 'both');
		$this->db->order_by('email', 'ASC');
		$this->db->where_not_in('role_id', 1);
		$this->db->limit(10);
		return $this->db->get('users')->result();
	}
	// Outbox
	public function insert_outbox()
	{
		$params['outbox_sender'] = htmlspecialchars($this->input->post('from', true));
		$params['outbox_sendto'] = htmlspecialchars($this->input->post('to', true));
		$params['outbox_subject'] = htmlspecialchars($this->input->post('subject', true));
		$params['outbox_content'] = htmlspecialchars($this->input->post('content', true));
		$params['outbox_status'] = htmlspecialchars($this->input->post('1', true));
		$this->db->insert('tb_outbox', $params);
	}

}

/* End of file Inbox_model.php */
/* Location: ./application/models/Inbox_model.php */
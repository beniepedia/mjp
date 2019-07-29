<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Message_model');
	}

	public function index()
	{

	}

	public function inbox()
	{
		$data['inbox']		= $this->Message_model->getInbox()->result();
		$data['title']		= 'Inbox - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_inbox', $data);
		$this->load->view('template/dashboard_footer');
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */
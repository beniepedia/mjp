<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$this->load->library('Check');
		print_r ($this->check->is_admin());
		// $this->load->view('email/email.tpl.php');
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
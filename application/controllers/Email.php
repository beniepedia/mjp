<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		print_r ($this->generalset->settings()->site_alias);
		// $this->load->view('email/email.tpl.php');
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
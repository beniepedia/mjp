<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$this->load->model('Webconfig_model');
		var_dump($this->Webconfig_model->getAll());
		// $this->load->view('email/email.tpl.php');
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
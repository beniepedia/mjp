<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$this->load->library('encryption');
		$data = '123';

		$data1 = $this->encryption->encrypt($data) ;

		$site = "http://".$_SERVER['HTTP_HOST'];
		$site .= str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']);

		print_r($data1);
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
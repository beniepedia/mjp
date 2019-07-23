<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$this->load->library('encryption');
		$data = $this->generalset->email()->password;

		$data1 = $this->encryption->encrypt($data) ;
		$res = $this->encryption->decrypt($data) ;

		print_r($res);
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}

    public function login()
    {

			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data['title'] = 'Halaman Login';
	    	$this->load->view('template/auth_header', $data);
	    	$this->load->view('auth/login');
	    	$this->load->view('template/auth_footer');
			} else {
				# code...
			}
    	
    }
}
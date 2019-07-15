<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function is_admin()
	{
		$this->ci->load->model('User_model');
		$user_email = $this->ci->session->userdata('email');
		$query = $this->ci->User_model->IsAdmin($user_email);
		return $query;
	}

	

}

/* End of file Check.php */
/* Location: ./application/libraries/Check.php */

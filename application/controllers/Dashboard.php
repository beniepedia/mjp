<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		is_not_login();
		$this->load->view('template/dashboard_header');
		$this->load->view('template/dashboard_topbar');
		$this->load->view('dashboard');
		$this->load->view('template/dashboard_footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
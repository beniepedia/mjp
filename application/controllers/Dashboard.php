<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_not_login();
	}

	public function index()
	{
		$this->load->view('template/dashboard_header');
		$this->load->view('template/dashboard_topbar');
		$this->load->view('v_dashboard_user');
		$this->load->view('template/dashboard_footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
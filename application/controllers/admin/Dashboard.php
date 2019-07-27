<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
	     {
	     	redirect('/','refresh');
	     }
	}

	public function index()
	{
		$this->load->model('User_model', 'user');
		$data['aktif']	= $this->user->getTotal(1)->num_rows();
		$data['nonaktif']	= $this->user->getTotal(0)->num_rows();
		$data['title'] 		= 'Dashboard - '. $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/dashboard_footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
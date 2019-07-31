<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
	     {
	     	redirect('/','refresh');
	     }

	     $this->load->model('Visitors_model');
	     $this->load->model('Blog_model');
	     $this->load->helper('text');
	}

	public function index()
	{
		$visitor 			= $this->Visitors_model->visitor_statistic();
		foreach ($visitor as $result) {
			$bulan[] 		= $result->tgl;
			$value[]		=  (float) $result->jumlah;
		}

		$data['posts'] 		= $this->Blog_model->getall();

		$data['month']		= json_encode($bulan);
		$data['value'] 		= json_encode($value);

		$data['all_visitor']= $this->Visitors_model->get_all_visitor();

		// get total visitor permonth
		$monthly_visitors = $this->Visitors_model->count_visitor_this_month();
		if($monthly_visitors->num_rows() > 0){
			$row = $monthly_visitors->row_array();
			$visitor_this_month = $row['tot_visitor'];
		}

		// Get users browser chrome
		$chrome_visitors = $this->Visitors_model->count_chrome_visitors();
		if($chrome_visitors->num_rows() > 0){
			$row = $chrome_visitors->row_array();
			$visitor_chrome = $row['chrome_visitor'];
			$data['chrome_visitor'] = ($visitor_chrome / $visitor_this_month) * 100;
		}else{
			$data['chrome_visitor'] = 0;
		}

		// Get users browser firefox
		$firefox_visitors = $this->Visitors_model->count_firefox_visitors();
		if($firefox_visitors->num_rows() > 0){
			$row = $firefox_visitors->row_array();
			$visitor_firefox = $row['firefox_visitor'];
			$data['firefox_visitor'] = ($visitor_firefox / $visitor_this_month) * 100;
		}else{
			$data['firefox_visitor'] = 0;
		}

		// Get users browser internet xplorer
		$explorer_visitors = $this->Visitors_model->count_explorer_visitors();
		if($explorer_visitors->num_rows() > 0){
			$row = $explorer_visitors->row_array();
			$visitor_explorer = $row['explorer_visitor'];
			$data['explorer_visitor'] = ($visitor_explorer / $visitor_this_month) * 100;
		}else{
			$data['explorer_visitor'] = 0;
		}

		// Get users browser safari
		$safari_visitors = $this->Visitors_model->count_safari_visitors();
		if($safari_visitors->num_rows() > 0){
			$row = $safari_visitors->row_array();
			$visitor_safari = $row['safari_visitor'];
			$data['safari_visitor'] = ($visitor_safari / $visitor_this_month) * 100;
		}else{
			$data['safari_visitor'] = 0;
		}

		// get users browser opera
		$opera_visitors = $this->Visitors_model->count_opera_visitors();
		if($opera_visitors->num_rows() > 0){
			$row = $opera_visitors->row_array();
			$visitor_opera = $row['opera_visitor'];
			$data['opera_visitor'] = ($visitor_opera / $visitor_this_month) * 100;
		}else{
			$data['opera_visitor'] = 0;
		}

		// get users browser robot
		$robot_visitors = $this->Visitors_model->count_robot_visitors();
		if($robot_visitors->num_rows() > 0){
			$row = $robot_visitors->row_array();
			$visitor_robot = $row['robot_visitor'];
			$data['robot_visitor'] = ($visitor_robot / $visitor_this_month) * 100;
		}else{
			$data['robot_visitor'] = 0;
		}

 		// get users browser other
		$other_visitors = $this->Visitors_model->count_other_visitors();
		if($other_visitors->num_rows() > 0){
			$row = $other_visitors->row_array();
			$visitor_other = $row['other_visitor'];
			$data['other_visitor'] = ($visitor_other / $visitor_this_month) * 100;
		}else{
			$data['other_visitor'] = 0;
		}

		$this->load->model('User_model', 'user');
		$data['aktif']		= $this->user->getTotal(1)->num_rows();
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
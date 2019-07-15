<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title'] = 'Halaman User - '.$this->config->item('site_name');
		$data['userData'] = $this->User_model->getData();		
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/user', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function delete($id)
	{
		$query = $this->User_model->deleteUser($id);
		if( $query )
		{
			$this->session->set_flashdata('msg', 'Data user berhasil dihapus...!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/user','refresh');
		} else {
			$this->session->set_flashdata('msg', 'Data user gagal dihapus...!');
			$this->session->set_flashdata('type', 'danger');
			redirect('admin/user','refresh');
		}
	}

	public function detail($id)
	{
		$data['userDtl'] = $this->User_model->getData($id);
		$data['title'] = 'Halaman Detail User - ' . $this->config->item('site_name');
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/user_detail', $data);
		$this->load->view('template/dashboard_footer');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
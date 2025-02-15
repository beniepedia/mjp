<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('dashboard','refresh');
		}
		$this->load->model('Subscribe_model');

	}

	public function index()
	{
		
		$data['title'] = 'Subscribe - ' . $this->generalset->web()->site_name;
		$data['subs'] = $this->Subscribe_model->getAll();
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_subscribe', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function delete($id)
	{
		$this->db->delete('tb_subscribe', ['subscribe_id'=>$id]);
		$this->session->set_flashdata(['msg'=>'Data subscribe berhasil dihapus!', 'type'=>'success']);
		redirect('admin/subscribe','refresh');
	}

}

/* End of file Subscribe.php */
/* Location: ./application/controllers/admin/Subscribe.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Message_model');
	}

	public function index()
	{

	}

	public function inbox()
	{
		$data['inbox']		= $this->Message_model->getInbox();
		$data['title']		= 'Inbox - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_inbox', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function detail($id)
	{
		$this->Message_model->inboxUpdate($id);
		$result = $this->Message_model->getInboxDetail($id);
		if ( $result->num_rows() > 0 )
		{
			$this->Message_model->inboxUpdate($id);
			$data['msg'] 	= $result->row();
			$data['title']	= 'Pesan Detail - ' . $this->generalset->web()->site_name;
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/v_inbox_detail', $data);
			$this->load->view('template/dashboard_footer');

		} else {
			redirect('admin/message/inbox','refresh');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$delete = $this->db->delete('tb_inbox', ['inbox_id'=>$id]);
		if( $delete )
		{
			$this->session->set_flashdata('msg', 'Pesan berhasil dihapus!');
			$this->session->set_flashdata('type', 'success');
		}
		redirect('admin/message/inbox','refresh');
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */
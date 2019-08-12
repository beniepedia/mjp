<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('dashboard','refresh');
		}
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

	function get_message()
	{
		if( isset($_POST['view']))
		{

			$hasil = $this->Message_model->getInboxByDate();

			$count = $hasil->num_rows();

			if($count > 0 ) 
			{
			    foreach ($hasil->result() as $c) 
			    {
				    $cek = $this->db->get_where('users', ['email'=>$c->inbox_email]);
				    $img = $cek->row();
				    $output[] = '
				    	<a class="dropdown-item d-flex align-items-center" href="'.base_url('admin/message/detail/').$c->inbox_id.'">
				  			<div class="dropdown-list-image mr-3">
				  			'.(($cek->num_rows()>0)?'
				  				<img class="rounded-circle" src="'.base_url('assets/img/user_img/').$img->image.'" alt="">
				  			':'
				  				<img class="rounded-circle" src="'.base_url('assets/img/user_img/').'default.jpg" alt="">
				  			').'
							<div class="status-indicator bg-success"></div>
				    		</div>
		    				<div class="font-weight-bold">
		            			<div class="text-truncate">'.$c->inbox_subject.'
		            		</div>
		            		<div class="small text-gray-500">'.$c->inbox_name.' | '.date("Y-m-d H:i:s",$c->inbox_created).'</div>
				          	</div>
				        </a>';
			    }
			    
			} else {
				$output = '<div class="font-weight-bold text-center mt-3">Pesan masuk kosong</div>';
			}
			
			$data = array(
				'notif' => $count,
				'message' => $output
			);

			echo json_encode($data);
		}
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */
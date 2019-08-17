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
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title']		= 'Pesan Baru - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_message', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function inbox()
	{
		$data['inbox']		= $this->Message_model->getInbox();
		$data['title']		= 'Kotak Masuk - ' . $this->generalset->web()->site_name;
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
			$data['img'] 	= $this->db->get_where('users', ['email'=>$data['msg']->inbox_email]);
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
		            		<div class="small text-gray-500">'.$c->inbox_name.' <span class="badge badge-info">'.waktu_lalu($c->inbox_created).'</span></div>
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

	function get_email_autocomplete()
	{
		if(isset($_GET['term']))
		{
			$result = $this->Message_model->get_email_address($_GET['term']);
			if(count($result) > 0 )
			{
				foreach ($result as $row) {
					$arr_result[] = $row->email;
				}
				echo json_encode($arr_result); 
			}
		}
	}

	function get_email_autocomplete_admin()
	{
		if(isset($_GET['term']))
		{
			$data_email = array(
				'email_admin'=> $this->generalset->email()->admin_email,
				'sistem_email'=> $this->generalset->email()->sistem_email
			);

			echo json_encode($data_email); 
		}
	}

	function create_msg()
	{
		$params['from'] = $this->input->post('from');
		$params['to'] = $this->input->post('to');
		$params['subject'] = $this->input->post('subject');
		$params['content1'] = $this->input->post('content');

		$data = array('success'=>false);

		$this->form_validation->set_rules('from', 'Email Pengirim', 'trim|required|valid_email');
		$this->form_validation->set_rules('to', 'Email Penerima', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('content', 'Isi pesan', 'trim|required');
		
		if( isset($_POST['draft']) )
		{
			$this->Message_model->insert_outbox();
			$this->session->set_flashdata('msg', 'Pesan berhasil disimpan ke Draft!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/message/inbox','refresh');
			
		} else {
			if ($this->form_validation->run()) {
				$send = $this->_sendemail($params);
				if( $send )
				{
					$this->Message_model->insert_outbox();
					$data['success'] = true;
				} else {
					$data['failed'] = true;
				}	
			} else {
				$pesan = '<div class="d-block" style="height:-200px">'.validation_errors().'</div>';
				$data['messages'] = $pesan;
			}

			echo json_encode($data);

		}

	}

	function _sendemail($params)
	{
		return sendEmail('send', $params);
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */
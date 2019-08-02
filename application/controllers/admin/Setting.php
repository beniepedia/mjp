<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model');
		is_not_login();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('/','refresh');
		}
	}
	public function index()
	{
		$data['site'] = $this->Setting_model->getAll()->row_array();
		$data['title'] = 'Pengaturan Website - '. $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/setting', $data);
		$this->load->view('template/dashboard_footer');
	}
	public function update()
	{
		if( isset($_POST['save_web']) )
		{
			// $data = [
			// 	'site_name' 		=> htmlspecialchars($this->input->post('sitename'), true),
			// 	'site_alias' 		=> htmlspecialchars($this->input->post('sitealias'), true),
			// 	'site_description' 	=> htmlspecialchars($this->input->post('sitedesc'), true),
			// 	'site_author' 		=> htmlspecialchars($this->input->post('siteauthor'),true)
			// ];
			var_dump($_FILES);die;
		}
		else if( isset($_POST['save_sosial']) )
		{
			$data = [
		    'fb_id' 				=> htmlspecialchars($this->input->post('fbid'), true),
		    'fb_key' 				=> htmlspecialchars($this->input->post('fbkey'), true),
		    'google_client_id' 		=> htmlspecialchars($this->input->post('gid'), true),
		    'google_client_key' 	=> htmlspecialchars($this->input->post('gkey'),true),
		    'is_active'				=> $this->input->post('is_active')
			];
		}
		$update = $this->Setting_model->update($data);
		if( $update )
		{
			$this->session->set_flashdata('msg','Pengaturan berhasil disimpan!');
			$this->session->set_flashdata('type','success');
			redirect('admin/setting','refresh');
		}
	}
	public function email()
	{
			$data['email']		=	$this->Setting_model->emailset()->row();
			$data['title'] 		= 	'Pengaturan Email - '. $this->generalset->web()->site_name;
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/email', $data);
			$this->load->view('template/dashboard_footer');
	}
	public function editemail()
	{
			$this->form_validation->set_rules('admin', 'Admin Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('sistem', 'Sistem Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('protocol', 'Protokol', 'trim|required');
			$this->form_validation->set_rules('host', 'Host', 'trim|required');
			$this->form_validation->set_rules('uname', 'User Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim');
			$this->form_validation->set_rules('port', 'Port', 'trim|required|numeric');
			$this->form_validation->set_rules('tipe', 'Type', 'trim|required');
			$this->form_validation->set_rules('chart', 'Chartset', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			if ($this->form_validation->run() == FALSE) {
				$data['email']		=	$this->Setting_model->emailset()->row();
				$data['title'] 		= 	'Ubah Pengaturan Email - '. $this->generalset->web()->site_name;
				$this->load->view('template/dashboard_header', $data);
				$this->load->view('template/dashboard_topbar');
				$this->load->view('admin/emailedit', $data);
				$this->load->view('template/dashboard_footer');
				# code...
			} else {
				$post = $this->input->post(null);
				if( isset($post['save_email']) )
				{
					$update	=	$this->Setting_model->emailedit($post);
					if( $update )
					{
							$this->session->set_flashdata('msg', 'Setelan email berhasil di update!');
							$this->session->set_flashdata('type', 'success');
							redirect('admin/setting/email','refresh');
					} else {
							$this->session->set_flashdata('msg', 'Setelan email gagal di update!');
							$this->session->set_flashdata('type', 'danger');
							redirect('admin/setting/email','refresh');
					}
				}
			}
	} 
	// end script update email
}
/* End of file Setting.php */
/* Location: ./application/controllers/admin/Setting.php */
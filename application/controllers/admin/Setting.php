<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
     parent::__construct();
     $this->load->model('Setting_model');
     if($this->check->is_admin()->role_id != 1)
     {
     	redirect('/','refresh');
     }

	}

	public function index()
	{
		$data['site'] = $this->Setting_model->getAll();
		$data['title'] = 'Pengaturan - '. $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/setting', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function update()
	{
		if( isset($_POST['save_web']) )
		{
				$data = [
		    'site_name' 				=> htmlspecialchars($this->input->post('sitename'), true),
		    'site_alias' 				=> htmlspecialchars($this->input->post('sitealias'), true),
		    'site_description' 	=> htmlspecialchars($this->input->post('sitedesc'), true),
		    'site_author' 			=> htmlspecialchars($this->input->post('siteauthor'),true)
				];
		}

		else if( isset($_POST['save_sosial']) )
		{
			$data = [
		    'fb_id' 						=> htmlspecialchars($this->input->post('fbid'), true),
		    'fb_key' 						=> htmlspecialchars($this->input->post('fbkey'), true),
		    'google_client_id' 	=> htmlspecialchars($this->input->post('gid'), true),
		    'google_client_key' => htmlspecialchars($this->input->post('gkey'),true),
		    'is_active'					=> $this->input->post('is_active')
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

}

/* End of file Setting.php */
/* Location: ./application/controllers/admin/Setting.php */
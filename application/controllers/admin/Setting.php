<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model');
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('dashboard','refresh');
		}
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->library('Comprez_lib');
	}

	// web setting
	public function index()
	{
		$this->form_validation->set_rules('sitename', 'Nama Website', 'trim|required');
		$this->form_validation->set_rules('sitealias', 'Alias', 'trim|required');
		$this->form_validation->set_rules('siteauthor', 'Author', 'trim|required');
		$this->form_validation->set_rules('sitedesc', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('hp', 'Handphone', 'trim|required|numeric');
		$this->form_validation->set_rules('wa1', 'Whatsapp', 'trim|required|numeric');
		$this->form_validation->set_rules('siteaddr', 'Alamat', 'trim|required');

		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$data['site'] = $this->Setting_model->getAll()->row_array();
			$data['title'] = 'Pengaturan Website - '. $this->generalset->web()->site_name;
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/setting', $data);
			$this->load->view('template/dashboard_footer');
		} else {

			// config upload foto
			$config['upload_path'] 			= './assets/img/';
			$config['allowed_types'] 		= 'jpg|png|jpeg';
			$config['max_size']     		= '1024';
			$config['file_ext_tolower']     = TRUE;
			$config['file_name']     		= strtolower('logo-'.$this->generalset->web()->site_name).'-'.date("s");

			$old_logo 	= $this->input->post('old_logo');
			$this->load->library('upload', $config);
			// cek ada gambar atau tidak
			if( !empty($_FILES['imgLogo']['name']) )
			{
				
				if( $this->upload->do_upload('imgLogo') )
				{
					if( file_exists('./assets/img/'.$old_logo) )
					{
						unlink('./assets/img/'.$old_logo);
					}

					$logo 	= $this->upload->data();
					$source = './assets/img/' . $logo['file_name'];
					$this->comprez_lib->img($source, '60%', 172, 172, $source);
					$this->image_lib->resize();

					
				} else {

					$error = $this->upload->display_errors();
					$this->session->set_flashdata('msg', $error);
					$this->session->set_flashdata('type', 'danger');
					redirect('admin/setting','refresh');
					die;
				}

				$params['logo'] = $logo['file_name'];

			} else {
				$params['logo'] = $old_logo;
			}

			// update setting
			$this->Setting_model->update($params);
			$this->session->set_flashdata('msg', 'Update pengaturan website berhasil!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/setting','refresh');

		}

	}
	// end web setting

	// email setting
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

	// end email setting

	// sosial api setting
	public function sosial_api()
	{
		$data['api'] = $this->Setting_model->getApi()->row();
		$data['title'] = 'Sosial Api - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_sosial_api', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function update_sosial_api()
	{	
		$this->Setting_model->update_sosial_api();
		$this->session->set_flashdata('msg', 'Update data berhasil!');
		$this->session->set_flashdata('type', 'success');
		redirect('admin/setting/sosial_api','refresh');
	}

	public function general_setting()
	{
		$data['setting']	= $this->Setting_model->get_setting()->row();
		$data['title'] 		= 'Pengaturan Umum - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_general_setting', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function update_general_setting()
	{
		$this->Setting_model->update_setting();
		redirect('admin/setting/general_setting','refresh');
	}

}
/* End of file Setting.php */
/* Location: ./application/controllers/admin/Setting.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
     {
     	redirect('/','refresh');
     }

	}

	public function index()
	{
		$data['title'] = 'User - ' . $this->generalset->web()->site_name;
		$data['userData'] = $this->User_model->getData()->result_array();		
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
		$data['userDtl'] = $this->User_model->getData($id)->row();
		$data['title'] = 'Detail User - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/user_detail', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function edituser($id=null)
	{
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('phone', 'Handphone', 'trim|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_emailcheck');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[6]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|matches[password]');
		$this->form_validation->set_rules('addr', 'Alamat', 'trim');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() == FALSE) {	
			$query = $this->User_model->getData($id);
			if( $query->num_rows() > 0 )
			{
				$data['title'] 		= 'Edit user - ' . $this->generalset->web()->site_name;
				$data['userData'] = $query->row();
				$data['level'] 		= $this->db->get('user_role')->result_array();
				$this->load->view('template/dashboard_header', $data);
				$this->load->view('template/dashboard_topbar');
				$this->load->view('admin/user_edit', $data);
				$this->load->view('template/dashboard_footer');
			} else {
				echo "<script>alert('User Tidak ditemukan');</script>";
				echo "<script>window.location='".base_url('admin/user')."';</script>";
			}
			
		} else {
			$post 	= $this->input->post(null, TRUE);
			$update = $this->User_model->edituser($post);
			if( $update )
			{
				$this->session->set_flashdata('msg', 'Data user berhasil di update!');
				$this->session->set_flashdata('type', 'success');
			} else {
				$this->session->set_flashdata('msg', 'Data user gagal di update!');
				$this->session->set_flashdata('type', 'danger');
			}
			redirect('admin/user','refresh');
		}

	}

	public function emailcheck()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM users WHERE email = '$post[email]' AND id_user != '$post[id_user]'");
		if( $query->num_rows() > 0 )
		{
			$this->form_validation->set_message('emailcheck', '{field} ini sudah terdatar');
			return false;
		} else {
			return true;
		}
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
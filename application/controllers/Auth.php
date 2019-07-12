<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model');
	}

    public function login()
    {
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = 'Login Member | ID MJ PARFUME';
	    	$this->load->view('template/auth_header', $data);
	    	$this->load->view('auth/login');
	    	$this->load->view('template/auth_footer');
			} else {
				$this->_login();
			}
	
    }

    private function _login()
    {
    	 $this->Auth_model->login();
    }

    public function registrasi()
    {
    	$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
    	$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]',[
    		'matches' => 'Konfirmasi password tidak sama!'
    	]);

    	if ($this->form_validation->run() == FALSE)
    	{
    		$data['title'] = 'Registrasi Member | ID MJ PARFUME';
    		$this->load->view('template/auth_header', $data);
	    	$this->load->view('auth/registrasi');
	    	$this->load->view('template/auth_footer');
    	}
    	else {
    		$insert = $this->Auth_model->registrasi();
    		if($insert)
    		{
    			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Registrasi berhasil, link aktivasi sudah dikirim ke email anda!</div>');
    			redirect('auth/login','refresh');
    		}else{
    			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Terjadi kesalahan saat registrasi, silahkan coba lagi / hubungi admin!</div>');
    			redirect('auth/registrasi','refresh');
    		}
    	}	
    }

    public function logout()
    {
  		$this->session->unset_userdata('name', 'email', 'role_id');
  		redirect('home','refresh');
    }
}
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
			$data['title'] = 'Halaman Login';
    	$this->load->view('template/auth_header', $data);
    	$this->load->view('auth/login');
    	$this->load->view('template/auth_footer');
		} else {
			# code...
		}
	
    }

    public function registrasi()
    {
    	$data['title'] = 'Pendaftaran';
    	$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[passconf]',[
    		'matches' => 'Konfirmasi password tidak sama!'
    	]);
    	$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required');

    	if ($this->form_validation->run() == FALSE)
    	{
    		$this->load->view('template/auth_header', $data);
	    	$this->load->view('auth/registrasi');
	    	$this->load->view('template/auth_footer');
    	}
    	else {

    		$insert = $this->Auth_model->registrasi();
    		if($insert)
    		{
    			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi berhasil, silahkan login!</div>');
    			redirect('auth/login','refresh');
    		}
    	}
    	
    }
}
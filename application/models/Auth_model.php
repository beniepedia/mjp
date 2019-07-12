<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function registrasi()
	{
		$data = [
			'ipaddr' 	=> $_SERVER['REMOTE_ADDR'],
			'name' 		=> htmlspecialchars($this->input->post('nama'), true),
			'email' 	=> htmlspecialchars($this->input->post('email'), true),
			'password' 	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'image'		=> 'default.jpg',
			'role_id'	=> 2,
			'is_active'	=> 0,
			'date_created'	=> time()
		];
    $token = base64_encode(random_bytes(32));
    $user_token = [
        'email' => $data['email'],
        'token' => $token,
        'date_created' => time()
      ];
    $this->db->insert('users', $data);
    $this->db->insert('user_token', $user_token);
    $send = sendEmail($token, 'verify');
    if( $send )
    {
      return true;
    }else{
      return false;
    }
		  
	}

	public function login()
	{
		$email = htmlspecialchars($this->input->post('email'), true);
		$pass = htmlspecialchars($this->input->post('password'), true);
		$query = $this->db->get_where('users', ['email' => $email])->row_array();

		if( $query )
  	{
  		if( $query['is_active'] == 1 )
  		{
  			if (password_verify($pass, $query['password'])) {
  				$data = [
  					'name' 		=> $query['name'],
  					'email' 	=> $query['email'],
  					'role_id' => $query['role_id']
  				];
  				$this->session->set_userdata($data);
  				redirect('dashboard','refresh');
  			}else
  			{
  				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password yang anda masukan salah, silahkan coba lagi!.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  				redirect('auth/login','refresh');
  			}
  		}else
  		{
  			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email anda belum diverifikasi, silahkan cek inbox email anda untuk verifikasi email anda!.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  			redirect('auth/login','refresh');
  		}
  	}else
  	{
  		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email anda belum terdaftar sebelumnya!.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
  		redirect('auth/login','refresh');
  	}
	}
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */
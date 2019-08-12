<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{

  public function __construct() 
  {
    parent::__construct();
    $this->tableName = 'users';
    $this->primaryKey = 'id_user';
  }

	public function registrasi()
	{
		$data = [
      'ipaddr'        => $_SERVER['REMOTE_ADDR'],
			'name'          => htmlspecialchars($this->input->post('nama'), TRUE),
			'phone'         => htmlspecialchars($this->input->post('phone'), TRUE),
      'email'         => htmlspecialchars($this->input->post('email'), TRUE),
			'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'image'         => 'default.jpg',
			'role_id'       => 2,
			'is_active'     => 0,
			'date_created'  => time()
		];
    // buat kode token
    $token = base64_encode(random_bytes(32));
    $user_token = [
      'email'         => $data['email'],
      'token'         => $token,
      'date_created'  => time()
    ];

    // buat data yan gakan dikirim melalui email
    $params['nama']     = $data['name'];
    $params['content1'] = 'Terima kasih telah melakukan pendaftaran di <a href="'.base_url().'">'.$this->generalset->web()->site_name.'</a>, silahkan klik tombol aktivasi dibawah ini untuk mengaktifkan akun anda.'; 
    $params['link']     = base_url() . 'auth/verify?email=' . $data['email'] . '&token=' . urlencode($token);
    $params['content2'] = 'Link aktivasi akan expired dalam waktu 2 jam kedepan, segera lakukan aktivasi sebelum expired. Jika terjadi masalah pada saat aktivasi, silahkan hubungi kami. Terima Kasih'; 
    $params['btn']      = 'Aktivasi Sekarang';
    $params['to']       = $data['email'];
    $params['subject']  = 'Aktivasi Akun '.$this->generalset->web()->site_alias;

    
    $send = sendEmail('auth', $params);
    if( $send )
    {
      $this->db->insert('users', $data);
      $this->db->insert('user_token', $user_token);
      return true;
    }else{
      return false;
    }
		  
	}

	public function login()
	{
		$email = htmlspecialchars($this->input->post('email'), true);
		$pass  = htmlspecialchars($this->input->post('password'), true);
		$query = $this->db->get_where('users', ['email' => $email])->row_array();

		if( $query )
  	{
  		if( $query['is_active'] == 1 )
  		{
  			if (password_verify($pass, $query['password'])) 
        {
  				$data = array(
   
            'name'    => $query['name'],
            'email'   => $query['email'],
            'role_id' => $query['role_id']
          );
          // update waktu login user
          $data_user['last_login']  = time();
          $update = $this->db->update('users', $data_user, ['email'=>$data['email']]);
        
          if( $query['role_id'] == 1 )
          {
    				$this->session->set_userdata($data);
    				redirect('admin/dashboard','refresh');
          } else {
            $this->session->set_userdata($data);
            // pusher
            $params['nama'] = $query['name'];
            $params['pesan'] = $query['name'] . ' Sedang Login ';
            pusher('ap1', $params);
            redirect('dashboard','refresh');
          }
        

  			} else {
  				$this->session->set_flashdata(['msg'=>'Password yang anda masukan salah, silahkan coba lagi!','type'=>'danger']);
  				redirect('login','refresh');
  			}

  		} else {
        // cek apakah user sudah berhasil verifikasi akun
        $user_token = $this->db->get_where('user_token', ['email'=>$email])->row_array();
        if ( time() - $user_token['date_created'] < 7200 )
        {
            $this->session->set_flashdata('msg', 'Email anda belum diverifikasi, silahkan cek folder INBOX / SPAM email anda untuk verifikasi email!');
            $this->session->set_flashdata('type', 'info');

        } else {
            $this->db->delete('users', ['email'=>$email]);
            $this->db->delete('user_token', ['email'=>$email]);
            $this->session->set_flashdata('msg', 'Email anda sudah mencapai batas maksimal untuk verifikasi. silahkan daftar ulang!');
            $this->session->set_flashdata('type', 'danger');

        }

        redirect('auth/login','refresh');
  		}
  	}else{
      $this->session->set_flashdata('msg', 'Email yang anda masukan tidak terdaftar!');
      $this->session->set_flashdata('type', 'danger');
      redirect('login','refresh');
  	}
	}

  public function verifikasi()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');
    // Cek user terdaftar
    $user = $this->db->get_where('users', ['email' =>$email ])->row_array();
    if( $user )
    {
      // cek token valid
      $user_token = $this->db->get_where('user_token', ['token'=>$token])->row_array();
      if( $user_token )
      {
        // cek token expired
        if( time() - $user_token['date_created'] < 7200 )
        {
          $this->db->set('is_active', 1);
          $this->db->where('email', $email);
          $this->db->update('users');
          $this->db->delete('user_token', ['email'=>$email]);
          $this->session->set_flashdata('msg', 'Email anda berhasil diverifikasi, silahkan login!');
          $this->session->set_flashdata('type', 'success');
          redirect('auth/login','refresh');
        }else{
          $this->db->delete('users', ['email'=>$email]);
          $this->db->delete('user_token', ['token'=>$token]);
          fMessage('Aktivasi akun gagal, Token sudah expired, silahkan daftar ulang...!',
          'error','Gagal...!');
          redirect('login','refresh');
        }
      }else{
        fMessage('Aktivasi akun gagal, Token tidak valid...!',
          'error','Gagal...!');
        redirect('login','refresh');
      }
    }else
    {
      fMessage('Aktivasi akun gagal, Email <strong>'.$email.'</strong> tidak terdaftar...!',
          'error','Gagal...!');
      redirect('login','refresh');
    }
  }

  public function forgotPassword($email)
  {
    return $this->db->get_where('users', ['email'=>$email])->row_array();
  }

  public function resetPass()
  {
     $email = $this->input->get('email');
     $token = $this->input->get('token');

     $user = $this->db->get_where('users', ['email'=>$email])->row_array();
     if( $user )
     {
        $user_token = $this->db->get_where('user_token', ['token'=>$token])->row_array();
        if( $user_token )
        {
            if( time() - $user_token['date_created'] < 7200 )
            {
                return $this->session->set_userdata( 'email_reset', $email );
            }else{
                fMessage('Permintaan reset password sudah expired, Silahkan coba lagi!', 'error', 'Expired...!');
                redirect('login','refresh');
            }
        } else {
          fMessage('Token tidak valid, Silahkan coba lagi / hubungi kami!', 'error', 'Token Error...!');
          redirect('login','refresh');
        }
     }else{
        fMessage('Email tidak terdaftar !', 'error', 'Gagal...!');
        redirect('login','refresh');
     }
  }

  public function changePass($email, $password)
  {
    $this->db->set('password', $password);
    $this->db->where('email', $email);
    $this->db->update('users');
    if($this->db->affected_rows() == 1)
    {
      $this->session->unset_userdata('email_reset');
      $this->db->delete('user_token', ['email'=>$email]);
      return true;
    }else{
      return false;
    }
  }

  public function checkUser($userData = array())
  {
    if(!empty($userData))
    {
        //check whether user data already exists in database with same oauth info
        $this->db->select($this->primaryKey);
        $this->db->from($this->tableName);
        $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0)
        {
            $prevResult = $prevQuery->row_array();
            
            //update user data
            $userData['last_login'] = time();
            $update = $this->db->update($this->tableName, $userData, array('id_user' => $prevResult['id_user']));
            
            //get user ID
            $userID = $prevResult['id_user'];
        }else{
            //insert user data
            $userData['date_created']  = time();
            $userData['last_login'] = time();
            $insert = $this->db->insert($this->tableName, $userData);
            
            //get user ID
            $userID = $this->db->insert_id();
        }
    }
    
    //return user ID
    return $userID?$userID:FALSE;
    // ?$userID:FALSE
  }

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */
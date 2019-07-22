<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Auth_model');
        // Load facebook library
        $this->load->library('facebook');
	}

    public function login()
    {
        is_login();
        $data['authURL'] =  $this->facebook->login_url();
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required');

    	if ($this->form_validation->run() == FALSE) {
    	$data['title'] = 'Login Member - ' . $this->generalset->web()->site_name;
    	$this->load->view('template/auth_header', $data);
    	$this->load->view('auth/login', $data);
    	$this->load->view('template/auth_footer');
    	} else {
    		$this->_login();
    	}
	
    }

    private function _login()
    {
    	$this->Auth_model->login();
    }

    public function facebook_login()
    {
        is_login();
        $this->_fblogin();
    }

    private function _fblogin()
    {
        $userData = array();
        
        // Check if user is logged in
        if($this->facebook->is_authenticated())
        {
            // Get user facebook profile details
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture.width(512).height(512),location');

            // first name and last name
            $firstname                  = !empty($fbUser['first_name'])?$fbUser['first_name']:'';
            $lastname                   = !empty($fbUser['last_name'])?$fbUser['last_name']:'';
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid']      = !empty($fbUser['id'])?$fbUser['id']:'';
            $userData['ipaddr']         = $_SERVER['REMOTE_ADDR'];
            $userData['name']           = $firstname.' '.$lastname;
            $userData['email']          = !empty($fbUser['email'])?$fbUser['email']:'';
            $userData['gender']         = !empty($fbUser['gender'])?$fbUser['gender']:'';
            $userData['address']        = !empty($fbUser['location']['name'])?$fbUser['location']['name']:'';
            $userData['image']          = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:'';
            $userData['role_id']        = 2;
            $userData['is_active']      = 1;
            // $userData['link']        = !empty($fbUser['link'])?$fbUser['link']:'';
            
            $userID = $this->Auth_model->checkUser($userData);
            
            $data = [
                'name'                  => $userData['name'], 
                'email'                 => $userData['email'],
                'role_id'               => $userData['role_id']
            ];
            $this->session->set_userdata($data);

            redirect('/','refresh');
        }
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
    		$data['title'] = 'Regitrasi Member - ' . $this->generalset->web()->site_name;
    		$this->load->view('template/auth_header', $data);
	    	$this->load->view('auth/registrasi');
	    	$this->load->view('template/auth_footer');
    	}
    	else 
        {
    		$insert = $this->Auth_model->registrasi();
    		if($insert)
    		{
    			$this->session->set_flashdata('msg', 'Registrasi berhasil, link aktivasi sudah dikirim ke email anda!');
                $this->session->set_flashdata('type', 'success');
    			redirect('auth/login','refresh');
    		}else{
                $this->session->set_flashdata('msg', 'Terjadi kesalahan saat registrasi, silahkan coba lagi / hubungi admin!');
                $this->session->set_flashdata('type', 'danger');
                redirect('auth/registrasi','refresh');
    		}
    	}	
    }

    public function forgotpass()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Lupa Password - ' . $this->generalset->web()->site_name;
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/forgot_password');
            $this->load->view('template/auth_footer');
        } else {
            $email = htmlspecialchars($this->input->post('email'), true);
            $token = base64_encode(random_bytes(32));
            $user_token = [
                    'email' => $this->input->post('email'),
                    'token' => $token,
                    'date_created' => time()
                ];
            $cek = $this->Auth_model->forgotPassword($email);
            if( $cek )
            {
                if( $cek['is_active'] == 1 )
                {
                    $email_token = $this->db->get_where('user_token', ['email'=>$email])->row_array();
                    if( !$email_token )
                    {
                        $insert = $this->db->insert('user_token', $user_token);
                        if( $insert )
                        {
                            sendEmail($token, 'forgotpassword');
                            $this->session->set_flashdata('msg', 'Reset password berhasil. Kami telah mengirimkan instruksi untuk merubah password ke <strong>'.$email.'</strong>');
                            $this->session->set_flashdata('type', 'success');
                            redirect('auth/forgotpass','refresh');
                        }else{
                            $this->session->set_flashdata('msg', 'Terjadi kesalahan pada sistem kami. silahkan ulang kembali / hubungi kami!');
                            $this->session->set_flashdata('type', 'danger');
                            redirect('auth/forgotpass','refresh');
                        }
                    }else{
                        $this->session->set_flashdata('msg', 'Permintaan reset password sudah pernah dilakukan sebelumnya. Silahkan cek kembali inbox email anda!');
                        $this->session->set_flashdata('type', 'danger');
                        redirect('auth/forgotpass','refresh');
                    }
                }else{
                    $this->session->set_flashdata('msg', 'Status email anda tidak aktif / belum diverifikasi!');
                    $this->session->set_flashdata('type', 'danger');
                    redirect('auth/forgotpass','refresh');
                }
            }else{
                $this->session->set_flashdata('msg', 'Email yang anda masukkan tidak terdaftar!');
                $this->session->set_flashdata('type', 'danger');
                redirect('auth/forgotpass','refresh');
            }
        }
    }

    public function verify()
    {
        $this->Auth_model->verifikasi();
    }

    public function resetpass()
    {
        $this->Auth_model->resetPass();
        $this->changepass();
    }

    public function changepass()
    {
        if ( ! $this->session->userdata('email_reset')) 
        {
            redirect('/','refresh');
        }
        $this->form_validation->set_rules('password', 'Password baru', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi password baru', 'trim|required|matches[password]');
        if ( $this->form_validation->run() ==  FALSE ) 
        {
            $data['title'] = 'Ganti Password - ' . $this->generalset->web()->site_name;
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/change_password');
            $this->load->view('template/auth_footer');
        } else {
            $email = $this->session->userdata('email_reset');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $query = $this->Auth_model->changePass($email, $password);
            if( $query )
            {
                fMessage('Password berhasil diganti. Silahkan login!', 'success', 'Berhasil');
                redirect('auth/login','refresh');
            }
        }
        
    }

    public function logout()
    {

        $data = array('name','email','role_id','FBRLH_state');
        $this->session->unset_userdata($data);
            // Remove local Facebook session
        $this->facebook->destroy_session();
        // Redirect to login page
        redirect('/');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Profile_model');
		is_not_login();
	}

	public function index()
	{
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_emailcheck');
		$this->form_validation->set_rules('gender', 'Kelamin', 'trim|required');
		$this->form_validation->set_rules('addr', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('phone', 'Handphone', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() ==  FALSE) {
				$this->load->model('Profile_model');
				$email 						= $this->session->userdata('email');
				$data['user'] 		= $this->Profile_model->getData($email)->row();
				$data['title']		= 'Profile - ' . $this->generalset->web()->site_name;
				$this->load->view('template/dashboard_header', $data);
				$this->load->view('template/dashboard_topbar');
				$this->load->view('profile', $data);
				$this->load->view('template/dashboard_footer');
			# code...
		} else {
				
				$tgl = formatTgl($this->input->post('tgl'));

				$data = [
					'id_user' 	=> $this->input->post('id_user'),
					'name'		=> htmlspecialchars($this->input->post('name', true)),
					'date'		=> formatTgl($this->input->post('tgl')),
					'phone'		=> htmlspecialchars($this->input->post('phone', true)),
					'email'		=> htmlspecialchars($this->input->post('email', true)),
					'gender'	=> htmlspecialchars($this->input->post('gender', true)),
					'address'	=> htmlspecialchars($this->input->post('addr', true))
				];

				// config upload foto
				$config['upload_path'] 						= './assets/img/user_img/';
				$config['allowed_types'] 					= 'jpg|png|jpeg';
				$config['max_size']     					= '2048';
				$config['file_ext_tolower']     			= TRUE;
				$config['file_name']     					= strtolower($this->session->userdata('name')).'-'.time();

				$this->load->library('upload', $config);
				// jika foto tidak kosong
				if($_FILES['foto']['name'] != '' && !empty($_FILES['foto']['name']))
				{
					if($this->upload->do_upload('foto'))
					{
						$foto_old = $this->input->post('old_foto');
						// cek nama foto
						if ( $foto_old != 'default.jpg' )
						{
							// cek ada file di folder
							if ( file_exists(FCPATH . 'assets/img/user_img/' .$foto_old) )
							{
								unlink(FCPATH . 'assets/img/user_img/' .$foto_old);
							}
						}

						$data['image'] = $this->upload->data('file_name');
						$this->Profile_model->update($data);
						if(	$this->db->affected_rows() > 0 )
						{
							$this->session->set_flashdata('msg', 'Update data profile berhasil');
							$this->session->set_flashdata('type', 'success');
						}
					}else{
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('msg', 'Update gagal' . $error);
						$this->session->set_flashdata('type', 'danger');
					}
				redirect('profile','refresh');

				// Jika foto tidak diganti
				} else {
					$this->Profile_model->update($data);
					if ($this->db->affected_rows() > 0 )
					{
						$this->session->set_flashdata('msg', 'Profile berhasil di update!');
						$this->session->set_flashdata('type', 'success');
					} else {
						$this->session->set_flashdata('msg', 'Profile gagal diupdate!');
						$this->session->set_flashdata('type', 'danger');
					}
					redirect('profile','refresh');
				}
				
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

	public function changepassword()
	{
			$this->form_validation->set_rules('oldpass', 'Password Lama', 'trim|required|callback_checkOldPass');
			$this->form_validation->set_rules('newpass', 'Password Baru', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('passconf', 'Ulang Password Lama', 'trim|required|matches[newpass]');
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

			if ($this->form_validation->run() == FALSE) {
					$data['title']		= 'Ganti Password - ' . $this->generalset->web()->site_name;
					$this->load->view('template/dashboard_header', $data);
					$this->load->view('template/dashboard_topbar');
					$this->load->view('changepassword', $data);
					$this->load->view('template/dashboard_footer');
				# code...
			} else {
				$newpass 		= $this->input->post('newpass');
				$user_email	= $this->session->userdata('email');
				$pass 			= password_hash($newpass, PASSWORD_DEFAULT);
				$data 			= [
					'password'	=> $pass
				];

				$update 		= $this->db->update('users', $data, ['email'=>$user_email]);
				if( $update )
				{
					$this->session->set_flashdata('msg', 'Password berhasil diganti, silahkan login kembali');
					$this->session->set_flashdata('type', 'success');
					$sess 	= ['email', 'role_id', 'name'];
					$this->session->unset_userdata($sess);
					redirect('auth/login','refresh');

				} else {
					$this->session->set_flashdata('msg', 'Password berhasil diganti, silahkan login kembali');
					$this->session->set_flashdata('type', 'success');
					redirect('profile/changepassword','refresh');
				}

			}
	}

	public function checkOldPass()
	{
		$post 				= $this->input->post(null, true);
		$user_email 	= $this->session->userdata('email');
		$query 				= $this->db->query("SELECT password FROM users WHERE email = '$user_email'")->row();

		if ( password_verify($post['oldpass'], $query->password) )
		{
				return TRUE;
		}else{
				$this->form_validation->set_message('checkOldPass', '{field} salah, silahkan coba lagi!');
				return FALSE;
		}
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */
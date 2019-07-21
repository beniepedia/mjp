<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Profile_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_emailcheck');
		$this->form_validation->set_rules('gender', 'Kelamin', 'trim|required');
		$this->form_validation->set_rules('addr', 'Alamat', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() ==  FALSE) {
				$email = $this->session->userdata('email');
				$this->load->model('Profile_model');
				$data['user'] = $this->Profile_model->getData($email)->row();
				$this->load->view('template/dashboard_header');
				$this->load->view('template/dashboard_topbar');
				$this->load->view('profile', $data);
				$this->load->view('template/dashboard_footer');
			# code...
		} else {
				// jika validaton benar
				$data = [
					'id_user' 	=> $this->input->post('id_user'),
					'name'		=> htmlspecialchars($this->input->post('name', true)),
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

}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */
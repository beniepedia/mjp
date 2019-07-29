<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Message_model');
	}

	public function index()
	{
		$data['title'] = $this->generalset->web()->site_name . ' - KONTAK';
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('telp', 'Handphone', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
		$this->form_validation->set_rules('g-recaptcha-response', 'Recaptcha Validasi', 'trim|callback__validate_captcha');
		$this->form_validation->set_message('_validate_captcha', 'Ulang kembali captcha !');

		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar_secondary');
			$this->load->view('kontak');
			$this->load->view('template/footer');
		} else {
			$post 	= $this->input->post(null, TRUE);

			$insert = $this->Message_model->insert($post);

			if( $insert )
            {
				fMessage('Pesan anda berhasil terkirim !',
						'success', 'Sukses...!');
				redirect('kontak');

            } else {
            	fMessage('Kirim pesan gagal, terjadi kesalahan pada sistem kami. Coba lagi!',
						'error', 'Gagal...!');
				redirect('kontak');
            }



			 // // buat data yan gakan dikirim melalui email
    //         $params['nama']      = 'Admin' . $this->generalset->web()->site_name;
    //         $params['content1']  = '<center><h4>Ada email dari '.$post['nama'].'</h4></br></br>'; 
    //         $params['content1'] .= '<h4>Nama 	  = '.$post['nama'] .'</h4>'; 
    //         $params['content1'] .= '<h4>Handphone = '.$post['telp'] .'</h4>'; 
    //         $params['content1'] .= '<h4>email 	  = '.$post['email'] .'</h4>'; 
    //         $params['content1'] .= '<h4>Isi Pesan = '.$post['pesan'] .'</h4>'; 
         
    //         $params['to']        =  $this->config->item('email_gmail');
    //         $params['subject']   =  'Pesan Dari'. $post['nama'];

    //         $send = sendEmail('kontak', $params);

    //         if( $send )
    //         {
				// fMessage('Pesan anda berhasil terkirim !',
				// 		'success', 'Sukses...!');
				// redirect('kontak');

    //         } else {
    //         	fMessage('Kirim pesan gagal, terjadi kesalahan pada sistem kami. Coba lagi!',
				// 		'error', 'Gagal...!');
				// redirect('kontak');
    //         }

		}
	}

	private function _sendEmail()
	{

		// config email server
		$config = [
		'protocol' => 'smtp',
		'smtp_host' => 'mail.id-mjp.com',
		'smtp_user' => 'admin@id-mjp.com',
		'smtp_pass' => 'Medan2019',
		'smtp_port' => 587,
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'newline' => "\r\n"
		];
		$this->email->initialize($config);

		$this->email->from($this->input->post('email'));
		$this->email->to('admin@id-mjp.com', 'Admin MJP');
		$this->email->subject('Pesan Dari '.$this->input->post('nama'));
		$this->email->message('NAMA : '. $this->input->post('nama') . '<br>' . 'HP : ' . $this->input->post('telp') . '<br>' . 'PESAN : ' . $this->input->post('pesan')
		);

		if($this->email->send())
		{
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	function _validate_captcha()
	{
		$captcha = $this->input->post('g-recaptcha-response');
		$url     = 'https://www.google.com/recaptcha/api/siteverify';
		$secret  = '6Levq64UAAAAAMyElsjvNWuUPLlk-VCHQOPzdvGZ';

		$respon  = file_get_contents($url.'?secret='.$secret.'&response='.$captcha.'&remoteip='.$_SERVER['REMOTE_ADDR']);
		$data   = json_decode($respon);

		if($data->success == false)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}


}


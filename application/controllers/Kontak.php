<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = $this->generalset->web()->site_name . ' - KONTAK';
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telp', 'Telpon/HP', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
		$this->form_validation->set_rules('g-recaptcha-response', 'Recaptcha Validasi', 'trim|callback_validate_captcha');
		$this->form_validation->set_message('validate_captcha', 'Please check the captcha form');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header.php', $data);
			$this->load->view('template/navbar_secondary');
			$this->load->view('kontak.php');
			$this->load->view('template/footer.php');
		}
		else
		{
			$this->_sendEmail();
			fMessage('Pesan anda berhasil terkirim !',
					'success', 'Sukses...!');
			redirect('kontak');
			}
		}
		private function _sendEmail()
		{
			// Config emial lokal
			// $config = [
			// 'protocol' => 'smtp',
			// 'smtp_host' => 'ssl://smtp.googlemail.com',
			// 'smtp_user' => 'printcloud91@gmail.com',
			// 'smtp_pass' => 'medan2018',
			// 'smtp_port' => 465,
			// 'mailtype' => 'html',
			// 'charset' => 'utf-8',
			// 'newline' => "\r\n"
			// ];
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
			}
			else
				{
				echo $this->email->print_debugger();
				die;
			}
		}

		private function _validate_captcha()
		{
			$captcha = $this->input->post('g-recaptcha-response');
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$secret = '6Ld966wUAAAAAN97ttYHRlTYTMpgANXwxj_A-p7g';

			$respon = file_get_contents($url.'?secret='.$secret.'&response='.$captcha.'&remoteip='.$_SERVER['REMOTE_ADDR']);
			$data = json_decode($respon);

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
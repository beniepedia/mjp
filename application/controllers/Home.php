<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Igphoto_model');
	}

	public function index()
	{
		$data['photos'] = $this->Igphoto_model->getPhotoIg();
		$this->load->view('template/header.php');
		$this->load->view('home.php', $data);
		$this->load->view('template/footer.php');
	}

	public function kontak()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('telp', 'No. Telpon', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('home');
		} 
		else
		{
			$this->_sendEmail();
			echo "<script>alert('Pesan berhasil dikirim. terima kasih');</script>";
			redirect('home','refresh');
		}
	}

	private function _sendEmail()
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'printcloud91@gmail.com',
			'smtp_pass' => 'medan2018',
			'smtp_port' => 465,
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

}


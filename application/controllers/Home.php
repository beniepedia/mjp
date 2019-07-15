<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Igphoto_model');
	}

	public function index()
	{
		$data['title'] = $this->generalset->web()->site_name . ' - BERANDA';
		$data['photos'] = $this->Igphoto_model->getPhotoIg();
		$this->load->view('template/header.php',$data);
		$this->load->view('template/navbar_primary');
		$this->load->view('home.php', $data);
		$this->load->view('template/footer.php');
	}

}


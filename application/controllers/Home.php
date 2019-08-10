<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Igphoto_model');
		$this->load->model('Visitors_model');
		$this->Visitors_model->count_visitor();
		$this->load->model('Subscribe_model');
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

	public function subscribe()
	{
		$email = htmlspecialchars($this->input->post('email'), TRUE);
		$cek = $this->db->get_where('tb_subscribe', ['subscribe_email'=>$email]);

		if ( $cek->num_rows() <= 0 )
		{
			$data['subscribe_email'] = $email;
			$data['subscribe_created'] = time();

			$params['nama']     = $email;
		    $params['content1'] = 'Terima kasih telah berlangganan di <a href="'.base_url().'">'.$this->generalset->web()->site_name.'</a>, silahkan klik tombol berlanggan dibawah ini untuk mengaktifkan email anda.'; 
		    $params['link']     = base_url() . 'home/verify?email=' . $email;
		    $params['content2'] = 'Link berlaku selama 2 jam, silahkan aktifkan segera. atau abaikan email ini jika anda tidak ingin berlangganan'; 
		    $params['btn']      = 'Berlangganan';
		    $params['to']       = $email;
		    $params['subject']  = 'Berlangganan '.$this->generalset->web()->site_alias;

		    
		    $send = sendEmail('subs', $params);
		    if( $send )
		    {
				$this->Subscribe_model->insertData($data);
				fMessage('Terima Kasih telah berlangganan, silahkan cek folder INBOX/SPAM email untuk mengaktifkan email anda!', 'success', 'Berhasil...!');
		    }
			redirect('/','refresh');	

		} else {
			fMessage('Anda sudah berlangganan, terima kasih!', 'success', 'Berhasil...!');
			redirect('/','refresh');
		}
	}

	public function verify()
	{
		$email = htmlspecialchars($this->input->get('email'), TRUE);
		$cek = $this->db->get_where('tb_subscribe', ['subscribe_email'=>$email]);
		if( $cek->num_rows() > 0 )
		{
			$data['subscribe_status'] = 1;
			$this->db->update('tb_subscribe', $data, ['subscribe_email'=>$email]);
			fMessage('Email anda berhasil di veridikasi. Terima Kasih sudah berlangganan', 'success', 'Berhasil...!');
			redirect('/','refresh');
		} else {
			fMessage('Verifikasi email gagal, Email tidak ditemui. silahkan coba lagi!', 'error', 'Gagal...!');
			redirect('/','refresh');
		}
	}

}


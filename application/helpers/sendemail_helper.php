<?php 

	function sendEmail($token, $type)
	{
		$CI =& get_instance();
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
		$nama = $CI->input->post('nama');
		$email = $CI->input->post('email');
		$content1 = 'Terima kasih telah melakukan pendaftaran di ID-MJPARFUME, silahkan klik tombol aktivasi dibawah ini untuk mengaktifkan akun anda.';
		$content2 = 'Jika terjadi masalah pada saat aktivasi, silahkan hubungi kami. Terima Kasih';

		$CI->email->initialize($config);
		$CI->email->from('beniepedia@gmail.com', 'ID MJ PARFUME');
		$CI->email->to($CI->input->post('email'));
		
		$data = [
			'nama' 		=> $nama,
			'email' 	=> $email,
			'content1' 	=> $content1,
			'content2' 	=> $content2,
			'token'		=> $token

		];

		if($type == 'verify')
		{	
			$CI->email->subject('Aktivasi Akun');
			$CI->email->message($CI->load->view('email/email.tpl.php', $data, TRUE));
		}
		elseif ($type == 'forgotpassword') 
		{
			$CI->email->subject('Reset Password');
			$CI->email->message('Klik link berikut ini untuk reset password akun anda : <a href="'.base_url().'auth/resetpassword?email='. $CI->input->post('email') .'&token='.urlencode($token).'">Reset Password</a> ' );
		}
		if($CI->email->send())
		{
			return true;
		}
		else
		{
			echo $CI->email->print_debugger();
			die;
		}
	}

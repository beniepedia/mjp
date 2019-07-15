<?php 

	function sendEmail($token, $type)
	{
		$CI =& get_instance();
		$config = [
			'protocol' => $CI->config->item('protocol'),
			'smtp_host' => $CI->config->item('smtp_host'),
			'smtp_user' => $CI->config->item('smtp_user'),
			'smtp_pass' => $CI->config->item('smtp_pass'),
			'smtp_port' => $CI->config->item('smtp_port'),
			'mailtype' => $CI->config->item('mailtype'),
			'charset' => $CI->config->item('charset'),
			'newline' => $CI->config->item('newline')
		];
		
		$CI->email->initialize($config);
		$CI->email->from($CI->config->item('email_gmail'), $CI->generalset->web()->site_alias);
		$CI->email->to($CI->input->post('email'));
		$nama = $CI->input->post('nama');
		$email = $CI->input->post('email');
		
		if($type == 'verify')
		{	
			$content1 = 'Terima kasih telah melakukan pendaftaran di <a href="'.base_url().'">'.$CI->generalset->web()->site_name.'</a>, silahkan klik tombol aktivasi dibawah ini untuk mengaktifkan akun anda.';
			$content2 = 'Link aktivasi akan expired dalam waktu 2 jam kedepan, segera lakukan aktivasi sebelum expired. Jika terjadi masalah pada saat aktivasi, silahkan hubungi kami. Terima Kasih';
			$data = [
				'nama' 			=> $nama,
				'email' 		=> $email,
				'content1' 	=> $content1,
				'content2' 	=> $content2,
				'token'			=> $token,
				'control' 	=> 'auth/verify?email=',
				'btn'				=> 'Aktifkan Sekarang'
			];

			$CI->email->subject('Aktivasi Akun');
			$CI->email->message($CI->load->view('email/email.tpl.php', $data, TRUE));
		}
		elseif ($type == 'forgotpassword') 
		{
			$query = $CI->Auth_model->forgotPassword($email);
			$nama = $query['name'];
			$content1 = 'Kami telah menerima permintaan anda untuk me-reset password <a href="'.base_url().'">'.$CI->generalset->web()->site_name.'</a>. Silahkan klik tombol <b>Reset Password</b> untuk me-reset password anda.';
			$content2 = 'Abaikan e-mail ini jika anda tidak pernah meminta untuk me-reset password. Terima Kasih';
			$data = [
				'nama' 			=> $nama,
				'email' 		=> $email,
				'content1' 	=> $content1,
				'content2' 	=> $content2,
				'token'			=> $token,
				'control' 	=> 'auth/resetpass?email=',
				'btn'				=> 'Reset Password'
			];

			$CI->email->subject('konfirmasi Reset Password');
			$CI->email->message($CI->load->view('email/email.tpl.php', $data, TRUE));
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

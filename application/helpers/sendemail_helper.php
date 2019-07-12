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
		$CI->email->initialize($config);
		$CI->email->from('beniepedia@gmail.com', 'BeniePedia');
		$CI->email->to($CI->input->post('email'));
		if($type == 'verify')
		{	
			$CI->email->subject('Verifikasi Akun');
			$CI->email->message('Klik link berikut ini untuk memverifikasi akun anda : <a href="https://www.facebook.com">Verifikasi Sekarang</a> ' );
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

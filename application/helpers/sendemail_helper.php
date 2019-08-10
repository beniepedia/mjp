<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function sendEmail($type, $params)
	{
		$CI =& get_instance();
		$CI->load->library('encryption');
		$nama = $CI->input->post('nama');
		$email = $CI->input->post('email');

		$config = [
			'protocol' 	=> $CI->generalset->email()->protocol,
			'smtp_host' => $CI->generalset->email()->host,
			'smtp_user' => $CI->generalset->email()->username,
			'smtp_pass' => 'medan2018',
			// 'smtp_pass' => $CI->encryption->decrypt($CI->generalset->email()->password),
			'smtp_port' => $CI->generalset->email()->port,
			'mailtype' 	=> $CI->generalset->email()->type,
			'charset' 	=> $CI->generalset->email()->charset,
			'newline' 	=> "\r\n"
		];

		$CI->email->initialize($config);
		// Email Send
		$CI->email->from($CI->config->item('email_gmail'), $CI->generalset->web()->site_alias);
		
		if($type == 'auth')
		{	

			$CI->email->to($params['to']);
			$CI->email->subject($params['subject']);
			$CI->email->message($CI->load->view('email/email.tpl.php', $params, TRUE));

		}

		elseif( $type == 'kontak' )
		{
			$CI->email->to($params['to']);
			$CI->email->subject($params['subject']);
			$CI->email->message($CI->load->view('email/email.tpl.php', $params, TRUE));
		} 
		elseif ( $type == 'subs' )
		{
			$CI->email->to($params['to']);
			$CI->email->subject($params['subject']);
			$CI->email->message($CI->load->view('email/email.tpl.php', $params, TRUE));
		}
		 

		if($CI->email->send())
		{
			return true;

		} else {

			return false;

		}
	}

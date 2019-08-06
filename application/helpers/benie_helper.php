<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function is_login()
	{
			$ci =& get_instance();
			$sess = $ci->session->userdata('email');
			if( $sess )
			{
					redirect('admin/dashboard');
			}
	}

	function is_not_login()
	{
			$ci =& get_instance();
			$sess = $ci->session->userdata('email');
			if( ! $sess )
			{
					$ci->session->set_flashdata('msg', 'Silahkan login terlebih dahulu!');
					$ci->session->set_flashdata('type', 'danger');
					redirect('auth/login');
			}
	}

	function formatTgl($tanggal)
	{
		$pisah 	= explode("/", $tanggal);
		$array 	= array($pisah[2],$pisah[1],$pisah[0]);
		$gabung = implode("-", $array);
		return $gabung;
	}

	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	function dump($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		die;
	}

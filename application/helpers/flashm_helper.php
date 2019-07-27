<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function fMessage($pesan, $type, $title)
	{
		$CI =& get_instance();
		return $CI->session->set_flashdata([
			'pesan'=> $pesan,
			'type' => $type,
			'title' => $title
		]);
	}
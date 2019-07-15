<?php 
	function is_login()
	{
			$ci =& get_instance();
			$sess = $ci->session->userdata('email');
			if( $sess )
			{
					redirect('dashboard');
			}
	}

	function is_not_login()
	{
			$ci =& get_instance();
			$sess = $ci->session->userdata('email');
			if( ! $sess )
			{
					redirect('auth/login');
			}
	}

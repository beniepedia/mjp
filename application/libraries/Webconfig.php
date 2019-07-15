<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webconfig
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->load->model('Webconfig_model','webconfig');
	}

	

}

/* End of file Webconfig.php */
/* Location: ./application/libraries/Webconfig.php */

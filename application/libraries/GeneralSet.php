<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralSet
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function web()
	{
		$this->ci->load->model('Webconfig_model');
		return $this->ci->Webconfig_model->getAll();
	}
	

}

/* End of file GeneralSet.php */
/* Location: ./application/libraries/GeneralSet.php */

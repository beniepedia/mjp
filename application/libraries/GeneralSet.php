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

	public function email()
	{
		$this->ci->load->model('Webconfig_model');
		return $this->ci->Webconfig_model->emailconfig()->row();
	}

	public function sosial_api()
	{
		$this->ci->load->model('Setting_model');
		return $this->ci->Setting_model->getApi()->row();
	}
	

}

/* End of file GeneralSet.php */
/* Location: ./application/libraries/GeneralSet.php */

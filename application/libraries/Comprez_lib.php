<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprez_lib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function img($source, $quality, $width, $height, $new_img)
	{
		$config['image_library']	='gd2';
        $config['source_image']		= $source;
        $config['create_thumb']		= FALSE;
        $config['maintain_ratio']	= FALSE;
        $config['quality']			= $quality;
        $config['width']			= $width;
        $config['height']			= $height;
        $config['new_image']		= $new_img;

        $this->ci->load->library('image_lib', $config);

	}
	

}

/* End of file Comprez_img.php */
/* Location: ./application/libraries/Comprez_img.php */

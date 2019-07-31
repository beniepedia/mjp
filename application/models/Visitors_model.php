<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitors_model extends CI_Model {
	// insert visitor
	function count_visitor()
	{
		$user_ip = $_SERVER['REMOTE_ADDR'];

		if ( $this->agent->is_browser() )
		{
			$browser = $this->agent->browser();
		}

		elseif ( $this->agent->is_mobile() )
		{
			$browser = $this->agent->mobile();
		}

		elseif ( $this->agent->is_robot() )
		{
			$browser = $this->agent->robot();
		} else {
			$browser = 'Others';
		}

		$platform = $this->agent->platform();

		$cek_ip = $this->db->query("SELECT * FROM tb_visitors WHERE visit_ip = '$user_ip' AND DATE(visit_date)=CURDATE()");

		if ( $cek_ip->num_rows() <= 0 )
		{
			$hsl=$this->db->query("INSERT INTO tb_visitors (visit_ip,visit_browser, visit_platform) VALUES('$user_ip','$browser','$platform')");
            return $hsl;
		}


	}

}

/* End of file Visitors_model.php */
/* Location: ./application/models/Visitors_model.php */
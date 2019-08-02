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

	// get visitor statistic
	function visitor_statistic()
	{
		$query = $this->db->query("SELECT DATE_FORMAT(visit_date,'%d') AS tgl,COUNT(visit_ip) AS jumlah FROM tb_visitors WHERE MONTH(visit_date)=MONTH(CURDATE()) GROUP BY DATE(visit_date)");

		if( $query->num_rows() > 0 )
		{
			foreach($query->result() as $data){
                $result[] = $data;
            }
            return $result; 
		}
	}


	// get total visitor
	function get_all_visitor()
	{
		return $this->db->get('tb_visitors');
	}

	// get total visitor per month
	function count_visitor_this_month()
	{
    	$query = $this->db->query("SELECT COUNT(*) tot_visitor FROM tb_visitors WHERE MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser chrome
    function count_chrome_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) chrome_visitor FROM tb_visitors WHERE visit_browser='Chrome' AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser forefox
    function count_firefox_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) firefox_visitor FROM tb_visitors WHERE (visit_browser='Firefox' OR visit_browser='Mozilla') AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser internet explorer
    function count_explorer_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) explorer_visitor FROM tb_visitors WHERE visit_browser='Internet Explorer' AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser safari
    function count_safari_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) safari_visitor FROM tb_visitors WHERE visit_browser='Safari' AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser opera
    function count_opera_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) opera_visitor FROM tb_visitors WHERE visit_browser='Opera' AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser robot
    function count_robot_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) robot_visitor FROM tb_visitors WHERE (visit_browser='YandexBot' OR visit_browser='Googlebot' OR visit_browser='Yahoo') AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total browser other
    function count_other_visitors()
    {
    	$query = $this->db->query("SELECT COUNT(*) other_visitor FROM tb_visitors WHERE 
			(NOT visit_browser='YandexBot' AND NOT visit_browser='Googlebot' AND NOT visit_browser='Yahoo' 
			AND NOT visit_browser='Chrome' AND NOT visit_browser='Firefox' AND NOT visit_browser='Mozilla'
			AND NOT visit_browser='Internet Explorer' AND NOT visit_browser='Safari' AND NOT visit_browser='Opera') 
			AND MONTH(visit_date)=MONTH(CURDATE())");
    	return $query;
    }

    // get total platforom windows
    function count_windows_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) windows_visitor FROM tb_visitors WHERE (visit_platform='Windows 10' OR visit_platform='Windows XP' OR visit_platform='Windows 7' OR visit_platform='Windows 8' OR visit_platform='Windows 8.1') AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    // get total platforom android
    function count_android_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) android_visitor FROM tb_visitors WHERE visit_platform='Android' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    // get total platforom linux
    function count_linux_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) linux_visitor FROM tb_visitors WHERE visit_platform='Linux' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    // get total platforom ios
    function count_ios_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) ios_visitor FROM tb_visitors WHERE visit_platform='iOS' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

}

/* End of file Visitors_model.php */
/* Location: ./application/models/Visitors_model.php */
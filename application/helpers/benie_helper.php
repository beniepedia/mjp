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
			redirect('login');
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

	function pusher($ap='ap1', $params)
	{
		$options = array(
		    'cluster' => $ap,
		    'useTLS' => true
		  );
		  $pusher = new Pusher\Pusher(
		    '64116644fe77e7ebfb2f',
		    '0ad95bc0a4e55b603095',
		    '839287',
		    $options
		  );
		  // $data['message'] = 'hello world';
		  $pusher->trigger('my-channel', 'my-event', $params);
	}

	function waktu_lalu($timestamp)
	{
	    $selisih = time() - strtotime($timestamp) ;
	    $detik = $selisih ;
	    $menit = round($selisih / 60 );
	    $jam = round($selisih / 3600 );
	    $hari = round($selisih / 86400 );
	    $minggu = round($selisih / 604800 );
	    $bulan = round($selisih / 2419200 );
	    $tahun = round($selisih / 29030400 );
	    if ($detik <= 60) {
	        $waktu = $detik.' detik yang lalu';
	    } else if ($menit <= 60) {
	        $waktu = $menit.' menit yang lalu';
	    } else if ($jam <= 24) {
	        $waktu = $jam.' jam yang lalu';
	    } else if ($hari <= 7) {
	        $waktu = $hari.' hari yang lalu';
	    } else if ($minggu <= 4) {
	        $waktu = $minggu.' minggu yang lalu';
	    } else if ($bulan <= 12) {
	        $waktu = $bulan.' bulan yang lalu';
	    } else {
	        $waktu = $tahun.' tahun yang lalu';
	    }
	    return $waktu;
	}

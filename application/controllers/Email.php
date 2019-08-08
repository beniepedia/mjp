<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		$options = array(
		    'cluster' => 'ap1',
		    'useTLS' => true
		  );
		  $pusher = new Pusher\Pusher(
		    '64116644fe77e7ebfb2f',
		    '0ad95bc0a4e55b603095',
		    '839287',
		    $options
		  );

		  $data['message'] = 'hello world';
		  $pusher->trigger('my-channel', 'my-event', $data);
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
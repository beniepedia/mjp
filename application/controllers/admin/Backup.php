<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Backup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('admin/dashboard','refresh');
		}
	}

	public function index()
	{
		$this->load->view('template/dashboard_header');
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/backup');
		$this->load->view('template/dashboard_footer');

	}
	
	public function files()
	{
		$opt = array(
		'src' => '../mjp', // dir name to backup
		'dst' => '/backup/site/' // dir name backup output destination
		);
		
		// Codeigniter v3x
		$this->load->library('recurseZip_lib', $opt);
		$download = $this->recursezip_lib->compress();
	
	/* Codeigniter v2x
	$zip    = $this->load->library('recurseZip_lib', $opt);
	$download = $zip->compress();
	*/
	
	// redirect(base_url($download));
	}
	
	// backup database.sql
	public function db()
	{
		$this->load->dbutil();
		
		$prefs = array(
		'format' => 'zip',
		'filename' => 'db_backup.sql'
		);
		
		$backup =& $this->dbutil->backup($prefs);
		
		$db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip'; // file name
		$save  = 'backup/db/' . $db_name; // dir name backup output destination
			$this->load->helper('file');
		write_file($save, $backup);
		
		$this->load->helper('download');
		force_download($db_name, $backup);
	}
}
/* End of file Backup.php */
/* Location: ./application/views/admin/Backup.php */
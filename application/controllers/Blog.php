<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
		if($this->generalset->all()->general_set_blog != 1)
		{
			redirect('/','refresh');
		}
	}

	public function index()
	{
		$query 				= $this->Blog_model->getAllPostAktif();
		$data['title'] 		= 'Blog - ' . $this->generalset->web()->site_name;
		if ( $query->num_rows() > 0 ){
			$data['blog'] 		= $query->result();
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar_secondary');
			$this->load->view('v_blog', $data);
			$this->load->view('template/footer');

		} else {
			$data['error'] 	= "Belum ada postingan";
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar_secondary');
			$this->load->view('v_blog_notfound', $data);
			$this->load->view('template/footer');
		}

	}

	public function details($slug)
	{
		$query = $this->Blog_model->getPostSlug($slug);
		if( $query->num_rows() > 0 )
		{	
			$data['blog'] 		= $query->row();
			$data['title'] 		= $data['blog']->title . ' - ' . $this->generalset->web()->site_name;
			$this->load->view('template/header.php', $data);
			$this->load->view('template/navbar_secondary');
			$this->load->view('v_blog_details', $data);
			$this->load->view('template/footer.php');

		} else {
			redirect('blog','refresh');
		}
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
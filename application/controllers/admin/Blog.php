<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['blog']		= $this->Blog_model->getAllPost()->result();
		$data['title']		= 'Blog - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_blog', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function tambah_post()
	{
		$this->form_validation->set_rules('title', 'Judul', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['title']		= 'Tambah Post - ' . $this->generalset->web()->site_name;
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/v_tambah_post');
			$this->load->view('template/dashboard_footer');
			# code...
		} else {
			$post 	= $this->input->post(null, TRUE);
			$config['upload_path'] = './assets/img/blog_img/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
	        $this->upload->initialize($config);
	        if(!empty($_FILES['image']['name']))
	        {
	        	if($this->upload->do_upload('image'))
	        	{
	        		$gbr 	= $this->upload->data();
	        		// compres image
	        		$config['image_library']='gd2';
	                $config['source_image']='./assets/img/blog_img/'.$gbr['file_name'];
	                $config['create_thumb']= FALSE;
	                $config['maintain_ratio']= FALSE;
	                $config['quality']= '60%';
	                $config['width']= 710;
	                $config['height']= 420;
	                $config['new_image']= './assets/img/blog_img/'.$gbr['file_name'];
	                $this->load->library('image_lib', $config);
	                $this->image_lib->resize();

	                // data yang akan diinput
	                $image 		= $gbr['file_name'];
	                $title 		= $post['title'];
	                $content 	= $post['content'];

	                //Buat slug
	                $string 	= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
	                $trim 		= trim($string); // hilangkan spasi berlebihan dengan fungsi trim
	                $pre_slug 	= strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
	                $slug 		= $pre_slug.'.html'; // tambahkan ektensi .html pada slug

	                 $insert = $this->Blog_model->insertPost($title, $content, $slug, $image);

	                 if( $insert )
	                 {
	                 	echo 'berhawsil';
	                 } else {
	                 	echo 'gagal';
	                 }
	        	} else {
	        		echo $this->upload->display_errors();
	        	}
	        } else {
	        	// JIka Gambar Kosong
	        	echo "gambar kosong";
	        }
		}
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
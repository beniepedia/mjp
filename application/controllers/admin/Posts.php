<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_not_login();
		if($this->check->is_admin()->role_id != 1)
		{
			redirect('dashboard','refresh');
		}
		$this->load->model('Blog_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('Posts_model');
	}

	public function index()
	{
		$data['posts']		= $this->Blog_model->getAllPost()->result();
		$data['title']		= 'Posts - ' . $this->generalset->web()->site_name;
		$this->load->view('template/dashboard_header', $data);
		$this->load->view('template/dashboard_topbar');
		$this->load->view('admin/v_posts', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function add_new_post()
	{
		$this->form_validation->set_rules('title', 'Judul', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['title']		= 'Tambah Post - ' . $this->generalset->web()->site_name;
			$data['category'] 	= $this->Posts_model->getAllCategory();
			$data['tags'] 		= $this->Posts_model->getAlltags();
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/v_tambah_post', $data);
			$this->load->view('template/dashboard_footer');
			# code...
		} else {

			dump($_POST);
			$post 	= $this->input->post(null, TRUE);
			$config['upload_path']		= './assets/img/blog_img/'; //path folder
	        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] 	= TRUE; //enkripsi nama file ketika di upload
	        $this->upload->initialize($config);
	        if(!empty($_FILES['image']['name']))
	        {
	        	if($this->upload->do_upload('image'))
	        	{

	        		$gbr 	= $this->upload->data();
	        		// comprez gambar
	        		$this->load->library('Comprez_lib');
	        		$source 	= './assets/img/blog_img/'.$gbr['file_name'];
	        		$to 	= './assets/img/blog_img/large'.$gbr['file_name'];
	        		$this->comprez_lib->img($source, '60%', 720, 420, $to);
	                $this->image_lib->resize();

	                //Buat slug
	                $string 	= preg_replace('/[^a-zA-Z0-9 &%|{\.}=,?!*()"-_+$@;<>\']/', '', $post['title']); //filter karakter unik dan replace dengan kosong ('')
	                $trim 		= trim($string); // hilangkan spasi berlebihan dengan fungsi trim
	                $pre_slug 	= strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
	                $slug 		= $pre_slug.'.html'; // tambahkan ektensi .html pada slug

	                 $data = array(
	                	'title'		=> htmlspecialchars($post['title'], ENT_QUOTES),
	                	'content'	=> htmlspecialchars($post['content'], ENT_QUOTES),
	                	'date' 		=> time(),
	                	'slug' 		=> $slug,
	                	'image' 	=> $gbr['file_name'],
	                	'author' 	=> $this->session->userdata('name'),
	                	'is_active'	=> 1
	                );

	                 $insert = $this->Blog_model->insertPost($data);

	                 if( $insert )
	                 {
						$this->session->set_flashdata('msg', 'Postingan berhasil dipublish!');
						$this->session->set_flashdata('type', 'success');
						redirect('admin/posts','refresh');
	                 } else {
	                 	$this->session->set_flashdata('msg', 'Postingan gagal dipublish!');
						$this->session->set_flashdata('type', 'danger');
						redirect('admin/posts/tambah_post');
	                 }
	        	} else {
	        		$error =  $this->upload->display_errors();
	        		$this->session->set_flashdata('msg', $error);
					$this->session->set_flashdata('type', 'danger');
					redirect('admin/posts/tambah_post');
	        	}
	        } else {
	        	// JIka Gambar Kosong
	        	echo "gambar kosong";
	        }
		}
	}


	public function category_post()
	{
		$this->form_validation->set_rules('category', 'Nama Kategori', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['title']			= 'Kategori Post - ' . $this->generalset->web()->site_name;
			$data['all_category'] 	= $this->Posts_model->getAllCategory()->result();
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/v_category_post', $data);
			$this->load->view('template/dashboard_footer');
			
		} else {
			$category = strip_tags(htmlspecialchars($this->input->post('category',TRUE),ENT_QUOTES));
			$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
			$trim     	= trim($string);
			$slug     	= strtolower(str_replace(" ", "-", $trim));

			$insert = $this->Posts_model->add_category($category, $slug);
			$this->session->set_flashdata('msg', 'Kategori berhasil ditambah!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/posts/category_post','refresh');

		}
	}

	public function edit_category_post()
	{
		$id 		= $this->input->post('kode', TRUE);
		$category 	= strip_tags(htmlspecialchars($this->input->post('category2',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
		$trim     	= trim($string);
		$slug     	= strtolower(str_replace(" ", "-", $trim));

		$this->Posts_model->editPost($id, $category, $slug);
		$this->session->set_flashdata('msg', 'Kategori berhasil diedit!');
		$this->session->set_flashdata('type', 'info');
		redirect('admin/posts/category_post','refresh');

	}

	public function delete_category_post($id)
	{
		$this->db->delete('tb_category_post', ['category_post_id'=>$id]);
		$this->session->set_flashdata('msg', 'Kategori post berhasil dihapus!');
		$this->session->set_flashdata('type', 'danger');
		redirect('admin/posts/category_post','refresh');
	}

	public function tags_post()
	{
		$this->form_validation->set_rules('tags', 'Tags', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['title']			= 'Tags Post - ' . $this->generalset->web()->site_name;
			$data['all_tags'] 	= $this->Posts_model->getAllTags()->result();
			$this->load->view('template/dashboard_header', $data);
			$this->load->view('template/dashboard_topbar');
			$this->load->view('admin/v_tags_post');
			$this->load->view('template/dashboard_footer');
		} else {
			$tags = strip_tags(htmlspecialchars($this->input->post('tags',TRUE),ENT_QUOTES));

			$this->Posts_model->addTags($tags);
			$this->session->set_flashdata('msg', 'Tags post berhasil ditambah!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/posts/tags_post','refresh');
		}
	}

	public function delete($id)
	{
		$this->Blog_model->deletePost($id);
	}

	 //Upload image summernote
    function upload_image(){
        if(isset($_FILES["image"]["name"])){
            $config['upload_path'] = './assets/img/blog_img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/blog_img/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/img/blog_img/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'/assets/img/blog_img/'.$data['file_name'];
            }
        }
    }
 
    //Delete image summernote
    function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), FCPATH, $src);
        if(unlink($file_name))
        {
            return true;
        }
    }

    // ajax slug
    function slug_category()
    {
    	$data = $_POST['data'];
    	$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $data);
		$trim     	= trim($string);
		$slug     	= strtolower(str_replace(" ", "-", $trim));
		echo $slug;	
    }


}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	// simpan data artikel ke database
	public function insertPost($title, $content, $slug, $image)
	{
		$data 	= array (
					'title' 	=> $title,
					'content'	=> $content,
					'date'		=> time(),
					'slug'		=> $slug,
					'image'		=> $image
				);
		return	$this->db->insert('blog', $data);
	}

	// ambil data berdasarkan slug
	public function getPostSlug($slug)
	{
		return	$this->db->get_where('blog', ['slug'=>$slug]);
	}

	public function getAllPost()
	{
		$this->db->order_by('id_blog', 'DESC');
		return	$this->db->get('blog');
	}

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */
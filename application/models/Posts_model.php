<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

	function getAllCategory()
	{	
		return	$this->db->get('tb_category_post');
	}

	function add_category($category, $slug)
	{
		$data = array(
			'category_post_name' => $category,
			'category_post_slug' => $slug
		);
		return 	$this->db->insert('tb_category_post', $data);
	}	

	function editPost($id, $category, $slug)
	{
		$data = array (
			'category_post_name' => $category,
			'category_post_slug' => $slug
		);
		$this->db->where('category_post_id', $id);
		$this->db->update('tb_category_post', $data);
	}

	function getAllTags()
	{
		return $this->db->get('tb_tags_post');
	}

	function addTags($tags)
	{
		$data = array(
			'tags_post_name' => $tags
		);
		return $this->db->insert('tb_tags_post', $data);
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */
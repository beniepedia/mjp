<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function getAll()
	{
		return $this->db->get('blog');
	}

	// simpan data artikel ke database
	public function insertPost($data)
	{
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

	public function getAllPostAktif()
	{
		$this->db->order_by('id_blog', 'DESC');
		$this->db->where_in('is_active', 1);
		return	$this->db->get('blog');
	}

	public function deletePost($id)
	{
		$query = $this->db->get_where('blog', ['id_blog'=>$id])->row();
		if( $query )
		{
			$image = FCPATH . 'assets/img/blog_img/' . $query->image;
			if ( file_exists( $image ) )
			{
				unlink( $image );
			}

			$this->db->delete('blog', ['id_blog'=>$id]);
			$this->session->set_flashdata('msg', 'Postingan berhasil dihapus!');
			$this->session->set_flashdata('type', 'success');
			redirect('admin/posts','refresh');

		} else {
			$this->session->set_flashdata('msg', 'Hapus gagal, Data tidak ditemukan!');
			$this->session->set_flashdata('type', 'danger');
			redirect('admin/posts','refresh');
		}
	}

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */
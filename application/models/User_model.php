<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->tableName = 'users';
		$this->primaryKey = 'id_user';
	}

	public function getData($id = null)
	{
			$this->db->from($this->tableName);
			$this->db->where_not_in('role_id', 1);
			$this->db->join('user_role', 'user_role.id_role = users.role_id');

			if($id != null)
			{
				$this->db->where('id_user', $id);
			}

			$query = $this->db->get();
			return $query;
	}

	public function getTotal($status)
	{
			$this->db->from($this->tableName);
			$this->db->where_not_in('role_id', 1 );
			$this->db->where_in('is_active', $status );
			$query = $this->db->get();
			return $query;
	}

	public function deleteUser($id)
	{
		return $this->db->delete($this->tableName, [$this->primaryKey=>$id]);
	}

	public function IsAdmin($email)
	{
		return $this->db->get_where('users',['email'=>$email])->row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
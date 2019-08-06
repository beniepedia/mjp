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

	public function edituser($post)
	{
		$param['name'] 				= htmlspecialchars($post['name']); 
		$param['phone'] 			= htmlspecialchars($post['phone']); 
		$param['email'] 			= htmlspecialchars($post['email']); 
		if( !empty($post['password']) )
		{
			$param['password'] 	= password_hash($post['password'], PASSWORD_DEFAULT);
		} 
		$param['address'] 		= htmlspecialchars($post['addr']);
		$param['gender'] 		= htmlspecialchars($post['gender']);
		$param['is_active'] 	= htmlspecialchars($post['status']);
		$param['role_id'] 		= htmlspecialchars($post['level']);

		$this->db->where($this->primaryKey, $post['id_user']);
		$this->db->update($this->tableName, $param);
		return $this->db->last_query();
	}

	public function IsAdmin($email)
	{
		return $this->db->get_where($this->tableName,['email'=>$email])->row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
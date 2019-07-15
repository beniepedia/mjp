<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->tableName = 'users';
		$this->primaryKey = 'id_user';
	}

	public function getData($id=null)
	{
			if($id==null)
			{
				$this->db->select('*');
				$this->db->from($this->tableName);
				$this->db->where_not_in('role_id', 1);
				$this->db->join('user_role', 'user_role.id_role = users.role_id');
				$query = $this->db->get()->result_array();
				return $query;
			}else{
				$this->db->select('*');
				$this->db->from($this->tableName);
				$this->db->where($this->primaryKey, $id);
				$this->db->join('user_role', 'user_role.id_role = users.role_id');
				$query = $this->db->get()->row_array();
				return $query;
			}
	}

	public function deleteUser($id)
	{
		return $this->db->delete($this->tableName, [$this->primaryKey=>$id]);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
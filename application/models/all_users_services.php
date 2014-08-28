<?php

class All_users_services extends CI_Model{
	
	public function index()
	{
		
	}
	public function get_types()
	{
		$result = $this->db->query('SELECT type_name FROM types');
		$result = $result->result();
		return $result;
	}	
}

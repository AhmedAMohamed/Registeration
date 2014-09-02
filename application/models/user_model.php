<?php

class User_model extends CI_Model{
	
	public function index()
	{
		
	}	
	
	public function get_user_data($data)
	{
		$query = "SELECT DISTINCT tool_id, calling_name, tool_name FROM `users` JOIN `credintials` ".
		"USING (`user_id`) JOIN `tools` USING (`type_id`) JOIN `tools_data` USING (`tool_id`)".
		"WHERE `users`.user_name =". '"'.$data['user_name'].'"'.' AND `users`.password = "'.$data['password'].'"'.' AND `users`.email = '.'"'.$data['email'].'"'
		.' AND `users`.due_date >'.time();
		$returned = new stdClass();
		$data = $this->db->query($query)->result();
		if(count($data) > 0)
		{
			$returned->success = 'true';
			$returned->data = $data;
		}
		else 
		{
			$returned->success = 'false';
			$returned->data = array('state => "false"');
		}
		$returned = json_encode($returned);
		return $returned;
	}
}
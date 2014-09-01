<?php

class Insert_into_table extends CI_Model {
	
	public function insert($posts)
	{
		$this->db->trans_start();
		$all = array('user_name' => $posts['name'] ,
					 'email' => $posts['email'],
					 'password' => $posts['password'],
					 'user_id' => $this->db->count_all('users')+1,
					 'due_date' => time() + 1000,
					 'start_date' => time()
					);
		$this->db->insert('users',$all);
		
		
		$this->db->where('type_name', $posts['type']);
		$this->db->select('type_id');
		$query = $this->db->get('types');
		$type_id = $query->result();
		
		$all = array('user_id' => $this->db->count_all('users') ,
					 'type_id' => $type_id[0]->type_id,
					);
		$this->db->insert('credintials',$all);
		$this->db->trans_complete();
	}
}
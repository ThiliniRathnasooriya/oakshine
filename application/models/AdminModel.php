<?php

class AdminModel extends CI_Model
{
	public function addAdmin($data, $password){
        $this->db->insert('admin',$data);
    }
    function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');//check whether the user name and password exist.

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	function allComplaints(){
		$query = $this->db->get('complaints');
		return $query->result();
	}

	
}

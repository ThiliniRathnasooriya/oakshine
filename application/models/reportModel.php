<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class reportModel extends CI_Model {
    public function fetch_data()
	{
		
	}
	
	public function allEmployees(){
		$query = $this->db->get('employee');
		return $query->result();
	}
	
	public function get_data()
    {
		$this->load->database("0akshine");
		$this->db->get();
		return result();
	}
	
}
?>



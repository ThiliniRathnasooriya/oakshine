<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categoryModel extends CI_Model {
	public function getCategory($id){
		$this->db->select('*');
		$this->db->where('category_id', $id);
		$query = $this->db->get('item');
		return $query->result();
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class itemModel extends CI_Model {
	public function getItem($id){
		$this->db->select('*');
		$this->db->where('item_id', $id);
		$query = $this->db->get('item');
		return $query->result();
	}
}
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
			return $query->result();
		}
		else{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('employee');
			if($query->num_rows()>0){
				return $query->result();
			}else{
				return false;
			}
		}
	}
	function allComplaints(){
		$query = $this->db->get('complaints');
		return $query->result();
	}
	function viewCustomer(){
		$query = $this->db->get('customer');
		return $query->result();
	}
	function billReq(){
		$this->db->select('*');
		$query = $this->db->get('customer');
		return $query->result();
	}
	function billReq1(){
		$this->db->select('*');
		$query = $this->db->get('category');
		return $query->result();
	}
	function addBillDB($data){
		$this->db->insert('bill', $data);
		$id = $this->db->insert_id();
		return $id;
	}
	function loadBill($id){
		$this->db->select('*');
		$this->db->where('bill_no', $id);
		$query = $this->db->get('bill');
		return $query->result();
	}
	function loadCustomerName($nic){
		$this->db->select('name');
		$this->db->where('nic', $nic);
		$query = $this->db->get('customer');
		return $query->result();
	}
	function loadCategory($id){
		$this->db->select('*');
		$this->db->where('category_id', $id);
		$query = $this->db->get('item');
		return $query->result();
	}
	function loadItem($id){
		$this->db->select('item_name, availability, price, advance');
		$this->db->where('item_id', $id);
		$query = $this->db->get('item');
		return $query->result();
	}
	function loadItemsData($nic, $date){
		$this->db->select('*');
		$this->db->where('customer_nic',$nic);
		$this->db->where('date', $date);
		$query= $this->db->get('bill');
		return $query->result();
	}
	function checkNic($id){
		$this->db->select('*');
		$this->db->where('nic', $id);
		$query = $this->db->get('customer');
		return $query->result();
	}
	function loadBillItem($id){
		$this->db->select('*');
		$this->db->where('bill_no', $id);
		$query = $this->db->get('bill');
		return $query->result();
	}
	function addReturn($data){
		$this->db->insert('return_item', $data);
	}
	function updatingBill($data){
		$this->db->insert('installment', $data);
	}
	function returns(){
		$this->db->select_max('return_id');
     	$result= $this->db->get('return_item')->row_array();
     	return $result['return_id'];
	}
	function loadInstallment($itemID){
		$this->db->select('*');
		$this->db->where('salesID', $itemID);
		$query = $this->db->get('installment');
		return $query->result();
	}
	function itemDetails($itemName){
		$this->db->select('*');
		$this->db->where('item_name', $itemName);
		$query = $this->db->get('item');
		return $query->result();
	}
}

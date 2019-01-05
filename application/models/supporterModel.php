<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class supporterModel extends CI_Model
{
    public function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('employee');//check whether the user name and password exist.

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	    public function addNewCustomer($data){
        $this->db->insert('customer',$data);
        $insert_id = $this->db->insert_id();
        $data2 = array(
            'customer_id' => $insert_id
        );
        $this->db->insert('ordinary_customer', $data2);
    }
}
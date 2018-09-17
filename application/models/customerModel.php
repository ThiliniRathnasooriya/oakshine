<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class customerModel extends CI_Model {
    public function addCustomer($data, $password){
        $this->db->insert('customer',$data);
        $insert_id = $this->db->insert_id();
        $data2 = array(
            'password' => $password,
            'customer_id' => $insert_id
        );
        $this->db->insert('web_customer', $data2);
    }
    public function login($email, $password){
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('customer');
        foreach($query->result() as $row){
            $cid = $row->customer_id;
            $cname = $row->name;
        }
        if($cid){
            $this->db->select('password');
            $this->db->where('customer_id', $cid);
            $query2 = $this->db->get('web_customer');
            foreach($query2->result() as $row2){
                $pass = $row2->password;
            }
            if(strcmp($pass, $password)==0){
                return $cid;
            }
            else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function search($name){
        $this->db->select('*');
        $this->db->like('item_name',$name);
        $query = $this->db->get('item');
        return $query->result();
    }
}


<?php

class adminORdersModel extends CI_Model
{
    public function allOrders(){
        $query = $this->db->get('orders');
        return $query->result();
    }


    public function allItems(){
        $query = $this->db->get('item');
        return $query->result();
    }

    public function allEmployees(){
        $query = $this->db->get('employee');
        return $query->result();
    }

    public function allCustomers(){
        $query = $this->db->get('customer');
        return $query->result();
    }

    // public function ordinaryOrders(){

    //     $this->db->select('*');
    //     $this->db->from('ordinary)order');
    //     $query1 = $this->db->get();

    //     $this->db->select('order_id');
    //     $this->db->from('ordinary_order');
    //     $id = $this->db->get();

    //     $this->db->select('*');
    //     $this->db->from('orders');
    //     $this->db->where('order_id', $id);
    //     $query2 = $this->db->get();
        
    
    //     }

    // public function onlineOrders(){
        
    //     $this->db->select('*');
    //     $this->db->from('online_order');
    //     $query3 = $this->db->get();

    //     $this->db->select('order_id');
    //     $this->db->from('online_order');
    //     $id1 = $this->db->get();

    //     $this->db->select('*');
    //     $this->db->from('orders');
    //     $this->db->where('order_id', $id1);
    //     $query4 = $this->db->get();
        
    //     }

    public function addOrder($data){
            $result =  $this->db->get_where('item', array('item_name'=>$data['item_name']));
            $price = ($result->row_array())['price'];
            $data1= array(
                'order_date'=>$data['order_date'],
                'item_name'=>$data['item_name'],
                'total_amount'=>$price,
                'customer_nic'=>$data['customer_nic']       
            );
            $this->db->insert('orders',$data1);
            $this->db->insert('ordinary_order',$data1);

        }

    public function updateOrder($data){
        $this->db->where('order_id', $data['order_id']);
        $this->db->update('orders', $data);
        }

    public function deleteOrder($id){
            $this->db->where('order_id', $id);
            $this->db->delete('orders');
        }

    public function sendOrders($data){
            $this->db->insert('notifications',$data);
        }
    
}
?>
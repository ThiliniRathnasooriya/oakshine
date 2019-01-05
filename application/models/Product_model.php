<?php
class Product_model extends CI_Model{
 
    public function get_all_product(){
        $this->db->select('*');
        $this->db->where('item_amount > 0');
        $result=$this->db->get('item');
        return $result;
    }

    public function checkOutCard($data){
        foreach($data as $items){
            $this->db->select('item_amount');
            $this->db->where('item_id',$items['id']);
            $query1 = $this->db->get('item');
            $query1 = $query1->result();

            $query1 = $query1[0]->item_amount;

            $value = $query1-$items['qty'];

            $this->db->set('item_amount', $value);
            $this->db->update('item');

        }
    }


     
}
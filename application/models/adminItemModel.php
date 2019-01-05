<?php

class adminItemModel extends CI_Model
{
    public function allItems(){
            $query = $this->db->get('item');
            return $query->result();
        }

    public function addItem($data){
            $total=$data['price']*$data['item_amount'];
            $data1= array(
                'item_name' => $data['item_name'],
                'price' => $data['price'],
                'item_amount' => $data['item_amount'],
                'discount' => $data['discount'],
                'total_item_amount' => $total,
                'installments_no' => $data['installments_no'],
                'category_id' => $data['category_id'],
                'img1' => $data['img1'],
                'img2' => $data['img2'],
                'img3' => $data['img3'],
                'description' => $data['description'],
                'reorder' => $data['reorder'],
                'date' => $data['date']     
            );
            $this->db->insert('item',$data1);
        }

    public function updateItem($id,$data){
        $this->db->where('item_id', $id);
        $this->db->set('price', $data['price']);
        $this->db->set('item_amount', $data['item_amount']);
        $this->db->set('discount', $data['discount']);
        $this->db->set('installments_no', $data['installments_no']);
        $this->db->set('reorder', $data['reorder']);
        $this->db->set('date', $data['date']);
        $this->db->update('item');
    
        }

    public function deleteItem($name){
            $this->db->where('item_name', $name);
            $this->db->delete('item');
        }
}
?>
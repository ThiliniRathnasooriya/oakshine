<?php

class adminCategoryModel extends CI_Model
{
    public function allCategory(){
            $query = $this->db->get('category');
            return $query->result();
        }

    public function addCategory($data){
            $this->db->insert('category',$data);
        }

    public function deleteCategory($id){
            $this->db->where('categoryname', $id);
            $this->db->delete('category');
        }
}
?>
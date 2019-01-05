<?php

class adminReturnItemModel extends CI_Model
{
    public function allReturns(){
            $query = $this->db->get('return_item');
            return $query->result();
        }
}
    
?>
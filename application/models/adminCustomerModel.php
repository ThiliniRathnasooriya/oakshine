<?php

class adminCustomerModel extends CI_Model
{
    public function allCust(){
            $query = $this->db->get('customer');
            return $query->result();
        }

    public function addCust($data){
            $this->db->insert('customer',$data);
        }

    public function updateCust($nic,$data){
        $this->db->where('customer_nic', $nic);
        $this->db->set('address', $data['address']);
        $this->db->set('email', $data['email']);
        $this->db->set('phone_no', $data['phone_no']);
        $this->db->update('customer');
        }

    public function deleteCust($nic){
            $this->db->where('customer_nic', $nic);
            $this->db->delete('customer');
        }
}
?>
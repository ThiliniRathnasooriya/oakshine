<?php

class adminVehicleModel extends CI_Model
{
    public function allVehicle(){
            $query = $this->db->get('vehicle');
            return $query->result();
        }

    public function addVehicle($data){
            $this->db->insert('vehicle',$data);
        }

    public function updateVehicle($data){
        $this->db->where('vehicle_no', $data['vehicle_no']);
        $this->db->update('vehicle', $data);
        }

    public function deleteVehicle($id){
            $this->db->where('vehicle_no',$id);
            $this->db->delete('vehicle');
        }
}
?>
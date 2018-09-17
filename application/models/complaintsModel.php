<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class complaintsModel extends CI_Model {
    public function addComplaint($data){
        $this->db->insert('complaints',$data);

    }
}


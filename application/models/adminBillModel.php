<?php

class adminBillModel extends CI_Model
{
    public function allBills(){
        $query = $this->db->get('bill');
        return $query->result();
    }

    public function viewBills($data){
        $datevalue=$data['date1'];
        $yeararray = explode("-", $datevalue);
        $year=(int)$yeararray[0];
        $month=(int)$yeararray[1]-1;
        $date=(int)$yeararray[2]-1;
        //$year = date('Y', strtotime($date));
        //$month = date('F', strtotime($date));        
        //$year=$this->db->select('YEAR($date)');
        //$month= MONTH($data['date1']);
        //$month2= (int)$month-1;
        //$query =$this->db->query("SELECT * FROM bill WHERE MONTH(bill_date) =$yeararray[1] AND YEAR(bill_date) =$yeararray[0] AND DATEPART(day, 'blll_date')=$date");
        $query =$this->db->query("SELECT * FROM bill WHERE MONTH(bill_date) =$month AND YEAR(bill_date) =$year AND DAY(bill_date)=$date");
        return $query->result();
        }
    
}
?>
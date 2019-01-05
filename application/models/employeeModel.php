<?php

class employeeModel extends CI_Model
{
    public function allEmployee(){
            $query = $this->db->get('employee');
            return $query->result();
        }

    public function allBills(){
            $query = $this->db->get('bill');
            return $query->result();
        }

    public function addEmployee($data){
            $this->db->insert('employee',$data);
        }

    public function updateEmployee($nic,$data){
        $this->db->where('nic', $nic);
        $this->db->set('basic_Salary', $data['basic_salary']);
        $this->db->set('position', $data['position']);
        $this->db->update('employee');
        }

    public function deleteEmployee($id){
            $this->db->where('employee_id', $id);
            $this->db->delete('employee');
        }
        
    public function salary($id,$month){
            $query = $this->db->query("SELECT SUM((countid*com),bsalary),
            (SELECT count(b.bill_no) AS countid FROM bill AS b WHERE MONTH(date)=$month AND employee_id=$id),
            (SELECT e.commission AS com,e.basic_salary AS bsalary FROM employee AS e WHERE employee_id=$id)
            FROM bill AS b
                INNER JOIN employee AS e 
                    ON (b.[employee_nic] =e.[employee_nic])
            ")
            ;
            return $query->result();
        }

    // public function salary($id,$month){
    //         $query = $this->db->query("SELECT count(bill_no) AS countid FROM bill WHERE MONTH(date)=$month AND employee_id=$id");
    //         //$result =  $this->db->get_where('bill', array('MONTH(date) as month'=>$month,'employee_id'=>$id ));
    //         //$employee = ($result->row_array())['price'];
    //         $commission = 2;
    //         $query2 = $this->db->query("SELECT basic_salary FROM employee WHERE employee_id=$id");
    //         $total=((int)$query*$commission)+(int)$query2; 
    //         return $total->result();
    //     }

    // public function get_content(){
    //         $this->db->select('MONTH(date) as month');
    //         $this->db->from('bill');
    //         $this->db->where('employee_id', $id);
    //         $m = $this->db->get();
    //         return $m->result();
    //     }

    // public function month($month){
    //     $count=0;
    //     foreach ('date' as $m){
    //         $this->db->select('MONTH(date) as month');
    //         $this->db->from('bill');
    //         $this->db->where('employee_id', $id);
    //         $m = $this->db->get();
    //         return $m->result();
    //         if ($m==$month && $id='employee_id'){
    //             $count=$count+1;
    //             }
    //         }
    //             return $count;
    //     }

    
    // public function salary($id,$count){
    //         $this->db->select('*');
    //         $this->db->where('employee_id',$id);
    //         $commission=2;
            

    //         // return $commission_result;
    //         //return $commission->result();
    //         //return $this->db->get()->row()->commission;
    //         //$array = array('employee_id' => $id, 'month'=> $month );
    //         //$count=$this->db->where($array)->count_all_results("bill");
    //         //$count = $this->db->where("employee_id",$id)->count_all_results("bill");
    //         $total=$this->db->select_sum(((int)'$count'*(int)'$commission')+(int)'$basic_salary');     
    //         return $this->db->get()->row()->total;
    //  }
     
    
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('employeeModel');
    }
    // public function index(){
    // 	$data['reg2'] = $this->employeeModel->allEmployee();
    //     $this->load->view('admin/header');
    //     $this->load->view('admin/nav');
    //     $this->load->view('admin/employee');
    //     $this->load->view('admin/footer');
    // }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->employeeModel->allEmployee();
            $data['reg3'] = $this->employeeModel->allBills();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/employee',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }

    public function loadEmployeeData(){
        $nic=$this->input->post('nic');
        $data[0] = $this->employeeModel->loadEmployeeData($id);
       

        echo json_encode($data);
    }
   
    public function salary(){
        $id = $this->input->post('employee_id');
        $month = $this->input->post('month');
        //$id = 1;
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->employeeModel->salary($id,$month);//me id eka kohenda awe
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/salary', $data);
            $this->load->view('admin/footer');
            // var_dump($data);
        }else{
            $this->log();
        }
    }
    public function employee(){
        $data = array(
            'nic' => $this->input->post('nic'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),
            'qualifications' => $this->input->post('qualifications'),
            'basic_salary' => $this->input->post('basic_salary'),
            'position' => $this->input->post('position'),
            'img' => $this->input->post('img'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        //var_dump($data);
        $this->employeeModel->addEmployee($data);
        $this->index();
    }
    public function employeeupdate(){
        $nic = $this->input->post('nic');
        $data = array(
            'basic_salary' => $this->input->post('basic_salary'),
            'position' => $this->input->post('position')
        );
        //var_dump($data);
        $this->employeeModel->updateEmployee($nic,$data);
        $this->index();
    }
    public function employeedelete(){
        $id = $this->input->post('employee_id');
        //var_dump($data);
        $this->employeeModel->deleteEmployee($id);
        $this->index();
    }
    public function salary1(){
        $id = $this->input->post('employee_id');
        $month= $this->input->post('month');
        //var_dump($data);
        $this->employeeModel->salary($id,$month);
        $this->count($id);
    }

    public function monthid(){
        $id = $this->input->post('employee_id');
        $month= $this->input->post('month');
        // $count=0;
        // foreach ($month as $m){
        //     $this->db->select('MONTH(date) as month');
        //     $this->db->from('bill');
        //     $this->db->where('employee_id', $id);
        //     $m = $this->db->get();
        //     return $m->result();
        //     if ($m=='month' && $id='employee_id'){
        //         $count=$count+1;
        //     }
        // }
        //return $count;
        $this->employeeModel->salary($id,$month);
    }
}
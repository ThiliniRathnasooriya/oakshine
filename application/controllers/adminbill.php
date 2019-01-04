<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBill extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminBillModel');
    }
    
    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminBillModel->allBills();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/bills',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }

    public function index2(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminBillModel->viewBills($data);
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/bills',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
   
    public function viewbills(){
        $data = array(
            'date1' => $this->input->post('date1'),   
        );
        // $data2 = array(
        //     'ordinary_customer_id' => $this->input->post('ordinary_customer_id'),
        //     'order_id' => $this->input->post('order_id'),
        // );
        $this->adminBillModel->viewBills($data);
        $this->index2();
    }
}
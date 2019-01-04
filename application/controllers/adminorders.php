<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrders extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminOrdersModel');
    }
    
    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminOrdersModel->allOrders();
            $data['reg3'] = $this->adminOrdersModel->allItems();
            $data['reg4'] = $this->adminOrdersModel->allEmployees();
            $data['reg5'] = $this->adminOrdersModel->allCustomers();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/orders',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
   
    public function orders(){
        $data = array(
            'order_date' => $this->input->post('order_date'),
            'item_name' => $this->input->post('item_name'),
            'customer_nic' => $this->input->post('customer_nic')      
        );
        // $data2 = array(
        //     'ordinary_customer_id' => $this->input->post('ordinary_customer_id'),
        //     'order_id' => $this->input->post('order_id'),
        // );
        $this->adminOrdersModel->addOrder($data);
        $this->index();
    }
    public function orderupdate(){
        $data = array(
            'order_id' => $this->input->post('order_id'),
            'item_name' => $this->input->post('item_name'),
            'customer_nic' => $this->input->post('customer_nic')
        );
        $this->adminOrdersModel->updateOrder($data);
        $this->index();
    }
    public function orderdelete(){
        $id = $this->input->post('order_id');
        $this->adminOrdersModel->deleteOrder($id);
        $this->index();
    }
    
    public function sendorders(){
        $data = array(
            'order_id' => $this->input->post('order_date'),
            'employee_id' => $this->input->post('description'),     
        );
        // $data2 = array(
        //     'ordinary_customer_id' => $this->input->post('ordinary_customer_id'),
        //     'order_id' => $this->input->post('order_id'),
        // );
        $this->adminOrdersModel->sendOrders($data);
        $this->index();
    }
}
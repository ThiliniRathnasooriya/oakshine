<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCustomer extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminCustomerModel');
    }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminCustomerModel->allCust();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/customer', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function cust(){
        $data = array(
            'name' => $this->input->post('cust_name'),
            'customer_nic' => $this->input->post('customer_nic'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'phone_no' => $this->input->post('phone_no')
        );
        //var_dump($data);
        $this->adminCustomerModel->addCust($data);
        $this->index();
    }
    public function custupdate(){
        $nic = $this->input->post('customer_nic');
        $data = array(
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'phone_no' => $this->input->post('phone_no')
        );
        //var_dump($data);
        $this->adminCustomerModel->updateCust($nic,$data);
        $this->index();
    }
    public function custdelete(){
        $nic = $this->input->post('customer_nic');
        //var_dump($data);
        $this->adminCustomerModel->deleteCust($nic);
        $this->index();
    }

}
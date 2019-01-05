<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("complaintsModel");
    }
    public function index(){
        $this->load->view('customer/header');
		$this->load->view('complaints/home');
		$this->load->view('customer/footer');
    }
    public function complaints(){
        $data = array(
            'Name' => $this->input->post('name'),
            'cust_id' => $this->input->post('cust_id'),
            'order_id' => $this->input->post('order_id'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('date')
        );
        //var_dump($data);
        $this->complaintsModel->addComplaint($data);
        $this->index();
    }
}
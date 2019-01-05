<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminReturnItem extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminReturnItemModel');
    }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminReturnItemModel->allReturns();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/return', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
}
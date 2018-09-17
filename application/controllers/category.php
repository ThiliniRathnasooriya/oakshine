<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("categoryModel");
    }

    public function category(){
        $this->load->model("categoryModel");
        $data['res']=$this->categoryModel->getCategory('1');
        $this->load->view('customer/header');
        $this->load->view('category/category', $data);
        $this->load->view('customer/footer');
        //foreach($res as $row){
        //     $iid = $row->item_id;
        //     $iname = $row->item_name;
        //     $price = $row->price;
        //     $iamount = $row->item_amount;            
        // }
        // echo $iid;
        // echo $iname;
        // echo $price;
        // echo $iamount;
    }
    public function index(){
    	$data['res'] = $this->categoryModel->getCategory('1');
    	$this->load->view('customer/header');
    	$this->load->view('category/home',$data);
    	$this->load->view('customer/footer');
    }
}
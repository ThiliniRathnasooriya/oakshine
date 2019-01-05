<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminItem extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminItemModel');
    }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminItemModel->allItems();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/items', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function items(){
        $data = array(
            'item_name' => $this->input->post('item_name'),
            'price' => $this->input->post('price'),
            'item_amount' => $this->input->post('item_amount'),
            'discount' => $this->input->post('discount'),
            'installments_no' => $this->input->post('installment_no'),
            'category_id' => $this->input->post('category_id'),
            'img1' => $this->input->post('img1'),
            'img2' => $this->input->post('img2'),
            'img3' => $this->input->post('img3'),
            'description' => $this->input->post('description'),
            'reorder' => $this->input->post('reorder'),
            'date' => $this->input->post('date')
        );
        //var_dump($data);
        $this->adminItemModel->addItem($data);
        $this->index();
    }
    public function itemupdate(){
        $id = $this->input->post('item_id');
        $data = array(
            'price' => $this->input->post('price'),
            'item_amount' => $this->input->post('item_amount'),
            'discount' => $this->input->post('discount'),
            'installments_no' => $this->input->post('installment_no'),
            'reorder' => $this->input->post('reorder'),
            'date' => $this->input->post('date')
        );
        //var_dump($data);
        $this->adminItemModel->updateItem($id,$data);
        $this->index();
    }
    public function itemsdelete(){
        $name = $this->input->post('item_name');
        //var_dump($data);
        $this->adminItemModel->deleteItem($name);
        $this->index();
    }

    public function ppUp(){
        if(! empty($_FILES)){
            $config["upload_path"]= $this->upload_path;
            $config["allowed_types"]="gif|png|jpg";
            $this->load->library('upload',$config);
            $this->upload->do_upload("file");
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $this->adminItemModel->ppUp($file_name);
        }
    }

}
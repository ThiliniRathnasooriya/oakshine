
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCategory extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminCategoryModel');
    }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminCategoryModel->allCategory();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/category', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }

    public function addcategory(){
        $data = array(
            'categoryname' => $this->input->post('categoryname')
        );
        //var_dump($data);
        $this->adminCategoryModel->addCategory($data);
        $this->index();
    }

    public function deletecategory(){
        $id = $this->input->post('categoryname');
        //var_dump($data);
        $this->adminCategoryModel->deleteCategory($id);
        $this->index();
    }
}
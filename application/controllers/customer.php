<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("customerModel");
    }
    public function home(){
        $this->load->model('Product_model');
		$data['data']=$this->Product_model->get_all_product();

		/*Debugging Purpose*/
        //print_r($data);
        //$data['data'] = array();
        
        $this->load->view('customer/header');
        $this->load->view('customer/home',$data);
        $this->load->view('customer/footer');
    }
    public function signup(){
       // $this->load->library('form_validation');
       // $this->form_validation->set_rules('name', 'Name', 'required');
        $data = array(
            'name' => $this->input->post('name'),
            'nic' => $this->input->post('nic'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'phone_no' => $this->input->post('pnumber')
        );
        $password = $this->input->post('password');
        //var_dump($data);
        //echo $password;
        $this->customerModel->addCustomer($data, $password);
        $this->home();
    }
    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //echo $email;
        //echo $password;
        $bl = $this->customerModel->login($email, $password);
        if($bl){
            $this->session->set_flashdata('log', 'Successfully loged');
            $this->session->set_userdata('logID', $bl);
            $newdata = array(
                'email'     => $email
            );
            $this->session->set_userdata($newdata);
            $this->home();//need to change
        }else{
            $this->session->set_flashdata('log', 'Email or password Incorrect');
            $this->home();
        }
    }
    public function logout(){
        $this->session->unset_userdata('log');
        $this->session->unset_userdata('logID');
        $this->session->sess_destroy();
        $this->session->set_flashdata('log', 'Successfully logedout');
        $this->home();  
    }

    public function search(){
        $name = $this->input->post('search');
        $data['res'] = $this->customerModel->search($name);
        $this->load->view('searchResult', $data);
    }
    public function loads(){
        $this->load->view('search');
    }
}
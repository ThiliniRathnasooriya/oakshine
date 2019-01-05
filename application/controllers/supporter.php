<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supporter extends CI_Controller {

    public function index(){
    	 $this->load->model('supporterModel');
        if($this->session->userdata('logged')>0){
           // $data['reg2'] = $this->supporterModel->allComplaints();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('supporter/index');
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function log(){
        //if($this->session->userdata('logged')!=0){
            $this->load->view('supporter/login');
        //}
        }
    public function logout() {
        // Removing session data
        $sessionData = array(
            'id' => '',
            'logged' => ''
        );
        $this->session->unset_userdata('logged');
        $data['message_display'] = 'Successfully Logout';
        $this->session->sess_destroy();
        $this->index();
    }
    public function validate(){//validate and check whether user data are correct.
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('supporterModel');
			if($this->supporterModel->can_login($username, $password)){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');//if the user is can logging set user data to logged
				//$data['username'] = $username;
				redirect(base_url().'supporter');
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
				$this->index();			
			}
		}
		else{
			$this->index();
		}
	}
	public function index1(){
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('supporter/index');
            $this->load->view('admin/footer');
        }
	 public function addCustomer(){
       // $this->load->library('form_validation');
       // $this->form_validation->set_rules('name', 'Name', 'required');
        $data = array(
            'name' => $this->input->post('name'),
            'nic' => $this->input->post('nic'),
            'phone_no' => $this->input->post('phone_no'),
            'address' => $this->input->post('address'),
            'email'=>$this->input->post('email')
        );
       // $password = $this->input->post('password');
        //var_dump($data);
        //echo $password;
        $this->load->model('supporterModel');//->addNewCustomer($data);
        $this->supporterModel->addNewCustomer($data);
        redirect('/admin/viewCustomer');
    }
     public function returns(){
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('supporter/returns');
            $this->load->view('admin/footer');
        }
     public function bill(){
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/bill');
            $this->load->view('admin/footer');
        }
     public function viewBill(){
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('supporter/viewBill');
            $this->load->view('admin/footer');
        }
    public function searchBill(){
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('supporter/searchBill');
            $this->load->view('admin/footer');
        }
    }

        
    

    
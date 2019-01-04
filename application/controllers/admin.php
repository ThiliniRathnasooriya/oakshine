<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        $this->load->model('AdminModel');
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->allComplaints();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function log(){
        //if($this->session->userdata('logged')!=0){
            $this->load->view('admin/login');
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

			$this->load->model('AdminModel');
			if($this->AdminModel->can_login($username, $password)){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');//if the user is can logging set user data to logged
				//$data['username'] = $username;
				redirect(base_url().'Admin');
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
    public function register(){
        $this->load->model('AdminModel');
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('name', 'Name', 'required');
         $data = array(
             //'admin_id' => $this->input->post('admin_id'),
             'username' => $this->input->post('username'),
             'password' => $this->input->post('password')   
         );
         $password = $this->input->post('password');
         //var_dump($data);
         //echo $password;
         $this->AdminModel->addAdmin($data, $password);
         $this->index();
    }
}
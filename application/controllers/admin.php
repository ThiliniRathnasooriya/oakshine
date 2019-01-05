<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("AdminModel");
    }

    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->allComplaints();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            // $this->load->view('admin/nav');
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
        $this->session->unset_userdata('position');
        $data['message_display'] = 'Successfully Logout';
        $this->session->sess_destroy();
        redirect('admin', 'refresh');
    }
    public function validate(){//validate and check whether user data are correct.
        $position='';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

            $this->load->model('AdminModel');
            $res = $this->AdminModel->can_login($username, $password);
            
            if($res){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');//if the user is can logging set user data to logged
                foreach($res as $row){
                    $position=$row->position;
                }
                $this->session->set_userdata('position', $position);
                //$data['username'] = $username;
                $this->index();
                
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
                redirect('admin', 'refresh');		
			}
		}
		else{
			$this->index();
		}
    }
    public function register(){
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
         redirect('admin/index', 'refresh');
    }
    public function bill(){
        $this->load->view('admin/header');
        $position=$this->session->userdata('position');
        switch($position){
            case "admin":
                $this->load->view('admin/nav');
                break;
            case "Supporter":
                $this->load->view('admin/navS');
                break;
        }
        $this->load->view('admin/bill');
        $this->load->view('admin/footer');
    }
    public function viewCustomer(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->viewCustomer();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            $this->load->view('admin/viewCustomer', $data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function addCustomer(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->viewCustomer();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            $this->load->view('admin/addCustomer');
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function viewBill(){
        if($this->session->userdata('logged')>0){
            $data['customers'] = $this->AdminModel->billReq();
            $data['categories'] = $this->AdminModel->billReq1();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            $this->load->view('admin/viewBill',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function viewItem(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->viewCustomer();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            $this->load->view('admin/returnItem');
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function addItemDB(){
        $rows = $this->input->post('rows');
        $arr = $this->input->post('arr');
        $nic = $this->input->post('nic');
        $intR = (int)$rows;
        for($i=0; $i<$intR; $i++){
            $data = array(
                'amount' => $arr[$i]["price"],
                'customer_nic' => $nic,
                'item_name'=>$arr[$i]["name"],
                'date'=>date("Y-m-d")
            );
            $id = $this->AdminModel->addBillDB($data);
        } 
        echo $id;       
    }
    public function loadBill(){
        $id = $this->uri->segment('3');
        $rows = $this->AdminModel->loadBill($id);
        foreach($rows as $row){
            $nic = $row->customer_nic;
            $date = $row->date;
        }
        $names = $this->AdminModel->loadCustomerName($nic);
        $data['items'] = $this->AdminModel->loadItemsData($nic, $date);
        foreach($names as $name){
            $data['cname'] = $name->name;
        }
        $data['date'] = $date;
        
        $this->load->view('admin/header');
        $position=$this->session->userdata('position');
        switch($position){
            case "admin":
                $this->load->view('admin/nav');
                break;
            case "Supporter":
                $this->load->view('admin/navS');
                break;
        }
        $this->load->view('admin/bill', $data);
        $this->load->view('admin/footer');
    }
    public function searchBill(){
        $this->load->view('admin/header');
        $position=$this->session->userdata('position');
        switch($position){
            case "admin":
                $this->load->view('admin/nav');
                break;
            case "Supporter":
                $this->load->view('admin/navS');
                break;
        }
        $this->load->view('admin/searchBill');
        $this->load->view('admin/footer');
    }
    public function addReturn(){
        $data = array(
            'bill_id' => $this->input->post('itemID')
        );
    }
    public function loadCategory(){
        $categoryid = $this->input->post('catID');
        $result = $this->AdminModel->loadCategory($categoryid);
        echo json_encode($result);
    }
    public function itemD(){
        $id = $this->input->post('itID');
        $result = $this->AdminModel->loadItem($id);
        echo json_encode($result);
    }
    public function checkAvailability(){
        $id=$this->input->post('num');
        $exists = $this->AdminModel->checkNic($id);

        $count = count($exists);
        echo $count ;

        if (empty($count)) {
            return true;
        } else {
            return false;
        }
    }
    public function loadBillItem(){
        $itemName='';
        $id=$this->input->post('itmeID');
        $data[0] = $this->AdminModel->loadBillItem($id);
        foreach($data[0] as $row){
            $itemName=$row->item_name;   
        }
        $data[1]=$this->AdminModel->itemDetails($itemName);

        echo json_encode($data);
    }
    public function addReturnItem(){
        $data = array(
            'bill_id' => $this->input->post('bid'),
            'customer_nic' => $this->input->post('cnic')
        );
        $this->AdminModel->addReturn($data);
        $this->viewItem();
    }
    public function updateBill(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->AdminModel->viewCustomer();
            $this->load->view('admin/header');
            $position=$this->session->userdata('position');
            switch($position){
                case "admin":
                    $this->load->view('admin/nav');
                    break;
                case "Supporter":
                    $this->load->view('admin/navS');
                    break;
            }
            $this->load->view('admin/updateBill');
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function updatingBill(){
        $data = array(
            'date'=> date("Y-m-d"),
            'amount'=>$this->input->post('installment'),
            'salesID'=>$this->input->post('bid')
        );
        $this->AdminModel->updatingBill($data);
        redirect('admin/updateBill', 'refresh');
    }
    public function returns(){
        $returnID = $this->AdminModel->returns();
        
        // $vendors = [];

        // foreach($result as $row){
        //     $data = $row["joinedDate"];
        //     $now = time();
        //     $your_date = strtotime($data);
        //     $datediff = $now - $your_date;

        //     $cont =  round($datediff / (60 * 60 * 24));

        //     if($cont == 83){
        //         $vendors[] = ['vendorName' => $row['vendorName']];
        //     }
        // }

        // echo json_encode($vendors);
    }
    public function loadInstallment(){
        $itemID = $this->input->post('itemID');
        $result = $this->AdminModel->loadInstallment($itemID);
        echo json_encode($result);
    }
}
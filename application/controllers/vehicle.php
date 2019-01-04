<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('adminVehicleModel');
    }
    public function index(){
        if($this->session->userdata('logged')>0){
            $data['reg2'] = $this->adminVehicleModel->allVehicle();
            $this->load->view('admin/header');
            $this->load->view('admin/nav');
            $this->load->view('admin/vehicle',$data);
            $this->load->view('admin/footer');
        }else{
            $this->log();
        }
    }
    public function vehicle(){
        $data = array(
            'vehicle_no' => $this->input->post('vehicle_no'),
            'fuelling_cost' => $this->input->post('fuelling_cost'),
            'maintainance_cost' => $this->input->post('maintainance_cost'),
            'other_cost' => $this->input->post('other_cost'),
            'date' => $this->input->post('date'),
            'vehicle_type' => $this->input->post('vehicle_type')
        );
        $this->adminVehicleModel->addVehicle($data);
        $this->index();
    }
    public function updatevehicle(){
        $data = array(
            'vehicle_no' => $this->input->post('vehicle_no'),
            'fuelling_cost' => $this->input->post('fuelling_cost'),
            'maintainance_cost' => $this->input->post('maintainance_cost'),
            'other_cost' => $this->input->post('other_cost'),
            'date' => $this->input->post('date'),
            'vehicle_type' => $this->input->post('vehicle_type')
        );
        $this->adminVehicleModel->updateVehicle($data);
        $this->index();
    }
    public function deletevehicle(){
        $id = $this->input->post('vehicle_no');
        $this->adminVehicleModel->deleteVehicle($id);
        $this->index();
    }
}
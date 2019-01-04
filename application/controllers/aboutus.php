<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    }
    public function index(){
        $this->load->view('customer/header');
		$this->load->view('aboutus/home');
		$this->load->view('customer/footer');
    }
}
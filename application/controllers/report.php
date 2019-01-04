<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    
    }
    public function index(){
		$this->load->model("reportModel");
		$data['reg2'] = $this->reportModel->allEmployees();
		$date["fetch_data"] = $this->reportModel->fetch_data();
		$this->load->view('admin/header');
    	$this->load->view('admin/nav');
        $this->load->view('calendar/home');
        $this->load->view('admin/footer');
    }
    public function report2(){
		$this->index();	
	}
	
	
	
	
	
	
	
	public function view_report() {
	
	// load data from form
		
	    $date= $_POST['date'];
//$date= $_POST["m","Y"];
//$fullDate = $_POST['fullDate'];
		$data["day"] = date("d",strtotime($date));
		$data["month"] = date("m",strtotime($date));
		$data["monthName"] = date("F",strtotime($date));
		$data["year"] = date("Y",strtotime($date));
		
		$day= date("d",strtotime($date));
		$month= date("m",strtotime($date));
		$monthName= date("F",strtotime($date));
		$year= date("Y",strtotime($date));
		echo $monthName;
		echo $month;
		
		if($month == 1){
			$data["previousMonth"] = 12;
			$data["previousYear"] = $year - 1;
		}
		else{
			$data["previousMonth"] = $month - 1;
			$data["previousYear"] = $year ;
		}

		
		
		$this->load->view("reports/submit", $data);
		
		
	
	}
	
	
	
	
	
	
	public function view_most_and_less_sold_product() {
	
	// load data from form
		
	    $date= $_POST['date'];
//$date= $_POST["m","Y"];
//$fullDate = $_POST['fullDate'];
		$data["day"] = date("d",strtotime($date));
		$data["month"] = date("m",strtotime($date));
		$data["monthName"] = date("F",strtotime($date));
		$data["year"] = date("Y",strtotime($date));
		
		$day= date("d",strtotime($date));
		$month= date("m",strtotime($date));
		$monthName= date("F",strtotime($date));
		$year= date("Y",strtotime($date));
		echo $monthName;
		echo $month;
		
		if($month == 1){
			$data["previousMonth"] = 12;
			$data["previousYear"] = $year - 1;
		}
		else{
			$data["previousMonth"] = $month - 1;
			$data["previousYear"] = $year ;
		}
		
		
		$this->load->view("reports/most_less_sold", $data);
}








	public function view_employee_report() {
	
		// load data from form
		
	    $date= $_POST['date'];
//$date= $_POST["m","Y"];
//$fullDate = $_POST['fullDate'];
		$data["day"] = date("d",strtotime($date));
		$data["month"] = date("m",strtotime($date));
		$data["monthName"] = date("F",strtotime($date));
		$data["year"] = date("Y",strtotime($date));
		
		$day= date("d",strtotime($date));
		$month= date("m",strtotime($date));
		$monthName= date("F",strtotime($date));
		$year= date("Y",strtotime($date));
		echo $monthName;
		echo $month;
		
		if($month == 1){
			$data["previousMonth"] = 12;
			$data["previousYear"] = $year - 1;
		}
		else{
			$data["previousMonth"] = $month - 1;
			$data["previousYear"] = $year ;
		}

      
		
		$this->load->view("reports/employee_salary", $data);
}
	
	
	public function get_data() {
		
		$con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'oakshine');

		$query = mysqli_query($con,"select * from employee
		            inner join sallary using(employee_id)
					where employee_id = '".$_GET['employee_id']."'");
		
		
		$this->load->view("calendar/employee_details", $query);
		
	}
	
		
	
	
	
	
	
	
}
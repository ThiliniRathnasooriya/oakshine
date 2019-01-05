<?php
require("C:/xampp/htdocs/eCommerce/application/views/reports/fpdf181/fpdf.php");

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'oakshine');


		
		
$pdf=new FPDF();
  ///var_dump (get_class_methods ($pdf));
  
  $pdf->AddPage();
  
  $pdf->SetFont("Arial","","20");
  $pdf->Cell(0,10,"OAKSHINE COMPANY PVT (LTD)",0,1,"C");
  $pdf->Cell(0,10,"Employee Details ",0,1,"C");
  
  
  //ceate table
  //cell(width, height, text, border, end line, align)
  $pdf->SetFont("Arial","","10");
   
   $query1 = mysqli_query($con,"select name, nic, employee_id, position, address, phone_no, email, basic_sallary, attendance_allowence, commission, (basic_sallary + attendance_allowence + commission)as total from sallary
		            inner join employee using(employee_id)
					where employee_id = '".$_GET['employee_id']."'");
	while($details = mysqli_fetch_array($query1)){
		$pdf->Cell(20,7,"",0,0); 
		$pdf->Cell(25,7,"Name : ",0,0); 
        $pdf->Cell(30,7,$details['name'],0,1);
		
		$pdf->Cell(20,7,"",0,0);
        $pdf->Cell(25,7,"NIC No :",0,0); 		
		$pdf->Cell(30,7,$details['nic'],0,1);
		
		$pdf->Cell(20,7,"",0,0); 
        $pdf->Cell(25,7,"Employee ID : ",0,0);
        $pdf->Cell(30,7,$details['employee_id'],0,1);
		
        $pdf->Cell(20,7,"",0,0);
        $pdf->Cell(25,7,"Position :",0,0); 		
        $pdf->Cell(30,7,$details['position'],0,1); 	
 
        $pdf->Cell(20,7,"",0,0);
        $pdf->Cell(25,7,"Address :",0,0); 		
        $pdf->Cell(30,7,$details['address'],0,1); 	

        $pdf->Cell(20,7,"",0,0); 
		$pdf->Cell(25,7,"Phone No :",0,0); 
        $pdf->Cell(30,7,$details['phone_no'],0,1); 	

		$pdf->Cell(20,7,"",0,0);
        $pdf->Cell(25,7,"Email Address :",0,0); 		
        $pdf->Cell(30,7,$details['email'],0,1);	


		$pdf->Cell(20,7,"",0,1); 
        $pdf->Cell(30,7,"",0,1);
        
		
		//create salary details table
		$pdf->SetFont("Arial","","10");
		
		$pdf->Cell(20,7,"",0,0);
        $pdf->Cell(120,7,"Description",1,0,"C");
		$pdf->Cell(30,7,"Amount",1,1,"C");   //end line
		
		$pdf->Cell(20,7,"",0,0);
		$pdf->Cell(120,7,"Basic Salary",1,0);
		$pdf->Cell(30,7,$details['basic_sallary'],1,1,"R");  //end line
		
		$pdf->Cell(20,7,"",0,0);
		$pdf->Cell(120,7,"Allowence",1,0);
		$pdf->Cell(30,7,$details['attendance_allowence'],1,1,"R");  //end line
		
		$pdf->Cell(20,7,"",0,0);
		$pdf->Cell(120,7,"Commission",1,0);
		$pdf->Cell(30,7,$details['commission'],1,1,"R");   // end line
	
	    $pdf->Cell(80,7,"",0,0);
		$pdf->Cell(60,7,"Total Salary",1,0,"R");
		$pdf->Cell(30,7,$details['total'],1,1,"R");   // end line
	}
	
	 
	 
	





$pdf->Output();

?>
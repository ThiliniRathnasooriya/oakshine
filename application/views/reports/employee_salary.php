<?php

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'oakshine');

   require("C:/xampp/htdocs/eCommerce/application/views/reports/fpdf181/fpdf.php");
  $pdf=new FPDF();
  ///var_dump (get_class_methods ($pdf));
  
  $pdf->AddPage();

$pdf->SetFont("Arial","","20");
  $pdf->Cell(0,10,"OAKSHINE COMPANY PVT (LTD)",0,1,"C");
  $pdf->Cell(0,10,"Employee Salary report ",0,1,"C");
  $pdf->Cell(0,10,"for the month of ". $monthName ." ".$year,0,1,"C");
  
  
  //ceate table
  //cell(width, height, text, border, end line, align)
  $pdf->SetFont("Arial","","10");
   
  $pdf->Cell(30,7,"Employee ID",1,0);
  $pdf->Cell(30,7,"Basic Salary",1,0);
  $pdf->Cell(30,7,"Allowence",1,0);
  $pdf->Cell(30,7,"Commission",1,0);
  $pdf->Cell(30,7,"Total Salary",1,1);
   
  //end of line
  
 
		 
		 
	$query1 = mysqli_query($con,"SELECT employee_id, basic_sallary, attendance_allowence, commission, (basic_sallary + attendance_allowence + commission)as total    FROM sallary    WHERE month = $month    HAVING employee_id");
	while($emp = mysqli_fetch_array($query1)){
         $pdf->Cell(30,7,$emp['employee_id'],1,0,"C");
		 $pdf->Cell(30,7,$emp['basic_sallary'],1,0,"R");
         $pdf->Cell(30,7,$emp['attendance_allowence'],1,0,"R");
         $pdf->Cell(30,7,$emp['commission'],1,0,"R");
		 $pdf->Cell(30,7,$emp['total'],1,1,"R");
	}
		 
		 
	



		 
		 
$pdf->Output();

?>
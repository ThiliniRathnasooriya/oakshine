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
  $pdf->Cell(0,10,"Report to get most and least sold item ",0,1,"C");
  $pdf->Cell(0,10,"for the month of ". $monthName ." ".$year,0,1,"C");
  
  
  //ceate table
  //cell(width, height, text, border, end line, align)
  $pdf->SetFont("Arial","","10");
   
  $pdf->Cell(20,7,"Item ID",1,0);
  $pdf->Cell(50,7,"Item Name",1,0);
  $pdf->Cell(40,7,"Amount of sold item ",1,1); 
  //end of line
  
  
  //set data
   $pdf->SetFont("Arial","","10");
  $query1 = mysqli_query($con,"SELECT * FROM `item`");
      while($item_id_and_name = mysqli_fetch_array($query1)){
		  $pdf->Cell(20,7,$item_id_and_name['item_id'],1,0);
		  $pdf->Cell(50,7,$item_id_and_name['item_name'],1,1);
		  
	  } 
   
   
 
$pdf->Output();

?>
	
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
  $pdf->Cell(0,10,"Income statement for the month of ". $monthName ." ".$year,0,1,"C");
  
  //ceate table
  //cell(width, height, text, border, end line, align)
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"Gross Sales",1,0);
  
  // set gross amount
  $query1 = mysqli_query($con,"SELECT sum(amount) as gross FROM bill WHERE date between '$year-$month-1' and '$year-$month-31'");
  while($bill = mysqli_fetch_array($query1)){  
  $pdf->Cell(30,7,$bill['gross'],1,0,"R");
 $bill2 = $bill['gross'];
  }
  $pdf->Cell(30,7," ",1,1); //end of line
  
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"Cost Of Goods Sold",1,0,"C");
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"Biginning Inventory",1,0);
  
  //set biginning inventory
  $pdf->Cell(30,7," ",1,0);   
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"+ Purchased goods",1,0);
  
  //set purchased goods
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"+ purchased expenses",1,0);
  
  // set purchase expenses
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Inventory Available:",1,0);
  
  // set inventory available
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"(-) Ending Inventory",1,0);
  
  //set ending inventory
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Cost Of Goods Sold:",1,0);
  $pdf->Cell(30,7," ",1,0); 
  
  //set cost of good sold
  $pdf->Cell(30,7," ",1,1);
       //end of line
  
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Gross Profit or Loss:",1,0);
  $pdf->Cell(30,7," ",1,0);
  
  //set gross profit or loss
     $pdf->Cell(30,7," ",1,1);
	 //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"(-) Other Expenses",1,0,"C");
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  
      //set other expenses discription and amount
	$pdf->Cell(100,7," ",1,0);
	$pdf->Cell(30,7," ",1,0);
	$pdf->Cell(30,7," ",1,1);
		 

  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Total Expenses:",1,0);
  $pdf->Cell(30,7," ",1,0);
  
  //set total expenses
     $pdf->Cell(30,7," ",1,1);
   //end of line
  
  
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Net Income:",1,0);
  $pdf->Cell(30,7," ",1,0);
  
  // set net income

     $pdf->Cell(30,7," ",1,1);
	 //end of line
  
  $pdf->SetFont("Arial","","10");
  $pdf->Cell(100,7,"+ Other Income",1,0,"C");
  $pdf->Cell(30,7," ",1,0);
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->SetFont("Arial","","10");
  
     //set other income discription and amount
     $pdf->Cell(100,7," ",1,0);
	 $pdf->Cell(30,7," ",1,0);
	 $pdf->Cell(30,7," ",1,1);
	 
	 
	 
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Total Other Income:",1,0);
  $pdf->Cell(30,7," ",1,0);
  
  // set total other income
     $pdf->Cell(30,7," ",1,1);
   //end of line
  
  $pdf->SetFont("Arial","B","10");
  $pdf->Cell(100,7,"Net Income or Loss",1,0,"C");
  $pdf->Cell(30,7," ",1,0);
  
  // set netincome or loss (final)
  $pdf->Cell(30,7," ",1,1); //end of line
  
  $pdf->Output();
?>



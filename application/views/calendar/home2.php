<?php
//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'oakshine');

?>


<html>
   <head>
      <title></title>
	  <meta http-equiv="Content-Type" content="text/html; charset=unicode"/>
	  <meta content="CoffeeCup HTML Editor (www.coffeecup.com)" name="generator"/>
	  <style>
	     #div1
		 {
			 border: 1px solid black;
			 margin-left: 25px;
			 margin-right: 25px;
			 height: 800px;
		 }
	   </style>
	  </head>
	  
  <body>
  <div id="div1">
  <p style="text-align:center;font-size:25px;"> <B> OAKSHINE COMPANY PVT (LTD) </B> </p>
  <p style="font-size:20px;"> * Profit and loss report  </p>  <br>      
     <form method="post" action="report/view_report">
	       <input type="date" name="date" required>
		   <input type="submit" name="view" value="submit">
	 </form>
  
  
  <br>
  <br>
 
  <p style="font-size:20px;"> * Report to get most and least sold item </p>  <br>      
     <form method="post" action="report/view_most_and_less_sold_product">
	       <input type="date" name="date" required>
		   <input type="submit" name="view" value="submit">
	 </form>
	 
	 
   <br>
   <br>
   
   <p style="font-size:20px;"> * Employee Salary Report </p>  <br>      
     <form method="post" action="report/view_employee_report">
	       <input type="date" name="date" required>
		   <input type="submit" name="view" value="submit">
	 </form>
	 
	 
	<br>
    <br>

	
    <p style="font-size:20px;"> * Employee details </p>  <br> 
	<p	style="font-size:16px;"> Select employee ID </p>
     <form method="get" action="report/get_data">
	       <select name="employee_id" required>
		           <?php
				      //show employee list as options
					  $query = mysqli_query($con,"select * from employee");
					  while($employeeDetails = mysqli_fetch_array($query)){
						  echo "<option value='".$employeeDetails['employee_id']."'>".$employeeDetails['employee_id']."</option>";
					  }
					  ?>
			</select>
			 <input type="submit" name="view" value="selected">
	</form>

	      
  </div> 
	 
	  
  </body>
</html>
	  
	 
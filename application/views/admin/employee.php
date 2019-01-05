<head><title>Oakshine | Home</title>
<style>
table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
.form-inline {
    padding:0px;
}
.form-inline > * {
    margin:15px 3px !important;
}
/* .row1{
  background-color: #141516;
  color: white;
} */
}
</style>
</head>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Home Page</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Home Page</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3>23</h3>

								<p>Vendors</p>
							</div>
							<div class="icon">
							<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>12</h3>

								<p>Suppliers</p>
							</div>
							<div class="icon">
							<i class="ion ion-person-add"></i>
								<!-- <i class="ion ion-stats-bars"></i> -->
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>44</h3>

								<p>Orders</p>
							</div>
							<div class="icon">
							<i class="ion ion-bag"></i>
								
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-danger">
							<div class="inner">
								<h3>12</h3>

								<p>Complaints</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					
					<section class="col-lg-12 connectedSortable">
						<div class="card">
							<div class="card-header">								
								<div class="container">
									<div class="row">		
                    <!-- .col -->
                    <div  id="regID">
                        <div class="col-lg-12 white-box">
												<h3 class="card-title">
													<i class="ion ion-clipboard mr-1"></i>
														Employees
												</h3>
												</div>
										</div>
									</div>
								</div>
							<div>
							<div class="card-body">
                  <div class="row">		
									<img class="col-lg-3" src="<?php echo base_url().'assets/img/employee/employee.jpg';?>" alt=""  width="300" height="300">      
												<div class="comment-center p-t-10">
				<form class="col-lg-9" method="post" action="<?php echo base_url().'employee/employeeupdate';?>">
				<div class="form-group">
        <div class="form-inline">
          <label>NIC <small> (Do not enter "V") </small></label>
						<input type="text" name="nic" id="nic1" required class="form-control col-md-4" placeholder="859436857">
        </div>       
        <div class="form-inline">
          <label>Basic Salary</label>
					<input type="text" name="basic_salary" id="basic_salary1" required class="form-control col-md-4" placeholder="20000">
				</div>
				<div class="form-inline">
					<label>Position</label>
          	<input type="text" name="position" id="position1" required class="form-control col-md-5" placeholder="Supporter">
        </div>
				</div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>          			
          </div>
					</div>
							<div class="card-body">
                            <div class="row">

					<section class="col-lg-12 connectedSortable">
						<div class="card">
							<div class="card-header">
								
								<div class="container">

									<div class="btn-group">

										<button type="button" class="btn btn-primary" title="add employee" data-toggle="modal" data-target="#addemployeeModal">Add New Employee</button>
										<button type="button" class="btn btn-danger" title="delete employee" data-toggle="modal" data-target="#deleteemployeeModal">Delete Employee</button>
                    <button type="button" class="btn btn-success" title="calculate" data-toggle="modal" data-target="#salaryModal">Salary Details</button>
                                    </div>
								</div>	
							</div>													  
							<table id="table" class=" table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="row1">Employee ID</th>
								<th class="row1">NIC</th>
								<th class="row1">Employee Name</th>
								<th class="row1">Address</th>
								<th class="row1">Phone Number</th>
								<th class="row1">Email</th>
								<th class="row1">Qualifications</th>
								<th class="row1">Basic Salary</th>
								<th class="row1">Position</th>
							</tr>
						</thead>
						<tbody>
							
						
							<?php 
								foreach ($reg2 as $row){
									echo "<tr><td>". $row->employee_id."</td><td>". $row->nic."</td><td>". $row->name."</td><td>". $row->address."</td><td>".$row->phone_no."</td><td>".$row->email."</td><td>". $row->qualifications."</td><td>". $row->basic_salary."</td><td>". $row->position."</td></tr>";
											
								}	
								?>					
   
						</tbody>
					</table>

					<script>
					var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("nic1").value = this.cells[1].innerHTML;
                         document.getElementById("basic_salary1").value = this.cells[7].innerHTML;
                         document.getElementById("position1").value = this.cells[8].innerHTML;
                    };
                }
							</script>
                              			
                        </div>
                    </div>
                    
                    <!-- /.col -->
                </div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->



				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
		<div class="p-3">
			<h5>Title</h5>
			<p>Sidebar content</p>
		</div>
	</aside>
	<!-- /.control-sidebar -->

	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- To the right -->
		<div class="float-right d-none d-sm-inline">
			Anything you want
		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2014-2018 <a href="#">Teamforesight</a>.</strong> All rights reserved.
	</footer>
</div>
<!-- ./wrapper -->
<!-- Add Employee Modal -->
<div class="modal fade" id="addemployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'employee/employee';?>">
        <div class="form-group">
          <label>NIC</label>
          <input type="text" name="nic" id="nic" required class="form-control" placeholder="Ex: 8596743298">
          <small>Do not enter the character "V".</small>
        </div>
        <div class="form-group">
          <label>Employee Name</label>
          <input type="text" name="name" id="name" required class="form-control" placeholder="Ex: Thilini">
        </div>
        <div class="form-group ">
          <label>Address</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="text" id="address" name="address" required class="form-control" placeholder="Ex: Gampaha">
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Telephone Number</label>
          <input type="number" id="phone_no" name="phone_no" required class="form-control" placeholder="Ex: 0770000000">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" required class="form-control" placeholder="Ex: thilini@gmail.com">
        </div>
        <div class="form-group">
          <label>Qualifications</label>
          <input type="text" name="qualifications" required class="form-control" placeholder="Ex: O/L">
        </div>
        
        <div class="form-group">
          <label>Basic Salary</label>
          <input type="num" name="basic_salary" id="basic_salary" required class="form-control col-md-6" placeholder="Ex: 30000">
        </div>
        
				<div class="form-group">
          <label>Position</label>
          <input type="text" name="position" id="position" required class="form-control col-md-6" placeholder="Ex: Supporter">
        </div>

				<div class="form-group">
          <label>Image</label>
          	<input type="text" name="img" id="img" required class="form-control col-md-6" placeholder="Ex: worker.jpg">
        </div>

				<div class="form-group">
          <label>Username</label>
          	<input type="text" name="username" id="username" required class="form-control col-md-6" placeholder="Ex: thilini120">
        </div>

				<div class="form-group">
          <label>Password</label>
          	<input type="text" name="password" id="password" required class="form-control col-md-6" placeholder="Ex: 1234*#aBc">
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Employee Modal -->
<!--<div class="modal fade" id="updateemployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'employee/employeeupdate';?>">
        <div class="form-group">
          <label>NIC</label>
						<select class="form-control target" id="df" name="nic">
							<option>NIC</option>
                <?php foreach($reg2 as $nic){?>
                  <option value="<?php echo $nic->employee_id;?>"><?php echo $nic->nic;?></option>
                  <?php } ?>
            </select>
          <small>Do not enter the character "V".</small>
        </div>       
        <div class="form-group">
          <label>Basic Salary</label>
					<input type="text" name="basic_salary" id="basic_salary" required class="form-control col-md-6" placeholder="20000">
        </div>
				<div class="form-group">
          <label>Position</label>
          	<input type="text" name="position" id="position" required class="form-control col-md-6" placeholder="Supporter">
        </div>
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>-->

<!-- Delete employee Modal -->
<div class="modal fade" id="deleteemployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'employee/employeedelete';?>">
				<div class="form-group">
          <label>Employee NIC</label>
          <select class="form-control target" id="nic" name="nic">
							<option>Employee NIC</option>
                <?php foreach($reg2 as $employee){?>
                  <option value="<?php echo $employee->nic;?>"><?php echo $employee->nic;?></option>
                  <?php } ?>
          </select>
        </div>
       </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Salary Modal -->
<div class="modal fade" id="salaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calculate Salary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'employee/salary';?>">
			<div class="form-group">
          <label>Employee NIC</label>
					<select class="form-control target" id="customer_nic" name="customer_nic">
							<option>Employee NIC</option>
                <?php foreach($reg2 as $employee){?>
                  <option value="<?php echo $employee->nic;?>"><?php echo $employee->nic;?></option>
                  <?php } ?>
          </select>
          <label>Month</label>
          <input type="num" name="month" id="month" required class="form-control" placeholder="1">
        </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/dist/js/plugins/jquery/node_modules/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js';?>"></script>
<script>
						

						$("#nic").keyup(function(){//click
							$.ajax({
								url : "<?php echo base_url(); ?>employee/employeeupdate",
								type : "POST",
								dataType : "json",
								data : {"nic" : this.value,"name": }, //$('#name').val()
								success : function(data) {
									if(data.length!=0){
										console.log(data[0].customer_nic);
										$('#cname').val(data[0].customer_nic);
									}else{
										alert("Invalid NIC");
									}
												
								},
								error : function(err) {
									console.log(err);
								}
							});
						})
						$("#df").change(function(){//click
							$.ajax({
								url : "<?php echo base_url(); ?>employee/loadEmployeeData",
								type : "POST",
								dataType : "json",
								data : {"nic" : this.value }, //$('#name').val()
								success : function(data) {
									console.log($data);
												
								},
								error : function(err) {
									console.log(err);
								}
							});
						})

					</script>
</body>
</html>

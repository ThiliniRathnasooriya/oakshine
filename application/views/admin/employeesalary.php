<title>Oakshine | Home</title>
	

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
								<h3 class="card-title">
									<i class="ion ion-clipboard mr-1"></i>
									Employees
								</h3>

								<!-- <div class="card-tools">
									<ul class="pagination pagination-sm">
										<li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
										<li class="page-item"><a href="#" class="page-link">1</a></li>
										<li class="page-item"><a href="#" class="page-link">2</a></li>
										<li class="page-item"><a href="#" class="page-link">3</a></li>
										<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
									</ul>
								</div> -->
							</div>
							<!-- /.card-header -->
							<div class="card-body">
                            <div class="row">

					<section class="col-lg-12 connectedSortable">
						<div class="card">
							<div class="card-header">
								
								<div class="container">

									<div class="btn-group">

										<button type="button" class="btn btn-primary" title="add employee" data-toggle="modal" data-target="#addemployeeModal">Add Employee</button>
										<button type="button" class="btn btn-success"title="update employee" data-toggle="modal" data-target="#updateemployeeModal">Update Employee</button>
										<button type="button" class="btn btn-danger" title="delete employee" data-toggle="modal" data-target="#deleteemployeeModal">Delete Employee</button>
                    <button type="button" class="btn btn-info" title="calculate" data-toggle="modal" data-target="#salaryModal">Salary Details</button>
                                    </div>
								</div>	

							</div>
							<!-- /.card-header -->
							<div class="card-body">
                            <div class="row">		
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12" id="regID">
                        <div class="white-box">
                            <h3 class="box-title">Employee Salary</h3>
                            <div class="comment-center p-t-10">
							<table class="table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="column1">Employee ID</th>
								<th class="column2">Basic Salary</th>
								<th class="column3">Commission</th>
								<th class="column3">Commission Count</th>
								<th class="column3">Month</th>
								<th class="column3">Total</th>
							</tr>
						</thead>
						<tbody>
						<?php 
								if(isset($reg2)){
									foreach ($reg2 as $row){?>
										<tr>
										<tr><?php echo $row->employee_id;?></td>
										<td><?php echo $row->year;?></td>
										<td><?php echo $row->month;?> </td>
										<td><?php echo $row->basic_salary;?></td>
										<!-- <td>". $row->address ."</td><td>". $row->phone_no."</td><td>". $row->commission_precentage."</td><td>". $row->email."</td><td>". $row->qualification."</td><td>". $row->img1."</td><td>". $row->basic_salary."</td></tr>";
											 -->
								<?php	}	
								}
								?>				
   
						</tbody>
					</table>
                              			
                        </div>
                    </div>
                    
                    <!-- /.col -->
                </div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</section>
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

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/dist/js/plugins/jquery/node_modules/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js';?>"></script>
</body>
</html>

<<head><title>Oakshine | Home</title>
<style>
.form-inline {
    padding:0px;
}
.form-inline > * {
    margin:7px 3px !important;
}

/* table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            } */
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
														Vehicle Details
												</h3>
												</div>
										</div>
									</div>
								</div>
							<div>
							<div class="card-body">
                  <div class="row">		
									<img class="col-lg-3" src="<?php echo base_url().'assets/img/employee/lorry.jpg';?>" alt=""  width="300" height="300">      
												<div class="comment-center p-t-10">
				<form class="col-lg-9" method="post" action="<?php echo base_url().'vehicle/updatevehicle';?>">
				<div class="form-group">
        <div class="form-inline">
          <label>Vehicle Number</label>
          <input type="text" name="vehicle_no" id="vehicle_no1" required class="form-control col-md-6" placeholder="Ex: AC7887">
        </div>
        <div class="form-inline">
          <label>Fuelling Cost</label>
          <input type="number" id="fuelling_cost1" name="fuelling_cost" required class="form-control col-md-6" placeholder="Ex: 1000">
        </div>
				<div class="form-inline">
          <label>Maintenance Cost</label>
          <input type="number" id="maintainance_cost1" name="maintainance_cost" required class="form-control col-md-5" placeholder="Ex: 1000">
        </div> 
				<div class="form-inline">
          <label>Other Cost</label>
          <input type="number" id="other_cost1" name="other_cost" required class="form-control col-md-6" placeholder="Ex: 1000">
        </div>
				<div class="form-inline">
          <label>Date</label>
          <input type="date" id="date1" name="date" required class="form-control col-md-8" >
        </div>
				<div class="form-inline">
          <label>Vehicle Type</label>
          <input type="text" id="vehicle_type1" name="vehicle_type" required class="form-control col-md-6" placeholder="Ex: Lorry">
        </div>      
				</div>
			<div class="form-group">
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

										<button type="button" class="btn btn-success" title="add order" data-toggle="modal" data-target="#addvehicleModal">Add Vehicle Details</button>
										<button type="button" class="btn btn-danger" title="delete order" data-toggle="modal" data-target="#deletevehicleModal">Delete Vehicle Details</button>
                                   </div>
								</div>	
							</div>													  
							<table id="table" class=" table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="column1">Vehicle Number</th>
								<th class="column2">Fuelling Cost</th>
								<th class="column3">Maintainance Cost</th>
								<th class="column3">Other Cost</th>
								<th class="column3">Date</th>
								<th class="column3">Vehicle Type</th>
							</tr>
						</thead>
						<tbody>
							
						
							<?php 
								foreach ($reg2 as $row){
									echo "<tr><td>". $row->vehicle_no."</td><td>". $row->fuelling_cost."</td><td>". $row->maintainance_cost."</td><td>". $row->other_cost ."</td><td>". $row->date ."</td><td>". $row->vehicle_type."</td></tr>";
										
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
                         document.getElementById("vehicle_no1").value = this.cells[0].innerHTML;
                         document.getElementById("fuelling_cost1").value = this.cells[1].innerHTML;
                         document.getElementById("maintainance_cost1").value = this.cells[2].innerHTML;
                         document.getElementById("other_cost1").value = this.cells[3].innerHTML;
                         document.getElementById("date1").value = this.cells[4].innerHTML;
                         document.getElementById("vehicle_type1").value = this.cells[5].innerHTML;
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

<!-- Add vehicle Modal -->
<div class="modal fade" id="addvehicleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'vehicle/vehicle';?>">
        <div class="form-group">
          <label>Vehicle Number</label>
          <input type="text" name="vehicle_no" id="vehicle_no" required class="form-control" placeholder="Ex: AC7887">
        </div>     
        <div class="form-group">
          <label>Fuelling Cost</label>
          <input type="num" name="fuelling_cost" id="fuelling_cost" required class="form-control" placeholder="Ex: 1000">
        </div> 
        <div class="form-group">
          <label>Maintainance Cost</label>
          <input type="num" name="maintainance_cost" id="maintainance_cost" required class="form-control" placeholder="Ex: 1000">
        </div> 
        <div class="form-group">
          <label>Other Cost</label>
          <input type="num" name="other_cost" id="other_cost" required class="form-control" placeholder="Ex: 1000">
        </div>
				<div class="form-group">
          <label>Date</label>
          <input type="date" name="date" id="date" required class="form-control">
        </div> 
				<div class="form-group">
          <label>Vehicle Type</label>
          <input type="text" name="vehicle_type" id="vehicle_type" required class="form-control" placeholder="Ex: Lorry">
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

<!-- Update vehicle Modal -->
<div class="modal fade" id="updatevehicleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'vehicle/updatevehicle';?>">
        <div class="form-group ">
          <label>Fuelling Cost</label>
              <input type="number" id="fuelling_cost" name="fuelling_cost" required class="form-control col-md-6" placeholder="1500">
        </div>
        <div class="form-group">
          <label>Maintainance Cost</label>
          <input type="num" name="maintainance_cost" id="maintainance_cost" required class="form-control" placeholder="Ex: Iron">
        </div>
        
        <div class="form-group">
          <label>Other Cost</label>
          <input type="num" id="other_cost" name="other_cost" required class="form-control col-md-6" placeholder="10">
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete vehicle Modal -->
<div class="modal fade" id="deletevehicleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'vehicle/deletevehicle';?>">
        <div class="form-group">
          <label>Vehicle Number</label>
					<select class="form-control target" id="vehicle_no" name="vehicle_no">
							<option>Vehicle Number</option>
                <?php foreach($reg2 as $vehicle){?>
                  <option value="<?php echo $vehicle->vehicle_no;?>"><?php echo $vehicle->vehicle_no;?>-  <?php echo $vehicle->vehicle_type;?></option>
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

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/dist/js/plugins/jquery/node_modules/jquery/dist/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js';?>"></script>
</body>
</html>

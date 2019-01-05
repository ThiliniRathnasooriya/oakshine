<<head><title>Oakshine | Home</title>
<style>
.form-inline {
    padding:0px;
}
.form-inline > * {
    margin:15px 3px !important;
}

table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
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
						<h1 class="m-0 text-dark">Customer</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Customer</li>
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
														Customers
												</h3>
												</div>
										</div>
									</div>
								</div>
							<div>
							<div class="card-body">
                  <div class="row">		
									<img class="col-lg-3" src="<?php echo base_url().'assets/img/employee/customer.jpg';?>" alt=""  width="300" height="300">      
												<div class="comment-center p-t-10">
				<form class="col-lg-9" method="post" action="<?php echo base_url().'adminCustomer/custupdate';?>">
				<div class="form-group">
				<div class="form-inline">
          <label>NIC</label>
						<input type="number" name="nic" id="nic1" required class="form-control col-md-6" placeholder="859436857">
          </div>
					<div class="form-inline">
					<label>Address</label>
					<input type="text" name="address" id="address1" required class="form-control col-md-6" placeholder="Divlapitiya">
        </div>
				<div class="form-inline">
          <label>Email</label>
          	<input type="text" name="email" id="email1" required class="form-control col-md-8" placeholder="sunil@gmail.com">
        </div>
				<div class="form-inline">
					<label>Phone Number</label>
          	<input type="number" name="phone-no" id="phone_no1" required class="form-control col-md-6" placeholder="0770000000">
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

										<button type="button" class="btn btn-success" title="add item" data-toggle="modal" data-target="#addcustomerModal">Add New Customer</button>
										<button type="button" class="btn btn-danger" title="delete item" data-toggle="modal" data-target="#deletecustomerModal">Delete Customer</button>
                  </div>
								</div>	
							</div>													  
							<table id="table" class=" table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="column1">Customer ID</th>
								<th class="column2">NIC</th>
								<th class="column3">Name</th>
								<th class="column3">Address</th>
								<th class="column3">Email</th>
								<th class="column3">Phone Number</th>
							</tr>
						</thead>
						<tbody>
							
						
							<?php 
								foreach ($reg2 as $row){
									echo "<tr><td>". $row->customer_id ."</td><td>". $row->customer_nic."</td><td>". $row->name."</td><td>". $row->address ."</td><td>". $row->email."</td><td>". $row->phone_no."</td></tr>";
											
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
                         document.getElementById("address1").value = this.cells[3].innerHTML;
                         document.getElementById("email1").value = this.cells[4].innerHTML;
												 document.getElementById("phone_no1").value = this.cells[5].innerHTML;
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

<!-- Add cust Modal -->
<div class="modal fade" id="addcustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminCustomer/cust';?>">
        <div class="form-group">
          <label>Customer name</label>
          <input type="text" name="cust_name" id="cust_name" required class="form-control" placeholder="Ex: Sunil">
        </div>
        <div class="form-group ">
          <label>NIC</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="number" id="customer_nic" name="customer_nic" required class="form-control col-md-6" placeholder="859436857">
              <small>Do not enter character "v".</small>
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" id="address" name="address" required class="form-control col-md-6" placeholder="Divlapitiya">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="email" required class="form-control" placeholder="sunil@gmail.com">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="num" name="phone_no" id="phone_no" required class="form-control" placeholder="0770000000">
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

<!-- Update cust Modal -->
<!--<div class="modal fade" id="updatecustModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminCustomer/custupdate';?>">
        <div class="form-group">
          <label>Customer name</label>
          <input type="text" name="cust_name" id="cust_name" required class="form-control" placeholder="Ex: Iron">
        </div>
        <div class="form-group ">
          <label>NIC</label>

              <input type="number" id="nic" name="nic" required class="form-control col-md-6" placeholder="1500">
              <small>Do not enter character "v".</small>
            
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" id="address" name="address" required class="form-control col-md-6" placeholder="10">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="email" required class="form-control" placeholder="2">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="num" name="phone_no" id="phone_no" required class="form-control" placeholder="3">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>-->

<!-- Delete cust Modal -->
<div class="modal fade" id="deletecustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminCustomer/custdelete';?>">
				<div class="form-group">
          <label>Customer NIC</label>
						<select class="form-control target" id="customer_nic" name="customer_nic">
							<option>Customer NIC</option>
                <?php foreach($reg2 as $customer){?>
                  <option value="<?php echo $customer->customer_nic;?>"><?php echo $customer->customer_nic;?></option>
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

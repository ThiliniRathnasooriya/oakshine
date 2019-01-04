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
														Orders
												</h3>
												</div>
										</div>
									</div>
								</div>
							<div>
							<div class="card-body">
                  <div class="row">		
									<img class="col-lg-3" src="<?php echo base_url().'assets/img/employee/order.png';?>" alt=""  width="300" height="300">      
												<div class="comment-center p-t-10">
				<form class="col-lg-9" method="post" action="<?php echo base_url().'adminorders/orderupdate';?>">
				<div class="form-group">
				<div class="form-inline">
          <label>Order ID</label>
          <input type="number" name="order_id" id="order_id1" required class="form-control col-md-6" placeholder="Ex: 1">
        </div>
        <div class="form-inline">
          <label>Item Name</label>
          <input type="text" name="item_name" id="item_name1" required class="form-control col-md-6" placeholder="Ex: Iron">
        </div>
        <div class="form-inline">
          <label>Customer NIC</label>
          <input type="number" id="customer_nic1" name="customer_nic" required class="form-control col-md-6" placeholder="859246865">
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

										<button type="button" class="btn btn-primary" title="add order" data-toggle="modal" data-target="#addorderModal">Add Ordinary Orders</button>
										<button type="button" class="btn btn-danger" title="delete order" data-toggle="modal" data-target="#deleteorderModal">Delete Ordinary Orders</button>
                    <button type="button" class="btn btn-success" title="send order notification" data-toggle="modal" data-target="#sendorderModal">Send Order Notifications</button>
                                   </div>
								</div>	
							</div>													  
							<table id="table" class=" table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="column1">Order ID</th>
								<th class="column2">Order Date</th>
								<th class="column3">Item Name</th>
								<th class="column3">Total Amount</th>
								<th class="column3">Customer NIC</th>
							</tr>
						</thead>
						<tbody>
							
						
							<?php 
								foreach ($reg2 as $row){
									echo "<tr><td>". $row->order_id."</td><td>". $row->order_date."</td><td>". $row->item_name."</td><td>". $row->total_amount."</td><td>". $row->customer_nic."</td></tr>";
											
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
                         document.getElementById("order_id1").value = this.cells[0].innerHTML;
                         document.getElementById("item_name1").value = this.cells[2].innerHTML;
                         document.getElementById("customer_nic1").value = this.cells[4].innerHTML;
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

<!-- Add Order Modal -->
<div class="modal fade" id="addorderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminorders/orders';?>">
        <div class="form-group">
          <label>Order Date</label>
					<input type="date" name="order_date" id="order_date" required class="form-control" placeholder="Ex: Iron">
        </div>
				<div class="form-group">
          <label>Item Name</label>
						<select class="form-control target" id="item_name" name="item_name">
							<option>Item Name</option>
                <?php foreach($reg3 as $item){?>
                  <option value="<?php echo $item->item_name;?>"><?php echo $item->item_name;?> - Rs. <?php echo $item->price;?></option>
									
                  <?php } ?>
            </select>
        </div>
				<div class="form-group">
          <label>Customer NIC</label>
						<select class="form-control target" id="order_id" name="customer_nic">
							<option>Customer NIC</option>
                <?php foreach($reg5 as $customer){?>
                  <option value="<?php echo $customer->customer_nic;?>"><?php echo $customer->customer_nic;?></option>
									
                  <?php } ?>
            </select>
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


<!-- Delete Order Modal -->
<div class="modal fade" id="deleteorderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminorders/orderdelete';?>">
        <div class="form-group">
          <label>Order ID</label>
						<select class="form-control target" id="order_id" name="order_id">
							<option>Order ID</option>
                <?php foreach($reg2 as $order){?>
                  <option value="<?php echo $order->order_id;?>"><?php echo $order->order_id;?></option>
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

<!-- Send Order Modal -->
<div class="modal fade" id="sendorderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Order Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="notification" method="post" action="<?php echo base_url().'adminorders/sendorders';?>">
				<div class="form-group">
          <label>Order ID</label>
						<select class="form-control target" id="order_id" name="order_id">
							<option>Order ID</option>
                <?php foreach($reg2 as $order){?>
                  <option value="<?php echo $order->order_id;?>"><?php echo $order->order_id;?></option>
                  <?php } ?>
            </select>
        </div> 
				<div class="form-group">
          <label>Employee ID</label>
						<select class="form-control target" id="employee_id" name="employee_id">
							<option>Employee ID</option>
                <?php foreach($reg4 as $employee){?>
                  <option value="<?php echo $employee->employee_id;?>"><?php echo $employee->employee_id;?></option>
                  <?php } ?>
            </select>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
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
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#notification').on('submit', function(event){
  event.preventDefault();
  if($('#order_id').val() != '' && $('#employee_id').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#notification')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});


$("#order_id").keyup(function(){//click
							$.ajax({
								url : "<?php echo base_url(); ?>employee/employeeupdate",
								type : "POST",
								dataType : "json",
								data : {"order_id" : this.value,"name": }, //$('#name').val()
								success : function(data) {
									if(data.length!=0){
										console.log(data[0].order_id);
										$('#cname').val(data[0].order_id);
									}else{
										alert("Invalid order ID");
									}
												
								},
								error : function(err) {
									console.log(err);
								}
							});
						})

$("#employee_id").keyup(function(){//click
							$.ajax({
								url : "<?php echo base_url(); ?>employee/employeeupdate",
								type : "POST",
								dataType : "json",
								data : {"employee_id" : this.value,"name": }, //$('#name').val()
								success : function(data) {
									if(data.length!=0){
										console.log(data[0].employee_id);
										$('#cname').val(data[0].employee_id);
									}else{
										alert("Invalid employee ID");
									}
												
								},
								error : function(err) {
									console.log(err);
								}
							});
						})


</script>

</body>
</html>

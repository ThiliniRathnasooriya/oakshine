<title>Oakshine | Home</title>
	

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>/admin">Home</a></li>
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
					<section class="col-lg-12 connectedSortable">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">
									<i class="ion ion-clipboard mr-1"></i>
									Return Items
								</h3>

							</div>
							<!-- /.card-header -->
							<div class="card-body">
                            <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12" id="regID">
                        <div class="white-box">
                            
							<div class="comment-center p-t-10">
							<form class="form-horizontal" action="<?php echo base_url().'admin/addReturnItem';?>" method="post">
								<div class="card-body">
									<div class="form-group">
										<label for="billNo" style="margin-top: 20px;" class="col-sm-4 control-label" >Sale number of return item</label>

										<div class="col-sm-10">
											<input type="number" style="margin-top: 20px;" class="form-control" id="itemID" placeholder="Enter the bill number" name="bid"> 
										</div>
									</div>
									<div class="form-group">
										<label for="billNo" style="margin-top: 20px;" class="col-sm-4 control-label" >Customer NIC</label>

										<div class="col-sm-10">
											<input type="text" readonly style="margin-top: 20px;" class="form-control" id="cname" name="cnic">
										</div>
									</div>
								</div>
							<!-- /.card-body -->
							<div class="card-footer" style="margin-top: 20px;">
								<button type="submit" style="margin-top: 20px;" class="btn btn-info float-right">Add</button>
					
							</div>
                				<!-- /.card-footer -->
							</form>
                              
							
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
<script>
	$("#itemID").keyup(function(){
		// console.log(this.value);
		$.ajax({
			url : "<?php echo base_url(); ?>admin/loadBillItem",
			type : "POST",
			dataType : "json",
			data : {"itmeID" : this.value},
			success : function(data) {
				// console.log(data[0]);
				if(data[0].length!=0){
					console.log(data[0][0].customer_nic);
					$('#cname').val(data[0][0].customer_nic);
				}else{
					alert("Invalid bill ID");
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

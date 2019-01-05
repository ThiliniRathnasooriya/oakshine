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
							<li class="breadcrumb-item active">View Bill</li>
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
									Bill
								</h3>

							</div>
							<!-- /.card-header -->
							<div class="card-body">
                            <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12" id="regID">
                        <div class="white-box">
                            
                            <div class="comment-center p-t-10">
                            
              <form class="form-horizontal">
                <div class="card-body">
                  
                  
                  <div class="form-group">
				  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/NkzqDhfneildzktre/grunge-dark-background-4k-uhd_bsvpysqu__F0000.png" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<label class="col-sm-2 control-label">Customer Name </label>
								<input type="text" value="<?php echo $cname;?>" readonly class="form-control" id="billNunmer" >
								<label class="col-sm-2 control-label">Date</label>
								<input type="text" value="<?php echo $date;?>" readonly class="form-control" id="billNunmer" >
								<h5>Swipe Right to see Items</h5>
								
							</div>
						</div>
						<?php foreach($items as $item){?>
						<div class="carousel-item">
							<img class="d-block w-100" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/NkzqDhfneildzktre/grunge-dark-background-4k-uhd_bsvpysqu__F0000.png" alt="Second slide">
							<div class="carousel-caption d-none d-md-block">
								<table class="table">
									<tr>
										<td>Sales Number</td>
										<td>Item Name</td>
										<td>Amount</td>
									</tr>
									<tr>
										<td><?php echo $item->bill_no;?></td>
										<td><?php echo $item->item_name;?></td>
										<td><?php echo $item->amount;?></td>
									</tr>
									<tr></tr>
								</table>
							</div>
						</div>
						<?php } ?>
						
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                
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
</body>
</html>

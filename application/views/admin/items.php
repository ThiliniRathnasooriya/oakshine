<head><title>Oakshine | Home</title>
<style>
.form-inline {
    padding:0px;
}
.form-inline > * {
    margin:7px 3px !important;
}

table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }

#imageitem {
  border-radius: 50%;
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
														Items
												</h3>
												</div>
										</div>
									</div>
								</div>
							<div>
							<div class="card-body">
                  <div class="row">		
									<img class="col-lg-3" id="imageitem" src="<?php echo base_url().'assets/img/product/itemclip.jpg';?>" alt=""  width="300" height="300">      
												<div class="comment-center p-t-10">
				<form class="col-lg-9" method="post" action="<?php echo base_url().'adminItem/itemupdate';?>">
				<div class="form-group">
				<div class="form-inline">
          <label>Item ID</label>
						<input type="number" name="item_id" id="item_id1" required class="form-control col-md-4" placeholder="1">
          </div>
				<div class="form-inline">
          <label>Price</label>
						<input type="number" name="price" id="price1" required class="form-control col-md-4" placeholder="5000">
          </div>
					<div class="form-inline">
					<label>Item Quantity</label>
					<input type="number" name="item_amount" id="item_amount1" required class="form-control col-md-4" placeholder="8">
        </div>
				<div class="form-inline">
          <label>Discount</label>
          	<input type="number" name="discount" id="discount1" required class="form-control col-md-4" placeholder="5">
        </div>
				<div class="form-inline">
					<label>installment_no</label>
          	<input type="number" name="installment_no" id="installment_no1" required class="form-control col-md-4" placeholder="5">
        </div>
				<div class="form-inline">
          <label>Reorder Level</label>
          	<input type="number" name="reorder" id="reorder1" required class="form-control col-md-4" placeholder="5">
        </div>
				<div class="form-inline">
          <label>Date</label>
          	<input type="date" name="date" id="date1" required class="form-control col-md-8" placeholder="31-12-2018">
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

										<button type="button" class="btn btn-success" title="add item" data-toggle="modal" data-target="#additemModal">Add New Item</button>
										<button type="button" class="btn btn-danger" title="delete item" data-toggle="modal" data-target="#deleteitemModal">Delete Item</button>
                  </div>
								</div>	
							</div>													  
							<table id="table" class=" table table-hover">
						<thead>
							<tr class="table100-head">
								<th class="column1">Item ID</th>
								<th class="column2">Item Name</th>
								<th class="column3">Price</th>
								<th class="column3">Item Quantity</th>
								<th class="column3">Discount</th>
								<th class="column3">installment_no</th>
								<th class="column3">Category ID</th>
								<th class="column3">Image 1</th>
								<th class="column3">Image 2</th>
								<th class="column3">Image 3</th>
								<th class="column3">Description</th>
								<th class="column3">Reorder Level</th>
								<th class="column3">Date</th>
							</tr>
						</thead>
						<tbody>
							
						
							<?php 
								foreach ($reg2 as $row){
									echo "<tr><td>". $row->item_id."</td><td>". $row->item_name."</td><td>". $row->price."</td><td>". $row->item_amount ."</td><td>". $row->discount."</td><td>". $row->installment_no."</td><td>". $row->category_id."</td><td>".$row->img1."</td><td>".$row->img2."</td><td>".$row->img3."</td><td>". $row->description."</td><td>". $row->reorder."</td><td>". $row->date."</td></tr>";
											
								}	
								?>					
   
						</tbody>
					</table>
					<!--<td><img src="<?php echo base_url().'assets/img/product/'.$row->img1;?>" alt=""  width="50" height="50"></td><td><img src="<?php echo base_url().'assets/img/product/'.$row->img2;?>" alt=""  width="50" height="50"></td><td><imgsrc="<?php echo base_url().'assets/img/product/'.$row->img3;?>" alt=""  width="50" height="50"></td><<td><img src="<?php echo base_url().'assets/img/product/'.$row->img1;?>" alt=""  width="50" height="50"></td><td><img src="<?php echo base_url().'assets/img/product/'.$row->img2;?>" alt=""  width="50" height="50"></td><td><imgsrc="<?php echo base_url().'assets/img/product/'.$row->img3;?>" alt=""  width="50" height="50"></td>-->
					<script>
					var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;												 
                         document.getElementById("item_id1").value = this.cells[0].innerHTML;
                         document.getElementById("price1").value = this.cells[2].innerHTML;
                         document.getElementById("item_amount1").value = this.cells[3].innerHTML;
                         document.getElementById("discount1").value = this.cells[4].innerHTML;
												 document.getElementById("installment_no1").value = this.cells[6].innerHTML;
												 document.getElementById("reorder1").value = this.cells[11].innerHTML;
												 document.getElementById("date1").value = this.cells[12].innerHTML;
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
<!-- Add item Modal -->
<div class="modal fade" id="additemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminItem/items';?>">
        <div class="form-group">
          <label>Item name</label>
          <input type="text" name="item_name" id="item_name" required class="form-control" placeholder="Ex: Iron">
        </div>
        <div class="form-group ">
          <label>Price</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="number" id="price" name="price" required class="form-control col-md-6" placeholder="1500">
              <small>Do not enter currency symbols.</small>
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Quantity</label>
          <input type="number" id="amount" name="item_amount" required class="form-control col-md-6" placeholder="10">
        </div>
        <div class="form-group">
          <label>Discount</label>
          <input type="num" name="discount" required class="form-control" placeholder="2">
		  <small>Do not enter the percentage (%) symbol.</small>
        </div>        
        <div class="form-group">
          <label>Payment time period</label>
          <input type="num" name="installment_no" id="cinstallment_no" required class="form-control" placeholder="3">
        </div>
        <div class="form-group">
          <label>category ID</label>
          <input type="num" id="category_id" name="category_id" required class="form-control" placeholder="1">
        </div>

				<div class="form-group">
          <label>Image 1 </label>
					<?php echo form_open_multipart('adminItem/ppUp');?>
					<input type="file" name="img1" size="20" />
				</div>
				<div class="form-group">
          <label>Image 2 </label>
					<?php echo form_open_multipart('adminItem/ppUp');?>
					<input type="file" name="img2" size="20" />
				</div>
				<div class="form-group">
          <label>Image 3 </label>
					<?php echo form_open_multipart('adminItem/ppUp');?>
					<input type="file" name="img3" size="20" />
				</div>
				<div class="form-group">
          <label>Description</label>
          <input type="text" id="description" name="description" required class="form-control" placeholder="Brand Philips">
        </div>
				<div class="form-group">
          <label>Reorder level</label>
          <input type="num" id="reorder" name="reorder" required class="form-control" placeholder="5">
        </div>
				<div class="form-group">
          <label>Date</label>
          <input type="date" id="date" name="date" required class="form-control">
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

<!-- Update item Modal -->
<!--<div class="modal fade" id="updateitemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminItem/itemupdate';?>">
		<div class="form-group">
          <label>Item ID</label>
          <input type="num" name="item_id" id="item_id" required class="form-control" placeholder="1">
        </div>
        <div class="form-group">
          <label>Item name</label>
          <input type="text" name="item_name" id="item_name" required class="form-control" placeholder="Ex: Iron">
        </div>
        <div class="form-group ">
          <label>Price</label>-->
            <!-- <div class="col-md-4 mb-3"> -->
             <!-- <input type="number" id="price" name="price" required class="form-control col-md-6" placeholder="1500">
              <small>Do not enter currency symbols.</small>-->
            <!-- </div> -->
        <!--</div>
        <div class="form-group">
          <label>Quantity</label>
          <input type="number" id="amount" name="item_amount" required class="form-control col-md-6" placeholder="10">
        </div>
        <div class="form-group">
          <label>Discount</label>
          <input type="num" name="discount" required class="form-control" placeholder="2">
		  <small>Do not enter the percentage (%) symbol.</small>
        </div>
        <div class="form-group">
          <label>Commission Percentage</label>
          <input type="num" name="commission_precentage" required class="form-control" placeholder="3">
		  <small>Do not enter the percentage (%) symbol.</small>
        </div>
        
        <div class="form-group">
          <label>Payment time period</label>
          <input type="num" name="payment_time_period" id="commission_time_period" required class="form-control" placeholder="3">
        </div>
        <div class="form-group">
          <label>category ID</label>
          <input type="num" id="category_id" name="category_id" required class="form-control" placeholder="1">
        </div>
		<div class="form-group">
          <label>image 1</label>
          <input type="text" id="img1" name="img1" required class="form-control" placeholder="item-1.jpg">
        </div>
		<div class="form-group">
          <label>image 2</label>
          <input type="text" id="img2" name="img2" required class="form-control" placeholder="item-2.jpg">
        </div>
		<div class="form-group">
          <label>image 3</label>
          <input type="text" id="img3" name="img3" required class="form-control" placeholder="item-3.jpg">
        </div>
		<div class="form-group">
          <label>Description</label>
          <input type="text" id="description" name="description" required class="form-control" placeholder="Brand Philips">
        </div>
		<div class="form-group">
          <label>Reorder level</label>
          <input type="num" id="reorder" name="reorder" required class="form-control" placeholder="5">
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

<!-- Delete item Modal -->
<div class="modal fade" id="deleteitemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'adminItem/itemsdelete';?>">
		<div class="form-group">
          <label>Item Name</label>
					<select class="form-control target" id="item_name" name="item_name">
							<option>Item Name</option>
                <?php foreach($reg2 as $item){?>
                  <option value="<?php echo $item->item_name;?>"><?php echo $item->item_name;?></option>
									
                  <?php } ?>
            </select>
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

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
							<li class="breadcrumb-item active">Add Bill</li>
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
							<!-- <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/addItemDB"> -->
                <div class="card-body">
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label>Name</label>
                    <select class="form-control" name="nic" id="nic">
                      <?php foreach($customers as $customer){?>
                      <option value="<?php echo $customer->nic;?>"><?php echo $customer->name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  </div>
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control target" name="itemid">
										<option>Select Category</option>
                    <?php foreach($categories as $category){?>
                      <option value="<?php echo $category->categoryid;?>"><?php echo $category->categoryname;?></option>
                    <?php } ?>
                    </select>
                  </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="itemType" class="col-sm-4 control-label">Item Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="itemType" placeholder="Type of item">
                    </div>
                  </div> -->
									<table class="table">
									<tr>
												<td>no</td>
												<td>Item name </td>
												
												<td>Price </td>
												<td>Item id </td>
												<td>Advance</td>
											</tr>
									</table>
									<table class="table table-striped" id="itemData">
											
									</table>
									<div class="form-group">
											<label>Selected Item</label>
									</div>
									<table class="table" id="myTable">
												<!-- <tr>
													<td>
														<div class="form-group row">
															<div class="col-xs-2">
																<input class="form-control" type="text" name="qty" placeholder="Item ID"/>
															</div>
														</div>
													</td>
													<td>
														<div class="form-group row">
															<div class="col-xs-2">
																<input class="form-control" type="text" name="qty" placeholder="Quantity"/>
															</div>
														</div>	
													</td>
													<td><input type="button" class="button" value="Add another line" onclick="addField();"></td>
											</tr> -->
										
									</table>
									<button type="button" class="btn btn-primary float-right" onclick="cal()">Calculate</button>		
                  <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Total Advance payment</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" class="form-control" readonly id="price" placeholder="Price of the item">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="reset" class="btn btn-default float-right">Cancel</button>                  
                  <button type="button" class="btn btn-info float-right" id="sub">Submit</button>

                </div>
                <!-- /.card-footer -->
              <!-- </form> -->
                              
							
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
$( ".target" ).change(function() {
  //console.log(this.value);	
	$.ajax({
        url : "<?php echo base_url(); ?>admin/loadCategory",
        type : "POST",
        dataType : "json",
        data : {"catID" : this.value},
        success : function(data) {
						//console.log(data);
						$("#itemData").html("");
						for (var i = 0; i < data.length; i++) {
							var tr = "<tr onclick='myFunction("+ data[i].item_id  +")'>";
								var td0 = "<td>" + (i + 1) + "</td>";
								var td1 = "<td>" + data[i].item_name + "</td>";
								var td2 = "<td>" + data[i].price + "</td>";
								var td3 = "<td>" + data[i].item_id + "</td>";
								var td4 = "<td>" + data[i].advance + "</td>";
								$("#itemData").append(tr + td0 + td1 + td2 + td3 + td4 );

						}
					
        },
        error : function(err) {
            console.log(err);
        }
    });
});
function myFunction(i) { //why do you use jquery function mix with javascript function because I do not find two jquery functions that call another
	//alert( i);// there need to add an xml request function and 
	$.ajax({
        url : "<?php echo base_url(); ?>admin/itemD",
        type : "POST",
        dataType : "json",
        data : {"itID" : i},
        success : function(data) {
						//console.log(data);
						if(data[0].availability==0){
							alert('Item Not Available');
						}else{
							var tr = "<tr>";
							var td0 = "<td>" + (i + 1) + "</td>";
							var td1 = "<td>" + data[0].item_name + "</td>";
							var td2 = "<td>" + data[0].price + "</td>";
							var td3 = "<td>" + data[0].advance + "</td>";
							$("#myTable").append(tr + td0 + td1 + td2 + td3);
							//console.log(data);
						}
						
        },
        error : function(err) {
            console.log(err);
        }
    });
}
	function cal(){
		var oTable = document.getElementById('myTable');
			var rowLength = oTable.rows.length;
			var tot = 0;
			arr  = new Array(rowLength);
			for (i = 0; i < rowLength; i++){
				var oCells = oTable.rows.item(i).cells;
				var cellLength = oCells.length;
				var cellVal = oCells.item(3).innerHTML;
				arr[i] = oCells.item(0).innerHTML;
				tot = tot + parseInt(cellVal);
			}
			document.getElementById("price").value = tot;
	}
$('#sub').click(function(){
		nic = $('#nic').val();
		oTable = document.getElementById('myTable');	
		numberOfRow = oTable.rows.length;
		var arr = [];
		for(i = 0; i < numberOfRow; i++){
			oCells = oTable.rows.item(i).cells;
			arr.push({
				name:oCells.item(1).innerHTML,
				price: oCells.item(2).innerHTML,
				advance:oCells.item(3).innerHTML				
			});
		}
		// console.log(arr);
		id=0;
		var row = $('input', '#myTable').parent().parent().children();			
	 	console.log(row[3]);
		$.post("<?php echo base_url().'admin/addItemDB'?>",{nic:nic, rows:numberOfRow, arr:arr},function(data){ id= data; window.location.replace("<?php echo base_url().'admin/loadBill/';?>"+id+""); if(data){ alert('Bill added Successfully'); } });
		//console.log(id);
	})
</script>
</body>
</html>

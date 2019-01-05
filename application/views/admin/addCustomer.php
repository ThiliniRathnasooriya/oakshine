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
							
							<!-- /.card-header -->
							<div class="card-body">
                            <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12" id="regID">
                        <div class="white-box">
                            
                            <div class="comment-center p-t-10">
                            <form method="post" action="<?php echo base_url().'supporter/addCustomer';?>">
															<div class="form-group">
																<label>Name</label>
																<input type="text" name="name" id="signName" required class="form-control" placeholder="Enter full name">
															</div>
															<div class="form-group ">
																<label>NIC</label>
																	<!-- <div class="col-md-4 mb-3"> -->
																		<input type="number" id="num" onkeyup="checkID(); return false;" name="nic" required class="form-control col-md-6" placeholder="Ex:934560112">
																		<small>Do not Enter the "v" at the end.</small>
																	<!-- </div> -->
															</div>
															<div class="form-group">
																<label>Phone Number</label>
																<input type="number" id="mobile" name="phone_no" onkeyup="check(); return false;" required class="form-control col-md-6" placeholder="Ex: 0719289192">
															</div>
															<div class="form-group">
																<label>Address</label>
																<input type="text" name="address" required class="form-control" placeholder="Enter address">
															</div>
															<div class="form-group">
																<label>Email</label>
																<input type="email" name="email" required class="form-control" placeholder="Email address">
															</div>
															
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Add</button>
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
function check()
{

  var pass1 = document.getElementById('mobile');
  var goodColor = "#ffffff";
  var badColor = "#FF9B37";

  if(mobile.value.length!=10){//validate for ten numbers
  mobile.style.backgroundColor = badColor;//if the input worng this colour
  }
  else{
    mobile.style.backgroundColor = goodColor;//if the input correct this colour
  }
}
function checkID()
{

  var pass1 = document.getElementById('num');
  var goodColor = "#ffffff";
  var badColor = "#FF9B37";

  if(num.value.length!=9){//validate for nine numbers
  num.style.backgroundColor = badColor;
  }
  else{
    num.style.backgroundColor = goodColor;
  }
}

</script>
<script>
$(document).ready(function(){
  $("#p2").keyup(function(){
    var pass = $("#p1").val();
    var pass2 = $("#p2").val();
    var goodColor = "#ffffff";
    var badColor = "#FF9B37";
    if(pass == pass2){
      $("#p2").css("background-color", "#ffffff");
    }else{
      $("#p2").css("background-color", "#FF9B37");
    }
    
  })
});
$('#num').keyup(function(){
	if(this.value.length==9){
		$.ajax({
        url : "<?php echo base_url(); ?>admin/checkAvailability",
        type : "POST",
        dataType : "json",
        data : {"num" : this.value},
        success : function(data) {
					if(data==1){
						alert('NIC Already exist');
						$('#num').css("background-color", "#FF0000");
					}
						
        },
        error : function(err) {
            console.log(err);
        }
    });
	}
});
</script>

</body>
</html>

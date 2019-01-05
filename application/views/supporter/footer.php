<div class="modal fade" id="add_customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
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
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
       <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-alpha
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  
<!-- jQuery -->
<script src="<?php echo base_url()."assets/";?>bower_components/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/";?>bower_components/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/";?>bower_components/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/";?>bower_components/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/";?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/";?>dist/js/demo.js"></script>
</body>
</html>
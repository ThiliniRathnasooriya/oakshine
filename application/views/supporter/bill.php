<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bills</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row justify-content-md-center">
    <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">OAK SHINE ENTERPRISES - BILL</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group">
                    <label for="billNo" class="col-sm-2 control-label">Bill No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="billNunmer" placeholder="Bill number">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="phoneNo" class="col-sm-2 control-label">Phone No</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Phone number">
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="fullName" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fullName" placeholder="Full Name">
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="nic" class="col-sm-2 control-label">NIC</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="nic" placeholder="NIC Nnumber">
                    </div>
                  </div> -->
                  <!-- select -->
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label>NIC</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label>Item Name</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="itemType" class="col-sm-4 control-label">Item Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="itemType" placeholder="Type of item">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="price" placeholder="Price of the item">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellingDate" class="col-sm-4 control-label">Selling Date</label>
                    <div class="col-sm-10">
                      <input type="Date" class="form-control" id="date" placeholder="Date of selling">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="reset" class="btn btn-default float-right">Cancel</button>                  
                  <button type="submit" class="btn btn-info float-right">
                    <a href="<?php echo base_url();?>supporter/viewBill">Submit</a></button>

                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
      </div>

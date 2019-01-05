<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add_customerModal"><i class="fa fa-plus"></i> Add new customer</button>
              </div>      
    </section>
    <!-- /.content -->
    <div class="col-lg-12"> 
          <table class="table table-hover">
          
            <thead class="thead-dark">
              <tr class="table100-head">
                <th class="column1">Name</th>
                <th class="column2">NIC</th>
                <th class="column3">Phone Number</th>
                <th class="column3">Address</th>
              </tr>
            </thead>
            <tbody>
             <!--  <?php 
               foreach($res as $row){
                  echo "<tr><td>". $row->name."</td><td>". $row->nic."</td><td>". $row->phoneNo."</td><td>". $row->address ."</td></tr>";
                  
                    
               } 
                ?>  -->         
   
            </tbody>
          </table>
        </div>
    
  </div>
  <!-- /.content-wrapper -->

  
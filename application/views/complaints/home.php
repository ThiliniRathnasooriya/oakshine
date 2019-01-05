<?php
       if(isset($_SESSION['log'])){?>
       <div class="alert alert-primary" role="alert">
          <?php 
            echo $_SESSION['log'];
          ?>
          </div>
       <?php } else{?>
            <div></div>
       <?php }
       ?>

      <!--================Categories Banner Area =================-->
      <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Complaints</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="<? php echo base_url().'complaints';?>">Complaints</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        

        

     <!--============Complaint Form Area =============-->
     <section class="register_area p_100">
            <div class="container">
                <div class="col-lg-12"> 
                    <div class="row">
                        
                            <div class="billing_details">
                                <h2 class="reg_title">Complaint Details</h2>
                                <form class="billing_inner row" action="<?php echo base_url();?>complaints/complaints" method="post">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Customer Name <span>*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="last">Customer ID<span>*</span></label>
                                            <input type="text" class="form-control" id="cust_id" name="cust_id" aria-describedby="last">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="cname">Order ID <span>*</span></label>
                                            <input type="text" class="form-control" id="order_id" name="order_id" aria-describedby="last">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="address">Description<span>*</span></label>
                                            <input type="text" class="form-control" id="item_id" name="description" aria-describedby="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="ctown">Date<span>*</span></label>
                                            <input type="date" id="start" name="date" value="2018-07-22" min="2018-01-01" max="2020-12-31" />
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn subs_btn form-control">Submit Complaint</button>
                                </form>
                           </div>
                        </div>
        
    
      
        
        
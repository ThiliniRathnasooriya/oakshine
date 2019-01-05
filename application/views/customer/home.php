
        <!--================Home Carousel Area =================-->
        <section class="home_carousel_area">
            <div class="home_carousel_slider owl-carousel">
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="<?php echo base_url().'assets/img/product/item-13.jpg';?>" alt="">
                        <div class="carousel_hover">
                            <h3>Refrigerator</h3>
                            <h4>We feature the best refrigerators </h4>
                            <h5>Including:</h5>
                            <p>Energy saving refrigerators with green technology</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="<?php echo base_url().'assets/img/product/item-2.jpg';?>" alt="">
                        <div class="carousel_hover">
                            <h3>Dressing Table</h3>
                            <h4>We feature the best dressing tables </h4>
                            <h5>Including:</h5>
                            <p>Finest wood & newest designs</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="<?php echo base_url().'assets/img/product/item-3.jpg';?>" alt="">
                        <div class="carousel_hover">
                            <h3>Cupboard</h3>
                            <h4>We feature the best cupboards </h4>
                            <h5>Including:</h5>
                            <p>Modest designs at lowest prices for long term use</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="<?php echo base_url().'assets/img/product/item-4.jpg';?>" alt="">
                        <div class="carousel_hover">
                            <h3>Plastic Chair</h3>
                            <h4>We feature the best plastic chair </h4>
                            <h5>Including:</h5>
                            <p>Quality plastic chairs with new designs</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="<?php echo base_url().'assets/img/product/item-5.jpg';?>" alt="">
                        <div class="carousel_hover">
                            <h3>Mattress</h3>
                            <h4>We feature the best mattress </h4>
                            <h5>Including:</h5>
                            <p>healthy designs & good quality</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <!--================Special Offer Area =================-->
        <!-- <section class="special_offer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_offer_item">
                            <img class="img-fluid" src="<?php echo base_url().'assets/img/feature-add/special-offer-1.jpg';?>" alt="">
                            <div class="hover_text">
                                <h4>Special Offer</h4>
                                <h5>Young Couple</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special_offer_item2">
                            <img class="img-fluid" src="<?php echo base_url().'assets/img/feature-add/special-offer-2.jpg';?>" alt="">
                            <div class="hover_text">
                                <h5>girls bag</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Special Offer Area =================-->
        
        <!--================Latest Product isotope Area =================-->
        <section class="fillter_latest_product">
            <!-- <div class="container">
                <div class="single_c_title">
                    <h2>Our Latest Product</h2>
                </div>
                <div class="fillter_l_p_inner">
                    <ul class="fillter_l_p">
                        <li class="active" data-filter="*"><a href="#">1</a></li>
                        <li data-filter=".woman"><a href="#">2</a></li>
                        <li data-filter=".acc"><a href="#">3</a></li>
                        <li data-filter=".shoes"><a href="#">4</a></li>
                        <li data-filter=".bags"><a href="#">5</a></li>
                    </ul>
                    <div class="row isotope_l_p_inner">
                        <div class="col-lg-3 col-md-4 col-sm-6 woman bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-78.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Ele Kettle</h4>
                                    <h5>Rs. 2650/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-76.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Iron</h4>
                                    <h5>Rs. 2250/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-72.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Standing fan</h4>
                                    <h5>Rs. 7650/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-59.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Verenda chair(4Pcs)</h4>
                                    <h5>Rs. 12 400/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-40.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Shoe rack</h4>
                                    <h5>Rs. 1900/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-51.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <h4>Mosquito net</h4>
                                    <h5>Rs. 2200/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-63.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a></li>
                                    </ul>
                                    <h4>Relaxing chair(4Pcs)</h4>
                                    <h5>Rs. 12 400/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/item-56.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                        <li><a class="add_cart_btn"  data-productname="Clothes rack" data-productprice="3250" data-productid="2" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a></li>
                                    </ul>
                                    <h4>Clothes rack</h4>
                                    <h5>Rs. 3250/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container"><br/>
                <h2>Our Latest Product</h2>
                <hr/>
                <div class="row">
                    <div class="col-md-8">
                        <h4>Product</h4>
                        <div class="row">
                        <?php foreach ($data->result() as $row) : ?>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img width="200" src="<?php echo base_url().'assets/img/product/'.$row->img1;?>">
                                    <div class="caption">
                                        <h4><?php echo $row->item_name;?></h4>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4><?php echo number_format($row->price);?></h4>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="number" name="quantity" id="<?php echo $row->item_id;?>" value="1" class="quantity form-control">
                                            </div>
                                        </div>
                                        <button class="add_cart btn-success btn-block" data-productid="<?php echo $row->item_id;?>" data-productname="<?php echo $row->item_name;?>" data-productprice="<?php echo $row->price;?>" >Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                            
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4>Shopping Cart</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Items</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="detail_cart">

                            </tbody>
                            
                        </table>
                        <form method="post" action="<?php echo base_url().'Product/checkOutCard';?>">
                            <button type="submit">Submit</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<!-- <div class="row">

<table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
</div> -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
          //var quantity = 1;
            $.ajax({
                url : "<?php echo site_url('Product/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('Product/load_cart');?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('Product/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>


      <!--================End Latest Product isotope Area =================-->
        
        
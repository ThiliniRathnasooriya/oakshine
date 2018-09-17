    
        <!--================Categories Banner Area =================-->
        <section class="categories_banner_area">
            <div class="container">
                <div class="c_banner_inner">
                    <h3>Items</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li class="current"><a href="individual%20priducts.html">Items</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area">
            <div class="container">
            <?php foreach($res as $row){ ?>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product_details_slider">
                            <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                                <ul>	<!-- SLIDE  -->
                                    <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo base_url().'assets/img/product/'.$row->img1;?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url().'assets/img/product/'.$row->img1;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo base_url().'assets/img/product/'.$row->img1;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                   <li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo base_url().'assets/img/product/'.$row->img2;?>"  data-rotate="0"  data-saveperformance="off"  data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url().'assets/img/product/'.$row->img2;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo base_url().'assets/img/product/'.$row->img2;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-301" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo base_url().'assets/img/product/'.$row->img3;?>"  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url().'assets/img/product/'.$row->img3;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo base_url().'assets/img/product/'.$row->img3;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product_details_text">
                            <h3><?php echo $row->item_name;?></h3>
                            
                           
                            <?php if('item_amount'>0){
                                echo "<h6>Available In <span>Stock</span></h6>";
                            }
                            else{
                                echo "<h6>Not Available In <span>Stock</span></h6>";
                            }
                            ?>
                            
                            <h4>Rs.<?php echo $row->price;?>/-</h4>
                            <p>PRODUCT CODE: <?php echo $row->item_id;?></p>
                            <p><?php echo $row->description;?> </p>
                            <?php } ?>    

                            <div class="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
                                <a class="add_cart_btn" href="#">add to cart</a>
                            </div>
                            <div class="shareing_icon">
                                <h5>share :</h5>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_table_details">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Delivery policy:</th>
                                            <td>
                                                <h6>Free delivery within 3km from the item location and charges according to the delivery charges of the company after the first 3km from the item location</h6>
                                                <h5>Item location:</h5>
                                                <p>172/3, Bomugammana, Divulapitiya</p>
                                                <h5>Ships to:</h5>
                                                <p>Island wide deliveries</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Delivery:</th>
                                            <td>
                                                <p>Estimated <span>within 2 weeks</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Payments:</th>
                                            <td>
                                                <p>Cash on delivery only</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
            <div class="container">
                <nav class="tab_menu">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <ul>
                        <li>Super dustproof</li><br>
                        <li>High picture quality with Xvid Home</li><br>
                        <li>Wide playability</li><br>
                        <li>USB Play</li><br>
                        <li>DVD-Video/CD/Video CD/SVCD: Yes/Yes/Yes/Yes</li><br>
                        <li>MP3 (CD-R/RW): Yes/Yes</li><br>
                        <li>VIDEO - Video DAC: 12bit/108MHz</li><br>
                        <li>VIDEO - Sharpness: Yes</li><br>
                        <li>VIDEO - Video Equalizer: Picture, Brightness, Color, HUE</li><br>
                        <li>VIDEO - Custom Picture Mode: Yes</li><br>
                        <li>VIDEO - High Speed Search: Yes(FF/FR)</li><br>
                        <li>VIDEO - Instant Replay: Yes</li><br>
                        <li>VIDEO - Instant Advance: Yes</li><br>
                        <li>VIDEO - Fast/Slow Play with Audio: Yes/Yes</li><br>
                        <li>Front Panel: HB</li><br>
                        <li>Width (mm): Approx. 270mm</li><br>
                        <li>Height (mm): Approx. 38.5mm</li><br>
                        <li>Depth (mm): Approx. 207mm</li><br>
                        <li>Weight excl. carton (kg): Approx. 0.95kg</li><br>
                        <li>Weight incl. carton (kg): Approx. 1.4kg</li><br>
                        </ul>

                    </div>
                    
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Related Product Area =================-->
        <section class="related_product_area">
            <div class="container">
                <div class="related_product_inner">
                    <h2 class="single_c_title">Related Product</h2>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/product-details/cooler.jp';?>'" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Symphony Air Cooler - DiET 8i</h4>
                                    <h5>Rs.16 199/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/product-details/rsz_fan.jpg';?>" alt="">
                                    <h5 class="new">New</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Industrial Pedestal Fan 20 Inch, 02 Blades</h4>
                                    <h5><del>Rs.14 999/-</del>  Rs.13 999/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/product-details/filter.jpg';?>" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Pureit Water Purifier Classic</h4>
                                    <h5>Rs.11 800/-</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/product-details/burner.jpg';?>" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Beko Gas Burner & Oven</h4>
                                    <h5>Rs.63 999/-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--================End Related Product Area =================-->
   
        
        
      
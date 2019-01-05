 <!--================Categories Product Area =================-->
 <section class="no_sidebar_2column_area">
            <div class="container">
                

                <div class="two_column_product">
                    <div class="row">
                    <?php foreach($res as $row){ ?>
                        <div class="col-lg-3 col-sm-6">
                        <a href="<?php echo base_url().'item/item/'.$row->item_id;?>">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/'.$row->img1;?>" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4><?php echo $row->item_name;?></h4>
                                    <h5><?php echo $row->price;?></h5>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php }?>
                        
                    </div>
                    <nav aria-label="Page navigation example" class="pagination_area">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
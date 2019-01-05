<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url().'assets/img/log4.png';?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>OakShine</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url().'assets/css/font-awesome.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/line-icon/css/simple-line-icons.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/elegant-icon/style.css';?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url().'assets/vendors/revolution/css/settings.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/revolution/css/layers.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/revolution/css/navigation.css';?>" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url().'assets/vendors/owl-carousel/owl.carousel.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/bootstrap-selector/css/bootstrap-select.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/jquery-ui/jquery-ui.css';?>" rel="stylesheet">
        
        <link href="<?php echo base_url().'assets/css/style.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/css/responsive.css';?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_top_header row m0">
                <div class="container">
                    <div class="carousel_top_h_inner">
                        <!-- <div class="float-md-left">
                            <div class="top_header_left">
                                <div class="selector">
                                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                      <option value='yt' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yt" data-title="English">English</option>
                                      <option value='yu' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                      <option value='yt' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yt" data-title="English">English</option>
                                      <option value='yu' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                    </select>
                                </div>
                                <select class="selectpicker usd_select">
                                    <option>USD</option>
                                    <option>$</option>
                                    <option>$</option>
                                </select>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
            <div class="carousel_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/img/logo4.png';?>" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <span>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav categories">
                                <li class="nav-item">
                                    <select class="selectpicker">
                                    <option>Categories</option>
                                    <option>Electric</option>
                                    <option>MDF(wood)</option>
                                    <option>Steel</option>
                                    <option>Plastic</option>
                                    <option>Matress</option>
                                    <option>Other</option>
                                    </select>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>customer/home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>complaints">Complaints</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            </ul>
                            <ul class="navbar-nav justify-content-end">
                            <li class="search_icon"><a type="button" title="search" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                <?php if(isset($_SESSION['logID'])){?>
                                    <li class="user_icon"><a title="Profile" href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="user_icon"><a title="log out" href="<?php echo base_url().'customer/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    <li class="cart_cart"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                <?php } else{?>
                                    <li class="user_icon"><a type="button" title="sign up" data-toggle="modal" data-target="#signupModal"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                                    <li class="user_icon"><a type="button" title="log in" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                <?php }?>
                                
                                
                            </ul>
                        </div>
                        <span>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
		<div class="col-lg-12"> 
			
			<div class="two_column_product">
                    <div class="row">
                    <?php foreach($res as $row){ ?>
                        <div class="col-lg-3 col-sm-6 offset-4">
                            <div class="l_product_item">
                                <div class="l_p_img">
								<p style="text-align:center">
                                    <img class="img-fluid" src="<?php echo base_url().'assets/img/product/'.$row->img1;?>" alt="">
								</p> 
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
                        </div>
						
				<?php }?>
				
				<div class="col-lg-12"> 
					<table class="table table-hover">
					
						<thead class="thead-dark">
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Pprice</th>
								<th class="column3">Amount</th>
								<th class="column3">Discount</th>
								<th class="column3">Description</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($res as $row){
									echo "<tr><td>". $row->item_name."</td><td>". $row->price."</td><td>". $row->item_amount."</td><td>". $row->discount ."</td><td>". $row->description."</td></tr>";
									
										
								}	
								?>					
   
						</tbody>
					</table>
				</div>
		
			
				 <!--================Footer Area =================-->
 <footer class="footer_area col-md-12">
 <hr>
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6 ">
                            <aside class="f_widget f_about_widget">
                                <img src="<?php echo base_url().'assets/img/logo4.png';?>" alt="">
                                <p>OakShine sells the best, You'll get the best</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div> 
                
                        <div class="col-lg-6 col-md-4 col-6">
                            
                            <h3>Contact Us</h3><br>
                            <p>Mail, call or send us email for further information or to get in touch with new products and for any inqury.</p>
             
        
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                    <br>
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>172/3, Bomugammana,<br> Divulapitiya, <br>Sri Lanka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                    <br>
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+1109171234567">+94 321 654 987</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <br>
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:busines@persuit.com">oakshine@gmail.com</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                                    
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

 <!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'customer/signup';?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="signName" required class="form-control" placeholder="Ex: Thilini Rathnasooriya">
        </div>
        <div class="form-group">
          <label>NIC</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="number" id="num" onkeyup="checkID(); return false;" name="nic" required class="form-control" placeholder="Ex:934560112">
              <small>Do not Enter the "v" at the end.</small>
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" required class="form-control" placeholder="Ex: No:120/2, Thibirigasyaye.">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required class="form-control" placeholder="Ex: thi@gmail.com">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" id="mobile" name="pnumber" onkeyup="check(); return false;" required class="form-control" placeholder="Ex: 0719289192">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" id="p1" required class="form-control" placeholder="Enter the password here">
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" id="p2" required class="form-control" placeholder="Re-Enter the password">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
      </div>
    </div>
  </div>
</div>

 <!--  Login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'customer/login';?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">LogIn</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'customer/search';?>">
        <div class="form-group">         
          <input name="search" type="search" class="form-control" id="examplesearch" aria-describedby="searchHelp" placeholder="Search here...">
        </div>     
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js';?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url().'assets/js/popper.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url().'assets/vendors/revolution/js/jquery.themepunch.tools.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/jquery.themepunch.revolution.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.video.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js';?>"></script>
        <!-- Extra plugin css -->
        <script src="<?php echo base_url().'assets/vendors/counterup/jquery.waypoints.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/counterup/jquery.counterup.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/owl-carousel/owl.carousel.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/bootstrap-selector/js/bootstrap-select.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/image-dropdown/jquery.dd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/smoothscroll.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/isotope/imagesloaded.pkgd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/isotope/isotope.pkgd.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/magnify-popup/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js';?>"></script>
        <script src="<?php echo base_url().'assets/vendors/jquery-ui/jquery-ui.js';?>"></script>
        
        <script src="<?php echo base_url().'assets/js/theme.js';?>"></script>
    </body>
</html>
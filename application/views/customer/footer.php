 <!--================Footer Area =================-->
 <footer class="footer_area">
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
                
                        <div class="col-lg-6 col-md-4 col-6 ">
                            
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
        <div class="form-group ">
          <label>NIC</label>
            <!-- <div class="col-md-4 mb-3"> -->
              <input type="number" id="num" onkeyup="checkID(); return false;" name="nic" required class="form-control col-md-6" placeholder="Ex:934560112">
              <small>Do not Enter the "v" at the end.</small>
            <!-- </div> -->
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" id="mobile" name="pnumber" onkeyup="check(); return false;" required class="form-control col-md-6" placeholder="Ex: 0719289192">
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
function myFunction() {
  var e = document.getElementById("opt");
  var strUser = e.options[e.selectedIndex].value;
  window.location.href = "<?php echo base_url().'category/category/';?>"+strUser;
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
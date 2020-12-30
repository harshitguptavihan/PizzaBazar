<?php 
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body style="background-color:black">
<!-- NAVEBAR START -->






<div class="container">
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" ><span>
<a  class="logo" href="index.php" style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->
<button class="navbar-toggle "style="position:relative;
	top:0px;
	right:-20px;" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>

</button>
<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

<div class="navbar-collapse collapse animated slideInLeft" style="font-size:23px;color:white" >

    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="pizza.php">Pizza</a></li>
      <li><a href="more.php">Products</a></li>
          <li><a type="button"  data-toggle="modal" data-target="#usigninform"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <?php
		  if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['user']))) { ?>
	  <li><a type="button" data-toggle="modal" data-target="#uloginform"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  <?php } 
		  else
		  {
		  ?>
	  <li><a href="uprofile.php"><span class="glyphicon glyphicon-log-in"></span>UserAccount</a></li>
		  <?php } ?>
	  
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<?php
		  if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin']))) { ?>
	  <li><a type="button"  data-toggle="modal" data-target="#aloginform"><span class="glyphicon glyphicon-cog"></span> Admin Login</a></li>
		  <?php } 
		  else
		  {
		  ?>
	  <li><a href="adminhome.php"><span class="glyphicon glyphicon-log-in"></span>AdminAccount</a></li>
		  <?php } ?>
	 
	</ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>

  
<!-- NAVEBAR END -->
  

















<div class="container">
<div class="row " style="position:relative;top:0px;">

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators" >
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner"  >
   

    <div class="item active">
	
      <img src="photos/m1.jpg" alt="pizz2" class="w center-block img img-responsive">
    </div>
	
	<div class="item">
      <img src="photos/m2.jpg" alt="pizz2" class="w center-block img img-responsive">
    </div>
	
	<div class="item">
      <img src="photos/m3.jpg" alt="pizz2" class="w center-block img img-responsive">
    </div>
	
	<div class="item">
      <img src="photos/m4.jpg" alt="pizz2" class="w center-block img img-responsive">
    </div>

    
	
	
	
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>




<!-- Carousel End -->





<!-- FOOTER START -->
<div class="Row col-xs-12 center-block" style="margin-top:10%;border-top:2px solid white; border-bottom:2px solid white;padding-top:3%;padding-bottom:3%;">
<div class="col-sm-2">
<span class="btm-heading">ORDER</span>
<a href="#" class="btm-option">Pizza</a>
<a href="#" class="btm-option">Slide</a>
<a href="#" class="btm-option">Meals</a>
<a href="#" class="btm-option">Drinks</a>
<a href="#" class="btm-option">Desserts</a>
<a href="#" class="btm-option">Magic Pan</a>
<a href="#" class="btm-option">Offers</a>
</div>
<div class="col-sm-2">
<span class="btm-heading">VISIT PIZZAHUT</span>
<a href="#" class="btm-option">Locate Pizza</a>
<a href="#" class="btm-option">Sitemap</a>
<a href="#" class="btm-option">Global Blog</a>
</div>
<div class="col-sm-2">
<span class="btm-heading">PIZZAHUT IN INDIA </span>
<a href="#" class="btm-option">ABout Us</a>
<a href="#" class="btm-option">Nutrition</a>
<br><br>
<span class="btm-heading">POLICIES </span>
<a href="#" class="btm-option">Terms & Conditions</a>
</div>
<div class="col-sm-2">
<span class="btm-heading">Order PIZZAS IN</span>
<a href="#" class="btm-option">Bengaluru</a>
<a href="#" class="btm-option">Mumbai</a>
<a href="#" class="btm-option">Chennai</a>
<a href="#" class="btm-option">Pune</a>
<a href="#" class="btm-option">Kolkata</a>
<a href="#" class="btm-option">Hyederabad</a>
<a href="#" class="btm-option">Gurugaon</a>
<a href="#" class="btm-option">In Your City</a>
<a href="#" class="btm-option">Delhi</a>
</div>
<div class="col-sm-2">
<span class="btm-heading">CONNECT WITH PIZZAHUT</span>
<a href="#" class="btm-option">GIVE US FEEDBACK ON DINE_IN OR DELIVERY</a>
</div>
<div class="col-sm-2">
<span class="btm-heading">FOLLOW US</span><br>
<a href="#" class=""><span class="fa fa-facebook fa-2x text-center btm-socialf"></span></a>
<a href="#" class=""><span class="fa fa-twitter fa-2x text-center btm-socialt"></span></a>
<a href="#" class=""><span class="fa fa-youtube fa-2x text-center btm-socialy"></span></a>

</div>


</div>
<!-- FOOTER END -->
</div>





<!-- Modal Start -->
 <!-- Modal FOR ALOGIN START -->

<div id="aloginform" class="modal fade" role="dialog">
  <div class="modal-dialog">

<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-90px;">
	   <div class="modal-header">
           <button type="button" class="close" style=";font-size:45px;border:3px solid red;width:60px;height:40px;line-height:30px;background-color:red;border-radius:5px" data-dismiss="modal">&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Admin Login</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="alogin.php" method="post">
				    
                   <div class="form-group">
                    <label for="email" >Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"id="email" required>
                    </div>
                    <div class="form-group">
                     <label for="pwd" >Password:</label>
                    <input type="password" class="form-control"placeholder="Enter Your Password" id="pwd" name="password" required>
                    </div>
                                     
                      <input type="submit" name="sub" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>
<!-- Modal FOR ALOGIN END -->

<!-- Modal FOR ULOGIN START -->

<div id="uloginform" class="modal fade" role="dialog">
  <div class="modal-dialog">

<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-90px;">
	   <div class="modal-header">
           <button type="button" class="close" style=";font-size:45px;border:3px solid red;width:60px;height:40px;line-height:30px;background-color:red;border-radius:5px" data-dismiss="modal">&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">User Login</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="ulogin.php" method="post">
				    
                   <div class="form-group">
                    <label for="email" >Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"id="email" required>
                    </div>
                    <div class="form-group">
                     <label for="pwd" >Password:</label>
                    <input type="password" class="form-control"placeholder="Enter Your Password" id="pwd" name="password" required>
                    </div>
                                     
                      <input type="submit" name="sub" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>
<!-- Modal FOR ULOGIN END -->

<!-- Modal FOR USIGNIN START -->

<div id="usigninform" class="modal fade" role="dialog">
  <div class="modal-dialog">

<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-125px;">
	   <div class="modal-header">
           <button type="button" class="close" style=";font-size:45px;border:3px solid red;width:60px;height:40px;line-height:30px;background-color:red;border-radius:5px" data-dismiss="modal">&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">SignIn please</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="signin.php" method="post" enctype="multipart/form-data">
				    <div class="form-group">
                    <label for="name" >Name:</label>
                    <input type="text" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('You can insert only a-z or A-Z')" class="form-control" placeholder="Enter Your Name" name="name" id="uname" required >
                    </div>
                   <div class="form-group">
                    <label for="email" >Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"id="email" required>
                    </div>
                    <div class="form-group">
                     <label for="pwd" >Password:</label>
                    <input type="password" class="form-control"placeholder="Enter Your Password" id="pwd" name="password" required>
                    </div>
                    <div class="form-group">
                     <label for="mo" >Enter Your Mobile(+91):</label>
                    <input type="tel" pattern="[0-9]{10}" oninvalid="setCustomValidity('You can insert only 10 digit number')" class="form-control"placeholder="Enter Your ten digit mobile number" id="mo" name="mobile" required>
                    </div>
					<div class="form-group">
                     <label for="ad" >Enter Your Address:</label>
                    <input type="tel" class="form-control"placeholder="Enter Your Address" name="address" id="ad" required>
                    </div>
                    
					<div class="form-group">
                     <label for="ProfileImage" >Upload Your Profile Picture</label>
                    <input type="file" class="form-control-file" name="ProfileImage" id="ProfileImage" required> 
                    </div>
                    
                      <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>
<!-- Modal FOR USIGNIN END -->






<!-- Model End -->

















<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
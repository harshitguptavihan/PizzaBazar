<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");

$email=$_SESSION['email'];

$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `sighnin` where `email`='$email'";
$query=mysqli_query($con,$q);

$row=mysqli_fetch_array($query);



?>



<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="signinform.css">
</head>
<body style="background-color:black">
<!-- NAVEBAR START -->






<div class="container">
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->

<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

	<!-- clse Collapse -->
  </div>
</div>

  
<!-- NAVEBAR END -->



<!-- Modal FOR SIGN START -->

<div class="col-sm-6 col-sm-offset-3">
  <div>
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-90px;">
	   <div class="modal-header">
           
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Pay</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="paymentsuccessfull.php" method="post" >
				    <div class="">
                    <p>Name:<?php echo $row['name'];?><p>
                    </div>                                  
                    <div class="">
					<p>Name:<?php echo $row['mobile'];?><p>
                     
                    </div>
					<div class="">
					<p>Name:<?php echo $row['address'];?><p>
                     
                    <div class="form-group">
					<p><b>Choose Payment Mode</b><p> 
					<input type="radio" value="admin"  id="opwd" name="Coupan" checked>
                     <label for="opwd" class="radio-inline">COD</label>   
              </div>
					
                    
                      <input type="submit" value="Confirm" class="btn btn-info col-sm-offset-10 col-xs-offset-11">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR SIGN END -->







<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
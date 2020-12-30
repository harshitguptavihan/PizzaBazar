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
<body style="background-color:#071F3A">
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo12.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>




<!-- Modal FOR SIGN START -->

<div class="col-sm-6 col-sm-offset-3">
  <div>
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content animated slideInLeft" style="background-color:#E8E8E8;color:black;margin-top:0px;">
	   <div class="modal-header">
           
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Change Password</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="uchangepasswordlogic.php" method="post" enctype="multipart/form-data">
				    
					<div class="form-group">
                     <label for="opwd" >Enter Old Password:</label>
                    <input type="password" class="form-control"placeholder="Enter Old Password" id="opwd" name="opassword" required>
                    </div>
					
					<div class="form-group">
                     <label for="npwd" >Enter New Password:</label>
                    <input type="password" class="form-control"placeholder="Enter New Password" id="npwd" name="npassword" required>
                    </div>
					
					
					
                      <input type="submit" value="Change" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
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
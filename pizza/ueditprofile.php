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
<!-- NAVEBAR START -->






<div class="container">
<div class="navbar " style="">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo12.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
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
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Update Details</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="ueditprofilelogic.php" method="post" enctype="multipart/form-data">
				    <div class="form-group">
                    <label for="name" >Name:</label>
                    <input type="text"value="<?php echo $row['name'];?>" pattern="[a-zA-Z ]+" oninvalid="setCustomValidity('You can insert only a-z or A-Z')" class="form-control" placeholder="Enter Your Name" name="name" id="uname" required >
                    </div>                                  
                    <div class="form-group">
                     <label for="mo" >Enter Your Mobile(+91):</label>
                    <input type="tel"value="<?php echo $row['mobile'];?>" pattern="[0-9]{10}" oninvalid="setCustomValidity('You can insert only 10 digit number')" class="form-control"placeholder="Enter Your ten digit mobile number" id="mo" name="mobile" required>
                    </div>
					<div class="form-group">
                     <label for="ad" >Enter Your Address:</label>
                    <input type="tel" value="<?php echo $row['address'];?>" class="form-control"placeholder="Enter Your Address" name="address" id="ad" required>
                    </div>
                    
					<div class="form-group">
                     <label for="ProfileImage" >Upload Your Profile Picture(Optional)</label>
                    <input type="file" class="form-control-file" name="ProfileImage" id="ProfileImage"> 
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
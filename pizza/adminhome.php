<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
	header("Location:index.php");
$email=$_SESSION['email'];
?>


<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body  style="background-color:Red;">










<div >
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" style="position:relative;top:-10px;"><span>
<a  class="logo" href="adminhome.php" style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;margin-top:-5px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->
<button class="navbar-toggle"style="position:relative;top:10px" data-toggle="collapse" data-target=".navbar-collapse">
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
      <li><a href="adminhome.php">AdminHome</a></li>
      <li><a href="apizzaupdate.php">Pizza</a></li>
      <li><a href="amoreupdate.php">Products</a></li>
      <li><a href="aorder.php">Order</a></li>
      <li><a href="aorderhistory.php">OrderHistory</a></li>
    <!/ul>
	<!ul class="nav navbar-nav navbar-right">
	      <li><a href="alogout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>

  
<!-- NAVEBAR END -->
  
<?php
//logic start


$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `asignin` where `email`='$email'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);


?>















<!-- main container begin -->
<div class="container-fluid" style="background-color:black;padding:20px; border:4px solid #6A5E46;border-radius:10px;box-shadow:5px 5px 10px black">

<!--First Row-->
<div class="row">

<!--First Col-->
<div class="col-sm-3" >

<div  style="height:10%;">
<div class=" col-sm-12" >
 <img class="img img-responsive img-circle" src="photos/uprofile/<?php  echo $row['ProfileImage'];?>" >
</div>
</div>
<div style="margin-top:100%">
<a href="aprofiledetail.php" target="RIGHT" class="btn btn-lg center-block btn-primary " style="border-radius:0px; margin-top:3px;"><span class="  fa fa-user"></span>&nbsp;&nbsp;Profile</a>





<a href="achangepassword.php" target="RIGHT" class="btn btn-lg center-block btn-primary " style="border-radius:0px; margin-top:3px;">
<span style="margin-left:-8px" class="  fa fa-cog"></span>&nbsp;Change Password</a>
<a href="aeditprofile.php" target="RIGHT" class="btn btn-lg center-block btn-primary" style="border-radius:0px; margin-top:3px;"><span class="  fa fa-pencil"></span>&nbsp;&nbsp;Edit Profile</a>

<a href="alogout.php"  class="btn btn-lg center-block  " style="border-radius:0px; margin-top:3px;background-color:brown;color:white"><span class="  fa fa-lock"></span>&nbsp;&nbsp;Logout</a>

</div>


</div>
<!--End First Col-->

<!--Second col-->
<div class="col-sm-9" style="height:600px;">
<IFRAME NAME="RIGHT" src="aprofiledetail.php" style="width:100%;height:100%">

</IFRAME>
</div>
<!-- end Second col-->



</div>
<!--End First row-->





</div>
<!-- End main container begin -->
















<?php 

//logic End
?>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.html");

$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `asignin` where `email`='$email'";
$query=mysqli_query($con,$q);

$row=mysqli_fetch_array($query);



?>

<?php 
//change--------We Replace $_SESSION->$row


?>











<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="signinform.css">
<style>
.subtitle{
	font-size:30px;
	display:inline-block;
	width:45px;
	color:silver;
}
.subtitlevalue{
	font-size:30px;
	color:white;
}
</style>
</head>
<body style="background-color:#071F3A">
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo12.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>




<!-- Modal FOR SIGN START -->
<br><br>
<br><br>




<div class="text-center" style="margin-top:20%">
<span class="subtitle fa fa-user"></span><br>
<span class="subtitlevalue" style="color:white" title="Name"><?php  echo $row['name'];?></span><br>
<span class="subtitle fa fa-envelope"></span><br>
<span class="subtitlevalue" title="Email"><?php  echo $row['email'];?></span><br>
<span class="subtitle fa fa-phone"></span><br>
<span class="subtitlevalue" title="Contact No."><?php  echo $row['mobile'];?></span><br>
<span class="subtitle fa fa-home"></span><br>
<span class="subtitlevalue" title="Address"><?php  echo $row['address'];?></span>
</div>
<br>
<br>
<br>
 

<!-- Modal FOR SIGN END -->







<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
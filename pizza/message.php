<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");

$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `message` where `user`='$email'";
$query=mysqli_query($con,$q);





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

<h1 style="background-color:;color:white;text-align:center;text-decoration:underline">Your Notification</h1>
<?php 
while($row=mysqli_fetch_array($query))
{
?>
<p>
<div style="background-color:black;color:white;display:inline;margin-left:30px;padding:10px;border-radius:4px;">
<?php echo $row['msg']; ?>

</div>

</p>
</br>
<?php
}
?>

<br>
<br>
<br>
 

<!-- Modal FOR SIGN END -->







<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
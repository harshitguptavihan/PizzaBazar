<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.html");
 $email=$_SESSION['email'];

$CartId=$_GET['CartId'];
$NumOfNewItem=((int)$_GET['NumOfItem']) +1;
$con=mysqli_connect("localhost","root","","useractivity");
$q="update `cart` set `NumOfItem`=$NumOfNewItem where `Id`='$CartId'";
$res=mysqli_query($con,$q);
header('Location:ucart.php');
?>

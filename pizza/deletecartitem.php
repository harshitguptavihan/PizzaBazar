<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.php");
 $email=$_SESSION['email'];

$CartId=$_GET['CartId'];
$con=mysqli_connect("localhost","root","","useractivity");
$q="delete from `cart` where `Id`='$CartId'";
$res=mysqli_query($con,$q);
header('Location:ucart.php');
?>

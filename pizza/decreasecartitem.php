<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.php");
 $email=$_SESSION['email'];

$CartId=$_GET['CartId'];
if($_GET['NumOfItem']>1){
$NumOfNewItem=((int)$_GET['NumOfItem']) -1;
}
else{
	$NumOfNewItem=1;
}
$con=mysqli_connect("localhost","root","","useractivity");
$q="update `cart` set `NumOfItem`=$NumOfNewItem where `Id`='$CartId'";
$res=mysqli_query($con,$q);
header('Location:ucart.php');
?>

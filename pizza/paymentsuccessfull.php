<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");

$email=$_SESSION['email'];
$Coupan=$_POST['Coupan'];
$con=mysqli_connect("localhost","root","","useractivity");
if(!$con)
	echo "fail coonection";
// $q="select * from sighnin where email='$email'";
// $query=mysqli_query($con,$q);
// $row=mysqli_fetch_array($query);

if($Coupan=="admin"){
	$query2="UPDATE `sighnin` SET `currentstatus` = 'notconfirm',`status`='order' WHERE `email`='$email'";
$res2=mysqli_query($con,$query2);
$query1="update `cart` set `Status`='order' where `User`='$email'";

echo $query1;
$res=mysqli_query($con,$query1);
if($res){
?>
<script>
alert("your payment is successfull");
window.location="uorder.php";
</script>
<?php
}
}
else
{?>
<script>
alert("your payment is fail");
window.location="uprofiledetail.php";
</script>
<?php
}
?>

<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.php");
 $email=$_POST['email'];
 $msg=$_POST['msg'];
echo $email;
$con=mysqli_connect("localhost","root","","useractivity");
$q1= "UPDATE `sighnin` SET `currentstatus`='confirm' WHERE `email` ='$email'";
$res1=mysqli_query($con,$q1);
echo $q1;
if($res1){
echo $q1;	
$q="update `cart` set `AdminStatus`='confirm' where `User`='$email' &&  `Status`='order'";
$res=mysqli_query($con,$q);
$qp="insert into `message` (`msg`,`user`)value('$msg','$email')";
$res3=mysqli_query($con,$qp);
}

?>
<script>
window.location="aorder.php";
</script>
<?php 
session_start();
if(isset($_SESSION['email'])){
	session_destroy();
	header("Location:index.php");
}
if(!isset($_POST['sub']))
{ 
	header("Location:index.php");
}



$email=$_POST['email'];
$password=$_POST['password']; 
echo $email;
echo "<br>";
echo $password;
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `sighnin` where `email`='$email' && `password`='$password'";
echo "<br>".$q."<br>";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);
if($email==$row['email']&&$password==$row['password'])
{
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['user']="user";
	
	header("Location:uprofile.php");
	
}
else
{

?>
<script>
alert("username or password incorrect");
window.location="index.php";
</script>
<?php
}
?>
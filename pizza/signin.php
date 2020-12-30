<?php 
echo  "hye";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password']; 
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$ProfileImage=$_FILES['ProfileImage'];
$ProfileImageName=$ProfileImage['name'];
echo $ProfileImageName;
if($ProfileImage['type']=="image/png")
{
	
 move_uploaded_file($ProfileImage['tmp_name'],"photos/uprofile/$ProfileImageName"); 
 echo "Success to upload";










$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"useractivity");
$querry="insert into `sighnin` (`name`,`email`,`password`,`mobile`,`address`,`ProfileImage`)values('$name','$email','$password','$mobile','$address','$ProfileImageName')";
$result=mysqli_query($con,$querry);
if(!$result)
{
?>
<script>
alert("you are already register");
window.location="index.php";
</script>
<?php
}
else
{
	?>
<script>
alert("you are successfull register");
window.location="index.php";
</script>
<?php
}
}
else
{
	?>
<script>
alert("your Image Format is Invalid");
window.location="index.php";
</script>
<?php
}
?>
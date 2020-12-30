 <?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");
$email=$_SESSION['email'];
 
 
 
 
echo "hye";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$ProfileImage=$_FILES['ProfileImage'];
$ProfileImageName=$ProfileImage['name'];
echo $ProfileImageName;

	
 move_uploaded_file($ProfileImage['tmp_name'],"photos/uprofile/$ProfileImageName"); 
 echo "Success to upload";
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"useractivity");






if($ProfileImageName=="")
{ 
	$querry="update   `asignin`
set `name`='$name',`mobile`='$mobile',`address`='$address' where `email`='$email'"; 
}
	else{ 
$querry="update   `asignin`
set `name`='$name',`mobile`='$mobile',`address`='$address',`ProfileImage`='$ProfileImageName' where `email`='$email'"; 
	 } 




$result=mysqli_query($con,$querry);



?>


<script>
window.location="aprofiledetail.php";
</script>
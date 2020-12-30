<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");
$email=$_SESSION['email'];
$DishPage=$_POST['DishPage'];
$DishPage="u$DishPage.php";
$DishPrice=$_POST['DishPrice'];
$DishName=$_POST['DishName'];
$DishPath=$_POST['DishPath'];
echo $DishPage;
echo $DishPrice;
echo $DishName;
echo $DishPath;
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"useractivity");
$q="select * from `cart` where  `User`='$email' && `DishName`='$DishName' && `DishPrice`='$DishPrice' &&`DishPath`= '$DishPath' && `Status`='incart'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	?>
<script>
alert("Product is already added to our cart ");
window.location="<?php echo $DishPage; ?>";
</script>
<?php
}
else {
$querry="insert into `cart` (`User`,`DishName`,`DishPrice`,`DishPath`)values('$email','$DishName','$DishPrice','$DishPath')";
$result=mysqli_query($con,$querry);
?>
<script>
alert("Product is added to our cart");
window.location="<?php echo $DishPage; ?>";
</script>
<?php
}
?>
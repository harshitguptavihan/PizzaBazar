<?php
$DishPage=$_POST['DishPage'];
$DishSet=$_POST['DishSet'];
$DishId=$_POST['DishId'];

echo $DishPage ;
echo $DishSet ;
echo $DishId ;


 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);

/* Image Delete Logic Start*/

$qu="select * from `$DishSet` where `DishId`=$DishId"; 
echo $qu;
$res=mysqli_query($con,$qu);
if($res)
	echo "working";
$Path=mysqli_fetch_array($res);
$ImgName=$Path['ImgName'];
echo "<br>".$ImgName."<br>";
/* Get Current Directory */
$CurrentDir=getcwd();
chdir("photos");
chdir("pizza");



chdir($CurrentDir);
echo "hye";




    /* Image Delete Logic End*/








$querry="delete from `$DishSet` where `DishId`=$DishId"; 
echo $querry;
$result=mysqli_query($con,$querry);
echo $result;
if($result)
{
echo "Delete data from DB";
?>
	<script>
	alert("Delete data from DB");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php
}
else
{
echo "Item can not delete from DB";
?>
	<script>
	alert("<?php echo $querry ;?>item can not delete from DB");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php
}

	
?>

<?php
mysqli_close($con);
?>

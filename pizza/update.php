<?php
$DishId=$_POST['DishId'];
$DishPage=$_POST['DishPage'];
$DishSet=$_POST['DishSet'];
$DishName=$_POST['DishName'];
$DishMaterial=$_POST['DishMaterial'];
$DishPriceInString=$_POST['DishPrice'];
$DishPrice=floatval($DishPriceInString );
$Crust=$_POST['Crust'];
$Size=$_POST['Size'];
$DishImage=$_FILES['DishImage'];
$DishPathDB="photos/".$DishPage."/".$DishImage['name'];
$DM=$DishImage['name'];
echo $DM;
 
move_uploaded_file($DishImage['tmp_name'],"photos/".$DishPage."/".$DishImage['name']); 
 echo "Success to upload";
 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);	
if($DishImage['name']=="")
{ 
	$querry="update   `$DishSet`
set `DishName`='$DishName',`DishMetarial`='$DishMaterial',`DishPrice`=$DishPrice,`DishStander`='$DishSet',`Crust`='$Crust',`Size`='$Size' where `DishId`='$DishId'"; 
}
	else{ 
$querry="update   `$DishSet`
set `DishName`='$DishName',`DishPath`='$DishPathDB',`ImgName`='$DM',`DishMetarial`='$DishMaterial',`DishPrice`=$DishPrice,`DishStander`='$DishSet',`Crust`='$Crust',`Size`='$Size' where `DishId`='$DishId'"; 
	 } 
	
echo $querry;
$result=mysqli_query($con,$querry);
if( $result)
{
	echo "Data UPDATED";
	?>
	<script>
	alert("you are successfull to Update Item");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php
}
else 
{
	echo "Data not be UPDATED";
	?>
	<script>
	alert("you can not  Update Item");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php
}



?>
 
<body style="background-color:black;color:white">
<h1><?php echo $DishName ;?></h1>
<h1><?php echo $DishMaterial ;?></h1>
<h1 ><?php echo $DishPrice ;?></h1>
<h1 ><?php echo $Crust ;?></h1>
<h1><?php echo $Size ;?></h1>
<h1><?php echo $DishPage ;?></h1>
<h1><?php echo $DishSet ;?></h1>

</body>



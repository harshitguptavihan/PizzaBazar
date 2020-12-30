<?php
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
 if($DishImage['type']=="image/png")
{
	
 move_uploaded_file($DishImage['tmp_name'],"photos/".$DishPage."/".$DishImage['name']); 
 echo "Success to upload";
 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);
$querry="insert into `". $DishSet . "`(`DishName`,`DishPath`,	`ImgName`,`DishMetarial`,`DishPrice`,`DishStander`,`Crust`,`Size`)values('$DishName','$DishPathDB','$DM','$DishMaterial',$DishPrice,'$DishSet','$Crust','$Size')";  
echo $querry;
$result=mysqli_query($con,$querry);
if( $result)
	
	{
	echo "Data insertd";
	?>
	<script>
	alert("you are successfull to add Item");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php
	}
else 
	echo "Data not be inserted";
?>
	<script>
	alert("you are fail to add Item");
	window.location="a<?php echo $DishPage ?>update.php";
	</script>
	  
	<?php

}

else
	echo "File Format is not Valid";
?>
 
<body style="background-color:black;color:white">
<h1><?php echo $DishName ;?></hi>
<h1><?php echo $DishMaterial ;?></hi>
<h1 ><?php echo $DishPrice ;?></hi>
<h1 ><?php echo $Crust ;?></hi>
<h1><?php echo $Size ;?></hi>
<h1><?php echo $DishPage ;?></hi>
<h1><?php echo $DishSet ;?></hi>

</body>
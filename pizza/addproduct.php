<?php

$ProductPage=$_POST['ProductPage'];
$ProductName=$_POST['ProductName'];

echo $ProductPage."  ".$ProductName;

 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$ProductPage);
$querry="create table `$ProductName` (`DishId` int(6) primary key auto_increment,`DishName` varchar(60),`DishPath` varchar(200),`ImgName` varchar(50),`DishMetarial` varchar(250),`DishPrice` float(6,2),`DishStander` varchar(60) default '$ProductName',`Crust` varchar(30)default 'Pan',`Size` varchar(30)default 'Medium')";
$result=mysqli_query($con,$querry); 
  if($result) {
	 echo "First Phase successfull";
	  $qu="insert into `constructer`(`ProductName`)values('$ProductName')";
	  $res=mysqli_query($con,$qu);
	  if($res)
	  {
		echo " Finaly successfull"; 
	?>
	<script>
	alert("you are successfull ");
	window.location="a<?php echo $ProductPage ?>update.php";
	</script>
	  
	<?php
	 // header('location:apizzaupdate.php');
}	
	else
		echo "fail in secon phase";

	
  }
  else{
	  echo "fail";
	  
	  ?>
	<script>
	alert("you can not add catogory with this name");
	window.location="a<?php echo $ProductPage ?>update.php";
	</script>
	  
	<?php
  }
	  
?>
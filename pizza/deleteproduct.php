<?php

$ProductPage=$_POST['ProductPage'];
$ProId=$_POST['ProId'];
echo $ProductPage."  ".$ProId ." ";

 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
$DB=mysqli_select_db($con,$ProductPage);
if(!$DB)
	echo"Connection Failed in db";
$q="select `ProductName` from `constructer` where `ProId`=$ProId";

$Product=mysqli_query($con,$q);
$ProductName=$Product->fetch_assoc();
echo $ProductName['ProductName'];
$querry="delete from `constructer` where `ProId`=$ProId";
$result=mysqli_query($con,$querry); 
  if($result) {
	 echo "First Phase successfull";
	  $qu="drop table `".$ProductName['ProductName']."`";
	  $res=mysqli_query($con,$qu);
	  if($res){
		  
		echo "Finally successfull"; 
		?>
	<script>
	alert("you are successfull to delete product");
	window.location="a<?php echo $ProductPage ?>update.php";
	</script>
	  
	<?php
	  }		
	else
		echo "fail in second phase";
  }
  else
	  echo "fail in first phase";
	  
?>
<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.php");
 $email=$_SESSION['email'];
 ?>
<body  style="background-color:#071F3A;">
<br>
<br>
<h1 style="background-color:;color:white;text-align:center;text-decoration:underline">Your Orders</h1>

<?php
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `cart` where `User`='$email' &&  `Status`='order' order by `Id` desc ";
$res=mysqli_query($con,$q);
if(! mysqli_num_rows($res))
{
	?>
	<a  class="btn btn-danger center-block" style="margin-top:20px;width:40%">First buy Products</a>
	<?php
}

$item=0;
$TotalAmount=0;
?>
<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>

<div class="row center-block" style="width:80%" >

<?php
while($row=mysqli_fetch_array($res))
{
?>
<div class="pannel col-sm-4" style="height:320px;Background-color:black;border-right:5px #071F3A solid;border-bottom:5px #071F3A solid;">
<div class="pannel-body">
<br>
<img src="<?php echo $row['DishPath'] ;?>" class="img img-responsive center-block">
</div>
<p class="text-center" style="color:white;font-weight:bold;font-size:20px;height:56px;"><?php echo $row['DishName'] ;?></p>



<p class="text-center" style="color:white;font-size:20px;"><span class="fa fa-inr"style="position:relative;bottom:10px;"></span><span style="color:white;font-weight:bold;font-size:40px"><?php echo $row['DishPrice']  ;?></span></p>




<div class="btn btn-info center-block" style="font-size:18px;">Amount=<?php echo $row['NumOfItem'];?>*<?php echo $row['DishPrice']  ;?>=<?php echo (((float)$row['DishPrice'])*((int)$row['NumOfItem']) )  ;?></div>
</div>  


  
  
  
  
  
<?php
$item++;
$TotalAmount=$TotalAmount+(((float)$row['DishPrice'])*((int)$row['NumOfItem']) );
 }
 if($item>0)
 {
?> 
  
  
  
</div>  
 
  
  <br>
  <br>
 <?php } 
  ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
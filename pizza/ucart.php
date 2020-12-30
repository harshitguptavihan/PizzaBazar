<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	 header("Location:index.php");
 $email=$_SESSION['email'];

?>
<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body  style="background-color:#071F3A;">
<Br>
<Br>
<h1 style="background-color:;color:white;text-align:center;text-decoration:underline">Your Cart</h1>

<?php
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `cart` where `User`='$email' &&  `Status`='incart' ";
$res=mysqli_query($con,$q);
$item=0;
$TotalAmount=0;
?>

<div class="row center-block" style="width:80%" >

<?php
while($row=mysqli_fetch_array($res))
{
?>
<div class="pannel col-sm-4" style="height:440px;Background-color:black;border-right:5px #071F3A solid;border-bottom:5px #071F3A solid;">
<div class="pannel-body">
<a href="deletecartitem.php?CartId=<?php echo $row['Id'];?>&&DishPrice=<?php echo $row['DishPrice']  ;?>" class="col-xs-offset-9"" "><button type="button" class="close" style=";font-size:45px;border:3px solid red;width:60px;height:40px;line-height:30px;background-color:red;border-radius:5px;margin-top:14px" data-dismiss="modal">&times;</button></a>
<img src="<?php echo $row['DishPath'] ;?>" class="img img-responsive center-block" height="200">
</div>
<p class="text-center" style="color:white;font-weight:bold;font-size:20px;height:56px;"><?php echo $row['DishName'] ;?></p>



<p class="text-center" style="color:white;font-size:20px;"><span class="fa fa-inr"style="position:relative;bottom:10px;"></span><span style="color:white;font-weight:bold;font-size:40px"><?php echo $row['DishPrice']  ;?></span></p>

<a href="incresecartitem.php?CartId=<?php echo $row['Id'];?>&&NumOfItem=<?php echo $row['NumOfItem'];?>" class="btn btn-success ">+</a>
<a class="btn btn-default col-xs-offset-3 "><?php echo $row['NumOfItem'];?></a>
<a href="decreasecartitem.php?CartId=<?php echo $row['Id'];?>&&NumOfItem=<?php echo $row['NumOfItem'];?>" class="btn btn-success col-xs-offset-3">-</a>
<br>
<br>
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
  <a  href="deliverydetail.php?TotalAmount=<?php echo $TotalAmount;?>" style="font-size:18px;" class="btn btn-success  col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" style="color:white"  > Proceed to Pay <span class="fa fa-inr"style="color:white"></span> <?php echo  $TotalAmount; ?></a>
  <br>
  <br>
  <br>
  
 <?php } 
 else 
 {?>




<a href="" class="btn btn-danger center-block" style="margin-top:20px;width:40%">Cart is empty</a>
<?php } ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
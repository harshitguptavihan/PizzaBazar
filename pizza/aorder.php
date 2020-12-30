<?php 
 session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
{	  header("Location:index.php");
}
 $con=mysqli_connect("localhost","root","","useractivity");
 



?>
<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body  style="background-color:#071F3A;">





<div >
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" style="position:relative;top:-10px;"><span>
<a  class="logo" href="adminhome.php" style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;margin-top:-5px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->
<button class="navbar-toggle"style="position:relative;top:10px" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>

</button>
<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

<div class="navbar-collapse collapse animated slideInLeft" style="font-size:23px;color:white" >

    <ul class="nav navbar-nav">
      <li><a href="adminhome.php">AdminHome</a></li>
      <li><a href="apizzaupdate.php">Pizza</a></li>
      <li><a href="amoreupdate.php">Products</a></li>
      <li><a href="aorder.php">Order</a></li>
      <li><a href="aorderhistory.php">OrderHistory</a></li>
    <!/ul>
	<!ul class="nav navbar-nav navbar-right">
	      <li><a href="alogout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>













<?php
$qe="SELECT * FROM `sighnin` where `currentstatus`='notconfirm'";
$result=mysqli_query($con,$qe);
if(!mysqli_num_rows($result))
{
	?>
	<a  class="btn btn-danger center-block" style="margin-top:20px;width:40%">No Order Found</a>
	<?php
}


while($rows=mysqli_fetch_array($result)){
$email=$rows['email'];	
?>

<div class="row center-block" style="background-color:#071F3A;width:80%" >
<?php
$q="select * from `cart` where `User`='$email' &&  `Status`='order' && `AdminStatus`='notconfirm'";
$res=mysqli_query($con,$q);

$item=0;
$TotalAmount=0;
?>

<br>
<br>

<div class="row center-block" style="width:80%;" >




<h1 style="color:red">  <?php 
echo $rows['email']; ?> </h1>
<p style="font-size:18px;color:white">
Customer Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $rows['name']; ?><br>
Customer Co.:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $rows['mobile']; ?> <br>
Customer Address:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $rows['address']; ?>
</p>
</p>
</p>
<?php
while($row=mysqli_fetch_array($res))
{	
?>
<form method="POST" action="confirmorder.php">
<div class="pannel col-sm-4" style="height:400px;Background-color:black;border-right:5px #071F3A solid;border-bottom:5px #071F3A solid;">
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
 



?>
 
</div>
<?php 
if(mysqli_num_rows($res)>0){?>
<h2 style="color:white;margin-left:200px">Total Amount &nbsp;<span class="fa fa-inr"style="position:relative;bottom:10px;font-size:18px;"></span><?php echo $TotalAmount;?></h2>
 <div class="form-group">
<label for="msg" style="color:white">Message</label>
<input type="text" id="msg" class="form-control" value="Your Order Should be Deleverd in 5 min" name="msg">
</div>
 <input type="submit"   class="btn btn-success  col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" style="color:white"  value="Confirm Order"> </input>
 <input type="hidden" value="<?php echo $rows['email'];?>" name="email">
 </form>
<br>
<br>
<hr>
</div>
<br>
<?php }}
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
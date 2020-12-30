<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
	header("Location:index.html");
?>


<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body   style="background-color:#071F3A;">








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

  
  
<!-- NAVEBAR END -->
  





















 <!--AddNEWPRODUCT-->
 <br>

 <div class="row">
 <div class="col-sm-1">
 </div>
 <a class="btn btn-success btn-lg col-xs-6 col-sm-2 " data-toggle="modal" data-target="#formforaddproduct"> Add New Category </a>  
 <a class="btn btn-success btn-lg col-xs-6 col-sm-2 col-sm-offset-1" data-toggle="modal" data-target="#formfordeleteproduct"> Delete Category</a>
 </div>

<?php ?>
<!--AddNEWPRODUCT-->
<?php
$DishPage="pizza";
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);
$qfp="select * from `constructer`";
$rfp=mysqli_query($con,$qfp);
$TotalSet=mysqli_num_rows($rfp); 
for($j=1;$j<=$TotalSet;$j++){
  $disSetRow=mysqli_fetch_array($rfp);

 
?>

<div class="container">
<div class="row"><!-- ROW FOR PRODUCT START -->
<!-- DiskSTANDARD START -->
<div class="row">
<div class=" col-sm-offset-4 col-xs-offset-2"  ><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,#071F3A, #EFDBB6, gold);">&nbsp;&nbsp;</h1>&nbsp;&nbsp;<span style="font-weight:bold;color:gold;position:relative;top:-20px;font-size:30px"> <?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></span>&nbsp;&nbsp;<h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,gold, #EFDBB6,#071F3A);">&nbsp;&nbsp;</h1></div>
</div>
<!-- DiskSTANDARD END -->

<!-- Add Item Toggle Start -->
<div class="row container">
<a class="btn btn-info btn-lg col-xs-offset-3 col-xs-6 col-sm-offset-8 col-sm-4" data-toggle="modal" data-target="#formforadditem<?php echo $j;?>"> Add Items in <?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></a>
<br><br><br>
</div>

<!-- Add Item Toggle End -->


<?php

$q="select * from"." `".$disSetRow['ProductName']."`";
?>
  
<?php 
$result=mysqli_query($con,$q);
$TotalDish=mysqli_num_rows($result);
for($i=1;$i<=$TotalDish;$i++){
	$dish=mysqli_fetch_array($result);
?>
<div style="border:2px solid #071F3A;background-color:black;border-radius:6px"class="pannel col-sm-4 col-sm-offset-<?php 
$a=$TotalDish%3;
if($a==1&&$i==$TotalDish)
	echo 4;
else if($a==2&&$i==$TotalDish-1)
	echo 2;
else
	echo 0;

?>">
<div class="pannel-body" >
<img src="<?php echo $dish['DishPath']; ?>" class="img img-responsive center-block">
</div>
<div class="pannel-body">
<p class="text-center" style="color:#926ABD"><?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></p>
<p class="text-center" style="color:white;font-weight:bold;font-size:20px"><?php echo $dish['DishName']; ?></p>
<p class="text-center" style="color:white;height:40px;"><?php echo $dish['DishMetarial']; ?></p>
<p class="hidden text-center" style="color:white"><b>Crust:</b>&nbsp;<span><?php echo $dish['Crust']; ?> &nbsp;|&nbsp;</span><b>Size:</b>&nbsp;<span><?php echo $dish['Size']; ?> &nbsp;|</span>&nbsp;<span style="color:white" class="fa fa-cog"></span>
<p>
<p class="text-center" style="color:white;font-size:20px;"><span class="fa fa-inr"style="position:relative;bottom:10px;"></span><span style="color:white;font-weight:bold;font-size:40px"><?php echo $dish['DishPrice']; ?></span></p>
<! Update start >
<form method="post" action="updaterequest.php" style="display:inline">
<input type="hidden" value="<?php echo $dish['DishId']; ?>" ID="DishId" name="DishId">
<input type="hidden" value="<?php echo $disSetRow['ProductName']; ?>" ID="DishSet" name="DishSet">
<input type="hidden" value="<?php echo $DishPage; ?>" ID="DishPage" name="DishPage">
<input type="submit" class="btn btn-danger col-xs-offset-1" style="width:30%;" value="Update">
</form>
<! Update End >

<form method="post" action="delete.php" style="display:inline">
<input type="hidden" value="<?php echo $dish['DishId']; ?>" ID="DishId" name="DishId">
<input type="hidden" value="<?php echo $disSetRow['ProductName']; ?>" ID="DishSet" name="DishSet">
<input type="hidden" value="<?php echo $DishPage; ?>" ID="DishPage" name="DishPage">
<input type="submit" class="btn btn-danger col-xs-offset-2" style="width:30%;" value="Delete">
</form>
<br><br>
</div>
</div>
<?php } ?>
</div><!-- ROW FOR PRODUCT END -->
</div>

<!-- Modal FOR ADDITEM START -->

<div id="formforadditem<?php echo $j;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Insert Item In <?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="insert.php" method="POST" enctype="multipart/form-data">
				   <input type="hidden" value="<?php /* control by outer loop*/ echo $DishPage; ?>" name="DishPage" id="DishPage">
					<input type="hidden" value="<?php /* control by outer loop*/ echo $disSetRow['ProductName']; ?>" name="DishSet">
                   <div class="form-group">
                    <label for="DN" >Enter Dish Name:-</label>
                    <input type="text" class="form-control" placeholder="Enter Dish Name" required id="DN" name="DishName">
                    </div>
					<div class="form-group">
                    <label for="DM" >Enter Dish Material:-</label>
                    <input type="text" class="form-control" placeholder="Enter Dish Material and seprete with comma" required id="DM" name="DishMaterial">
                    </div>
					<div class="form-group">
                    <label for="DP" >Enter Dish Price:-</label>
                    <input type="tel" class="form-control" placeholder="Enter Dish Price" required id="DP" name="DishPrice">
                    </div>
					
					<div class="form-group">
                    <label for="DI" >Upload Image of Pizza:-</label>
                    <input type="file" class="form-control-file" placeholder="Enter Dish Price" required id="DI" name="DishImage">
                    </div>
					
					
					<div class="hidden">
                    <label for="cr" >Crust(optional):-</label>
                    <input type="text" class="form-control"value="Pan"  id="cr" name="Crust">
                    </div>
					<div class="hidden">
                    <label for="si" >Size(optional):-</label>
                    <input type="text" class="form-control" value="Medium"  id="si" name="Size">
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR ADDITEM END -->
<?php } ?>

































<!-- Modal FOR ADDPRODUCT START -->

<div id="formforaddproduct" class="modal fade" role="dialog">
  <div class="modal-dialog">
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">ADD New Product</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="addproduct.php" method="POST" >
				   <input type="hidden" value="<?php echo $DishPage ;?>" name="ProductPage" id="ProductPage">
					
                   <div class="form-group">
                    <label for="ProN" >Enter Product Name:-</label>
                    <input type="text" pattern="[a-zA-Z0-9-_ ]+" oninvalid="setCustomValidity('space does not allow')" class="form-control" placeholder="Enter Product Name" required id="ProN" name="ProductName">
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR ADDPRODUCT END -->
<!-- Modal FOR DELETEPRODUCT START -->

<div id="formfordeleteproduct" class="modal fade" role="dialog">
  <div class="modal-dialog">
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Delete A Product</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="deleteproduct.php" method="POST" >
				   <input type="hidden" value="<?php
echo $DishPage;?>" name="ProductPage" id="ProductPage">
					
                   <div class="form-group">
                    <select class="form-control"required id="ProId" name="ProId">
					<option>Select Product</option>
					<?php $qe="select * from constructer";
$re=mysqli_query($con,$qe);
$TotalSet=mysqli_num_rows($re); 
for($k=1;$k<=$TotalSet;$k++){
  $option=mysqli_fetch_array($re);?>
					<option value="<?php  echo $option['ProId']; ?>"><?php  echo $option['ProductName']; ?></option>
					<?php } ?>
					</select>
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR DELETEPRODUCT END -->










<?php
mysqli_close($con);
?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
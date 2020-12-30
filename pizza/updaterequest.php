<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body class="container" style="background-color:Red;">
<?php
$DishPage=$_POST['DishPage'];
$DishSet=$_POST['DishSet'];
$DishId=$_POST['DishId'];




 $con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);
$querry="select * from `$DishSet` where `DishId`=$DishId"; 
echo $querry;
$result=mysqli_query($con,$querry);
$option=mysqli_fetch_array($result);


echo $option['DishName'];
echo $DishPage ;
echo $DishSet ;
echo $DishId ;

?>

 <div   >
  <div >
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <a href="amoreupdate.php"><button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button></a>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Insert Item In </h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="update.php" method="POST" enctype="multipart/form-data">
				   <input type="hidden" value="<?php echo $DishPage ?>" name="DishPage" id="DishPage">
					<input type="hidden" value="<?php echo $DishSet ?>" name="DishSet">
					<input type="hidden" value="<?php echo $DishId ?>" name="DishId">
                   <div class="form-group">
                    <label for="DN" >Enter Dish Name:-</label>
                    <input type="text" class="form-control" value="<?php echo  $option['DishName'] ?>" placeholder="Enter Dish Name" required id="DN" name="DishName">
                    </div>
					<div class="form-group">
                    <label for="DM" >Enter Dish Material:-</label>
                    <input type="text" class="form-control" value="<?php echo $option['DishMetarial'] ?>"placeholder="Enter Dish Material and seprete with comma" required id="DM" name="DishMaterial">
                    </div>
					<div class="form-group">
                    <label for="DP" >Enter Dish Price:-</label>
                    <input type="tel" class="form-control"value="<?php echo $option['DishPrice'] ?> "placeholder="Enter Dish Price" required id="DP" name="DishPrice">
                    </div>
					
					<div class="form-group">
                    <label for="DI" >Upload Image of Pizza:-</label>
                    <input type="file" class="form-control-file" placeholder="Enter Dish Price"  id="DI" name="DishImage">
                    </div>
					
					
					<div class="form-group">
                    <label for="cr" >Crust(optional):-</label>
                    <input type="text" class="form-control" value="<?php echo $option['Crust'] ?>" placeholder="By default Pan" id="cr" name="Crust">
                    </div>
					<div class="form-group">
                    <label for="si" >Size(optional):-</label>
                    <input type="text" class="form-control"value="<?php echo $option['Size'] ?>" placeholder="By default Medium" id="si" name="Size">
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9" value="UPDATE">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>

	<?php
	echo $DishPage ;
echo $DishSet ;
echo $DishId ;
echo $option['DishName'];
	?>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
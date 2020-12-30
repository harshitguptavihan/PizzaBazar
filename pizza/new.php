<div class="pannel col-sm-4" style="height:410px;Background-color:black;border-right:5px #071F3A solid;border-bottom:5px #071F3A solid;">
<div class="pannel-body">
<a href="deletecartitem.php?CartId=<?php echo $row['Id'];?>&&DishPrice=<?php echo $row['DishPrice']  ;?>" class="col-xs-offset-9"" "><button type="button" class="close" style=";font-size:45px;border:3px solid red;width:60px;height:40px;line-height:30px;background-color:red;border-radius:5px;margin-top:14px" data-dismiss="modal">&times;</button></a>
<img src="<?php echo $row['DishPath'] ;?>" class="img img-responsive center-block">
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
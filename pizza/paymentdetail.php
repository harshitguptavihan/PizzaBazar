<?php 
session_start();
if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
	header("Location:index.php");

$email=$_SESSION['email'];

$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `sighnin` where `email`='$email'";
$query=mysqli_query($con,$q);

$row=mysqli_fetch_array($query);



?>



<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="signinform.css">
</head>
<body style="background-color:black">
<!-- NAVEBAR START -->






<div class="container">
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->

<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

	<!-- clse Collapse -->
  </div>
</div>

  
<!-- NAVEBAR END -->



<!-- Modal FOR SIGN START -->

<div class="col-sm-6 col-sm-offset-3">
  <div>
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-90px;font-size:15px">
	   <div class="modal-header">
           
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Payment Details</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="pay.php" method="post" >
				    <div class="">
                    <p><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['name'];?><p>
                    </div>                                  
                    <div class="">
					<p><b>Contact No:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['mobile'];?><p>
                     
                    </div>
					<div class="">
					<p><b>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['address'];?><p>
                     
                    </div>
					
                    
					
					
					
					
					
					
<table class="table table-bordered table-striped">
<thead class="thead-dark">
<tr>
<th>
Sr No.  					
</th>
<th>
Product Name					
</th>
<th>
Price					
</th>
<th>
Qty					
</th>
<th>
Amount					
</th>
</tr>
<thead>					

				
					

					
					<?php
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from `cart` where `User`='$email' &&  `Status`='incart' ";
$res=mysqli_query($con,$q);
$item=0;
$TotalAmount=0;
?>
					
					
					
					
					
					
					
	<div class="row center-block" style="width:80%" >

<?php
$count=1;
while($row=mysqli_fetch_array($res))
{
?>
<tbody>
<tr>
<td>
<?php echo $count ;
$count++;?>					
</td>
<td>
<?php echo $row['DishName'] ;?>					
</td>
<td>
<?php echo $row['DishPrice']  ;?>					
</td>
<td>
<?php echo $row['NumOfItem']  ;?>
					
</td>
<td>
<?php echo ((float)$row['DishPrice'])*((int)$row['NumOfItem'])   ;?>				
</td>
					
</tr>	
</tbody>
  
  
  
  
  
<?php
$item++;
$TotalAmount=$TotalAmount+(((float)$row['DishPrice'])*((int)$row['NumOfItem']) );
 }
 ?>
 					
 <?php
 if($item>0)
 {
?> 
  
  
  
</div>  				
	

 
 <tr>
 <td colspan="4">
 <center>Total Amount </center>
 </td>
 <td>
 <?php echo $TotalAmount; ?>
 </td>
 </tr>
 </table>
 



  
  
 <?php } 
 else 
 {?>
<a href="" class="btn btn-danger center-block" style="margin-top:20px;width:40%">Cart is empty</a>
<?php } ?>					
					
					
					
					
					
					
					
					
					
					
					
					
					
                      <input type="submit" value="Pay" class="btn btn-info col-sm-offset-10 col-xs-offset-11">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR SIGN END -->







<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
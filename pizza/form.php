<form method="post" action="form.php">
 <div class="form-group">
                    <label for="email" >Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"id="email" required>
                    </div>                                               
                <input type="submit" name="sub" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
</form>


<?php
if(isset($_POST['sub']))
{
	
	
$to = "shdc.bca.1.harshit@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: shdc.bca.1.harshit@gmail.com" . "\r\n" .
"CC: shdc.bca.1.harshit@gmail.com";

mail($to,$subject,$txt,$headers);

}
?>
<?php

include "admin/common/config.php";
$crud = new config();

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$cname = $_POST['cname'];
	$message = $_POST['message'];
	$crud->insertServiceOrder($name,$email,$phone,$cname,$message);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
   <head>
      <meta charset="utf-8">
      <title>Success</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <?php include "common/css.php" ?>
   </head>
   <body>
      <?php include "common/header.php" ?>
      <div class="main-home1 mt-8">
         <div class="container">
            <div class="row">
		        
		        <h1 style="font-size: 50px;text-align: center;text-transform: capitalize;">Your inquiry is successfully submited!</h1>
              
            </div>
         </div>
      </div>
      <?php include "common/footer.php" ?>
   </body>
</html>




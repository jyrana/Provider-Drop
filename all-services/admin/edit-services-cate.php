<?php 
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))

$id=$_GET['id'];

if(isset($_POST['submit']))
{
   $name=$_POST['name'];

   $result=mysqli_query($demo->config,"UPDATE `categories` SET `name`= '$name' WHERE `id` = '$id'");
    header('Location: view-services-cate.php');
 }

 ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Edit Service Categories</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <div id="main-wrapper">
         <!-- end java script
            header -->
         <?php include("common/header.php");?>
         <div class="page-content">
            <!-- end .map-section -->
            <div class="contact-us">
               <div class="container">
                  <div class="row">
                     <h1 style="color:#000000">
                        <center>Edit Service Categories</center>
                     </h1>
                     <div class="col-md-10 col-md-offset-1">
                        <div class="send-message">
                           <form method="post" action="">
                              <div class="row">
                                 <div class="col-md-12">
                                    <label for="Description">Categories name</label>
                                    <input type="text" name="name" placeholder="Add Contact Name" required="">
                                 </div>
                                 
                              </div>
                              <!-- end nasted .row -->
                              <!-- <button><i class="fa fa-paper-plane-o"></i> Submit </button> -->
                              <input type="submit" name="submit" value="SAVE">
                           </form>
                        </div>
                        <!-- end .send-message -->
                     </div>
                  </div>
               </div>
               <!-- end .row -->
            </div>
            <!-- end .container -->
         </div>
         <!-- end .contact-us -->
      </div>
      <!-- end page-content -->
      </div>
   </body>
</html>
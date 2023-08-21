<?php 
include "common/config.php";
$demo=new config;
$result=$demo->selectServiceOrder();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>View Service</title>
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
                        <center>View Service Inquiry</center>
                     </h1>
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <td>Name</td>
                              <td>Email</td>
                              <td>Phone</td>
                              <td>Message</td>
                              <td>Service Name</td>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                        while($js=mysqli_fetch_assoc($result))
                          { 
                      ?>
                          <tr>
                              <td><?php echo $js['name'];?></td>
                              <td><?php echo $js['email'];?></td>
                              <td><?php echo $js['phone'];?></td>
                              <td><?php echo $js['message'];?></td>
                              <td><?php echo $js['cname'];?></td>
                           </tr>
                           <?php
                        }
                      ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- end .row -->
            </div>
            <!-- end .container -->
         </div>
         <!-- end .contact-us -->
      </div>
    
      </div>
   </body>
</html>
<?php 
include "common/config.php";
$demo=new config;

if(isset($_POST['submit']))
{
   $name=$_POST['name'];

   $demo->insertCategories($name);
 }
   $result=$demo->selectCategories();
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>View User</title>
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
                     <h1 style="color: #000000">
                        <center>View Service Categories</center>
                     </h1>
                     <table class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <td>Categories Name</td>
                              <td>Edit</td>
                              <td>Delete</td>
                           </tr>
                        </thead>
                        <tbody>
                          <?php
                              while($js=mysqli_fetch_assoc($result))
                              { 
                            ?>
                            <tr>
                                <td><?php echo $js['name'];?></td>
                                <td><a href="edit-services-cate.php?id=<?php echo $js['id'];?>">Edit</a></td>
                                <td><a href="delete-cate.php?id=<?php echo $js['id'];?>">Delete</a></td>
                            </tr>
                          </tbody>
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
<?php 
include "common/config.php";
$demo=new config;
$result=$demo->selectCategories();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Add Service</title>
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
                     <center><h1 style="color:#000000">Add Service</h1></center>
                      <div class="col-md-10 col-md-offset-1">
                        <div class="send-message">
                           <form method="POST" action="view-services.php" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-12">
                                    <label for="Description">Service name</label>
                                    <input type="text" name="name" placeholder="Service Name" required="">
                                 </div>
                                  <div class="col-md-12">
                                    <label for="Description">Service Price</label>
                                    <input type="text" name="price" required="">
                                 </div>
                                 <div class="col-md-12">
                                    <label for="Description">Attach Photo</label>
                                    <input type="file" name="p_photo" required="">

                                    <label for="Description">Choose Categories</label>
                                    <select class="form-control" name="cname" required="">
                                       <?php
                                          while($js=mysqli_fetch_assoc($result))
                                          { 
                                       ?>
                                          <option value="<?php echo $js['name'];?>"><?php echo $js['name'];?></option>
                                       <?php
                                       }
                                       ?>



                                    </select>
                                 </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="Description">Description</label>
                                       <textarea class="form-control rounded-0" name="description" rows="3" required=""></textarea>
                                     </div>
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
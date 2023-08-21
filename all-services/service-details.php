<?php 
   include "admin/common/config.php";
   $demo=new config; 
   if(isset($_GET['id'])){
      $id=$_GET['id'];
      $data=$demo->selectServicesById($id);
   }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
   <head>
      <meta charset="utf-8">
      <title>Services Details</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <?php include "common/css.php" ?>
   </head>
   <body>
      <?php include "common/header.php" ?>
      <div class="main-home1 mt-8">
         <div class="container">
            <div class="row">
               <?php
                  while($js=mysqli_fetch_assoc($data)){ 
                  ?>
               <div class="col-lg-8 col-md-8 col-sm-12">
                  <div class="service-wrap">
                     <article class="post post-wrap">
                        <div class="featured-post">
                           <div class="post-img">
                              <img src="admin/serices-upload/<?php echo $js['photo'];?>" alt="image" style="width: 100%">
                           </div>
                        </div>
                        <div class="content-post">
                           <h2 class="content-post-h2"><?php echo $js['name'];?> @ <?php echo $js['price'];?> RS</h2>
                           <p style="word-break: break-all;"><?php echo $js['description'];?></p>
                        </div>
                     </article>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="0"></div>
                  <div class="sidebar-wrap sidebar">
                     <div class="widget widget-service-post">
                        <div class="form-submit">
                           <form action="insertservice.php" method="post">
                              <div class="form-group">
                                 <label for="name">Name</label>
                                 <input name="name" type="text" required="required" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label for="name">Email</label>
                                 <input name="email" type="email" required="required" class="form-control">
                              </div>
                             <div class="form-group">
                                 <label for="name">Phone Number</label>
                                 <input name="phone" type="text" required="required" class="form-control">
                                 <input name="cname"  type="hidden"  value="<?php echo $js['name'];?>">
                              </div>

                              <div class="form-group">
                                 <label for="name">Write Message</label>
                                 <textarea name="message" required="required" required="" class="form-control" rows="5"></textarea> 
                              </div>

                              <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                           </form>
                        </div>
                     </div>
                    <hr>
                     <div class="widget-need-help">
                        <h4 class="heading">Need Help?</h4>
                        <p>Speak with a human to filling out a form? call corporate office and we will connect you with a team member who can help.</p>
                        <p>666 888 0000</p>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <?php include "common/footer.php" ?>
   </body>
</html>
<?php 
include "admin/common/config.php";
$demo=new config; 
$result=$demo->selectCategories();
if(isset($_GET['name'])){
  $name=$_GET['name'];
  $data=$demo->selectServicesByName($name);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
   <head>
      <meta charset="utf-8">
      <title>Services</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <?php include "common/css.php" ?>
   </head>
   <body>
    <?php include "common/header.php" ?>
      <div class="main-home1 mt-8">
        <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 side-bar">
                  <div class="sidebar-inner">
                     <div class="widget widget-categories">
                        <h3 class="widget-title sidebar-title">Categories</h3>
                        <table class="table">
                          <?php
                            while($js=mysqli_fetch_assoc($result)){ 
                          ?>
                            <tr>
                              <td><a href="servicesfilter.php?name=<?php echo $js['name'];?>"><?php echo $js['name'];?></a></td>
                            </tr>
                          <?php } ?>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="row">
                    <?php
                      while($js=mysqli_fetch_assoc($data)){ 
                    ?> 
                    <div class="col-lg-4 col-md-4 col-sm-6">
                      <div class="servicecard">
                          <img class="card-img-top" src="admin/serices-upload/<?php echo $js['photo'];?>" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="servicecard-title"><?php echo $js['name'];?></h3>
                            <a href="service-details.php?id=<?php echo $js['id'];?>" class="btn btn-primary">READ MORE</a>
                          </div>
                      </div>
                    </div>  
                   <?php } ?> 
                </div>
               </div>
            </div>
        </div>
      </div>
      <?php include "common/footer.php" ?>
   </body>
</html>
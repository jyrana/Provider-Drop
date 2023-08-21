<?php 
   include "common/config.php";
   $demo=new config;
   if(isset($_POST['submit']))
   {
     $name=$_POST['name'];
     $price=$_POST['price'];
     $file_type=$_FILES['p_photo']['tmp_name'];
     $tmp_loc=$_FILES['p_photo']['tmp_name'];
     $p_photo=$_FILES['p_photo']['name'];
     $new_path="serices-upload/".$p_photo;
     $upload=move_uploaded_file($tmp_loc,$new_path);
     $description= $_POST['description'];
     $cname = $_POST['cname'];
     $demo->insertServices($name,$price,$p_photo,$file_type,$tmp_loc,$cname,$description);
    }
     $result=$demo->selectServices();
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div id="main-wrapper">
      <?php include("common/header.php");?>
      <div class="page-content">
      <div class="contact-us">
         <div class="container">
            <div class="row">
               <center>
                  <h1 style="color:#000000">View Service</h1>
               </center>
               <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <td>Service name</td>
                           <td>Service Price</td>
                           <td>Attach File</td>
                           <td>Categories</td>
                           <td>Description</td>
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
                           <td><?php echo $js['price'];?></td>
                           <td><img src="serices-upload/<?php echo $js['photo'];?>" style="height: 30px;"></td>
                           <td><?php echo $js['cname'];?></td>
                           <td><?php echo $js['description'];?></td>
                           <td><a href="edit-service.php?id=<?php echo $js['id'];?>">Edit</a></td>
                           <td><a href="delete-product.php?id=<?php echo $js['id'];?>">Delete</a></td>
                        </tr>
                     </tbody>
                     <?php
                        }
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
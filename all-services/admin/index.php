<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Login</title>
      <!-- Stylesheets -->
      <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="js/masterslider/style/masterslider.css">
      <link rel="stylesheet" href="js/masterslider/skins/black-2/style.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!--[if IE 9]>
      <script src="js/media.match.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div id="main-wrapper">
      <!-- end java script
         header -->
      <div class="page-content">
         <!-- end .map-section -->
         <div class="contact-us">
            <div class="container">
               <div class="row">
                  <div  class="col-md-6">
                     <div class="send-message">
                        <h4>Login </h4>
                        <form method="POST" action="">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <input type="text" placeholder="Username*" name="username" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <input type="password" placeholder="Password" name="password" required="">
                              </div>
                           </div>


                           <button type="submit" name="submit"><i class="fa fa-paper-plane-o"></i>Login</button>
                           <?php
                              if(isset($_POST['submit']))
                              {
                                 $username = $_POST['username'];
                                 $password = $_POST['password'];

                                 if($username == 'admin'  &&  $password == '1234')
                                 {
                                    header("Location:admindashboard.php");
                                 }
                                 else
                                 {
                                    echo "
                                            <div class='alert alert-danger'>

                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>

                                                <strong>Error!</strong> Something Went Wrong
                                              </div>

                                       ";
                                 
                                 }
                              }
                           ?>

                        </form>
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
      <!-- end java script
         main-wrapper -->
      <!-- Scripts -->
      <!-- CDN jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </body>
</html>
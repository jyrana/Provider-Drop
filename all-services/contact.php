<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
   <head>
      <meta charset="utf-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <?php include "common/css.php" ?>
   </head>
   <body>
      <?php include "common/header.php" ?>
      <div class="main-home1 mt-8">
        <div class="title-section style1">
            <h1 class="heading">Contact</h1>
        </div>
         <div class="container">
            <form method="post" action="insertcontact.php">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input name="name" type="text" required="required" class="form-control">
               </div>
               <div class="form-group">
                  <label for="name">Email</label>
                  <input name="email" type="email" required="required" class="form-control">
               </div>
               <div class="form-group">
                  <label for="name">phone</label>
                  <input name="phone" type="number" required="required" class="form-control">
               </div>
               <div class="form-group">
                  <label for="name">Subject</label>
                  <input name="subject" type="text" required="required" class="form-control">
               </div>
               <div class="form-group">
                  <label for="name">Write Message</label>
                  <textarea name="message" required="required" required="" class="form-control" rows="5"></textarea> 
               </div>
               <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
            </form>
         </div>
         <br>
      </div>
      <?php include "common/footer.php" ?>
   </body>
</html>
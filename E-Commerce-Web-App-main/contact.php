<?php
include 'header.php';
?>
<html>
    <head>
        <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body><br><br>
       <div class="container" style="height: 87.5%;">
           <div class="row">
               <div class="col-xs-9">
           <h1>Live Support</h1>
           <p><h3>24 Hours | 7 days a Week | 365 days a year Live Technical Support</h3></p> 
           <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum</p>   
               </div>
               <div class="col-xs-3"><br>
                   <img src="img/3.jfif" style="width: 80%">
               </div>
       </div>
           <div class="row">
               <div class="col-xs-7">
                   <h1>Contact Us</h1>
                   <form method="post" action="contact_script.php">
                       <div class="form-group">
                           Name: <input type="text" class="form-control" name="name"><br>
                           Email: <input type="email" class="form-control" name="email"><br>
                           Message:<textarea name="message" rows="6" cols="95"></textarea>
                       </div>
                   <button class="btn btn-primary">Submit</button>
                   </form>
               </div>
               <div class="col-xs-5">
                   <h2>Company Information:</h2>
                   <p style="line-height: 30px;">500 Lorem ipsum Dolor sit,<br>USA<br>Phone: +00-0000<br>Email: info@mycompany.com
                   <br>Follow Us on Facebook, Twitter.</p>
               </div>
                   
           </div>   
   </div>
       </body>
</html>
<?php
include 'footer.php';
?>
    


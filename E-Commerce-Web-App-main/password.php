
<?php
require 'common.php';
include 'header.php';
?>
<html>
    <head>
        <title>Reset Password</title>>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
    </head>
    <body style="height: 90%;">

    <center>
        <br><br><br><br>
<form method="post" action="password_script.php">
    <div class="container" style="height: 88%">
        <h2 style="text-align:left;">Enter Email ID to Reset Password</h2>
        <div class="row">
    <div class="form-group col-xs-5">
    <input type="email" class="form-control" name="email" placeholder="Email"
                   required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br></div>
</form>
<button class="btn btn-primary">Submit</button></div></div>
</body>
</html>
<?php
include 'footer.php';
?>



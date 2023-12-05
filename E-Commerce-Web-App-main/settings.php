<?php
require 'common.php';
if(!isset($_SESSION['email'])){
header('location:index.php');}
?>
<html>
    <head>
        <title>Settings</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container" style="padding-left:300px; padding-right: 300px;height: 100%;  padding-top: 50px;"><br>
            <h2><strong>Change Password</strong></h2>
            <form method="post" action="setting_script.php">
                <div class="">
                <div class="form-group">
                    <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required="true" pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="password" name="newpassword" class="form-control" placeholder="New Password" required="true" pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="password" name="reenternewpassword" class="form-control" placeholder="Re-enter New Password"
                           required="true" pattern=".{6,}">
                </div>
                <button
                    class="btn btn-primary">Change</button>
                </div>
            </form></div>
        <?php 
        include 'footer.php';
         ?>
            
        </div>
    </body>
</html>

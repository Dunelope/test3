<?php
require 'common.php';
?>
<html>
    <head>
        <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>    
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <br><br>
        <div class="container" style="width: 30%;padding-left: 50px; padding-right: 50px; height: 100%;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>LOGIN</h3>
                </div>
                <div class="panel-body">
                    <div class="text-warning">Login to make a purchase</div>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                   required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                   required="true" pattern=".{6,}">
                        </div>    
                             
                    <button class="btn btn-primary">Login</button></form>
                </div><br><br>
                <div class="panel panel-footer">
                    Don't have a account?
                    <a href="signup.php">Register</a>
                </div>
            </div>
        </div>
    <?php
        include 'footer.php';
        ?>
    </body>
</html>

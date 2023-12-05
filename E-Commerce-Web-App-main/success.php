<?php
require'common.php';
if(!isset($_SESSION['email'])){
header('location:index.php');}
$id=$_SESSION['id'];
$query="DELETE FROM user_items WHERE user_id=$id";
$result= mysqli_query($con, $query) or die(mysqli_error($con));


?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="padding: 300px;">
            <h1><p style="line-height:4px;">Your order is confirmed.</p></h1>
            <h3> <p >Thank you for shopping with us.</p></h3><br><br>
            <p style="font-size: 20px;"> <a href=product.php>Click here</a>
               to purchase any other item.</p>
        </div>
    </body>
</html>

<?php
require 'common.php';
$user_id=$_SESSION['id'];
$query="SELECT products.id, user_id, name, price, status FROM `user_items` INNER JOIN products ON user_items.item_id=products.id WHERE user_items.user_id='$user_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$n=mysqli_num_rows($result);
include 'header.php';
if($n==0){
    echo 'Add items to cart First!';
}
else{
    $sum=0; 
    ?>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
       <div class="container" style="height: 100%;padding-left: 300px; padding-right: 300px;"><br><br><br><br><br>
            <table class="table table-striped" style="">
                <tbody>
                    <tr><th>Item Name</th><th>Price</th><th></th></tr>
                    <?php
                    
    while($n--){
        $row= mysqli_fetch_array($result);
        
    echo "<tr><td>".$row['name']."</td><td>".$row['price']."<td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
    
    $sum=$sum+$row['price'];       
    }
                    }?>
                    <?php
                    echo "<tr><td><strong>Total</strong></td><td><strong>".$sum."</strong></td><td><button class=\"btn btn-primary\"><a href=\"success.php\" style=\"color: white;\">Confirm Order</a></button></td></tr>";?>      
                </tbody>
            </table>
        
       </div>
    <?php
    include 'footer.php';
     ?>
    </body>
</html>
<?php
require 'common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id','Added to cart')";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header("Location: product.php");
?>
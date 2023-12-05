<?php
require 'common.php';
$name= mysqli_real_escape_string($con, $_POST['name']);
$email=$_POST['email'];
$message=$_POST['message'];
$query="INSERT INTO contactus(id, name, email, message) VALUES(current_timestamp, '$name', '$email', '$message')";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header('location: contact.php'); 

?>
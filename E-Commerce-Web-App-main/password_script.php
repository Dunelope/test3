<?php
require 'common.php';
$email=$_POST['email'];
$query1="SELECT contact FROM users WHERE email='$email'";
$result1= mysqli_query($con, $query1) or die(mysqli_error($con));
if(mysqli_num_rows($result1)==0){
    echo '<center><h1>No such Email ID in Database, Kindly Signup.<h1></center>';
   header( "refresh:5;url=signup.php" );
}
else{
    $row= mysqli_fetch_array($result1);
    $phone= md5($row['contact']);
$query="UPDATE users SET password='$phone' WHERE email='$email'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
echo '<center><h1>Your Phone Number is your New Password<br>Kindly Signup and Change your Password in Settings as soon as possible. <h1></center>';
  header( "refresh:5;url=product.php" );
}
?>
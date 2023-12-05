<?php
require 'common.php';
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
$reenternewpassword=md5($_POST['reenternewpassword']);
$query="SELECT password FROM users WHERE password='$oldpassword'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
$query2 ="UPDATE users SET password='$newpassword' WHERE password='$oldpassword'";
 $result2= mysqli_query($con, $query2) or die(mysqli_error($con));
 header('location:product.php');
}
else{
    ?>
    <center><br><br><br><h1>Invalid Old Password</h1></center>
    <?php
   header( "refresh:5;url=settings.php" );
}
?>

<?php
include "connection.php";
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];
$email=$_REQUEST['email'];
$security_answer=$_REQUEST['security_answer'];
//if password and confirm_password match then update password in admin_info table
if($password==$confirm_password){
    $query="update admin_info set password='$password' where email='$email'";
    //echo $query;
    mysqli_query($conn, $query);
    header("location:admin_login.php?q=5");
}
//if password and confirm_password doesnt match
else{
    header("location:admin_forgot_password_action2.php?q=1&email=$email&security_answer=$security_answer");
}

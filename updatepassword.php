<?php
session_start();
include "./include/db.php";
$uid = $_SESSION['user_enrol'];
$password = mysqli_real_escape_string($conn,$_POST['password']);
$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
echo "<script>alert('hello')</script>";
if ($password != "" && $newpassword != ""){
    $query = "UPDATE `user` SET `password`=['$newpassword'] WHERE user_enrol = '$uid'";
    $select_data=mysqli_query($conn, $query);
    if(!$select_data){
        echo 0;
    }
    else
    {   

       // $_SESSION['user_enrol'] = $enrol;
        echo 1;    
    }
   
}
?>
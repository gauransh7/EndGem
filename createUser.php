<?php
include "./include/db.php";
$enrol = mysqli_real_escape_string($conn,$_POST['enrol']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$branch = mysqli_real_escape_string($conn,$_POST['branch']);

if ($enrol != "" && $password != "" && $name != "" && $branch!= ""){
    $query = "INSERT INTO `user`(`user_name`, `branch_id`, `user_enrol`, `password`, `posts`, `status`, `created`) VALUES ('$name','$branch','$enrol','$password','0','1',now())";
    $select_data=mysqli_query($conn, $query);
    if(!$select_data){
        echo 0;
    }
    else
    {   

        $_SESSION['user_enrol'] = $enrol;
        echo 1;    
    }
   
}
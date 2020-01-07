<?php
include "./include/db.php";
$enrol = mysqli_real_escape_string($conn,$_POST['enrol']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if ($enrol != "" && $password != ""){

    $sql_query = "SELECT count(*) as cntUser FROM user WHERE user_enrol='".$enrol."' and password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['user_enrol'] = $enrol;
        echo 1;
    }else{
        echo 0;
    }

}?>

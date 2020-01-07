<?php
include "./include/db.php";
$downloads = mysqli_real_escape_string($conn,$_POST['downloads']);
$id = mysqli_real_escape_string($conn,$_POST['id']);
$query="UPDATE post SET downloads='$downloads' WHERE id='$id'";
$retrieve=mysqli_query($conn,$query);
//if ($id!=""){
//
//    $sql_query = "SELECT downloads FROM post WHERE id='$id'" ;
//    $result = mysqli_query($conn,$sql_query);
//    if(!$result){
//        die('QUERY FAILED'.mysqli_error($conn));
//    }
//    else
//    {
//    
//     //   echo 'success';    
//    }
//    
//    $row = mysqli_fetch_array($result);
////echo "<script>alert('hello')</script>";
//    $count = $row['downloads'];
//    $count++;
//
//    if($count >= 0){
//        $query3 = "UPDATE `post` SET `downloads`=$count WHERE id = '$id'";
//        $run_query = mysqli_query($conn, $query3);
//        echo 1;
//    }else{
//        echo 0;
//    }
//
//}?>
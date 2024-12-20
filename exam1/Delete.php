<?php 
    include_once "dbConnect.php";
    $makhoa = $_GET['makhoa'];
    $sql_del = "DELETE FROM `khoa` WHERE `makhoa` = '$makhoa'";
    $data_del = mysqli_query($con, $sql_del);
    if($data_del) {
        header('location:Search.php');
    }
?>
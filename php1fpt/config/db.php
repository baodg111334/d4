<?php
$connect = mysqli_connect('localhost', 'root', '', 'php1fpt');
if($connect){
mysqli_query($connect, "SET NAMES 'UTF8'");
echo "ket noi thanh cong";
} else{
    echo 'ket noi that bai';
}
?>
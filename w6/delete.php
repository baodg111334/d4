<?php
$msv = $_GET['Masv'];
include_once "connect.php";
$sql = "Delete from sinhvien where Masv='$msv'";
$kq = mysqli_query($con, $sql);
if ($kq) {
    header("location: list.php");
} else {
    echo "<script>alert('Xoá thất bại!')</script>";
}
?>
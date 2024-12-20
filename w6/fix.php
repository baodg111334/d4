<?php
$msv = $_GET['Masv'];
include_once "connect.php";

//Tao cau lenh sql lay du lieu tu bang lophoc dua vao mang $lophoc
$sql = "Select * From lophoc";
$lophoc = mysqli_query($con, $sql);

//Tim kiem sinh vien theo ma sinh vien
$sql1 = "Select * from Sinhvien Where Masv='$msv'";
$data = mysqli_query($con, $sql1);

//Luu du lieu vao bang Sinhvien
if (isset($_POST['btnLuu'])) {
    $ht = $_POST['txtHoten'];
    $ns = $_POST['txtNgaysinh'];
    $gt = $_POST['ddlGioitinh'];
    $ml = $_POST['ddlLophoc'];
    $dt = $_POST['txtDienthoai'];
    $email = $_POST['txtEmail'];
    $dc = $_POST['txtDiachi'];

    //Tao cau lenh sql de chen du lieu vao bang sinhvien
    $sql1 = "UPDATE Sinhvien 
            SET Hoten='$ht', Ngaysinh='$ns', Gioitinh ='$gt', Malop='$ml', Dienthoai='$dt', Email='$email', Diachi ='$dc' 
            WHERE Masv='$msv'";

    //Thuc thi cau lenh
    $kq = mysqli_query($con, $sql1);
    if ($kq)
        echo "<script>alert('Sửa thành công!')</script>";
    else
        echo "<script>alert('Sửa thất bại!')</script>";
}
if (isset($_POST['btnBack'])) {
    header("location: list.php");
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <?php
                if (isset($data) && mysqli_num_rows($data) > 0) {
                    while ($r = mysqli_fetch_array($data)) {
                        ?>

                        <label>Mã sinh viên</label>
                        <input type="text" class="form-control" name="txtMasinhvien" value="<?php echo $r['Masv'] ?>"
                            readonly>
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" name="txtHoten" value="<?php echo $r['Hoten'] ?>">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="txtNgaysinh" value="<?php echo $r['Ngaysinh'] ?>">
                        <label>Giới tính</label>
                        <select name="ddlGioitinh" class="form-control">
                            <option value="">---Chọn giới tính---</option>
                            <option value="Nam" <?php if ($r['Gioitinh'] == 'Nam')
                                echo 'selected' ?>>Nam</option>
                                <option value="Nữ" <?php if ($r['Gioitinh'] == 'Nữ')
                                echo 'selected' ?>>Nữ</option>
                                <option value="Khác" <?php if ($r['Gioitinh'] == 'Khác')
                                echo 'selected' ?>>Khác</option>
                            </select>
                            <label>Lớp học</label>
                            <select name="ddlLophoc" class="form-control">
                                <option value="">---Chọn lớp học---</option>
                                <?php
                            if (isset($lophoc) && mysqli_num_rows($lophoc) > 0) {
                                while ($row = mysqli_fetch_assoc($lophoc)) {
                                    ?>
                                    <option value="<?php echo $row['Malop'] ?>" <?php if ($r['Malop'] == $row['Malop'])
                                           echo 'selected' ?>>
                                        <?php echo $row['Tenlop'] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <label>Điện thoại</label>
                        <input type="tel" class="form-control" name="txtDienthoai" value="<?php echo $r['Dienthoai'] ?>">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txtEmail" value="<?php echo $r['Email'] ?>">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="txtDiachi" value="<?php echo $r['Diachi'] ?>">
                        <?php
                    }
                }
                ?>
                <br>
                <button type="submit" class="btn btn-primary" name="btnLuu" style="margin-left:450px; margin-top:10px">Lưu</button>
                <button type="submit" class="btn btn-primary" name="btnBack" style="margin-left:200px; margin-top:10px">Trở lại</button>

            </div>
        </form>
    </div>
</body>

</html>
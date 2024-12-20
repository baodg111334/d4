<?php
include_once "connect.php";
$msv = '';
$ht = '';
$ns = '';
$gt = '';
$ml = '';
$dt = '';
$em = '';
$dc = '';
// tạo câu lệnh sql lấy dl từ bảng lop hoc dua vao mang $dt
$sql = "Select * from lophoc";
$lophoc = mysqli_query(mysql: $con, query: $sql);
//lưu dữ liệu vào bảng sinh viên
if (isset($_POST['btnLuu'])){
$msv = $_POST['txtMasinhvien'];
$ht = $_POST['txtHoten'];
$ns = $_POST['txtNgaysinh'];
$gt = $_POST['ddlGioitinh'];
$ml = $_POST['ddlLuu'];
$dt = $_POST['txtLuu'];
$em = $_POST['txtLuu'];
$dc = $_POST['txtDiachi'];
// tạo câu lệnh sql chèn dữ liệu vào bảng sinhvien
$sql1 = "Insert into sinhvien Values('$msv', N'$ht','$ns', N'$gt','$ml','$dt','$em',N'$dc')";
$kq  = mysqli_query(mysql: $con, query: $sql1);
if($kq) {
    echo "<script>alert('Thêm mới thành công')</script>";
    } else{
        echo "<script>alert('Thêm mới thất bại')</script>";
    }
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
mysqli_close(mysql: $con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<div class="container">
        <form method="post" action="">
        <div class="form-group">
                <label>Mã sinh vien</label>
                <input type="text" class="form-control" name="txtMasinhvien" value="<?php echo $msv ?>">
                <label>Họ và tên</label>
                <input type="text" class="form-control" name="txtHoten" value="<?php echo $ht ?>">
                <label>Giới tính</label>
                <select name="ddlGioitinh" class="form-control">
                    <option value="" >---Chọn giới tính---</option>
                    <option value="Nam" <?php if($gt=='Nam') echo 'selected' ?>>Nam</option>
                    <option value="Nữ" <?php if($gt=='Nữ') echo 'selected' ?>>Nữ</option>
                    <option value="Khác" <?php if($gt=='Khác') echo 'selected' ?>>Khác</option>
                </select>
                <label>Lớp học</label>
                <select name="ddlLophoc" class="form-control">
                    <option value="">---Chọn lớp học---</option>
                 <?php 
                    if(isset($lophoc)&&mysqli_num_rows($lophoc)>0){
                        while($row=mysqli_fetch_assoc($lophoc)){
                 ?>
                            <option value="<?php echo $row['Malop'] ?>" <?php if($ml==$row['Malop']) echo 'selected' ?>>
                                <?php echo $row['Tenlop'] ?>
                            </option>
                 <?php
                        }
                    }
                 ?>   

                </select>
                <label>Điện thoại</label>
                <input type="tel" class="form-control" placeholder="Điện thoại" name="txtDienthoai"
                    value="<?php echo $dt ?>">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="txtEmail" value="<?php echo $em ?>">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" placeholder="Địa chỉ" name="txtDiachi"
                    value="<?php echo $dc ?>">
                <button type="submit" class="btn btn-primary" name="btnSave" style="margin-left:450px">Lưu</button>
                <button type="submit" class="btn btn-primary" name="btnBack" style="margin-left:200px">Trở
                    về</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
include_once "connect.php";
$msv = '';
$ht = '';
$gt = '';
$ml = '';
$sql = "Select * from lophoc";
$lophoc = mysqli_query($con, $sql);

//tìm kiếm 
if (isset($_POST['btnTimkiem'])) {
    $msv = $_POST['txtMasv'];
    $ht = $_POST['txtHoten'];
    $gt = $_POST['ddlGioitinh'];
    $ml = $_POST['ddlLophoc'];
    $sql1 = "SELECT sinhvien.*,Tenlop FROM sinhvien,lophoc WHERE sinhvien.malop=lophoc.Malop and Masv like '%$msv%' and Hoten like '%$ht%' and Gioitinh like '%$gt%' and sinhvien.malop like '%$ml%'";
    $data = mysqli_query($con, $sql1);
}
if (isset($_POST['btnThemmoi'])) {
    header('location: bangmoi.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label>Mã sinh viên</label>
                <input type="text" class="form-control" placeholder="Mã sinh viên" name="txtMasv"
                    value="<?php echo $msv ?>">
                <label>Họ tên</label>
                <input type="text" class="form-control" placeholder="Họ tên" name="txtHoten" value="<?php echo $ht ?>">
                <label>Giới tính</label>
                <select name="ddlGioitinh" id="" class="form-control">
                    <option value="">
                        ---Chọn giới tính---
                    </option>
                    <option value="Nam" <?php if ($gt == 'Nam')
                        echo 'selected' ?>>
                            Nam
                        </option>
                        <option value="Nữ" <?php if ($gt == 'Nữ')
                        echo 'selected' ?>>
                            Nữ
                        </option>
                        <option value="Khác" <?php if ($gt == 'Khác')
                        echo 'selected' ?>>
                            Khác
                        </option>
                    </select>
                    <label>Mã lớp</label>
                    <select name="ddlLophoc" id="" class="form-control">
                        <option value="">---Chọn lớp học---</option>
                        <?php
                    if (isset($lophoc) && mysqli_num_rows($lophoc) > 0) {
                        while ($row = mysqli_fetch_assoc($lophoc)) {
                            ?>
                            <option value="<?php echo $row['Malop'] ?>" <?php if ($ml == $row['Malop'])
                                   echo 'selected' ?>>
                                <?php echo $row['Tenlop'] ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <button type="submit" class="btn btn-primary" name="btnTimkiem"
                    style="margin-left:450px; margin-top:10px">Tìm
                    kiếm</button>
                <button type="submit" class="btn btn-primary" name="btnThemmoi"
                    style="margin-left:150px; margin-top:10px">Thêm
                    mới</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($data) && mysqli_num_rows($data) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($data)) {
                        ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['Masv'] ?></td>
                            <td><?php echo $row['Hoten'] ?></td>
                            <td><?php echo $row['Ngaysinh'] ?></td>
                            <td><?php echo $row['Gioitinh'] ?></td>
                            <td><?php echo $row['Malop'] ?></td>
                            <td><?php echo $row['Tenlop'] ?></td>
                            <td><?php echo $row['Dienthoai'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Diachi'] ?></td>
                            <td>
                                <a href="fix.php?Masv=<?php echo $row['Masv'] ?>">Sửa</a>
                                <a href="delete.php?Masv=<?php echo $row['Masv'] ?>"
                                    onclick="return confirm('Bạn có chắc chắn xóa không ?')">Xoá</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
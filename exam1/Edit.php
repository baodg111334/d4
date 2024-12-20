<?php 
    include_once "dbConnect.php";

    $id = '';
    $makhoa = '';
    $tenkhoa = '';
    $socbgd = '';
    
    if (isset($_GET['makhoa'])) {
        $makhoa = $_GET['makhoa'];

        $sql_select = "SELECT * FROM `khoa` WHERE `makhoa` = '$makhoa'";
        $result = mysqli_query($con, $sql_select);

        if ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $tenkhoa = $row['tenkhoa'];
            $socbgd = $row['socbgd'];
            
        } else {
            echo "<script>alert('Không tìm thấy khoa!'); window.location='Search.php';</script>";
        }
    } else {
        echo "<script>alert('Không có khoa!'); window.location='Search.php';</script>";
    }


    // Xử lý khi người dùng nhấn nút Lưu
    if (isset($_POST['btnEdit'])) {
        $id = $_POST['txtid'];
        $makhoa = $_POST['txtmakhoa'];
        $tenkhoa = $_POST['txttenkhoa'];
        $socbgd = $_POST['txtsocbgd'];
        // Cập nhật thông tin 
        $sql_update = "UPDATE `khoa` SET id = '$id', tenkhoa = '$tenkhoa', socbgd = '$socbgd' WHERE makhoa = '$makhoa'";
        $data_update = mysqli_query($con, $sql_update);

        if ($data_update) {
            echo "<script>alert('Cập nhật thông tin thành công!'); window.location='Search.php';</script>";
        } else {
            echo "<script>alert('Cập nhật thông tin thất bại!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOA </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="" style="width: 100%; padding: 100px 350px">
            <h3 style="text-align: center;">CẬP NHẬT THÔNG TIN</h3>
            <div class="form-inline">
                <label for="makhoa$makhoa">ID:</label>
                <input type="text" class="form-control" name="txtid" value="<?php echo $makhoa;?>">
                <label for="makhoa">Mã khoa:</label>
                <input type="text" class="form-control" name="txtmakhoa" value="<?php echo $makhoa;?>" readonly>
                <label for="tenkhoa">Tên khoa:</label>
                <input type="text" class="form-control" name="txttenkhoa" value="<?php echo $tenkhoa;?>">
                <label for="socbgd">Socbgd:</label>
                <input type="text" class="form-control" name="txtsocbgd" value="<?php echo $socbgd;?>">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnEdit">Cập nhật</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnBack">Quay lại</button>
            </div>
        </form>
    </div>
</body>
</html>
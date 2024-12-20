<?php 
    include_once "dbConnect.php";

    $id = '';
    $makhoa = '';
    $tenkhoa = '';
    $socbgd = '';
    
    if(isset($_POST['btnAdd'])) {
        $id = $_POST['txtid'];
        $makhoa = $_POST['txtmakhoa'];
        $tenkhoa = $_POST['txttenkhoa'];
        $socbgd = $_POST['txtsocbgd'];

        // Primary Key Check
        $sql_check = "SELECT * FROM `khoa` WHERE `makhoa` = '$makhoa'";
        $result_check = mysqli_query($con, $sql_check);
        if(mysqli_num_rows($result_check) > 0) {
            echo "<script>alert('Trùng Khoa! Vui lòng kiểm tra lại!')</script>";
        } else {
            $sql_insert = "INSERT INTO `khoa`(`id`, `makhoa`, `tenkhoa`, `socbgd`) 
                            VALUES ('$id','$makhoa','$tenkhoa','$socbgd')";
            $data_insert = mysqli_query($con, $sql_insert);
        }
        
        if($data_insert) {
            echo "<script>alert('Thêm thông tin thành công!')</script>";
        } else {            
            echo "<script>alert('Thêm thông tin thất bại!')</script>";
        }
    }
    
    if(isset($_POST['btnBack'])) {
        header('location:Search.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm KHOA </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="" style="width: 100%; padding: 100px 350px">
            <h3 style="text-align: center;">THÊM THÔNG TIN</h3>
            <div class="form-inline">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="txtid" value="<?php echo $id;?>">
                <label for="makhoa">Mã khoa:</label>
                <input type="text" class="form-control" name="txtmakhoa" value="<?php echo $makhoa;?>">
                <label for="tenkhoa">Tên khoa :</label>
                <input type="text" class="form-control" name="txttenkhoa" value="<?php echo $tenkhoa;?>">
                <label for="socbgd">socbgd:</label>
                <input type="text" class="form-control" name="txtsocbgd" value="<?php echo $socbgd;?>">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnAdd">Thêm mới</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnBack">Quay lại</button>
            </div>
        </form>
    </div>
</body>
</html>
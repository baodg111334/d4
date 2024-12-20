<?php 
    include_once "dbConnect.php";

    $id = '';
    $makhoa = '';
    $tenkhoa = '';
    $socbgd = '';
    
    if(isset($_POST['btnSearch'])) {
        $makhoa = $_POST['txtmakhoa'];
        $tenkhoa = $_POST['txttenkhoa'];
    }        
        // Search SQL
        $sql_search = "SELECT * FROM `khoa` WHERE makhoa LIKE '%$makhoa%' 
                                                AND tenkhoa LIKE '%$tenkhoa%'";       
        $data_search = mysqli_query($con, $sql_search);

    if(isset($_POST['btnAdd'])) {
        header('location:Add.php');
    }

    mysqli_close($con);

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
        <form method="post" action="" style="width: 100%; padding: 50px 350px">
            <h3 style="text-align: center;">TÌM KIẾM</h3>
            <div class="form-inline">
                <label for="makhoa">Mã khoa:</label>
                <input type="text" class="form-control" name="txtmakhoa" value="<?php echo $makhoa;?>">
                <label for="tenkhoa">Tên khoa:</label>
                <input type="text" class="form-control" name="txttenkhoa" value="<?php echo $tenkhoa;?>">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnSearch">Tìm kiếm</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary" name="btnAdd">Thêm mới</button>
            </div>
        </form>
        
        <h3 style="text-align: center;">DANH SÁCH</h3>
        <table class="table table-bordered table-stripped" border="1" style="width:100%">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>  
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Socbgd</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
            <?php
            if (isset($data_search) && mysqli_num_rows($data_search) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_array($data_search)) {
            ?>
                <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['makhoa'] ?></td>
                        <td><?php echo $row['tenkhoa'] ?></td>
                        <td><?php echo $row['socbgd'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="Edit.php?makhoa=<?php echo $row['makhoa']; ?>">Sửa</a>
                            <a class="btn btn-danger" href="Delete.php?makhoa=<?php echo $row['makhoa']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa khoa này?')">Xóa</a>
                        </td>
                </tr>
            <?php
                    }
                } else {
                    echo "<tr><td colspan='10'>Không tìm thấy dữ liệu</td></tr>";
                }
            ?>
        </tbody>
    </div>
</body>
</html>
<!DOCTYPE html>    <!-- Chú Thích -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web tím </title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="Text" align="center">
        <form action="" method="get">
            <label class="Label" for="">Họ và tên</label> <br>
            <input type="text" name="Name"placeholder="Test"> <br>
            <label class="Label" for="">Mật khẩu</label> <br>
            <input type="password" name=txtPass placeholder="Test"> <br>
            <label class="Label" for="">Ngày sinh</label> <br>
            <input type="date" name=txtDate placeholder="Test"><br>
            <label class="Label" for="">Số lượng</label> <br>
            <input type="number" max = 10><br>
            <br>
            <label class="Label" for="">Phép toán</label>
            <input type="checkbox" name="" id="" >Cộng
            <input type="checkbox" name="" id="" >Trừ 
            <input type="checkbox" name="" id="" >Nhân
            <input type="checkbox" name="" id="" >Chia <br>
            
            <label class="Label" for="">Phép toán</label>
            <input type="radio" name="math" id="" >Cộng
            <input type="radio" name="math" id="" >Trừ 
            <input type="radio" name="math" id="" >Nhân
            <input type="radio" name="math" id="" >Chia
            <br>
            <button type="submit">
                <img src="./ATVNCG.png" alt="" width = 36px>
                Submit
            </button>
            <button type="reset">Reset</button> <br>
            <input type="search" name="search" id="">  <br>
            <h1>Select</h1> <br>
            <h1>chi dân có nghiện không</h1>
            <select name="" id="">
                <option value="">Có</option>
                <option value="">Yes</option>
                <option value="">Vẫn là có nhưng dài hơn</option>
                <option value="">Cả 3 đáp án trên</option>
            </select>
        </form>
</body>
</html>
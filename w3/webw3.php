<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'></head>
<body>
    <div class="wrapper">
        <div class="header">
            <nav class="container">
                <a class="logo" href="">
                    <img src="logo.png" alt="Trang chủ" width="150px">
                </a>
                <ul class="main">
                    <li><a href="">
                        <i class='bx bx-home-alt' ></i>
                        Trang chủ</a></li>
                    <li><a href="">
                        <i class='bx bxs-layer' ></i>
                        Thể lệ</a></li>
                    <li><a href="">
                        <i class='bx bx-upvote' ></i>
                        Bình chọn</a>
                        <ul class="sub">
                            <li><a href="">
                                <i class='bx bxs-user-circle' ></i>
                                Anh tài Mỏ Hỗn</a></li>
                            <li><a href="">
                                <i class='bx bxs-user-circle' ></i>
                                Anh tài Hạt Nhài</a></li>
                            <li><a href="">
                                <i class='bx bxs-user-circle' ></i>
                                Chiến thần X-Part</a></li>
                            <li><a href="">
                                <i class='bx bxs-user-circle' ></i>
                                Anh tài Nhảm L</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="">
                        <i class='bx bx-help-circle'></i>
                        Trợ giúp</a>
                    </li>
                    <li><a href="">
                        <i class='bx bxl-facebook' ></i>
                        Liên hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="body">
        <div class="left_nav"></div>
        <div class="content">
            <div class="input">
                <table>
                    <tr>
                        <td class="col1">Nhập số thứ nhất</td>
                        <td class="col2">
                            <input class"in_num" type="number">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1">Nhập số thứ hai</td>
                        <td class="col2">
                            <input class"in_num" type="number">
                        </td>
                    </tr>
                    <tr>
                        <td class="col1">Phép toán</td>
                        <td class="col2">
                            <input class="math" type="radio" name="math" id="">Cộng
                            <input class="math" type="radio" name="math" id="">Trừ
                            <input class="math" type="radio" name="math" id="">Nhân
                            <input class="math" type="radio" name="math" id="">Chia
                        </td>
                    </tr>
                    <tr>
                        <td class="col1">Kết quả</td>
                        <td class="col2">
                            <label id="result" for=""></label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="right_nav"></div>
    </div>
    <script src="main.js"></script>
</body>
</html>
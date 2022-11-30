<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Admin</title>
    <link rel="stylesheet" href="../view/public/css/style.css">
    <!-- <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container_admin">
        <div class="content_admin">
            <div class="content_left">

            <div class="thongtin_user">
                <div class="thongtin_user_con">
                <img src="../view/public/image/z3867444882970_563680b6137cf5fd44a18c201e22bd1f.jpg" width="100px" alt="">
                <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        
                    }
                ?>
                <h3><?= $name ?></h3>
                <p>Chào mừng bạn trở lại</p>
                </div>
                <div class="thong_tin_user_con2">
                <div class="quen_capnhat">
                <!-- <a href="#">Quên mật khẩu</a> -->
                <!-- <a href="#">Cập nhật tài khoản</a> -->
                </div>
                <!-- <a href="#" class="dangxuat">Đăng xuất</a> -->
                </div>

                <div class="gach_duoi">

                </div>
            </div>
            <nav>
                <ul class="ul1">
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=qltd">Quản lý thực đơn</a></li>
                    <li><a href="index.php?act=qlma">Quản lý món ăn</a></li>
                    <li><a href="index.php?act=qldm">Quản lý đặt món</a></li>
                    <li><a href="index.php?act=qldb">Quản lý đặt bàn</a></li>
                    <li><a href="index.php?act=qlbl">Quản lý bình luận</a></li>
                    <li><a href="index.php?act=qlkh">Quản lý khách hàng</a></li>
                    <li><a href="index.php?act=qltk">Quản lý thông kê</a></li>
                    <li><a href="index.php?act=ql_gt">Quản lý giới thiệu</a></li>
                    <li><a href="index.php?act=ql_lienhe">Quản lý liên hệ</a></li>
                </ul>
            </nav>

            </div>
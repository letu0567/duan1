
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà hàng hoa hồng đỏ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="view/public/css/style2.css">
    <link rel="stylesheet" href="view/public/css/style.css">
    <!-- <link rel="stylesheet" href="view/public/css/thucdon.css"> -->
    <!-- <link rel="stylesheet" href="./public/js/js.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <script>
        <?php if (isset($_COOKIE['dangnhap'])) { ?>
        alert("<?= $_COOKIE['dangnhap']  ?>");
        <?php } ?>
    </script>
    <script>
        <?php if (isset($_COOKIE['dangnhap_false'])) { ?>
        alert("<?= $_COOKIE['dangnhap_false']  ?>");
        <?php } ?>
    </script>
    <div class="mx-auto">
        <header class="mx-auto bg-white ">
            <div class=" mau_header text-white ">
                <div class="justify-between flex p-2 px-4 text-xs">
                    <p>Hotline:0334623400</p>
                    
                    <div class="dki_dnhap">
                    <p>Giờ hoạt động:Thứ Hai -Chủ Nhật | 10h30 - 22h30</p>
            </div>
                </div>
                
            </div>


            <div class="link">
                <a href="https://www.facebook.com/letu0567/" target="_blank"><span><i class="fa-brands fa-facebook icon_mau"></i></span></a>
                <a href="https://www.instagram.com/letu0567/" target="_blank"><span><i class="fa-brands fa-instagram icon_mau"></i></span></a>
                <a href="tel:+84366170434" target="_blank"><span><i class="fa-solid fa-phone icon_mau2"></i></span></a>
                </div>

            <div class="mx-auto flex justify-between ">
                <div class="logo">
                    <a href="index.php"><img src="view/public/image/logo-01.svg" alt="" height="100px" width="200px" class="m-2"></a>
                </div>

                <div class="item mt-3 p-3 mr-4 p-5 header2">
                    <div class="flex space-x-10 navbar">
                        <ul class="flex space-x-5 font-bold " id="menu">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?act=gt">Giới thiệu</a></li>
                            <li><a href="index.php?act=td">Thực đơn</a></li>
                            <li><a href="index.php?act=tt">Tin tức</a></li>
                            <li><a href="index.php?act=lh">Liên hệ</a></li>
                            <li><a href="#">Tài khoản</a>
                                <ul>
                                    <?php 
                                        if (isset($_SESSION['user'])) {
                                            extract($_SESSION['user']);  
                                    ?>  
                                    <!-- <li><a href="#"></a></li> -->
                                    <?php if ($role == 1) { ?>
                                        <li><a href="admin/index.php">Đăng nhập admin</a></li>
                                    <?php }?>
                                    <li><a href="index.php?act=quen_mk">Quên tài khoản</a></li>
                                    <li><a href="index.php?act=cap_nhat_tk">Cập nhật tài khoản</a></li>
                                    <li><a href="index.php?act=dang_xuat">Đăng xuất</a></li>
                                    <?php }else{ ?>
                                            <li><a href="index.php?act=dang_ky">Đăng ký</a></li>
                                            <li><a href="index.php?act=dang_nhap">Đăng nhập</a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                        </ul>
                        <ul class="flex space-x-2">
                            <li><a href="index.php?act=datmon"
                                    class="border border-1-white p-3 m-2 border-red-500 bg-red-800 text-white" >Đặt
                                    món</a></li>
                            <li><a href="index.php?act=datban"
                                    class="border border-1-white p-3 m-2 border-green-500 bg-green-800 text-white">Đặt
                                    bàn</a></li>
                        </ul>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>

                        </div>
                    </div>
                </div>

                

            </div>
        </header>
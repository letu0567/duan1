<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/public/css/dangnhap.css">
</head>
<body>
<div class="wrapper">
  <form class="login" action="index.php?act=quenmk" method="post">
    <p class="title">Quên Mật Khẩu</p>
    <input type="email" placeholder="Nhập email đã đăng ký" name="email" required autofocus/>
    <i class="fa fa-user"></i>
 <p>
  <?php 
    if (isset($thongbao)) {
      echo $thongbao;
    }
  ?>
 </p>
    <!-- <button> -->
      <!-- <i class="spinner"></i> -->
      <input class="state" type="submit" name="guiemail" value="Gửi">
    <!-- </button> -->
  </form>
  <footer><a target="blank" href="https://www.facebook.com/letu0567/">fa.me</a></footer>
  </p>
</div>
</body>
</html>
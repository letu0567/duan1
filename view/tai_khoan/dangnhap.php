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
  <form class="login" action="index.php?act=dangnhap" method="post">
    <p class="title">Log in</p>
    <input type="text" placeholder="Username" name="name" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="pass" />
    <i class="fa fa-key"></i>
    <a href="index.php?act=quen_mk">Forgot your password?</a>
    <!-- <button> -->
      <!-- <i class="spinner"></i> -->
      <input class="state" type="submit" name="dangnhap" value="Đăng nhập">
    <!-- </button> -->
  </form>
  <footer><a target="blank" href="https://www.facebook.com/letu0567/">fa.me</a></footer>
  <!-- </p> -->

</div>
</body>
</html>
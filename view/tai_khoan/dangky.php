<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/public/css/dangky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="content">
  
  <div class="wrapper">
    
  <div class="register--content singup2">
    <h3>Đăng ký</h3>
  <form action="index.php?act=dangky" method="post">
    <div class="name">
  <input type="text" class="inputText" name="name" required/>
  <span class="floating-label">Your name</span>
</div>
    
  <div class="email">
  <input type="text" class="inputText" name="email" required/>
  <span class="floating-label">Your email</span>
</div>

<div class="password">
  <input type="text" class="inputText" name="pass" required/>
  <span class="floating-label">Your password</span>
</div>
<div class="name">
  <input type="text" class="inputText" name="address" required/>
  <span class="floating-label">Địa chỉ</span>
</div>
<div class="name">
  <input type="text" class="inputText" name="tel" required/>
  <span class="floating-label">Số điện thoại</span>
</div>
<p class="thong_bao">
  <?php 
    if(isset($thong_bao)&& ($thong_bao != "")){
      echo  '<i class="fa-regular fa-circle-check"></i>' . $thong_bao  ;
    }
  ?>
</p>

    <input type="submit" class="register-buttton" value="Đăng ký" name="dangky">
    <div class="dang_nhap_con">
        <a class="ban_co_tk" href="index.php?act=dang_nhap">Bạn đã có tài khoản</a>
    </div>
    </form>
    </div>  
    
    
    
    
  <!-- <div class="login--content">
    
    <div class="login--button">
    <span>Create a new  account</span>
      <a class="btn-reg" data-popup-open="register-popup" href="#">Sing up</a>
    </div>
    <h1>Login to your account</h1>
    <div class="social">
      <a href=""><span class="facebook-icon"><i class="fa fa-facebook"></i></span>Login with <strong>Facebook</strong></a>
    </div>
    
    <div class="via-email">
      <span>or via email</span>
    </div>
    
    <div class="email">
  <input type="text" class="inputText" required/>
  <span class="floating-label">Your email</span>
</div>

<div class="password">
  <input type="text" class="inputText" required/>
  <span class="floating-label">Your password</span>
</div>
    <span>Reset your pasword</span>

    <input type="submit" class="register-buttton" value="Login" name="Login">
      
    </div> -->
  
  </div>
<!--   
  <div class="registred">
    <h1>Great Job</h1>
    <button class="reset">Reset</button>
  </div> -->
  
  
</div>

<script>
    $(".register-buttton").click(function(e) {
  e.preventDefault();
    $(".registred").slideDown(600);
       $(".wrapper").slideUp(600);
});


$(".reset").click(function(e) {
  e.preventDefault();
    $(".registred").slideUp(600);
       $(".wrapper").slideDown(600);
});



$(".btn").click(function(e) {
  e.preventDefault();
    $(".login--content").slideDown(600);
       $(".register--content").slideUp(600);
});


$(".btn-reg").click(function(e) {
  e.preventDefault();
    $(".login--content").slideUp(600);
       $(".register--content").slideDown(600);
});
</script>
</body>
</html>
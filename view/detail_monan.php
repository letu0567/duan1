<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Món ăn detail</title>
    <link rel="stylesheet" href="view/public/css/thucdon.css">
</head>

<body>
    
    <div class="slide-show">
         
         <div class="slideshow-container pt-10">

             <!-- Full-width images with number and caption text -->
             <div class="mySlides fade">
               
               <img src="view/public/image/anh1.jpg" style="width:100%">
               
             </div>
           
             <div class="mySlides fade">
               
               <img src="view/public/image/anh2.jpg" style="width:100%">
              
             </div>
           
             <div class="mySlides fade">
               
               <img src="view/public/image/anh3.jpg" style="width:100%">
               
             </div>
             <div class="mySlides fade">
               
               <img src="view/public/image/anh4.jpg" style="width:100%">
               
             </div>
             <div class="mySlides fade">
               
               <img src="view/public/image/anh5.jpg" style="width:100%">
               
             </div>
             <div class="mySlides fade">
               
               <img src="view/public/image/anh6.jpg" style="width:100%">
               
             </div>
             <div class="mySlides fade">
               
               <img src="view/public/image/anh7.jpg" style="width:100%">
               
             </div>
             <div class="mySlides fade">
               
               <img src="view/public/image/anh8.jpg" style="width:100%">
               
             </div>
           
             <!-- Next and previous buttons -->
             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
             <a class="next" onclick="plusSlides(1)">&#10095;</a>
           </div>
    <div class="danh_muc">
        <div class="td_danhmuc">
            <h1>Danh Mục Món Ăn</h1>
        </div>
        <div class="all_dm">
            <div class="danh_muc1">
                <i class="fa-solid fa-burger fa-solid1"></i>
                <p><a href=""> MÓN KHAI VỊ</a></p>
            </div>
            <div class="danh_muc1">
                <i class="fa-solid fa-drumstick-bite fa-solid1"></i>
                <p><a href=""> MÓN GÀ</a></p>
            </div>
            <div class="danh_muc1">
                <i class="fa-solid fa-leaf fa-solid1"></i>
                <p><a href=""> MÓN RAU</a></p>
            </div>
            <div class="danh_muc1">
                <i class="fa-solid fa-wine-bottle fa-solid1"></i>
                <p><a href=""> ĐỒ UỐNG</a></p>
            </div>
            <div class="danh_muc1">
                <i class="fa-solid fa-bread-slice fa-solid1"></i>
                <p><a href=""> MÓN KHÁC</a></p>
            </div>
        </div>
    </div>
    <div class="container_monan_ct">
    <div class="mon_anct">
        <div class="box_right">
            <img class="anh_ct" src="./public/image/5.jpg" alt="">
        </div>
        <div class="box_left">
            <div class="box_con">
            <h1 class="title_ct">Mẹt gà lợn 10 món</h1>
            <p class="danhmuc_ct">Danh mục: <a href="#">Gà cay xé</a></p>
            <span class="price_ct">599.000vnd</span>
            </div>
            <div class="gach_duoi_ct"></div>
            <p class="desc_ct">Mẹt Gà Lợn 10 món phù hợp 4-6 ng gồm có :

                Gà hấp lá chanh,
                Gà quay mắc mật/giòn bì,
                Gà chiên vị tỏi ớt,
                Lợn mán xào lăn,

                Dồi sụn nướng,
                Lợn bóp giềng Tây Bắc,
                Xôi chiên nhân thịt băm,
                Xôi hấp hành ruốc,
                Chân rút xương dầm cóc bao tử,
                Salad rau xanh</p>
            <input class="input_ct" type="submit" value="Đặt món" name="datmon">
        </div>
    </div>
    <div class="binh_luan_box">
        <h1 class="danhgia">Bình luận(0)</h1>
        <div class="gach_duoi_ct"></div>
        <p class="nhanxet">Nhận xét của bạn *</p>
        <form action="" method="post">
            <textarea name="mota_ct" id="mota_ct" cols="" rows=""></textarea>
            <input class="input_binhluan" type="submit" value="Gửi" name="binhluan">
        </form>
        
    </div>
    <div class="sanpham_lienquan">
    <h1 class="sanphamlienquan">SẢN PHẨM LIÊN QUAN</h1>
    <div class="gach_duoi_ct"></div>
    <div class="box_splienquan">
    <div class="monga_2">
              <img src="view/public/image/monga_3.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Mix tim gà, má gà nướng củi</a></h4>
              <p class=" gia b ">50.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
            <div class="monga_2">
              <img src="view/public/image/monga_4.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cháo gà hạt kê nấm</a></h4>
              <p class=" gia b ">79.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
            <div class="monga_2">
              <img src="view/public/image/monga_5.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Gà cà ry kiểu Thái</a></h4>
              <p class=" gia b ">119.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
            <div class="monga_2">
              <img src="view/public/image/monga_5.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Gà cà ry kiểu Thái</a></h4>
              <p class=" gia b ">119.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
    </div>
    </div>
    </div>

</body>

</html>
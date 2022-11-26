<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="view/public/css/thucdon.css">
    
</head>
<body>
    <div class="mx-auto">
    <div class="danhmuc_monan">
                    <h2>Thực đơn ZeeZee Chicken House</h2>
          </div>
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
            
              
              <!-- The dots/circles -->
              <!-- <div class="dots" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                
              </div> -->
        </div>
        
        <div class="body">
                
         
          <div class="danh_muc">
            <div class="td_danhmuc">
              <h1>Danh Mục Món Ăn</h1>
            </div>
             <div class="all_dm">
              
              <?php 
              foreach ($dsthucdon as $dstd) {
                
                extract($dstd);
                $linktd = "index.php?act=loadtd&idtd=".$id;
                echo '<div class="danh_muc1">
                <i class="fa-solid fa-drumstick-bite fa-solid1"></i>
                      <p><a href="'.$linktd.'"> '.$name.'</a></p>
               </div>';
              } ?>
             </div>
          </div>
          <!-- <div class="mon_khai_vi">
            <div class="td_mon">
              <h2><a href=""> Món Khai vị</a></h2>
            </div>
            <div class="mons">
            </div>
            </div> -->
           <!--  <div class="mons">
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_1.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a "><a href="">Salat Đà Lạt sốt chanh leo</a></h4>
                  <p class="a">Rau salat các loại, ớt chuông, dầu ô liu, sốt chanh leo</p>
                  <p class=" gia a">69.000đ</p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_2.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a"><a href="">Salat cá ngừ đại dương</a></h4>
                  <p class="a">rau salat các loại, dầu ô liu, ớt chuông, cá ngừ</p>
                  <p class=" gia a">89.000đ </p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
          </div>
              <div class="mons">
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_3.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a "><a href="">Gỏi cá lăng trộn kiểu Thái</a></h4>
                  <p class="a">Cá lăng, hành tím, ớt thơm, nước sốt Bản Hiệu</p>
                  <p class=" gia a">169.000đ </p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_4.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a"><a href="">Gỏi cá lăng xoài cát </a></h4>
                  <p class="a">Cá lăng, hành tím, xoài cát, ớt thơm, nước sốt Bản Hiệu</p>
                  <p class=" gia a">169.000đ </p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
             </div>
             <div class="mons">
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_5.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a "><a href="">Bánh cá Đảo Chiều</a></h4>
                  <p class="a">Cá lăng, ba chỉ muối, ớt chuông, bạt bánh, cà chua</p>
                  <p class=" gia a">120.000đ </p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
              <div class="mon1">
                <div class="anh1">
                  <img src="view/public/image/monkhaivi_1.jpg" alt="" class="img4">
                </div>
                <div class="mota1">
                  <h4 class="a"><a href="">Khoai tây chiên</a></h4>
                  <p class="a">Khoai tây, sốt mayonnes, ketchup</p>
                  <p class=" gia a">69.000đ</p>
                  <button class="btn" >ĐẶT MÓN</button>
                </div>
              </div>
             </div> -->
          
          <!--  -->
          <div class="mon_ga">
            <div class="td_mon">
              <h2><a href=""> Món Mới</a></h2>
           </div>
           <div class="mon2">
            
            <?php
            $img_path='upload/';
             foreach($sp_new as $sp){
                  extract($sp);
                  $hinh=$img_path.$image;
                  $link_monan_ct = "index.php?act=monan_ct&idma=".$id;
                  echo '<div class="monga_2">
                  <a href="'.$link_monan_ct.'"><img src="'.$hinh.'" alt="" class="img3">
                  <h4 class="td2 b">'.$name.'</h4>
                  <p class=" gia b ">'.$price.'</p></a>
                  <button class="btn" >ĐẶT MÓN</button>
                </div> ';        
            }
            ?>
            <a href=""></a>
            <!-- <div class="monga_2">
              <img src="view/public/image/monga_2.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Canh gà ác hầm</a></h4>
              <p class=" gia b ">195.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
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
           </div>
           <div class="mon2">
            <div class="monga_2">
              <img src="view/public/image/monga_5.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Gà cà ry kiểu Thái</a></h4>
              <p class=" gia b ">119.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div> -->
            <!-- <div class="monga_2">
              <img src="view/public/image/monga_6.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cánh gà sốt me</a></h4>
              <p class=" gia b ">85.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
            <div class="monga_2">
              <img src="view/public/image/monga_7.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Mỳ Ý gà sốt kem nấm</a></h4>
              <p class=" gia b ">169.000đ</p>
              <button class="btn" >ĐẶT MÓN</button>
            </div>
            <div class="monga_2">
              <img src="view/public/image/monga_8.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Salad Caesar gà nướng</a></h4>
              <p class=" gia b ">129.000đ</p>
              <button class="btn " >ĐẶT MÓN</button>
            </div> -->
           <!-- </div>
          </div>
          <div class="mon_rau">
            <div class="td_mon1">
              <h2><a href=""> Rau xanh - cơm - canh </a></h2>
           </div>
           <div class="mon3">
            <div class="monga_3">
              <img src="view/public/image/rau-1.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Củ quả luộc</a></h4>
              <p class=" gia b ">59.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-2.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Rau muống xào tỏi</a></h4>
              <p class=" gia b ">45.000đ</p>
              <button class="btn btn1 " >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-3.png" alt="" class="img3">
              <h4 class="td2 b"><a href="">Rau muống luộc</a></h4>
              <p class=" gia b ">45.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-4.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cải ngọt xào dầu hào</a></h4>
              <p class=" gia b ">45.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
           </div>
           <div class="mon2">
            <div class="monga_3">
              <img src="view/public/image/rau-5.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cải chíp sốt nấm</a></h4>
              <p class=" gia b ">45.000đ</p>
              <button class="btn btn1 " >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-6.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Canh chua cá lăng</a></h4>
              <p class=" gia b ">45.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-7.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cá lăng kho tộ</a></h4>
              <p class=" gia b ">160.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
            <div class="monga_3">
              <img src="view/public/image/rau-8.jpg" alt="" class="img3">
              <h4 class="td2 b"><a href="">Cơm trắng</a></h4>
              <p class=" gia b ">40.000đ</p>
              <button class="btn btn1" >ĐẶT MÓN</button>
            </div>
           </div>
          </div>
          <div class="bia_nuocngot">
            <div class="td_mon1">
              <h2><a href=""> Nước ngọt và bia </a></h2>
           </div>
           <div class="douong">
              <div class="bia">
                <img src="view/public/image/bia.jpg" alt="" class="img2">
               
              </div>
              <div class="nuocs">
                <div class="nuoc ">
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc1.jpg" alt="" class="img1">
                    <h4 class="td2 b"><a href="">Nước cam lon</a></h4>
                     <p class=" gia b ">25.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc2.jpg" alt="" class="img1">
                    <h4 class="td2 b"><a href="">Nước suối</a></h4>
                     <p class=" gia b ">15.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc3.jpg" alt=""  class="img1">
                    <h4 class="td2 b"><a href="">Bia Tiger</a></h4>
                     <p class=" gia b ">25.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                </div>
                <div class="nuoc">
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc4.jpg" alt="" class="img1">
                    <h4 class="td2 b"><a href="">Bia trúc bạch</a></h4>
                     <p class=" gia b ">25.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc5.jpg" alt="" class="img1">
                    <h4 class="td2 b"><a href="">Bia Heiniken</a></h4>
                     <p class=" gia b ">25.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                  <div class="nuocngot">
                    <img src="view/public/image/nuoc10.jpg" alt="" class="img1">
                    <h4 class="td2 b"><a href="">Pepsi</a></h4>
                     <p class=" gia b ">25.000đ</p>
                      <button class="btn btn1" >ĐẶT MÓN</button> 
                  </div>
                </div>
              </div>
              
             
              
           </div> -->
           
          </div>
          <!-- divbody -->
        </div>

        <footer>

        </footer>
        
    </div>
    <script>
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
</body>
</html>
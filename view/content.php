<div class="slideshow-container max-width ">

        
            <div class="mySlides fade">

                <img src="view/public/image/banner1-1.jpg" style="width:100%;height:700px;">
                <div class="text1">Tinh Hoa Gà Việt</div>
            </div>

            <div class="mySlides fade">

                <img src="view/public/image/banner2.jpg" style="width:100%;height:700px;">
                <div class="text1">Tinh Hoa Gà Việt</div>
            </div>

            <div class="mySlides fade">

                <img src="view/public/image/banner3.jpg" style="width:100%;height:700px;">
                <div class="text1">Tinh Hoa Gà Việt</div>
            </div>


        </div>

        <div class="pt-10 mx-auto max-w-7xl">
            <div class="grid flex grid-cols-2 space-x-20    ">
                <div class=" space-y-5 mid-content">
                    <img src="view/public/image/about-1.svg" alt="" width="300px">
                    <p>
                        Là một người con đất Việt, cả tuổi thơ của tôi gắn liền với những tiếng gà ban sớm và lời dạy từ
                        tấm bé của mẹ: <b> “Phải có niềm tin, có dũng khí, nghị lực, phải Văn, Võ, Dũng, Nhân, Tín như
                            loài gà!”</b> . Ngay từ thuở đầu, Gà đã là một phần văn hoá, một phần cuộc sống không
                        thểtách rời trong tôi.
                    </p>
                    <p>
                        Dần dần khi lớn lên, tôi nhận ra những món gà cũng “lớn” – cũng đa dạng hơn, mới lạ hơn. Thế
                        nhưng món gà hiện diện trong cuộc sống như một điều dĩ nhiên khiến nhiều người tưởng rằng thứ
                        nguyên liệu ấy đã quá quen thuộc. Tôi không nghĩ vậy, tôi tiếp tục đi nếm, đi học hỏi, đi mày mò
                        khắp nơi, từ Bắc vào Nam, từ Á sang Âu cho đến khi tìm thấy Gà nướng củi đặc sản – Một món ăn
                        kết hợp từ giống gà ri “nhỏ nhưng có võ” – thịt chắc da thơm lại đậm đà phong vị dân tộc cùng
                        củi khô từ rừng đại ngàn và phương pháp nướng đặc biệt kết hợp tinh hoa Á – Âu.
                    </p>
                    <p>Ấp ủ “kho báu tinh thần” ấy cùng bước đệm từ những giá trị cổ truyền chân chính, một chương mới
                        cho món gà Việt Nam sẽ được mở ra – Bắt đầu từ Zee Zee Chicken House!



                    </p>
                </div>
                <div class="image ">
                    <img src="view/public/image/about2.jpg" alt="" width="500px" >
                </div>
            </div>
        </div>

        <div class="thucdon mx-auto pt-10 max-w-7xl">
            <h1 class="text-center font-bold text-4xl text-green-700">
                Thực đơn ZeeZee Chicken House
            </h1>
            <div class="menu">
            <div class="grid flex grid-cols-4 gap-8 pt-10">
            <?php
            $img_path='upload/';
             foreach($loadall as $monan){
                  extract($monan);
                  $hinh=$img_path.$image;
                  $link_monan_ct = "index.php?act=monan_ct&idma=".$id;
                  echo '<a href="'.$link_monan_ct.'"><div class="">
                  <img class = "hinh_trangchu" src="'.$hinh.'" alt="">
                  <div class="pt-5">
                      <h1 class="text-xl font-bold text-center hover:text-red-900">'.$name.'</h1>
                      <p class="text-xl font-bold text-center">$'.$price.'</p>
                  </div>
              </div></a>';        
            }
            ?>
            
            </div>
            </div>
<img src="" alt="" width="296px" height="">
            
                
                    
                    <!-- <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>



                </div>
                <div class="grid flex grid-cols-4 gap-8 pt-10">
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="view/public/image/2.jpg" alt="">
                        <div class="pt-5">
                            <h1 class="text-xl font-bold text-center hover:text-red-900">Gà nướng củi nguyên con</h1>
                            <p class="text-xl font-bold text-center">120.000</p>
                        </div>
            </div> -->
            <div class="text-center pt-10">
                <a href="index.php?act=td"><button class="border-2 p-3 bg-green-800 text-white">KHÁM PHÁ</button></a>
            </div>
        </div>

        <div class="khuyenmai max-w-8xl mx-auto pt-20 mt-20 bg-blue-100">
            <div class="text-center text-4xl">
                <h1>Tin Tức Khuyến Mãi</h1>
            </div>
            <div class="grid flex grid-cols-3 gap-8 pt-10 max-w-7xl text-justify mx-auto">
            <?php 
              $img_path='upload/';
              foreach($tt_new as $tt){
                   extract($tt);
                   $linktt = "index.php?act=tintuc_ct&idtt=".$id;
                   $hinh=$img_path.$image;

                   echo '
                   <div class="space-y-5">
                    <img src="'.$hinh.'" alt="" style="width:384px; height:210px;">
                    <a href="'.$linktt.'">
                    <h2 class="font-bold text-xl">'.$title.'</h2>
                    </a>
                    <p>'.$description.'</p>
                </div>
                   ';        
             }
            ?>
                <!-- <div class="space-y-5">
                    <img src="view/public/image/avatar-768x433.jpg" alt="">
                    <h2 class="font-bold text-xl hover:text-red-900">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div>
                <div class="space-y-5">
                    <img src="view/public/image/avatar-768x433.jpg" alt="">
                    <h2 class="font-bold text-xl hover:text-red-900">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div>
                <div class="space-y-5">
                    <img src="view/public/image/avatar-768x433.jpg" alt="">
                    <h2 class="font-bold text-xl hover:text-red-900">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div> -->
            </div>
            <div class="text-center pt-10 pb-10">
                <a href="index.php?act=tt"><button class="border-2 p-3 bg-green-800 text-white">XEM TẤT CẢ</button></a>
            </div>
        </div>
        
        <div class="anh_footer">
            <div class="anh_footer2"></div>
            <img src="view/public/image/footer.jpg" alt=""  width="100%">
        </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="view/public/css/style2.css">
</head>
<body>
<div class="khuyenmai max-w-8xl mx-auto  mt-10 mb-30 mb-10">
            <div class="text-center text-4xl">
                <h1>Tin Tức Khuyến Mãi</h1>
            </div>
          
             <div class="grid flex grid-cols-3 gap-10 pt-10 max-w-7xl text-justify mx-auto">
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
                    <h2 class="font-bold text-xl">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div>
                <div class="space-y-5">
                    <img src="view/public/image/avatar-768x433.jpg" alt="">
                    <h2 class="font-bold text-xl">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div>
                <div class="space-y-5">
                    <img src="view/public/image/avatar-768x433.jpg" alt="">
                    <h2 class="font-bold text-xl">Trọn bộ từ điển chọn món ngon nhà ZeeZee ChickenHouse</h2>
                    <p>Món ngon tại Zee Zee Chicken House là sự kết hợp thú vị và mới lạ của nguyên liệu truyền thống
                        Việt Nam cùng phương pháp</p>
                </div> -->
            </div> 
        </div>
</body>
</html>
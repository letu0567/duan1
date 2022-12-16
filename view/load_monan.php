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
        
        <div class="body">
                
         
          <div class="danh_muc">
            <div class="td_danhmuc">
              <h1>Danh Mục Món Ăn</h1>
            </div>
             <div class="all_dm">
              <?php foreach ($dsthucdon as $dstd) {
                extract($dstd);
                $linktd = "index.php?act=loadtd&idtd=".$id;
                echo '<div class="danh_muc1">
                <i class="fa-solid fa-drumstick-bite fa-solid1"></i>
                      <p><a href="'.$linktd.'"> '.$name.'</a></p>
               </div>';
              } ?>
             </div>
          </div>
          <div class="mon_ga">
            <div class="td_mon">
              <h2><a href=""><?= $ten_td ?></a></h2>
           </div>
           <div class="mon2">
            
            <?php
            $img_path='upload/';
             foreach($dsma as $ma){
                  extract($ma);
                  $hinh=$img_path.$image;
                  $link_monan_ct = "index.php?act=monan_ct&idma=".$id;
                  echo '<form action="index.php?act=addtocart" method="post">
                  <div class="monga_2">
                  <a href="'.$link_monan_ct.'">
                  <img src="'.$hinh.'" alt="" class="img3">
                  <h4 class="td2 b">'.$name.'</h4>
                  <p class=" gia b ">'.$price.'</p>
                  </a>
                  
                   <input type="hidden" name="id" value='.$id.'>
                   <input type="hidden" name="image" value='.$hinh.'>
                   <input type="hidden" name="name" value='.$name.'>
                   <input type="hidden" name="price" value='.$price.'>
                  <input class= "btn" type="submit" name="addtocart" value="Đặt món">
                </div>  </form> ';        
            }
            ?>

           
          </div>

        </div>

        <footer>

        </footer>
        
    </div>
</body>
</html>
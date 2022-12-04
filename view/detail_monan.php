<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Món ăn detail</title>
    <link rel="stylesheet" href="view/public/css/thucdon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
        </div>
        <div class="container_detail_monan">
        <div class="danh_muc">
            <div class="td_danhmuc">
                <h1>Danh Mục Món Ăn</h1>
            </div>
            <div class="all_dm">

                <?php
                foreach ($dsthucdon as $dstd) {

                    extract($dstd);
                    $linktd = "index.php?act=loadtd&idtd=" . $id;
                    echo '<div class="danh_muc1">
                <i class="fa-solid fa-drumstick-bite fa-solid1"></i>
                      <p><a href="' . $linktd . '"> ' . $name . '</a></p>
               </div>';
                } ?>
            </div>
        </div>
        <div class="container_monan_ct">
            <div class="mon_anct">
                <?php extract($one_monan) ?>
                <div class="box_right">
                    <?php
                    $img = $img_path . $image;
                    echo '<img class="anh_ct" src="' . $img . '" alt="">'
                    ?>
                </div>
                <div class="box_left">

                    <div class="box_con">
                        <h1 class="title_ct"><?= $name ?></h1>
                        <!-- <p class="danhmuc_ct">Danh mục: <a href="#">
                            // trong php
                                                                    foreach ($all_thucdon as $thucdon) {
                                                                        extract($thucdon);
                                                                        if ($id_thucdon == $id) {
                                                                            echo $name;
                                                                        }
                                                                    }
                                                                    
                        </a></p> -->
                        <span class="price_ct">$<?= $price ?></span>
                    </div>
                    <div class="gach_duoi_ct"></div>
                    <p class="desc_ct"><?= $description ?></p>
                    <input class="input_ct" type="submit" value="Đặt món" name="datmon">
                </div>

            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        id_monan: <?= $id ?>
                    });
                });
            </script>
            <div class="binh_luan_box2" id="binhluan">


            </div>
            <div class="sanpham_lienquan">
                <h1 class="sanphamlienquan">SẢN PHẨM LIÊN QUAN</h1>
                <div class="gach_duoi_ct"></div>
                <div class="box_splienquan">

                    <?php foreach ($monan_cungloai as $monan) {
                        extract($monan);
                        $img2 = $img_path2 . $image;
                        $link_monan_ct = "index.php?act=monan_ct&idma=" . $id;
                        echo '<div class="monga_2">
            <a href="' . $link_monan_ct . '"><img src="' . $img2 . '" alt="" class="img3">
            <h4 class="td2 b">' . $name . '</h4>
            <p class=" gia b ">' . $price . '</p></a>

            <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value='.$id.'>
                  <input type="hidden" name="image" value='.$img2.'>
                  <input type="hidden" name="name" value='.$name.'>
                  <input type="hidden" name="price" value='.$price.'>
                  <input class= "btn" type="submit" name="addtocart" value="Đặt món">
                  </form>
          </div>';
                    } ?>
                </div>
            </div>
        </div>
        </div>

</body>

</html>
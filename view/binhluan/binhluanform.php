<?php
    session_start();
    include "../../DAO/pdo.php";
    include "../../DAO/binhluan.php";
    $id_monan = $_REQUEST['id_monan'];

    $list_binhluan = loadall_binhluan($id_monan);
    $list_user = loadall_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/thucdon.css">
</head>
<body>
<div class="binh_luan_box">
        <h1 class="danhgia">Bình luận(0)</h1>
        <div class="gach_duoi_ct"></div>
        <!-- bình luận -->
        
        <?php foreach ($list_binhluan as $bl) {
            extract($bl);
             foreach ($list_user as $user) {
                extract($user);
                // print_r($user);
                if ($id == $id_user) {
                    $name_user = $name;
                }
            } 
            echo '<div class="box_bl_kh">
            <div class="bl_khachhang">
            <div class="bl_img_kh">
            <i class="fa-solid fa-user user2"></i>
            </div>
            <div class="bl_kh_con">
                <h3 class="name_tk">'.$name_user.'</h3>
                <p class="time_tk">'.$date.'</p>
                <p>'.$content.'</p>
            </div>
              
            </div>
            <div class="gach_duoi_ct"></div> 
            </div> ';
        } ?>
        

        <p class="nhanxet">Nhận xét của bạn *</p>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="id_monan" value="<?= $id_monan ?>">
            <textarea name="noidung" id="mota_ct" cols="" rows=""></textarea>
            <input class="input_binhluan" type="submit" value="Gửi" name="gui_binhluan">
        </form>
         <!-- bình luận -->
    </div>
    <?php 

        if (isset($_POST['gui_binhluan']) && ($_POST['gui_binhluan'])) {
            
            $id_monan = $_POST['id_monan'];
            $id_user = $_SESSION['user']['id'];
            $content = $_POST['noidung'];
            $date = date('h:i:sa d/m/Y');
            insert_binhluan($id_monan, $id_user, $content, $date);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        

    ?>
</body>
</html>
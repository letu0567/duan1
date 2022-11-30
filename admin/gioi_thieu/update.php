<?php
if(is_array($gioithieuone)){
    extract($gioithieuone);
}
$hinhpath="../upload/".$image;
if (is_file($hinhpath)) {
    $hinhgt="<img src='".$hinhpath."'height='80'>";
}else{
    $hinhgt=" không có hình";
}
?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý Giới thiệu
                </div>
                <div class="box_duoi">
                    <h5>Tạo mới giới thiệu</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=update_gt" method="POST" enctype="multipart/form-data">
                       
                        <label class="form_text1" for="">Mã giới thiệu</label><br>
                        <!-- <input class="input_class" name="ma_gt" type="text" placeholder="autonumber" disabled><br> -->
                        <label for="">image</label>
                        <input class="input_class" name="hinh_gt" value="" type="file"><?=$hinhgt?><br>
                        <label class="form_text1" for="">Mô tả</label><br>
                        <textarea name="mota_gt" id="" cols="150" rows="10" style=""><?=$description?></textarea>
                       
                        <div class="chucnang">
                        <input type="hidden" name="id_gt" value="<?=$id?>">
                            <input type="submit" name="themmoigt" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=danh_sach_gt"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                               if(isset($thongbao)&& ($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
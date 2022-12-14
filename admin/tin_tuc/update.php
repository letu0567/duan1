<?php
if(is_array($tintucone)){
    extract($tintucone);
}
$hinhpath="../upload/".$image;
if (is_file($hinhpath)) {
    $hinhtt="<img src='".$hinhpath."'height='80'>";
}else{
    $hinhtt=" không có hình";
}
?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý tin tức
                </div>
                <div class="box_duoi">
                    <h5>Cập nhật giới thiệu</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=update_tt" method="POST" enctype="multipart/form-data">
                       
                        <label class="form_text1" for="">Mã tin tức</label><br>
                      
                        <label for="">image</label>
                        <input class="input_class" name="hinh_tt" value="" type="file"><?=$hinhtt?><br>
                        <label class="form_text1" for="">Tiêu đề</label><br>
                        <input class="input_class" name="tieude_tt" type="text" value="<?=$title?>" ><br>
                        <label class="form_text1" for="">Mô tả</label><br>
                        <textarea name="mota_tt" id="" cols="150" rows="10" style=""><?=$description?></textarea>
                       
                        <div class="chucnang">
                        <input type="hidden" name="id_tt" value="<?=$id?>">
                            <input type="submit" name="capnhat_tt" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=ql_tintuc"><input type="button" value="Danh sách"></a>
                        </div>
                    </form>
                </div>
            </div>
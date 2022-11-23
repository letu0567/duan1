<?php
if(is_array($monan)){
    extract($monan);
}
$hinhpath="../upload/".$image;
    if (is_file($hinhpath)) {
        $hinh="<img src='".$hinhpath."' height='80'>";
     }else{
          $hinh=" không có hình";
        }
?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Cập nhật món ăn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form class="form" action="index.php?act=update_monan" method="POST" enctype="multipart/form-data">
                    <div class="form_con">
                        <label class="form_text1" for="">Danh mục</label><br>
                            <select name="id_td" id="" class="box_select">
                                <?php foreach($listthucdon as $thucdon){
                                  if($id_thucdon==$thucdon['id'])echo '<option value="'.$thucdon['id'].' "'.$selected.'>'.$thucdon['name'].'</option>';
                                  else   echo '<option value="'.$thucdon['id'].'">'.$thucdon['name'].'</option>';
                                }
                                 ?>
                                <!-- <option value="0">--Chọn danh mục--</option> -->
                            </select>
                        </div>
                            <div class="form_con_box">
                        

                        <div class="form_con">
                        <label class="form_text1" for="">Tên Món Ăn</label><br>
                        <input class="input_class" name="ten_mon" value="<?=$name?>" type="text"><br>
                        </div>

                        <div class="form_con">
                        <label class="form_text2" for="">Giá</label><br>
                        <input class="input_class" name="gia" value="<?=$price?>"  type="text">
                        </div>
                        <div class="form_con">
                        <label class="form_text2" for="">Số Lượng</label><br>
                        <input class="input_class" name="so_luong" value="<?=$quantity?>" type="text">
                        </div>

                        </div>
                        
                        <div class="form_con">
                        <label class="form_text2" for="">Image</label><br>
                        <input class="input_class" name="hinh"  type="file"><?=$hinh?>
                        </div>
                        
                        <div class="form_con">
                        <label class="form_text2" for="">Mô tả</label><br>
                        <textarea class="box_textarea" name="description"  cols="30" rows="10"> <?=$description?></textarea>
                        </div>
                        <div class="chucnang">
                        <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=danh-sach_monan"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                               if(isset($thongbao)&& ($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
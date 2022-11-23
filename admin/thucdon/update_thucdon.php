<?php 
if(is_array($sua)){
    extract($sua);
}
?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Sửa thực đơn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=update_thucdon" method="POST">
                        <label class="form_text1" for="">Mã thực đơn</label><br>
                        <input class="input_class" name="ma_mon" type="text" placeholder="autonumber" disabled><br>
                        <label class="form_text2"  for="">Tên thực đơn</label><br>
                        <input class="input_class" name="tenmon" type="text" value="<?php if(isset($name)&& ($name!="")) echo $name;?>" required>
                        <div class="chucnang">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0 ))echo $id; ?>">
                            <input type="submit" name="cap_nhat" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=danh_sach_td"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                               if(isset($thongbao)&& ($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
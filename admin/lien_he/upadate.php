<?php 
if(is_array($lienhe_one)){
    extract($lienhe_one);
}
?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Thêm mới thực đơn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=update_lienhe" method="POST">
                        <label class="form_text1" for="">Mã liên hệ</label><br>
                        <input class="input_class" name="ma_lh" type="hidden" value="<?=$id?>" placeholder="autonumber" ><br>
                        <label class="form_text2"  for="">address</label><br>
                        <input class="input_class" name="diachi_lh" type="text" value="<?=$address?>" required>
                        <label class="form_text2"  for="">tel</label><br>
                        <input class="input_class" name="sdt_lh" type="text" value="<?=$tel?>" required>
                        <label class="form_text2"  for="">time</label><br>
                        <input class="input_class" name="time_lh" type="text" value="<?=$time?>" required>
                        <div class="chucnang">
                            <input type="submit" name="them_moi" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=list_lienhe"><input type="button" value="Danh sách"></a>
                        </div>
                       
                    </form>
                </div>
            </div>
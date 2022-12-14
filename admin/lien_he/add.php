<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Tạo mới thực đơn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <label class="form_text1" for="">Mã liên hệ</label><br>
                        <input class="input_class" name="ma_lh" type="text" placeholder="autonumber" disabled><br>
                        <label class="form_text2"  for="">address</label><br>
                        <input class="input_class" name="diachi_lh" type="text" required>
                        <label class="form_text2"  for="">tel</label><br>
                        <input class="input_class" name="sdt_lh" type="text" required>
                        <label class="form_text2"  for="">time</label><br>
                        <input class="input_class" name="time_lh" type="text" required>
                        <div class="chucnang">
                            <input type="submit" name="them_moi" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=list_lienhe"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                               if(isset($thongbao)&& ($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
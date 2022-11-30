<div class="content_right">
                <div class="box_tren">
                    Quản lý Gioi thiệu
                </div>
                <div class="box_duoi">
                    <h5>Tạo mới giới thiệu</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=ql_gt" method="POST" enctype="multipart/form-data">
                        <label class="form_text1" for="">Mã thực đơn</label><br>
                        <input class="input_class" name="ma_mon" type="text" placeholder="autonumber" disabled><br>
                        <label for="">image</label>
                        <input class="input_class" name="hinh_gt" type="file"><br>
                        <label class="form_text1" for="">Mô tả</label><br>
                        <textarea name="mota_gt" id="" cols="150" rows="10" style=""></textarea>
                        <div class="chucnang">
                            <input type="submit" name="them_moigt" value="Create">
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
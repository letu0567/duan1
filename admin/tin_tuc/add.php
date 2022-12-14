<div class="content_right">
                <div class="box_tren">
                    Quản lý Tin Tức
                </div>
                <div class="box_duoi">
                    <h5>Tạo mới tin tức</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=add_tintuc" method="POST" enctype="multipart/form-data">
                        <label class="form_text1" for="">Mã tin tức</label><br>
                        <input class="input_class" name="ma_tt" type="text" placeholder="autonumber" disabled><br>
                        <label for="">image</label>
                        <input class="input_class" name="hinh_tt" type="file"><br>
                        <label class="form_text1" for="">tiêu đề</label><br>
                        <input class="input_class" name="tieude_tt" type="text"><br>
                        <label class="form_text1" for="">Mô tả</label><br>
                        <textarea name="mota_tt" id="" cols="150" rows="10" style=""></textarea>
                        <div class="chucnang">
                            <input type="submit" name="them_moitt" value="Create">
                            <input type="reset" value="Reset">
                            <a href="index.php?act=ql_tintuc"><input type="button" value="Danh sách"></a>
                        </div>
                        <?php
                               if(isset($thongbao)&& ($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
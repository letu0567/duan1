<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Tạo mới món ăn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form class="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form_con">
                        <label class="form_text1" for="">Danh mục</label><br>
                            <select name="id_td" id="" class="box_select">
                                <?php foreach($listthucdon as $thucdon){
                                    extract($thucdon);
                                   
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                 ?>
                                <!-- <option value="0">--Chọn danh mục--</option> -->
                            </select>
                        </div>
                            <div class="form_con_box">
                        

                        <div class="form_con">
                        <label class="form_text1" for="">Tên Món Ăn</label><br>
                        <input class="input_class" name="ten_mon" type="text"><br>
                        </div>

                        <div class="form_con">
                        <label class="form_text2" for="">Giá</label><br>
                        <input class="input_class" name="gia" type="text">
                        </div>
                        <div class="form_con">
                        <label class="form_text2" for="">Số Lượng</label><br>
                        <input class="input_class" name="so_luong" type="text">
                        </div>

                        </div>
                        
                        <div class="form_con">
                        <label class="form_text2" for="">Image</label><br>
                        <input class="input_class" name="hinh" type="file">
                        </div>
                        
                        <div class="form_con">
                        <label class="form_text2" for="">Mô tả</label><br>
                        <textarea class="box_textarea" name="description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="chucnang">
                            <input type="submit" name="themmoi" value="Create">
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
<?php if (is_array($onetk)) {
    extract($onetk);
} ?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Sửa tài khoản</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=edit_tk" method="POST">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="form_con_box">
                        <div class="form_con">
                        <label class="form_text1" for="">Username</label><br>
                        <input class="input_class" name="name" type="text" value="<?= $name ?>"><br>
                        </div>
                        <div class="form_con">
                        <label class="form_text2"  for="">Mật khẩu</label><br>
                        <input class="input_class" name="pass" type="text" value="<?= $pass ?>">
                        </div>
                        
                        <div class="form_con">
                        <label class="form_text2"  for="">Email</label><br>
                        <input class="input_class" name="email" type="text" value="<?= $email ?>">
                        </div>
                        </div>
                        <div class="form_con_box">
                        <div class="form_con">
                        <label class="form_text2"  for="">Địa chỉ</label><br>
                        <input class="input_class" name="address" type="text" value="<?= $address ?>">
                        </div>
                        <div class="form_con">
                        <label class="form_text2"  for="">Số điện thoại</label><br>
                        <input class="input_class" name="tel" type="text" value="<?= $tel ?>">
                        </div>
                        <div class="form_con">
                        <label class="form_text2"  for="">Vai trò</label><br>
                        <input class="input_class" name="role" type="text" value="<?= $role ?>">
                        </div>
                        </div>
                        <div class="chucnang">
                            <input type="submit" name="cap_nhap" value="Update">
                            <!-- <input type="reset" value="Reset"> -->
                            <a href="index.php?act=qlkh"><input type="button" value="Danh sách"></a>
                        </div>
                        
                    </form>
                </div>
            </div>
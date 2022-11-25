<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Quản lý khách hàng</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=qlkh" method="post">
                        <div class="box_search">
                        <input class="input_search" type="text" name="keyw" placeholder="Nhập tên tài khoản">                      
                        <input type="submit" value="Search" name="search_kh" class="input_submit_search">
                        </div>
                        <!-- <button><a href="index.php?act=qlkh">Danh sách</a></button> -->
                    </form>
                    <!-- <form action="" method="POST"> -->
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>                           
                                    <th>Username</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Vai trò</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_tai_khoan as $taikhoan) { 
                                    extract($taikhoan);
                                    $suatk = "index.php?act=suatk&id=".$id;
                                    $xoatk = "index.php?act=xoatk&id=".$id;
                                    if ($role == 1) {
                                        $role = "Admin";
                                    }else{
                                        $role = "Khách hàng";
                                    }
                                    echo '<tr>
                                    
                                    <td>'.$id.'</td>

                                    <td>'.$name.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a  href="'.$suatk.'"><input type="button" value="Sửa" class="btn btn-info"></a> <a onclick="return Del()"; href="'.$xoatk.'"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
                                    </tr>';
                               } ?>
                            <!-- <tr>
                                    <td>01</td>
                                    <td>Ảnh</td>
                                    <td>Lê Tú</td>
                                    <td>123</td>
                                    <td>letu0567@gmail.com</td>
                                    <td>Hà nội</td>
                                    <td>0366170434</td>
                                    <td>Admin</td>
                                    <td>
                                        <a href="#">Sửa</a>
                                        <a href="#">Xóa</a>
                                    </td>
                                </tr> -->                             
                            </tbody>
                        </table>
                    <!-- </form> -->
                </div>
            </div>
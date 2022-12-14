<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Danh sách tin tức</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã tin tức</th> 
                                   <th>ảnh</th>    
                                   <th>tiêu đề</th>                     
                                    <th>Mô tả</th> 
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($list_tt as $tin_tuc){
                                   
                                    extract($tin_tuc);
                                    $hinhpath="../upload/".$image;
                                    if (is_file($hinhpath)) {
                                        $hinhtt="<img src='".$hinhpath."'height='80'>";
                                    }else{
                                        $hinhtt=" không có hình";
                                    }
                                    $suatt = "index.php?act=suatt&id=".$id;
                                    $xoatt = "index.php?act=xoatt&id=".$id;
                                   echo '<tr>
                                       <td>'.$id.'</td>
                                       <td>'.$hinhtt.'</td>
                                       <td>'.$title.'</td>
                                       <td style="width:800px; height:100px;">'.$description.'</td>
                                       <td><a href="'.$suatt.'" class="btn btn-info">sửa</a> <a href="'.$xoatt.'" class="btn btn-danger">Xóa</a></td>

                                   </tr>';
                                }
                                ?>
                            
                                     
                            </tbody>
                        </table>
                        <div class="chucnang">
                        <a href="index.php?act=add_tintuc"><input type="button" value="Nhập thêm" name="capnhat_tt"></a>
                        </div>
                    </form>
                </div>
            </div>
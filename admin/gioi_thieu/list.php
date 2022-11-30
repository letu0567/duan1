<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Danh sách giới thiệu</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã giới thiệu</th> 
                                   <th>ảnh</th>                         
                                    <th>Mô tả</th>
                                    <th>chức năng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($list_gt as $gt1){
                                   
                                    extract($gt1);
                                    $hinhpath="../upload/".$image;
                                    if (is_file($hinhpath)) {
                                        $hinhgt="<img src='".$hinhpath."'height='80'>";
                                    }else{
                                        $hinhgt=" không có hình";
                                    }
                                    $suagt = "index.php?act=suagt&id=".$id;
                                    $xoagt = "index.php?act=xoagt&id=".$id;
                                   echo '<tr>
                                       <td>'.$id.'</td>
                                       <td>'.$hinhgt.'</td>
                                       <td style="width:800px; height:100px;">'.$description.'</td>
                                       <td><a href="'.$suagt.'" class="btn btn-info">sửa</a> <a href="'.$xoagt.'" class="btn btn-danger">Xóa</a></td>
                                       <td></td>
                                   </tr>';
                                }
                                ?>
                            
                                     
                            </tbody>
                        </table>
                        <div class="chucnang">
                        <a href="index.php?act=ql_gt"><input type="button" value="Nhập thêm" name="capnhat_gt"></a>
                        </div>
                    </form>
                </div>
            </div>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Quản lý bình luận</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung</th>                             
                                    <th>Id User</th>
                                    <th>Id món ăn</th>
                                    <th>Ngày bình luận</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php foreach ($list_bl as $bl) {
                                    extract($bl);
                                    // foreach ($list_user as $user) {
                                    //     extract($user);
                                    //     // print_r($user);
                                    //     if ($id == $id_user) {
                                    //         $name_user = $name;
                                    //     }
                                    // }
                                    $xoatk = "index.php?act=xoabl&id=".$id;
                                    echo '
                                    <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$content.'</td>
                                        <td>'.$id_user.'</td>
                                        <td>'.$id_monan.'</td>
                                        <td>'.$date.'</td>
                                        <td><a href="'.$xoatk.'" class="btn btn-danger">Xóa</a></td>
                                    </tr>';
                                } ?>

                                
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
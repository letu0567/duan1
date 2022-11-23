<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Danh sách thực đơn</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã thực đơn</th>                             
                                    <th>Tên thực đơn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php foreach($listthucdon as $thucdon):?>
                                                 
                                        <td><?=$thucdon['id']?></td>
                                        <td><?=$thucdon['name']?></td>                       
                                        <td>
                                            <a href="index.php?act=suatd&id=<?=$thucdon['id']?>"><button type="button" class="btn btn-info">SỬA</button></a>
                                            <a href="index.php?act=xoa_thucdon&id=<?=$thucdon['id']?>"><button type="button" class="btn btn-danger">XÓA</button></a>
                                        </td>
                                    </tr>
                                     <?php endforeach?>  
                            </tbody>
                        </table>
                        <div class="chucnang">
                        <a href="index.php?act=qltd"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
            </div>
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
                                    <th>Mã liên hệ</th>                             
                                    <th>address</th>
                                    <th>tel</th>
                                    <th>time</th>
                                    <th></th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php foreach($all_lienhe as $lh):?>
                                                 
                                        <td><?=$lh['id']?></td>
                                        <td><?=$lh['address']?></td>    
                                        <td><?=$lh['tel']?></td>    
                                        <td><?=$lh['time']?></td>    
                                                           
                                        <td>
                                            <a href="index.php?act=sualh_one&id=<?=$lh['id']?>"><button type="button" class="btn btn-info">SỬA</button></a>
                                            <a href="index.php?act=xoa_lh&id=<?=$lh['id']?>"><button type="button" class="btn btn-danger">XÓA</button></a>
                                        </td>
                                    </tr>
                                     <?php endforeach?>  
                            </tbody>
                        </table>
                        <div class="chucnang">
                        <a href="index.php?act=ql_lienhe"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
            </div>
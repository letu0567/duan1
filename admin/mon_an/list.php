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
                                    <th>Mã món ăn</th>                             
                                    <th>Tên món ăn</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Mô tả</th>
                                    <th>Số lượng</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listmonan as $value): ?>
                                    <?php 
                                    extract($value);
                                    $hinhpath="../upload/".$image;
                                    if (is_file($hinhpath)) {
                                        $hinh="<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh=" không có hình";
                                    }
                                    ?>
                            <tr>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['name']?></td>                       
                                    <td><?=$hinh?></td>                      
                                    <td><?=$value['price']?></td>                       
                                    <td><?=$value['description']?></td>                       
                                    <td><?=$value['quantity']?></td>                      
                                                          
                                    <td>
                                    <a href="index.php?act=sua_monan&id=<?=$value['id']?>"><button type="button" class="btn btn-info">SỬA</button></a>
                                    <a href="index.php?act=xoa_monan&id=<?=$value['id']?>"><button type="button" class="btn btn-danger">XÓA</button></a>
                                    </td>
                                </tr>
                                 
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                        <div class="chucnang">
                        <a href="index.php?act=qlma"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
            </div>
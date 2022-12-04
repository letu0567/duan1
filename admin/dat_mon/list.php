<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Quản lý đặt món</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Mã đơn hàng</th>
                                    <th>Khách hàng</th>                             
                                    <th>Số lượng hàng</th>
                                    <th>Ngày đặt món</th>
                                    <th>Giá trị đơn hàng</th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>Thao tác</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listbill as $bill) {
                                    extract($bill);
                                    $kh = $bill['bill_name']."
                                    <br> ".$bill['bill_email']."
                                    <br> ".$bill['bill_address']."
                                    <br> ".$bill['bill_tel'];
                                    $countma = loadall_cart_count($bill['id']);
                                    $ttdh = get_ttdh($bill['bill_status']);
                                    $suabill = "index.php?act=suabill&id=".$bill['id'];

                                    echo '<tr>
                                                    <td>ZEZE-'.$bill['id'].'</td>
                                                    <td>'.$kh.'</td>
                                                    <td>'.$countma.'</td>
                                                    <td>'.$bill['ngaydatmon'].'</td>
                                                    <td>$'.$bill['total'].'</td>
                                                    <td>'.$ttdh.'</td>                      
                                                    <td>
                                                        <a class="btn btn-info" href="'.$suabill.'">Sửa</a>
                 
                                                    </td>
                                            </tr>';
                                } ?>

                               
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
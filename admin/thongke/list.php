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
                                    <th>Mã danh mục</th>
                                    <th>Tên danh mục</th>                             
                                    <th>Số lượng</th>
                                    <th>Giá cao nhất</th>
                                    <th>Giá thấp  nhất</th>
                                    <th>Giá trung bình  </th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                           
                               <?php foreach($thongke as $tk){
                                  extract($tk);
                                  echo '
                                  <tr>
                                  <td>'.$ma_dm.'</td>
                                 <td>'.$ten_dm.'</td>
                                 <td>'.$count_sp.'</td>
                                 <td>'.$min_price.'</td>
                                 <td>'.$max_price.'</td>
                                 <td>'.$avg_price.'</td>
                                 <td></td>
                                 
                             </tr> 
                                  ';
                               } ?>
                               
                            </tbody>
                        </table>
                        <br>
                        <div class="">
                        <a href="index.php?act=bieudo"><input type="button" class="btn btn-secondary btn-sm"  value="Xem biểu đồ"></a> 
                          
                   </div>
                    </form>
                </div>
            </div>
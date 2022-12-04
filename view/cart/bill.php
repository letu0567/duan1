<form action="index.php?act=billcomfirm" method="post">
<div class="container_giohang">
    
    <div class="box_right_gh">
        <div class="box_thongtin_kh">
            <?php 
            
                if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['name'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                }else{
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }

            ?>
            <h2 class="text_thongtin_kh">Thông tin khách hàng</h2>
            <!-- <div class="gach_duoi"></div> -->
            <div class="box_gh_con">
                <label for="">Người đặt hàng :</label>
                <input type="text" value="<?= $name ?>" name="name">
            </div>
            <div class="box_gh_con">
                <label for="">Địa chỉ :</label>
                <input type="text" value="<?= $address ?>" name="address">
            </div>
            <div class="box_gh_con">
                <label for="">Email :</label>
                <input type="text" value="<?= $email ?>" name="email">
            </div>
            <div class="box_gh_con">
                <label for="">Điện thoại :</label>
                <input type="text" value="<?= $tel ?>" name="tel">
            </div>
        </div>
        <div class="box_phuongthuc_tt">
            <h2 class="text_pttt">Phương thức thanh toán</h2>
            <form action="">
                <input type="radio" name="pttt" value="1" checked>Thanh toán khi nhận hàng
                <!-- <input type="radio" name="pttt" value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng -->
                <!-- <input type="radio" name="pttt" value="2">Thanh toán online -->
            </form>
        </div>
        <div class="box_tt_giohang">
            <h2 class="text_pttt">Món đã chọn</h2>
            <!-- <table>
                <thead>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền </th>

                    </tr>
                </thead>
                <tbody> -->
            <?php
            $tong = 0;
            $i = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh = $cart[1];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                $xoama2 = "index.php?act=delcart&idcart=" . $i;
                echo '<p class="sl_p">' . $cart[4] . ' x</p>
                <p class="name_p">' . $cart[2] . '</p></br>
                <span class="price_p">$' . $cart[3] . '</span>
                <div class="gach_duoi2"></div>
                ';
                $i += 1;
            }


            ?>
    
            
            <!-- </tbody>
            </table> -->

            <!-- <tr>
                                        <td><img src="' . $cart[1] . '" alt="" width = "100px"></td>
                                        <td>' . $cart[2] . '</td>
                                        <td>' . $cart[3] . '</td>
                                        <td>' . $cart[4] . '</td>
                                        <td>' . $ttien . '</td>
                                        
                                        
                                        
                                    </tr> -->
        </div>
    </div>
    <div class="box_left_gh">
        <div class="tong_tien">
            <h2>Tổng cộng <?= $i ?> phần</h2>
            <span>$<?= $tong ?></span>
        </div>
        <div class="gach_duoi2"></div>
        <div class="thanh_toan">
            <h2 class="text_tien_tt">Tiền phải thanh toán</h2>
            <span class="text_tong_tt">$<?= $tong ?></span>
        </div>
        <input type="submit" value="Đặt món" name="okdathang">
    </div>
    
</div>
</form>
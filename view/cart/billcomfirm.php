<div class="container_comfirm_gh">
    <h2 class="camon">Cảm ơn quý khách đã đặt hàng!<i class="fa-solid fa-heart icontym"></i></h2>
    <?php if (isset($bill) && (is_array($bill))) {
        extract($bill);
    } ?>
    <div class="thongtin_dh">
        <h2 class="text_thongtin_kh">Thông tin đơn hàng</h2>
        <p>Mã đơn hàng : <span>ZEZE-<?= $bill['id']; ?> </span></p>
        <p>Ngày đặt hàng : <span><?= $bill['ngaydatmon']; ?></span></p>
        <p>Tổng đơn hàng : <span>$<?= $bill['total']; ?></span></p>
        <?php if ($bill['bill_pttt'] == 1 ) {
            $tt = "Thanh toán trực tiếp";
        } ?>
        <p>Phương thức thanh toán : <span><?=  $tt ?></span></p>
    </div>  
    <div class="box_thongtin_kh2">
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
            <div class="box_gh_con2">
                <label for="">Người đặt hàng :</label>
                <input type="text" value="<?= $bill['bill_name']; ?>">
            </div>
            <div class="box_gh_con2">
                <label for="">Địa chỉ :</label>
                <input type="text" value="<?= $bill['bill_address']; ?>">
            </div>
            <div class="box_gh_con2">
                <label for="">Email :</label>
                <input type="text" value="<?= $bill['bill_email']; ?>">
            </div>
            <div class="box_gh_con2">
                <label for="">Điện thoại :</label>
                <input type="text" value="<?= $bill['bill_tel']; ?>">
            </div>
        </div>
        <div class="tt_gh2">
            <h2 class="chi_tiet_gh2">Chi tiết giỏ hàng</h2>
        <table>
                        <thead>
                            <tr class="tr2">
                                <th>Hình</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                                bill_chi_tiet($billct);
              
                            ?>


                        </tbody>
                    </table>
                    </div>
</div>
<div class="form_giohang">
<h5 class="text_cart">Đơn hàng</h5>
    <!-- <form action="" method="POST"> -->
    <table>
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng món ăn</th>
                <th>Tổng giá trị</th>
                <th>Tình trạng đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // print_r($listbill);
            if(is_array($listbill)) {
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh = get_ttdh($bill['bill_status']);
                    $countma = loadall_cart_count($bill['id']);
                    echo '
                        <tr>
                            <td>ZEZE-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydatmon'].'</td>
                            <td>'.$countma.'</td>
                            <td>$'.$bill['total'].'</td>
                            <td>'. $ttdh.'</td>
                        </tr>
                        ';
                }
            }

            ?>







        </tbody>
    </table>
</div>
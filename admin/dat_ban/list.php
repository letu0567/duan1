<div class="content_right">
    <div class="box_tren">
        Quản lý ADMIN
    </div>
    <div class="box_duoi">
        <h5>Quản lý đặt bàn</h5>
        <div class="gach_duoiadmin"></div>
        <form action="" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã đặt bàn</th>
                        <th>Tên khách hàng</th>
                        <th>Điện thoại</th>
                        <th>Số người</th>
                        <th>Ngày đặt</th>
                        <th>Giờ đặt</th>
                        <th>Lưu ý</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listdatban as $value) : ?>
                        <?php
                        extract($value);
                        ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><?= $value['tel'] ?></td>
                            <td><?= $value['so_nguoi'] ?></td>
                            <td><?= $value['ngay_dat'] ?></td>
                            <td><?= $value['gio_dat'] ?></td>
                            <td><?= $value['luu_y'] ?></td>
                           <td> <a href="index.php?act=xoa_datban&id=<?= $value['id'] ?>"><button type="button" class="btn btn-danger">XÓA</button></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
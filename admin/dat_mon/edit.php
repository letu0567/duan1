<?php 

    if (is_array($suatt)) {
        extract($suatt);
    }

?>
<div class="content_right">
                <div class="box_tren">
                    Quản lý ADMIN
                </div>
                <div class="box_duoi">
                    <h5>Sửa tình trạng đơn hàng</h5>
                    <div class="gach_duoiadmin"></div>
                    <form action="index.php?act=update_ttdh" method="POST">
                        <input type="hidden" name="bill_id" value="<?= $id ?>">
                        <label class="form_text2"  for="">Tình trạng đơn hàng</label><br>
                        <input class="input_class" name="bill_status" type="text" value="<?= $bill_status ?>" required>
                        <div class="chucnang">
                        <input type="hidden" name="id" value="">
                            <input type="submit" name="cap_nhat" value="Update">
                            <!-- <input type="reset" value="Reset"> -->
                            <a href="index.php?act=danh_sach_td"><input type="button" value="Danh sách"></a>
                        </div>
                    </form>
                </div>
            </div>
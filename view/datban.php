<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/public/css/datban.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        .modal {
            background: #fff;
            max-width: 500px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            top: 0px;
            transition: all 0.25s ease-in-out;
        }

        .modal .modal-header {
            display: flex;
            justify-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            border-bottom: 1px solid #dedede;


        }

        .modal .modal-header h3 {
            margin: 0;
        }

        button#button_close {
            outline: none;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;

        }

        .modal .modal-body {
            padding: 12px 20px;

        }

        #modal-container.show .modal {
            top: 100px;
        }

        #wrapper {
            min-height: 100vh;
        }

        button#btn_open {
            background: rgb(20, 173, 127);
            color: aliceblue;
            border: none;
            padding: 5px 15px;
            cursor: pointer;
            box-shadow: 0px 2px 4px rgb(0, 0, 0, 0.5);
        }


        #modal-container {
            height: 100vh;
            background: rgb(0, 0, 0, 0.5);
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            opacity: 0;
            pointer-events: none;

        }

        #modal-container.show {
            opacity: 1;
            pointer-events: all;
        }
    </style>
    <!-- <div class="container"> -->

    <div class="boxs">
        <div class="box">
            <div class="box1">
                <div class="datban">
                    <h2 class="td1 td">Đặt Bàn</h2>
                    <p class="text12">Quý khách vui lòng gọi vào số Hotline 0335.61.5454 hoặc điền đầy đủ thông tin vào biểu mẫu dưới đây. ZeeZee Chicken House sẽ liên hệ lại với Quý khách để xác nhận trong vòng 2 giờ làm việc.
                        <br> Lưu ý: Đây là biểu mẫu đặt bàn, không phải là xác nhận đã đặt được bàn.
                    </p>
                    <form method="POST" action="index.php?act=db1">
                        <div class="inputs">
                            <div class="thongtin1">
                                <label for="">Họ và tên</label>
                                <br>
                                <input type="text" placeholder="Tên điện thoại Quý khách" class="input1" name="name" id="name">
                            </div>
                            <div class="thongtin1">
                                <label for="">Số điện thoại</label>
                                <br>
                                <input type="text" placeholder="Số điện thoại Quý khách" name="tel" class="input1" id="tel">
                            </div>
                        </div>
                        <div class="inputss">
                            <div class="thongtin2">
                                <label for="">Số người</label>
                                <br>
                                <input type="number" placeholder="Tối đa 6 người" class="input2" name="so_nguoi" id="so_nguoi">
                            </div>
                            <div class="thongtin2">
                                <label for="">Ngày đặt</label>
                                <br>
                                <input type="date" placeholder="ngày/tháng/năm" class="input2" name="ngay_dat" id="date">
                            </div>
                            <div class="thongtin2">
                                <label for="">Giờ đặt</label>
                                <br>
                                <input type="time" placeholder="Giờ đặt bàn" class="input2" name="gio_dat" id="time">
                            </div>
                        </div>
                        <div class="motas">
                            <label>Lưu ý cho nhà hàng</label> <br>
                            <textarea name="luu_y" id="mota_1" cols="108" rows="10" style="width: 708px; height: 143px;" placeholder="Ví dụ: Cần thêm ghế trẻ em..." name="luu_y" id="luu_y"></textarea>
                        </div>
                        <div class="btn-2 text-center bg-red-500 text-white p-2">
                            <input type="submit" value="Đặt bàn" type="submit" name="submit" >
                        </div>

                    </form>


                </div>
                <div class="sukien_uudai">
                    <h2 class="td2 td">Sự kiện & Khuyến mãi</h2>
                    <div class="sukien">
                    <?php 
              $img_path='upload/';
              foreach( $tt_datban as $tt_db){
                   extract($tt_db);
                   $linktt = "index.php?act=tintuc_ct&idtt=".$id;
                   $hinh=$img_path.$image;

                   echo '
                   <div class="sukien1">
                            <img src="'.$hinh.'" alt="" width="354.39px" height="175px" class="anh_uudai">
                            <h4><a href="'.$linktt.'">'.$title.'</a></h4>
                        </div>
                   ';        
             }
            ?>
                        <!-- <div class="sukien1">
                            <img src="view/public/image/uudai2.jpg" alt="" width="354.39px" height="175px" class="anh_uudai">
                            <h4><a href="">[Minigame] Đóng đinh rinh quà đỉnh, số lượng có hạn</a></h4>
                        </div>
                        <div class="sukien1">
                            <img src="view/public/image/uudai1 (1).jpg" alt="" width="354.39px" height="175px" class="anh_uudai">
                            <h4><a href="">[Soft Opening] Zee Zee “xin chào” - Ưu đãi 20% toàn bộ Menu</a></h4>
                        </div> -->
                    </div>
                </div>

            </div>
            <!-- div box -->

        </div>
       
    </div>
    </div>


    <!-- div container -->
    <script>
        const btn_open = document.getElementById('chao');
        const btn_close = document.getElementById('button_close');
        const modal_container = document.getElementById('modal-container');
        const modal_demo = document.getElementById('modal-demo');



        btn_open.addEventListener('click', () => {
            modal_container.classList.add('show');
        });
        btn_close.addEventListener('click', () => {
            modal_container.classList.remove('show');
        });

        modal_container.addEventListener('click', (e) => {
            if (!modal_demo.contains(e.target)) {
                btn_close.click();

            }
        });

    </script>




    <footer></footer>
    <!-- </div> -->
</body>

</html>
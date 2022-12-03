<?php
    ob_start();
    session_start();
    
    include "./DAO/pdo.php";
    include "./DAO/mon_an.php";
    include "./DAO/thucdon.php";
    include "./DAO/tai_khoan.php";
    include "./DAO/datban.php";
    include "./DAO/gioithieu.php";
    include "./DAO/cart.php";
    include "./global.php";
    include "./view/header.php";
    
    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    
    // $listbill = loadone_cart($idbill);
   $sp_new=loadall_trangchu();
   $gt_new=gt_trangchu();
   $dsthucdon = loadall_thucdon() ;
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // star gioithieu
        case 'gt':
            include "view/giothieu.php";
            break;

            // endgioithieu

            // star thực đơn
            case 'td':
                include "view/thucdon.php";
                break;
            case 'monan_ct':
                
                if (isset($_GET['idma']) && ($_GET['idma']) > 0) {                  
                    $one_monan = loadone_monan($_GET['idma']);
                    $all_thucdon = loadall_thucdon();
                    extract($one_monan);
                    $monan_cungloai = load_monan_cungloai($id,$id_thucdon);
                    include "view/detail_monan.php";
                }else{
                    include "view/content.php";
                }
                
                break;
            case 'loadtd':
            
                if (isset($_GET['idtd']) && ($_GET['idtd']) > 0) {               
                    $dsma = loadalll_monan("", $_GET['idtd']);
                    $ten_td = load_ten_thucdon($_GET['idtd']);
                    include "view/load_monan.php";
                }else{
                    include "view/load_monan.php";
                }
                
                break;

                // end thực đơn

            // star tintuc
        case 'tt':
            include "view/tintuc.php";
            break;
            // end tintuc

            // star liên hệ
        case 'lh':
            include "view/lienhe.php";
            break;
            // end liên hệ

            // star dat món
        
            //end dat món

            //star dat ban
        case 'datban':
            include "view/datban.php";
            break;
            // end đặt bàn



            case 'xacnhan';
            if(isset($_POST['xacnhan'])&&($_POST['xacnhan'])){
                $datban=load_one_ban($_GET['id']);
            }
         
       
            break;
        case 'db1':

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $tel = $_POST['tel'];
                $so_nguoi = $_POST['so_nguoi'];
                $ngay_dat = $_POST['ngay_dat'];
                $gio_dat = $_POST['gio_dat'];
                $luu_y = $_POST['luu_y'];
                if (!empty($name) && !empty($tel)&& !empty($so_nguoi)&& !empty($ngay_dat)&& !empty($gio_dat)&& ($so_nguoi>0)  ) {
                    insert_dat_ban($name, $tel, $so_nguoi, $ngay_dat, $gio_dat, $luu_y);
                    echo '<script>alert("Đăng kí thành công")</script>';
                    include '../duan1/view/xacnhan.php';
               
            
                } else {
                    echo '<script>alert("Cần nhập đầy đủ thông tin")</script>';
                    include "../duan1/view/datban.php";
                }
              
            }

            break;
        
        case 'dang_nhap':
            include "view/tai_khoan/dangnhap.php";
            break;
        case 'dangnhap':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $role = check_user($name, $pass);
                $check_user = check_user2($name, $pass);
                $_SESSION['role'] = $role;
                $_SESSION['user'] = $check_user;

                if (isset($_SESSION['role'])) {
                    if ($role == 1) {
                        setcookie("dangnhap","Đăng nhập thành công!",time()+2);
                        header('location: admin/index.php');die;
                    }
                }
                if (is_array($_SESSION['user'])) {
                    setcookie("dangnhap","Đăng nhập thành công!",time()+2);
                    header('location: index.php');die;
                }
                    
                if (!is_array($_SESSION['user'])) {
                    $_SESSION['loidn'] = "Sai tên đăng nhập or mật khẩu!";
                }
            } else {
                $_SESSION['loidn'] = "Sai tên đăng nhập hoặc mật khẩu!";
            }
                // if ($role == 1) {
                //     setcookie("dangnhap","Đăng nhập thành công!",time()+2);
                //     header('location: admin/index.php');
                // }else{
                //     header('location: index.php');
                // }
                // if (condition) {
                //     # code...
                // }

            case 'quen_mk':
                include "view/tai_khoan/quen_mk.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    // print_r($email);
                    $check_email = check($email,$name);
                    // if (isset($check_email['email'])) {
                    //     $_SESSION['your_mk'] = "Mật khẩu của bạn là: " . $check_email['pass'];
                    //     header("location: index.php?act=quen_mk");
                    // }
                    if ((is_array($check_email))) {
                        $thongbao = "Mật khẩu của bạn là:" . $check_email['pass'];
                    } else {
                        $thongbao = "Email này không tồn tại!";
                    }
                }
                include "view/tai_khoan/quen_mk.php";
                break;

        case 'quen_mk':
            include "view/tai_khoan/quen_mk.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                print_r($email);
                $check_email = check($email, $name);
                // if (isset($check_email['email'])) {
                //     $_SESSION['your_mk'] = "Mật khẩu của bạn là: " . $check_email['pass'];
                //     header("location: index.php?act=quen_mk");
                // }
                if ((is_array($check_email))) {
                    $thongbao = "Mật khẩu của bạn là:" . $check_email['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include "view/tai_khoan/quen_mk.php";
            break;

        case 'dang_xuat':
            unset($_SESSION['user']);
            header('location: index.php');
            break;
        case 'cap_nhat_tk':
            include "view/tai_khoan/edit_tk.php";
            break;
        case 'edit_tk':
            if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                capnhat_tai_khoan($id, $name, $email, $pass, $address, $tel);
                $thongbao_capnhat = "Cập nhật thành công";
                $_SESSION['user'] = check_user2($name, $pass);
                header('location: index.php?act=cap_nhat_tk');
            }
            include "view/tai_khoan/edit_tk.php";
            break;
            // end dang nhap

            // star đang ký
        case 'dang_ky':
            include "view/tai_khoan/dangky.php";
            break;
            // case 'dn_admin':
            //     include "admin/index.php";
            //     break;
        case 'dangky':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                // ktra emai tồn tại trên database
                $_SESSION['check'] = check($email, $name);
                if (isset($_SESSION['check']['email'])) {
                    $thongbao_false_em = "";
                } else {
                    them_tai_khoan($name, $email, $pass, $address, $tel);
                    $thong_bao = "Đăng Ký Thành Công";
                }
            }
            include "view/tai_khoan/dangky.php";
            break;
            // end đang ký
            // star adđ to cart

        case 'datmon':
            include "view/cart/viewcart.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $image = $_POST['image'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = ($price * $soluong);
                $maadd = [$id, $image, $name,$price, $soluong,$ttien];
                array_push($_SESSION['mycart'], $maadd);
                
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                // print_r($_GET['idcart']);
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart'] = [];
            }
            // include "view/tai_khoan/dangky.php";
            header("location: index.php?act=datmon");
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['okdathang']) && ($_POST['okdathang'])) {
                if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $iduser = 0;
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydatmon = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser,$name, $email, $address, $tel,$pttt,$ngaydatmon,$tongdonhang);

                // insert into cart : $session['mycart'] & idbill 

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$idbill);
                }
                // xóa session cart
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        default:
            include "./view/content.php";
            break;
    }
} else {
    $loadall = loadall_trangchu2();
    include "./view/content.php";
}
include "./view/footer.php";

    
//     if(isset($_GET["act2"])){
//         $act2 = $_GET["act2"];
//     switch ($act2) {
//         case 'datmon':
//                 include "view/datmon.php";
//                 break;
        
//         default:
            
//             break;
//     }
// }
// ob_clean();

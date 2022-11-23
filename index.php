<?php
    ob_start();
    session_start();
    
    // if (isset($_SESSION['user'])){
    //     extract($_SESSION['user']);
    // }
    // if (isset($_SESSION['user']) && ($role == 1)) {
    
    include "./DAO/pdo.php";
    include "./DAO/tai_khoan.php";
    include "./view/header.php";

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
            case 'datmon':
                include "view/datmon.php";
                break;
                //end dat món

                //star dat ban
            case 'datban':
                include "view/datban.php";
                break;
                // end đặt bàn

                // star dang nhap
            case 'dang_nhap':
                include "view/tai_khoan/dangnhap.php";
                break;
            case 'dangnhap':        
                if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    $check_user = check_user($name, $pass);
                    // echo "<pre>";
                    // print_r($check_user);
                    if (is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        setcookie("dangnhap", "Đăng nhập thành công",time()+2);
                        header('location: index.php');die;
                    }else{
                        // setcookie("dangnhap_false", "Đăng nhập thất bại, vui lòng đăng ký hoặc kiểm tra lại!",time()+2);
                        // $thong_bao_do = "Tài khoản không tồn tại, vui lòng đăng ký!";
                        $_SESSION['loidn'] = "Sai tên đăng nhập hoặc mật khẩu";
                        header('location: index.php?act=dangnhap');
                        // include "view/tai_khoan/dangnhap.php";die;
                    }
                }
                include "index.php";
                break;

            case 'quen_mk':
                include "view/tai_khoan/quen_mk.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    print_r($email);
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

            case 'dang_xuat':
                unset($_SESSION['user']);
                header('location: index.php');
                break;
            case 'cap_nhat_tk':
                include "view/tai_khoan/edit_tk.php";
                break;
            case 'edit_tk':
                if (isset($_POST['capnhattk'])&&($_POST['capnhattk'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    capnhat_tai_khoan($id, $name, $email, $pass, $address, $tel);
                    $_SESSION['user'] = check_user($name,$pass);
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
                if (isset($_POST["dangky"])&& ($_POST["dangky"])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $address = $_POST["address"];
                    $tel = $_POST["tel"];
                    // ktra emai tồn tại trên database
                    $_SESSION['check'] = check($email,$name);
                    if (isset($_SESSION['check']) ) {
                        $thongbao_false_em = "";   
                        $thongbao_false_nm = "";   
                                     
                    }else{
                        them_tai_khoan($name, $email, $pass, $address, $tel);
                        $thong_bao = "Đăng Ký Thành Công";
                    }

                    // if (isset($_SESSION['check_name']['name']) ) {
                    //     $thongbao_false_nm = "Tên đăng nhập đã tồn tại, vui lòng nhập email khác!";                 
                    // }else{
                    //     them_tai_khoan($name, $email, $pass, $address, $tel);
                    //     $thong_bao = "Đăng Ký Thành Công";
                    // }
                    // setcookie("dangdy", "Đăng ký thành công",time()+2);
                    // header('location: index.php');
                    

                }
                include "view/tai_khoan/dangky.php";
                break;
                // end đang ký
            
            
            default:
            include "./view/content.php";
                break;
        }
    }else{
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
?>
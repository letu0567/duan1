<?php
    ob_start();
    session_start(); 
    
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
                    echo "<pre>";
                    print_r($check_user);
                    if (is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        setcookie("dangnhap", "Đăng nhập thành công",time()+2);
                        header('location: index.php');die;
                    }else{
                        setcookie("dangnhap_false", "Đăng nhập thất bại, vui lòng đăng ký hoặc kiểm tra lại!",time()+2);
                        header('location: index.php');
                    }
                }
                include "index.php";
                break;

            case 'quen_mk':
                include "view/tai_khoan/quen_mk.php";
                break;
            case 'quenmk':
                if (isset($_POST['quenmk'])) {
                    $email = $_POST['quenmk'];
                }
                include "view/tai_khoan/quen_mk.php";
                break;

            case 'dang_xuat':
                session_unset();
                header('location: index.php');
                break;
                // end dang nhap

                // star đang ký
            case 'dang_ky':
                include "view/tai_khoan/dangky.php";
                break;
            case 'admin':
                include "admin/index.php";
                break;
            case 'dangky':
                if (isset($_POST["dangky"])&& ($_POST["dangky"])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $address = $_POST["address"];
                    $tel = $_POST["tel"];
                    them_tai_khoan($name, $email, $pass, $address, $tel);
                    // setcookie("dangdy", "Đăng ký thành công",time()+2);
                    // header('location: index.php');
                    $thong_bao = "Đăng Ký Thành Công";

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
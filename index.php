<?php
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

            case 'quen_mk':
                include "view/tai_khoan/quen_mk.php";
                break;
                // end dang nhap

                // star đang ký
            case 'dang_ky':
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
?>
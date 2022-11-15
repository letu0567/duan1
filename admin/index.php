<?php
    include "header.php";

    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // case 'index.php?act=qltd':
            case 'qltd':
                include "thucdon/add.php";
                break;
            case 'danh-sach_td':
                include "thucdon/list.php";
                break;
            case 'danh-sach_ma':
                include "mon_an/list.php";
                break;
            case 'qlma':
                include "mon_an/add.php";
                break;
            case 'qldm':
                include "dat_mon/list.php";
                break;
            case 'qldb':
                include "dat_ban/list.php";
                break;
            case 'qlbl':
                include "binh_luan/list.php";
                break;
            case 'qlkh':
                include "tai_khoan/list.php";
                break;
            
            case 'qldh':
                include "don_hang/list.php";
                break;
            case 'qltk':
                include "thongke/list.php";
                break;
                                
            
            default:
                include "index.php";
                break;
        }



    }



    include "footer.php";
?>

            
            
     
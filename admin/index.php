<?php
    include "header.php";

    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case 'qltd':
            case 'qltd':
                include "thucdon/list.php";
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
                include "thong_ke/list.php";
                break;
                                
            
            default:
                include "index.php";
                break;
        }



    }



    include "footer.php";
?>

            
            
     
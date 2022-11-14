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
            
            default:
                include "index.php";
                break;
        }



    }



    include "footer.php";
?>

            
            
     
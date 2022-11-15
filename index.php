<?php
    include "./view/header.php";

    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            case 'gt':
                include "view/giothieu.php";
                break;
            case 'td':
                include "view/thucdon.php";
                break;
            case 'tt':
                include "view/tintuc.php";
                break;
            case 'lh':
                include "view/lienhe.php";
                break;
            // case 'datmon':
            //     include "view/datmon.php";
            //     break;
            case 'datban':
                include "view/datban.php";
                break;
            
            default:
            include "./view/content.php";
                break;
        }
    }else{
        include "./view/content.php";
    }
    include "./view/footer.php";

?>
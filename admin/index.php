<?php
    session_start();
    ob_start();
    include "header.php";
    include "../DAO/pdo.php";
    include "../DAO/thucdon.php";
    include "../DAO/mon_an.php";
    include "../DAO/thong_ke.php";
    include "../DAO/tai_khoan.php";
    include "../DAO/datban.php";
    include "../DAO/binhluan.php";
    include "../DAO/gioithieu.php";
     include "../DAO/lienhe.php";
     include "../DAO/tintuc.php";
     include "../DAO/cart.php";

    
    if (isset($_SESSION['role']) && ($_SESSION['role']) == 1) {
    
    if(isset($_GET["act"])){
        $act = $_GET["act"];
        switch ($act) {
            // case 'index.php?act=qltd':
            case 'qltd':
                if(isset($_POST['them_moi']) && ($_POST['them_moi'])){
                    $ten_mon_an=$_POST['tenmon'];
                    insert_thucdon($ten_mon_an);
                    $thongbao="Thêm món thành công";
                }
                include "thucdon/add.php";
                break;
            case 'danh_sach_td':
                $sql="SELECT *FROM thucdon order by id desc";
                $listthucdon=loadall_thucdon();
                include "thucdon/list.php";
                break;
            case 'suatd':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sua=loadone_thucdon($_GET['id']);
                }
                include "thucdon/update_thucdon.php";
                break;
            case 'update_thucdon':
                if(isset($_POST['cap_nhat'])&& ($_POST['cap_nhat'])){
                    $ten_mon_an=$_POST['tenmon'];
                    $id=$_POST['id'];
                    update_thucdon($id,$ten_mon_an);
                    // $thongbao="Cập nhật thành công";
                }
                $sql="SELECT *FROM thucdon order by id desc";
                $listthucdon=loadall_thucdon();
                include 'thucdon/list.php';
                break;  

            case 'xoa_thucdon':
                if(isset($_GET['id'])&& ($_GET['id'] >0)){
                    delete_thucdon($_GET['id']);
                }
                $sql = "SELECT *FROM thucdon order by id desc";
                $listthucdon=loadall_thucdon();
                include "thucdon/list.php";
                break;

                // món ăn
            case 'danh-sach_monan':
                $sql="SELECT *FROM mon_an order by id desc";
                $listmonan=loadall_monan();
                include "mon_an/list.php";
                break;
            case 'qlma':
                   if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $idtd=$_POST['id_td'];
                    $ten_monan=$_POST['ten_mon'];
                    $gia_monan=$_POST['gia'];
                    $so_luong=$_POST['so_luong'];
                    $mota=$_POST['description'];
                    $file_name=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                      //  echo "Sorry, there was an error uploading your file.";
                      }
                    insert_monan($ten_monan,$file_name,$gia_monan,$mota,$so_luong,$idtd);
                    $thongbao="Thêm món thành công";
                   }
                   $listthucdon=loadall_thucdon();
                include "mon_an/add.php";
                break;
               case 'sua_monan':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $monan=loadone_monan($_GET['id']);
                }
                $listthucdon=loadall_thucdon();
                   include "mon_an/update_monan.php";
                break; 
                case 'update_monan':
                        if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $idtd=$_POST['id_td'];
                            $ten_monan=$_POST['ten_mon'];
                            $gia_monan=$_POST['gia'];
                            $so_luong=$_POST['so_luong'];
                            $mota=$_POST['description'];
                            $filename=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                              //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                              } else {
                              //  echo "Sorry, there was an error uploading your file.";
                              }
                              update_monan($id,$ten_monan,$filename,$gia_monan,$mota,$so_luong,$idtd);
                        }
                        $listthucdon=loadall_thucdon();
                        $listmonan=loadall_monan();
                    include "mon_an/list.php";
                    break;
            case 'xoa_monan':
                if(isset($_GET['id'])&& ($_GET['id'] >0)){
                    delete_monan($_GET['id']);
                }
                $sql = "SELECT *FROM mon_an order by id desc";
                $listmonan=loadall_monan();
                include "mon_an/list.php";
                break;    
                
            case 'qldm':
                $listbill = loadall_bill(0);
                include "dat_mon/list.php";
                break;
            case 'qldb':
                include "dat_ban/list.php";
                break;
            case 'qlbl':
                $list_user = loadall_user();
                $list_bl = loadall_binhluan2();
                include "binh_luan/list.php";
                break;
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    xoa_binhluan($_GET['id']);
                }
                $list_bl = loadall_binhluan2();
                include "binh_luan/list.php";
                break;
            case 'qlkh':
                if (isset($_POST['search_kh']) && ($_POST['search_kh'])) {
                    $keyw = $_POST['keyw'];
                }else{
                    $keyw = "";
                }
                $list_tai_khoan = loadall_tai_khoan($keyw);
                include "tai_khoan/list.php";
                break;
            case 'edit_tk':
                if (isset($_POST['cap_nhap']) && ($_POST['cap_nhap']) ) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role']; 
                    capnhat_tai_khoan2($id, $name, $email, $pass, $address, $tel,$role);
                }
                $list_tai_khoan = loadall_tai_khoan("");
                include "tai_khoan/list.php";
                break;
            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $onetk = loadone_tai_khoan($_GET['id']);
                }
                include "tai_khoan/edit_tk.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    xoa_tai_khoan($_GET['id']);
                }
            case 'qldh':
                include "don_hang/list.php";
                break;
            case 'qltk':
                 $thongke=loadall_thongke();
                include "thongke/list.php";
                break;
             case 'bieudo':
                $thongke=loadall_thongke();
                include "thongke/bieudo.php";
                break;   
                
                case 'db2':
                    $sql="SELECT *FROM  dat_ban order by id desc";
                    $listdatban=loadall_datban();
                    include "dat_ban/list.php";
                    break;
                    case 'xoa_datban':
                        if(isset($_GET['id'])&& ($_GET['id'] >0)){
                            delete_datban($_GET['id']);
                        }
                        $sql = "SELECT *FROM dat_ban order by id desc";
                        $listdatban=loadall_datban();
                        include "dat_ban/list.php";
                        break;                   
            case 'ql_gt':
                if(isset($_POST['them_moigt']) && ($_POST['them_moigt'])){
                    $description=$_POST['mota_gt'];
                    $filename_gt=$_FILES['hinh_gt']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_gt"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_gt"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                      //  echo "Sorry, there was an error uploading your file.";
                      }
                    insert_gioithieu($filename_gt,$description);
                    $thongbao="Thêm món thành công";
                }
                
                include "gioi_thieu/add.php";
                break;
           
           case 'danh_sach_gt':
                    $list_gt=loadall_gioithieu();
                    include "gioi_thieu/list.php";
                    break; 
             
           case 'suagt':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $gioithieuone=loadone_gioithieu($_GET['id']);
                        }
                           include "gioi_thieu/update.php";
                        break; 
            case 'update_gt':
                if(isset($_POST['themmoigt']) && ($_POST['themmoigt'])){
                    $id=$_POST['id_gt'];
                    $description=$_POST['mota_gt'];
                    $filename_gt=$_FILES['hinh_gt']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_gt"]["name"]);
                    if (move_uploaded_file($_FILES["hinh_gt"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                      //  echo "Sorry, there was an error uploading your file.";
                      }
                    update_gioithieu($id,$filename_gt,$description);
                    $thongbao="Thêm món thành công";
                }
                $list_gt=loadall_gioithieu();
                include "gioi_thieu/list.php";
                break;
            case 'xoagt':
                if(isset($_GET['id'])&& ($_GET['id'] >0)){
                    delete_gioithieu($_GET['id']);
                }
                $sql = "SELECT *FROM gioi_thieu ";
                $list_gt=loadall_gioithieu();
                include "gioi_thieu/list.php";  
                break;
            case 'suabill':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $suatt = loadone_bill($_GET['id']);
                }
                    include "dat_mon/edit.php";
                break;
            case 'update_ttdh':
                if(isset($_POST['cap_nhat'])&& ($_POST['cap_nhat'])){
                    $id = $_POST['bill_id'];
                    $bill_status=$_POST['bill_status'];
                    update_ttdh($id,$bill_status);
                    // $thongbao="Cập nhật thành công";
                }
                $sql="SELECT *FROM bill order by id desc";
                $listbill=loadall_bill(0);
                include 'dat_mon/list.php';
                break;
            // case 'xoabill':
            //     if(isset($_GET['id'])){
            //         $id = $_GET['id'];
            //         delete_bill($id);
            //     }
            //     $sql="SELECT *FROM bill order by id desc";
            //     $listbill=loadall_bill(0);
            //     include 'dat_mon/list.php';
            //     break;
                
            case 'ql_lienhe':
                if(isset($_POST['them_moi']) && ($_POST['them_moi'])){
                    $address=$_POST['diachi_lh'];
                    $tel=$_POST['sdt_lh'];
                    $time=$_POST['time_lh'];
                    insert_lienhe($address,$tel,$time);
                    $thongbao="Thêm món thành công";
                }
                include "lien_he/add.php";
                break;
            case 'list_lienhe':
                $all_lienhe=loadall_lienhe();
                include "lien_he/list.php";
                break;
                case 'xoa_lh':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_lienhe($_GET['id']);
                    }
                    $all_lienhe=loadall_lienhe();
                    include "lien_he/list.php";
                    break; 
              case 'sualh_one':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $lienhe_one=loadone_lienhe($_GET['id']); 
                }
               
                include 'lien_he/upadate.php';
                break;    
             
                case 'update_lienhe':
                    if(isset($_POST['them_moi'])&& ($_POST['them_moi'])){
                        $address=$_POST['diachi_lh'];
                        $tel=$_POST['sdt_lh'];
                        $time=$_POST['time_lh'];
                        $id=$_POST['ma_lh'];
                        update_lienhe($id,$address,$tel,$time);
                       
                    }
                   
                    $all_lienhe=loadall_lienhe();
                    include 'lien_he/list.php';
                    break;  
                 case 'add_tintuc':
                    if(isset($_POST['them_moitt']) && ($_POST['them_moitt'])){
                        $filename_tt=$_FILES['hinh_tt']['name'];
                        $title=$_POST['tieude_tt'];
                        $description=$_POST['mota_tt'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh_tt"]["name"]);
                        if (move_uploaded_file($_FILES["hinh_tt"]["tmp_name"], $target_file)) {
                          //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                          } else {
                          //  echo "Sorry, there was an error uploading your file.";
                          }
                        insert_tintuc($filename_tt,$title,$description);
                        $thongbao="Thêm món thành công";
                    }
                    include "tin_tuc/add.php";
                    break; 
                    case 'ql_tintuc':
                        $list_tt=loadall_tintuc();
                        include "tin_tuc/list.php";
                        break; 
                    case 'xoatt':
                        if(isset($_GET['id'])&& ($_GET['id'] >0)){
                            delete_tintuc($_GET['id']);
                        }
                        $list_tt=loadall_tintuc();
                        include "tin_tuc/list.php";
                        break;  
                    case 'suatt':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $tintucone=loadone_tintuc($_GET['id']);
                        }
                           include "tin_tuc/update.php";
                        break; 
                    case 'update_tt':
                        if(isset($_POST['capnhat_tt']) && ($_POST['capnhat_tt'])){
                            $id=$_POST['id_tt'];
                            $filename_tt=$_FILES['hinh_tt']['name'];
                            $title=$_POST['tieude_tt'];
                            $description=$_POST['mota_tt'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh_tt"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_tt"]["tmp_name"], $target_file)) {
                              //  echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                              } else {
                              //  echo "Sorry, there was an error uploading your file.";
                              }
                            update_tintuc($id,$filename_tt,$title,$description);
                          
                        }
                        $list_tt=loadall_tintuc();
                        include "tin_tuc/list.php";
                        break;      
            default:
                include "content.php";
                break;
        }



    }else{
        include "content.php";
    }



    include "footer.php";
}else{
    header("location: ../index.php");
}
?>

            
            
     
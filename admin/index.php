<?php
    include "header.php";
    include "../DAO/pdo.php";
    include "../DAO/thucdon.php";
    include "../DAO/mon_an.php";

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
                // 
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

            
            
     
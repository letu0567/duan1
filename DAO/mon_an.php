<?php
function loadall_monan(){
    $sql="SELECT *FROM mon_an";
   $mon_an= pdo_query($sql);
   return $mon_an;
}
function load_ten_thucdon($idtd){
    $sql="SELECT *FROM thucdon where id = '".$idtd."' ";
   $td= pdo_query_one($sql);
   extract($td);
   return $name;
}
function insert_monan($ten_monan,$filename,$gia_monan,$mota,$so_luong,$idtd){
    $sql="INSERT INTO mon_an(name,image,price,description,quantity,id_thucdon) values('$ten_monan','$filename','$gia_monan','$mota','$so_luong','$idtd') " ;
    pdo_execute($sql);
}

function loadone_monan($id){
    $sql="SELECT * FROM mon_an where id=".$id;
    $mon_an1=pdo_query_one($sql);
    return $mon_an1;
}
function load_monan_cungloai($id,$id_thucdon){
    $sql="SELECT * FROM mon_an where id_thucdon= ".$id_thucdon." AND  id <> ".$id;
    $mon_an= pdo_query($sql);
    return $mon_an;
}
function update_monan($id,$ten_monan,$filename,$gia_monan,$mota,$so_luong,$idtd){
    if ($filename!="") 
        $sql="UPDATE mon_an set id_thucdon='".$idtd."',name='".$ten_monan."',price='".$gia_monan."',description='".$mota."',image='".$filename."' where id=".$id;
    else
    $sql="UPDATE mon_an set  id_thucdon='".$idtd."',name='".$ten_monan."',price='".$gia_monan."',description='".$mota."' where id=".$id;
    pdo_execute($sql);
}

function delete_monan($id){
    $sql="DELETE FROM mon_an where id=".$id;
    pdo_execute($sql);
}

function loadall_trangchu(){
     $sql="SELECT *FROM mon_an order by id desc limit 0,12";
    $mon_an_trangchu= pdo_query($sql);
     return $mon_an_trangchu;
}
// function load_monan_thucdon($idtd){
//     $sql = "select * from mon_an AND id_thucdon = '".$idtd."' order by id desc ";
//     $list_monan = pdo_query($sql);
//     return $list_monan;
// }
// function load tất cả danh sách
function loadalll_monan($kyw, $idtd)
{
    $sql = "select * from mon_an where 1";
    if ($kyw != "") {
        $sql .= " and mon_an like '%" . $kyw . "%'";
    }
    if ($idtd > 0) {
        $sql .= " and id_thucdon = '" . $idtd. "' ";
    }
    $sql .= " order by id desc";
    $list_hang_hoa = pdo_query($sql);
    return $list_hang_hoa;
}
?>
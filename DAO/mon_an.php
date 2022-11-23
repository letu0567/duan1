<?php
function loadall_monan(){
    $sql="SELECT *FROM mon_an";
   $mon_an= pdo_query($sql);
   return $mon_an;
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
?>
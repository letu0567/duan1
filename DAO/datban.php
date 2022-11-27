<?php
function insert_dat_ban($name,$tel,$so_nguoi,$ngay_dat,$gio_dat,$luu_y){
    $sql="INSERT INTO dat_ban(name,tel,so_nguoi,ngay_dat,gio_dat,luu_y) values('$name','$tel','$so_nguoi','$ngay_dat','$gio_dat','$luu_y') " ;
    pdo_execute($sql);
}



function delete_ban_an($id){
    $sql="DELETE FROM dat_ban where id=".$id;
    pdo_execute($sql);
}




function load_one_ban($id){
    $sql="SELECT * FROM dat_ban where id=".$id;
    $sql.= " order by id desc";
    $dat_ban1=pdo_query_one($sql);
    return $dat_ban1;
}


?>
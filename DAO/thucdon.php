<?php 
function loadall_thucdon(){
    $sql= 'SELECT * FROM thucdon order by id desc';
   $list_thucdon = pdo_query($sql);
return $list_thucdon;
}
function insert_thucdon($ten_mon_an){
$sql="INSERT INTO thucdon(name) values('$ten_mon_an')";
      pdo_execute($sql);
}
function update_thucdon($id,$ten_mon_an){
    $sql="UPDATE thucdon set name='".$ten_mon_an."' where id=".$id;
    pdo_execute($sql);
}
function loadone_thucdon($id){
   $sql="SELECT * FROM thucdon where id=".$id;
   $thuc_don=pdo_query_one($sql);
   return $thuc_don;
}

function delete_thucdon($id){
    $sql="DELETE FROM thucdon where id=".$id;
    pdo_execute($sql);
}
?>
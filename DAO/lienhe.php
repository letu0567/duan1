<?php 
function loadall_lienhe(){
    $sql= 'SELECT * FROM lien_he order by id desc';
   $list_lienhe = pdo_query($sql);
return $list_lienhe;
}
function insert_lienhe($address,$tel,$time){
$sql="INSERT INTO lien_he(address,tel,time) values('$address','$tel','$time')";
      pdo_execute($sql);
}
 function update_lienhe($id,$address,$tel,$time){
     $sql="UPDATE lien_he set address='".$address."', tel='".$tel."', time='".$time."' where id=".$id;
     pdo_execute($sql);
 }
 function loadone_lienhe($id){
    $sql="SELECT * FROM lien_he where id=".$id;
    $lien_he=pdo_query_one($sql);
    return $lien_he;
 }

 function delete_lienhe($id){
     $sql="DELETE FROM lien_he where id=".$id;
    pdo_execute($sql);
}
 function lh_trangchu(){
    $sql= 'SELECT * FROM lien_he order by id desc';
    $trang_chu = pdo_query($sql);
 return $trang_chu;
 }
?>
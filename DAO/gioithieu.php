<?php 
 function loadall_gioithieu(){
    $sql="SELECT * FROM gioi_thieu";
    $gt= pdo_query($sql);
   return $gt;
 }
 function gt_trangchu(){
    $sql="SELECT *FROM gioi_thieu ";
    $gt_trangchu= pdo_query($sql);
     return $gt_trangchu;
 }
function delete_gioithieu($id){
   $sql="DELETE FROM gioi_thieu where id=".$id;
   pdo_execute($sql);
} 
function insert_gioithieu($filename_gt,$description){
   $sql="INSERT INTO gioi_thieu(image,description) values('$filename_gt','$description')";
         pdo_execute($sql);
   }
// function update_gioithieu($id,$description){
//    $sql="UPDATE gioi_thieu set description='".$description."' where id=".$id;
//     pdo_execute($sql);
// }
function loadone_gioithieu($id){
   $sql="SELECT * FROM gioi_thieu where id=".$id;
   $gioi_thieuone=pdo_query_one($sql);
   return $gioi_thieuone;
}
function update_gioithieu($id,$filename_gt,$description){
   if ($filename_gt!="") 
       $sql="UPDATE gioi_thieu set image ='".$filename_gt."',description='".$description."' where id=".$id;
   else
   $sql="UPDATE gioi_thieu set description='".$description."'  where id=".$id;
   pdo_execute($sql);
}
?>
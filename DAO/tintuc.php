
<?php 
  function loadall_tintuc(){
     $sql="SELECT * FROM tin_tuc order by id desc";
     $tt= pdo_query($sql);
    return $tt;
  }
  function tt_trangchu(){
     $sql="SELECT *FROM tin_tuc order by id  limit 0,3  ";
     $gt_trangchu= pdo_query($sql);
      return $gt_trangchu;
  }
  function tt_datban(){
   $sql="SELECT *FROM tin_tuc order by id desc  limit 0,2  ";
   $gt_trangchu= pdo_query($sql);
    return $gt_trangchu;
}
 function delete_tintuc($id){
    $sql="DELETE FROM tin_tuc where id=".$id;
    pdo_execute($sql);
 } 
function insert_tintuc($filename_tt,$title,$description){
   $sql="INSERT INTO tin_tuc(image,title,description) values('$filename_tt','$title','$description')";
         pdo_execute($sql);
   }
 function loadone_tintuc($id){
    $sql="SELECT * FROM tin_tuc where id=".$id;
    $tin_tucone=pdo_query_one($sql);
    return $tin_tucone;
 }
 function update_tintuc($id,$filename_tt,$title,$description){
    if ($filename_tt!="") 
        $sql="UPDATE tin_tuc set image ='".$filename_tt."',title='".$title."',description='".$description."' where id=".$id;
    else
    $sql="UPDATE tin_tuc set title='".$title."', description='".$description."'  where id=".$id;
    pdo_execute($sql);
 }
?>
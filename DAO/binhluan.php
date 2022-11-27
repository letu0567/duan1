<?php

    function insert_binhluan($id_monan, $id_user, $content, $date){
    $sql="INSERT INTO binh_luan(id_monan,id_user,content,date) values('$id_monan', '$id_user', '$content', '$date')";
    pdo_execute($sql);
    }
    function loadall_binhluan($id_monan){
        $sql= "SELECT * FROM binh_luan where id_monan = '".$id_monan."' order by id desc";
       $list_binhluan = pdo_query($sql);
    return $list_binhluan;
    }
    function loadall_user(){
        $sql= "SELECT * FROM user";
        $list_user = pdo_query($sql);
        return $list_user;
    }
    function loadall_binhluan2(){
        $sql= "SELECT * FROM binh_luan";
        $list_bl = pdo_query($sql);
        return $list_bl;
    }
    function xoa_binhluan($id)
    {
        $sql = "delete from binh_luan where id=" . $id;
        pdo_execute($sql);
    }

?>
<?php
function loadall_thongke(){
    $sql="SELECT thucdon.id as ma_dm, thucdon.name as ten_dm, count(mon_an.id) as count_sp , min(mon_an.price) as min_price , max(mon_an.price) as max_price , avg(mon_an.price) as avg_price ";
    $sql.=" from mon_an left join thucdon on thucdon.id=mon_an.id_thucdon ";
    $sql.="group by thucdon.id order by thucdon.id desc";
   $list_thongke = pdo_query($sql);
   return $list_thongke;
}
?>
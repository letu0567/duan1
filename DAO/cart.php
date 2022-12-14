<?php

function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydatmon, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydatmon,total) values('$iduser','$name', '$email', '$address', '$tel','$pttt','$ngaydatmon','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser, $idmonan, $image, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idmonan,image,name,price,soluong,thanhtien,idbill) values('$iduser', '$idmonan',' $image', '$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill where id=" . $id;
    $mon_an1 = pdo_query_one($sql);
    return $mon_an1;
}

function update_ttdh($id,$bill_status){
    $sql="UPDATE bill set bill_status='".$bill_status."' where id=".$id;
    pdo_execute($sql);
}


function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart where idbill=" . $idbill;
    $mon_an1 = pdo_query($sql);
    return sizeof($mon_an1);
}

function loadall_bill($iduser)
    
{
    $sql = "SELECT * FROM bill where 1 ";
    if ($iduser > 0) $sql.= " AND iduser=" . $iduser;
    $sql.= " order by id desc";      
    $listbill = pdo_query($sql);
    return $listbill;
}



function bill_chi_tiet($listbill)
{
    $tong = 0;
    $i = 0;

    foreach ($listbill as $cart) {
        // $ttien = $cart['price'] * $cart['soluong'];
        $tong += $cart['thanhtien'];
        echo '<tr>
        <td><img src="' . $cart['image'] . '" alt="" width = "100px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . $cart['price'] . '</td>
        <td>' . $cart['soluong'] . '</td>
        <td>$' . $cart['thanhtien'] . '</td>                                                                                                                     
    </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan = "4"><strong>T???ng ????n h??ng</strong></td>


            <td><strong>$' . $tong . '</strong></td>

        </tr> 
        ';
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "????n h??ng m???i";
            break;
        case '1':
            $tt = "??ang x??? l??";
            break;
        case '2':
            $tt = "??ang giao h??ng";
            break;
        case '3':
            $tt = "???? giao h??ng";
            break;
        
        default:
            $tt = "????n h??ng m???i";
            break;
    }
    return $tt;
}

function delete_bill($id){
    $sql="DELETE FROM bill where id=".$id;
    pdo_execute($sql);
}

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
    $sql = "SELECT * FROM bill where iduser=" . $iduser;
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
            <td colspan = "4"><strong>Tổng đơn hàng</strong></td>


            <td><strong>$' . $tong . '</strong></td>

        </tr> 
        ';
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;
        
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

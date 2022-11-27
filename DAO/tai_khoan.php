<?php
    // Thêm tài khoản
    function them_tai_khoan($name,$email,$pass,$address,$tel){
        $sql ="INSERT INTO user(name, email, pass, address, tel)  VALUE('$name','$email','$pass','$address', '$tel')";
        pdo_execute($sql);
    }

    function check_user($name, $pass)
    {
    $sql = "select * from user where name='" . $name . "' AND pass='" . $pass . "' ";
    $kq = pdo_query_one($sql);
    if(count($kq)>0) return $kq['role'];
    else return 0;
    return $kq;
    }
    function check_user2($name, $pass)
    {
    $sql = "select * from user where name='" . $name . "' AND pass='" . $pass . "' ";
    $kq = pdo_query_one($sql);
    return $kq;
    }

    // update tài khoản
    function capnhat_tai_khoan($id, $name, $email, $pass, $address, $tel)
    {
        $sql = "UPDATE user set 
        name='" . $name . "',
        email='" . $email . "',
        pass='" . $pass . "',
        address='" . $address . "',
        tel='" . $tel . "'
        where id=" . $id;
        pdo_execute($sql);
    }

    function capnhat_tai_khoan2($id, $name, $email, $pass, $address, $tel,$role)
    {
        $sql = "UPDATE user set 
        name='" . $name . "',
        email='" . $email . "',
        pass='" . $pass . "',
        address='" . $address . "',
        tel='" . $tel . "' ,
        role='" . $role . "'
        where id=" . $id;
        pdo_execute($sql);
    }
    // Check email
    function check($email,$name)
{
    $sql = "select * from user where email='" . $email . "' AND name ='".$name."' ";
    $kqem = pdo_query_one($sql);
    return $kqem;
}

    function loadall_tai_khoan($keyw)
    {
        $sql = "select * from user where 1";
        if ($keyw != "") {
            $sql .= " and name like '%" . $keyw . "%'";
        }
        $sql .= " order by id desc";
        $list_tai_khoan = pdo_query($sql);
        return $list_tai_khoan;
    }
    function loadone_tai_khoan($id)
    {
    $sql = "select * from user where id=" . $id;
    $hh = pdo_query_one($sql);
    return $hh;
}

    function xoa_tai_khoan($id)
    {
        $sql = "delete from user where id=" . $id;
        pdo_execute($sql);
    }

?>
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
    // if(count($kq)>0) return $kq[0]['role'];
    // else return 0;
    return $kq;
    }

    // update tài khoản
    function capnhat_tai_khoan($id, $name, $email, $pass, $address, $tel)
    {
        $sql = "UPDATE user set name='" . $name . "',email='" . $email . "',pass='" . $pass . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
        pdo_execute($sql);
    }

?>
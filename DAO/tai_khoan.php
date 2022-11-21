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
    return $kq;
    }

?>
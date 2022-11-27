<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/public/css/datban.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
    table, th, td ,tr{
  border:1px solid black;

  font-family: Arial, Helvetica, sans-serif;
}

th{
    background-color:	#166534;
    padding: 20px;
    font-size: 24px;
    font-weight: 600;
color: #FFFFFF;
}
td{
    background-color:#770000 ;
    font-size: 20px;
    color: #FFFFFF;
    width: 30%;
}
table{
    width: 50%;
    
}
    </style>

    <div class="mx-auto bg-green-100">

        <div class="pt-10 ">
            <h2 class="text-4xl font-bold text-center pb-10">Thông tin của bạn</h2>
        </div>

        <?php
        $conn = new mysqli('localhost', 'root', '', 'duan1');

        $sql = "SELECT * FROM dat_ban order by id desc";
        $result = $conn->query($sql);
        $result = pdo_query_one($sql);


        echo "
    <table >
    <tr>
    <td>Họ và tên:</td>
    <th>" . $result['name'] . "</th>
    
  </tr>
  <tr>
  <td>Số Điện Thoại:</td>
  <th>" . $result['tel'] . "</th>
  
</tr>
<tr>
<td>Số người:</td>
<th>" . $result['so_nguoi'] . "</th>

</tr>
<tr>
<td>Ngày:</td>
<th>" . $result['ngay_dat'] . "</th>

</tr>
<tr>
<td>Giờ đặt:</td>
<th>" . $result['gio_dat'] . "</th>

</tr>
<tr>
<td>Lưu ý:</td>
<th>" . $result['luu_y'] . "</th>
</tr>  
    </table>
";
        ?>
<div class="text-center">
    <p class="text-gray-900">*Đơn hàng của bạn đã được đặt thành công ,chúng tôi sẽ gọi cho bạn sau 30 phút</p>
</div>
<form action="index.php?act=content">
<div class="pt-10 pb-20 text-center">
    <button class="border-2 font-bold border-violet-300 border-solid p-3 bg-blue-300 rounded-md" type="submit">Xác Nhận</button>
</div>
</form>
    </div>
</body>

</html>
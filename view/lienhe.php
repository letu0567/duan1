<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="view/public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="content_lienhe ">
            <iframe class="ban_do" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.109205757392!2d105.72728272416566!3d21.050500243946182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134545907734ca7%3A0x9da1a3d560f73676!2zVHUgSG_DoG5nLCBQaMawxqFuZyBDYW5oLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1668233331524!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="thongtin_lienhe mx-auto">
           

           <?php foreach($lh_new as $all_trangchu):?>
              <?php  extract($all_trangchu); ?>
               
                <div class="lien_he_con">
                <h2>Địa chỉ</h2>
                <p><?=$address?></p>
            </div>
            <div class="lien_he_con">
                <h2>Hotline</h2>
                <p><?=$tel?></p>
            </div>
            <div class="lien_he_con">
                <h2>Thời gian hoạt động</h2>
                <p><?=$time?></p>
            </div>
           
           
           <?php endforeach ?>
        </div>
    </div>
</body>
</html>
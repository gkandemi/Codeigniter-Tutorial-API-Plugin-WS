<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation | kablosuzkedi</title>
</head>
<body>

<form action="<?php echo base_url("validation/save");?>" method="post">

    Ad Soyad <input type="text" name="full_name" placeholder="Tam adınızı giriniz...">
    Email <input type="email" name="email" placeholder="email adresini giriniz...">
    Şifre <input type="password" name="password" placeholder="şifrenizi giriniz...">
    Şifre Tekrar <input type="password" name="re_password" placeholder="şifrenizi tekrar giriniz...">
    <button type="submit">Kaydet</button>
</form>

</body>
</html>
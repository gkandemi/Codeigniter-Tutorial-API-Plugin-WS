<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Captcha Test</title>
    <link rel="stylesheet" href="http://localhost/captcha_kontrol/assets/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Personel Kayıt</h3>
            <hr>
            <form action="http://localhost/captcha_kontrol/captchatest/validate" method="post">
                <div class="form-group">
                    <label for="">Adınız Soyadınız</label>
                    <input type="text" class="form-control" name="personel_adi">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Doğrulama kodu</label>
                            <input type="text" class="form-control" name="captcha">
                        </div>
                    </div>
                    <div class="col-md-5" style="height: 74px; line-height: 74px;">
                        <?php echo $captcha["image"]; ?>
                    </div>
                </div>

                <button class="btn btn-success" type="submit">Kaydet</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>